<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200731134311 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category_forum (id INT AUTO_INCREMENT NOT NULL, title_category VARCHAR(255) NOT NULL, date_category_forum DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message_forum (id INT AUTO_INCREMENT NOT NULL, content_message_forum LONGTEXT DEFAULT NULL, date_publication_message_forum DATETIME NOT NULL, photo_message_forum VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject_forum (id INT AUTO_INCREMENT NOT NULL, title_subject_forum VARCHAR(255) NOT NULL, content_subject_forum LONGTEXT DEFAULT NULL, date_subject_forum DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category_forum');
        $this->addSql('DROP TABLE message_forum');
        $this->addSql('DROP TABLE subject_forum');
    }
}
