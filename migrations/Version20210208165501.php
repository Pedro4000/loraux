<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210208165501 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `release` CHANGE videos videos LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE track DROP FOREIGN KEY FK_D6E3F8A6C9749AD6');
        $this->addSql('DROP INDEX IDX_D6E3F8A6C9749AD6 ON track');
        $this->addSql('ALTER TABLE track ADD release_id INT DEFAULT NULL, DROP releases_id');
        $this->addSql('ALTER TABLE track ADD CONSTRAINT FK_D6E3F8A6B12A727D FOREIGN KEY (release_id) REFERENCES `release` (id)');
        $this->addSql('CREATE INDEX IDX_D6E3F8A6B12A727D ON track (release_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `release` CHANGE videos videos LONGTEXT CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE `track` DROP FOREIGN KEY FK_D6E3F8A6B12A727D');
        $this->addSql('DROP INDEX IDX_D6E3F8A6B12A727D ON `track`');
        $this->addSql('ALTER TABLE `track` ADD releases_id INT DEFAULT NULL, DROP release_id');
        $this->addSql('ALTER TABLE `track` ADD CONSTRAINT FK_D6E3F8A6C9749AD6 FOREIGN KEY (releases_id) REFERENCES `release` (id)');
        $this->addSql('CREATE INDEX IDX_D6E3F8A6C9749AD6 ON `track` (releases_id)');
    }
}
