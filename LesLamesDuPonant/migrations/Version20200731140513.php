<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200731140513 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category_forum ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE category_forum ADD CONSTRAINT FK_6D18F184A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6D18F184A76ED395 ON category_forum (user_id)');
        $this->addSql('ALTER TABLE message_forum ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message_forum ADD CONSTRAINT FK_7A8D4126A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7A8D4126A76ED395 ON message_forum (user_id)');
        $this->addSql('ALTER TABLE subject_forum ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE subject_forum ADD CONSTRAINT FK_94B87F15A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_94B87F15A76ED395 ON subject_forum (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category_forum DROP FOREIGN KEY FK_6D18F184A76ED395');
        $this->addSql('DROP INDEX IDX_6D18F184A76ED395 ON category_forum');
        $this->addSql('ALTER TABLE category_forum DROP user_id');
        $this->addSql('ALTER TABLE message_forum DROP FOREIGN KEY FK_7A8D4126A76ED395');
        $this->addSql('DROP INDEX IDX_7A8D4126A76ED395 ON message_forum');
        $this->addSql('ALTER TABLE message_forum DROP user_id');
        $this->addSql('ALTER TABLE subject_forum DROP FOREIGN KEY FK_94B87F15A76ED395');
        $this->addSql('DROP INDEX IDX_94B87F15A76ED395 ON subject_forum');
        $this->addSql('ALTER TABLE subject_forum DROP user_id');
    }
}
