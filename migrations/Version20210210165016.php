<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210210165016 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE label ADD last_time_fully_scraped DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE `release` CHANGE videos videos LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', CHANGE release_date release_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE track CHANGE release_id release_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `label` DROP last_time_fully_scraped');
        $this->addSql('ALTER TABLE `release` CHANGE videos videos LONGTEXT CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE release_date release_date DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE `track` CHANGE release_id release_id INT DEFAULT NULL');
    }
}
