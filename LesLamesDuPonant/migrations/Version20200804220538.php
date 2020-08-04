<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200804220538 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category_forum ADD section_category_forum_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE category_forum ADD CONSTRAINT FK_6D18F184393158A1 FOREIGN KEY (section_category_forum_id) REFERENCES home_section_forum (id)');
        $this->addSql('CREATE INDEX IDX_6D18F184393158A1 ON category_forum (section_category_forum_id)');
        $this->addSql('ALTER TABLE home_section_forum ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE home_section_forum ADD CONSTRAINT FK_FC3193CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_FC3193CA76ED395 ON home_section_forum (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category_forum DROP FOREIGN KEY FK_6D18F184393158A1');
        $this->addSql('DROP INDEX IDX_6D18F184393158A1 ON category_forum');
        $this->addSql('ALTER TABLE category_forum DROP section_category_forum_id');
        $this->addSql('ALTER TABLE home_section_forum DROP FOREIGN KEY FK_FC3193CA76ED395');
        $this->addSql('DROP INDEX IDX_FC3193CA76ED395 ON home_section_forum');
        $this->addSql('ALTER TABLE home_section_forum DROP user_id');
    }
}
