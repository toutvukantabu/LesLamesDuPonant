<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200804210627 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE home_section_forum (id INT AUTO_INCREMENT NOT NULL, section_title_forum VARCHAR(255) DEFAULT NULL, section_date_forum DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE message_forum ADD subject_message_forum_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message_forum ADD CONSTRAINT FK_7A8D412641025DEE FOREIGN KEY (subject_message_forum_id) REFERENCES subject_forum (id)');
        $this->addSql('CREATE INDEX IDX_7A8D412641025DEE ON message_forum (subject_message_forum_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE home_section_forum');
        $this->addSql('ALTER TABLE message_forum DROP FOREIGN KEY FK_7A8D412641025DEE');
        $this->addSql('DROP INDEX IDX_7A8D412641025DEE ON message_forum');
        $this->addSql('ALTER TABLE message_forum DROP subject_message_forum_id');
    }
}
