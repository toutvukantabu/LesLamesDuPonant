<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200804204842 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category_forum (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, title_category VARCHAR(255) NOT NULL, date_category_forum DATETIME DEFAULT NULL, INDEX IDX_6D18F184A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact_message (id INT AUTO_INCREMENT NOT NULL, author_name_contact_message VARCHAR(255) DEFAULT NULL, author_last_namec_contact_message VARCHAR(255) DEFAULT NULL, content_contact_message LONGTEXT NOT NULL, email_contact_message VARCHAR(255) NOT NULL, date_contact_message DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message_forum (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, content_message_forum LONGTEXT DEFAULT NULL, date_publication_message_forum DATETIME NOT NULL, photo_message_forum VARCHAR(255) DEFAULT NULL, INDEX IDX_7A8D4126A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject_forum (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, category_subject_forum_id INT DEFAULT NULL, title_subject_forum VARCHAR(255) NOT NULL, content_subject_forum LONGTEXT DEFAULT NULL, date_subject_forum DATETIME DEFAULT NULL, INDEX IDX_94B87F15A76ED395 (user_id), INDEX IDX_94B87F15948C433C (category_subject_forum_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, first_name_user VARCHAR(255) DEFAULT NULL, last_name_user VARCHAR(255) DEFAULT NULL, pseudo_user VARCHAR(255) NOT NULL, photo_avatar_user VARCHAR(255) DEFAULT NULL, birthday_date_user DATE DEFAULT NULL, postal_code_user VARCHAR(20) DEFAULT NULL, adress_user VARCHAR(255) DEFAULT NULL, city_user VARCHAR(50) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category_forum ADD CONSTRAINT FK_6D18F184A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message_forum ADD CONSTRAINT FK_7A8D4126A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE subject_forum ADD CONSTRAINT FK_94B87F15A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE subject_forum ADD CONSTRAINT FK_94B87F15948C433C FOREIGN KEY (category_subject_forum_id) REFERENCES category_forum (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE subject_forum DROP FOREIGN KEY FK_94B87F15948C433C');
        $this->addSql('ALTER TABLE category_forum DROP FOREIGN KEY FK_6D18F184A76ED395');
        $this->addSql('ALTER TABLE message_forum DROP FOREIGN KEY FK_7A8D4126A76ED395');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE subject_forum DROP FOREIGN KEY FK_94B87F15A76ED395');
        $this->addSql('DROP TABLE category_forum');
        $this->addSql('DROP TABLE contact_message');
        $this->addSql('DROP TABLE message_forum');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE subject_forum');
        $this->addSql('DROP TABLE user');
    }
}
