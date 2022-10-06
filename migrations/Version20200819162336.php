<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200819162336 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE home_discipline (id INT AUTO_INCREMENT NOT NULL, name_discipline VARCHAR(100) NOT NULL, image_home_discipline VARCHAR(255) DEFAULT NULL, description_discipline VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE time_stamp (id INT AUTO_INCREMENT NOT NULL, title_time_stamp VARCHAR(50) DEFAULT NULL, description_time_stamp VARCHAR(50) DEFAULT NULL, date_time_stamp DATE DEFAULT NULL, hour_time_stamp TIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE home_section_forum DROP FOREIGN KEY FK_FC3193CA76ED395');
        $this->addSql('DROP INDEX IDX_FC3193CA76ED395 ON home_section_forum');
        $this->addSql('ALTER TABLE home_section_forum DROP user_id');
        $this->addSql('ALTER TABLE message_forum CHANGE date_publication_message_forum date_publication_message_forum DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE home_discipline');
        $this->addSql('DROP TABLE time_stamp');
        $this->addSql('ALTER TABLE home_section_forum ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE home_section_forum ADD CONSTRAINT FK_FC3193CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_FC3193CA76ED395 ON home_section_forum (user_id)');
        $this->addSql('ALTER TABLE message_forum CHANGE date_publication_message_forum date_publication_message_forum DATETIME DEFAULT NULL');
    }
}
