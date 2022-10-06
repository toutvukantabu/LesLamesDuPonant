<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200822195850 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact_message DROP FOREIGN KEY FK_2C9211FE2FA4207E');
        $this->addSql('DROP TABLE contact_category');
        $this->addSql('DROP INDEX IDX_2C9211FE2FA4207E ON contact_message');
        $this->addSql('ALTER TABLE contact_message ADD category_contact_message VARCHAR(2) NOT NULL, DROP contact_message_category_id, CHANGE email_contact_message email_contact_message VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contact_category (id INT AUTO_INCREMENT NOT NULL, proprerty LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE contact_message ADD contact_message_category_id INT NOT NULL, DROP category_contact_message, CHANGE email_contact_message email_contact_message VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE contact_message ADD CONSTRAINT FK_2C9211FE2FA4207E FOREIGN KEY (contact_message_category_id) REFERENCES contact_category (id)');
        $this->addSql('CREATE INDEX IDX_2C9211FE2FA4207E ON contact_message (contact_message_category_id)');
    }
}
