<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210205192454 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `artist` (id INT AUTO_INCREMENT NOT NULL, discogs_id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `label` (id INT AUTO_INCREMENT NOT NULL, discogs_id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `release` (id INT AUTO_INCREMENT NOT NULL, discogs_id INT NOT NULL, videos LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', release_date DATETIME NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE release_label (release_id INT NOT NULL, label_id INT NOT NULL, INDEX IDX_8D39229FB12A727D (release_id), INDEX IDX_8D39229F33B92F39 (label_id), PRIMARY KEY(release_id, label_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE release_artist (release_id INT NOT NULL, artist_id INT NOT NULL, INDEX IDX_CFBBEC6AB12A727D (release_id), INDEX IDX_CFBBEC6AB7970CF8 (artist_id), PRIMARY KEY(release_id, artist_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `track` (id INT AUTO_INCREMENT NOT NULL, releases_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_D6E3F8A6C9749AD6 (releases_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE track_artist (track_id INT NOT NULL, artist_id INT NOT NULL, INDEX IDX_499B576E5ED23C43 (track_id), INDEX IDX_499B576EB7970CF8 (artist_id), PRIMARY KEY(track_id, artist_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, family_name VARCHAR(255) NOT NULL, email_address VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, birth_date DATETIME NOT NULL, sex VARCHAR(255) NOT NULL, is_mail_address_verified TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE release_label ADD CONSTRAINT FK_8D39229FB12A727D FOREIGN KEY (release_id) REFERENCES `release` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE release_label ADD CONSTRAINT FK_8D39229F33B92F39 FOREIGN KEY (label_id) REFERENCES `label` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE release_artist ADD CONSTRAINT FK_CFBBEC6AB12A727D FOREIGN KEY (release_id) REFERENCES `release` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE release_artist ADD CONSTRAINT FK_CFBBEC6AB7970CF8 FOREIGN KEY (artist_id) REFERENCES `artist` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `track` ADD CONSTRAINT FK_D6E3F8A6C9749AD6 FOREIGN KEY (releases_id) REFERENCES `release` (id)');
        $this->addSql('ALTER TABLE track_artist ADD CONSTRAINT FK_499B576E5ED23C43 FOREIGN KEY (track_id) REFERENCES `track` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE track_artist ADD CONSTRAINT FK_499B576EB7970CF8 FOREIGN KEY (artist_id) REFERENCES `artist` (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE release_artist DROP FOREIGN KEY FK_CFBBEC6AB7970CF8');
        $this->addSql('ALTER TABLE track_artist DROP FOREIGN KEY FK_499B576EB7970CF8');
        $this->addSql('ALTER TABLE release_label DROP FOREIGN KEY FK_8D39229F33B92F39');
        $this->addSql('ALTER TABLE release_label DROP FOREIGN KEY FK_8D39229FB12A727D');
        $this->addSql('ALTER TABLE release_artist DROP FOREIGN KEY FK_CFBBEC6AB12A727D');
        $this->addSql('ALTER TABLE `track` DROP FOREIGN KEY FK_D6E3F8A6C9749AD6');
        $this->addSql('ALTER TABLE track_artist DROP FOREIGN KEY FK_499B576E5ED23C43');
        $this->addSql('DROP TABLE `artist`');
        $this->addSql('DROP TABLE `label`');
        $this->addSql('DROP TABLE `release`');
        $this->addSql('DROP TABLE release_label');
        $this->addSql('DROP TABLE release_artist');
        $this->addSql('DROP TABLE `track`');
        $this->addSql('DROP TABLE track_artist');
        $this->addSql('DROP TABLE user');
    }
}
