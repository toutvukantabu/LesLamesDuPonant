<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221009210751 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE amhe (id INT AUTO_INCREMENT NOT NULL, title_amhe VARCHAR(50) DEFAULT NULL, description_amhe LONGTEXT DEFAULT NULL, photo_one_amhe VARCHAR(255) DEFAULT NULL, photo_two_amhe VARCHAR(255) DEFAULT NULL, photo_three_amhe VARCHAR(255) DEFAULT NULL, active TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category_forum (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, section_category_forum_id INT DEFAULT NULL, title_category VARCHAR(255) DEFAULT NULL, date_category_forum DATETIME DEFAULT NULL, active TINYINT(1) NOT NULL, slug VARCHAR(60) NOT NULL, INDEX IDX_6D18F184A76ED395 (user_id), INDEX IDX_6D18F184393158A1 (section_category_forum_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact_message (id INT AUTO_INCREMENT NOT NULL, author_name_contact_message VARCHAR(255) DEFAULT NULL, author_last_namec_contact_message VARCHAR(255) DEFAULT NULL, content_contact_message LONGTEXT NOT NULL, email_contact_message VARCHAR(255) NOT NULL, date_contact_message DATETIME NOT NULL, category_contact_message VARCHAR(2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE discipline (id INT AUTO_INCREMENT NOT NULL, relation_home_discipline_id INT DEFAULT NULL, image_one_discipline VARCHAR(255) DEFAULT NULL, image_two_discipline VARCHAR(255) DEFAULT NULL, image_three_discipline VARCHAR(255) DEFAULT NULL, disciplinetitle VARCHAR(100) DEFAULT NULL, discipline_description LONGTEXT DEFAULT NULL, name_instructor VARCHAR(50) DEFAULT NULL, photo_instructor VARCHAR(255) DEFAULT NULL, active TINYINT(1) DEFAULT NULL, order_discipline INT DEFAULT NULL, UNIQUE INDEX UNIQ_75BEEE3FB5184C7A (relation_home_discipline_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faq (id INT AUTO_INCREMENT NOT NULL, title_faq VARCHAR(50) DEFAULT NULL, faq_description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE home_discipline (id INT AUTO_INCREMENT NOT NULL, name_discipline VARCHAR(100) NOT NULL, image_home_discipline VARCHAR(255) DEFAULT NULL, description_discipline VARCHAR(100) DEFAULT NULL, active TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE home_info (id INT AUTO_INCREMENT NOT NULL, title_info VARCHAR(100) DEFAULT NULL, description_info LONGTEXT DEFAULT NULL, title_cost VARCHAR(100) NOT NULL, description_cost LONGTEXT DEFAULT NULL, title_faq_info VARCHAR(100) DEFAULT NULL, description_faq_info LONGTEXT DEFAULT NULL, image_one_info VARCHAR(255) DEFAULT NULL, image_two_info VARCHAR(255) DEFAULT NULL, image_three_info VARCHAR(255) DEFAULT NULL, active TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE home_pictures (id INT AUTO_INCREMENT NOT NULL, home_logo_picture VARCHAR(255) DEFAULT NULL, home_title_picture VARCHAR(255) DEFAULT NULL, home_parallax1 VARCHAR(255) DEFAULT NULL, home_parallax2 VARCHAR(255) DEFAULT NULL, active TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE home_section_forum (id INT AUTO_INCREMENT NOT NULL, section_title_forum VARCHAR(255) DEFAULT NULL, section_date_forum DATETIME DEFAULT NULL, active TINYINT(1) DEFAULT NULL, slug VARCHAR(60) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE how_we_are (id INT AUTO_INCREMENT NOT NULL, title_how_we_are VARCHAR(100) DEFAULT NULL, description_how_we_are LONGTEXT DEFAULT NULL, photo_how_we_are VARCHAR(255) DEFAULT NULL, active TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE les_lames_du_ponant (id INT AUTO_INCREMENT NOT NULL, title_lldp VARCHAR(50) DEFAULT NULL, desciption_lldp LONGTEXT DEFAULT NULL, picture_les_lames_duponant VARCHAR(255) DEFAULT NULL, active TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medieval_family (id INT AUTO_INCREMENT NOT NULL, title_medieval_family VARCHAR(50) DEFAULT NULL, description_medieval_family LONGTEXT DEFAULT NULL, active TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message_forum (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, subject_message_forum_id INT DEFAULT NULL, content_message_forum LONGTEXT DEFAULT NULL, date_publication_message_forum DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', photo_message_forum VARCHAR(255) DEFAULT NULL, active TINYINT(1) DEFAULT NULL, slug VARCHAR(60) NOT NULL, INDEX IDX_7A8D4126A76ED395 (user_id), INDEX IDX_7A8D412641025DEE (subject_message_forum_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject_forum (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, category_subject_forum_id INT NOT NULL, title_subject_forum VARCHAR(255) NOT NULL, content_subject_forum LONGTEXT DEFAULT NULL, date_subject_forum DATETIME DEFAULT NULL, active TINYINT(1) DEFAULT NULL, slug VARCHAR(60) NOT NULL, INDEX IDX_94B87F15A76ED395 (user_id), INDEX IDX_94B87F15948C433C (category_subject_forum_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE time_stamp (id INT AUTO_INCREMENT NOT NULL, title_time_stamp VARCHAR(50) DEFAULT NULL, description_time_stamp VARCHAR(50) DEFAULT NULL, date_time_stamp DATE DEFAULT NULL, hour_time_stamp TIME DEFAULT NULL, active TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, first_name_user VARCHAR(255) DEFAULT NULL, last_name_user VARCHAR(255) DEFAULT NULL, pseudo_user VARCHAR(255) DEFAULT NULL, photo_avatar_user VARCHAR(255) DEFAULT NULL, birthday_date_user DATE DEFAULT NULL, postal_code_user VARCHAR(20) DEFAULT NULL, adress_user VARCHAR(255) DEFAULT NULL, city_user VARCHAR(50) DEFAULT NULL, active TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category_forum ADD CONSTRAINT FK_6D18F184A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE category_forum ADD CONSTRAINT FK_6D18F184393158A1 FOREIGN KEY (section_category_forum_id) REFERENCES home_section_forum (id)');
        $this->addSql('ALTER TABLE discipline ADD CONSTRAINT FK_75BEEE3FB5184C7A FOREIGN KEY (relation_home_discipline_id) REFERENCES home_discipline (id)');
        $this->addSql('ALTER TABLE message_forum ADD CONSTRAINT FK_7A8D4126A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message_forum ADD CONSTRAINT FK_7A8D412641025DEE FOREIGN KEY (subject_message_forum_id) REFERENCES subject_forum (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE subject_forum ADD CONSTRAINT FK_94B87F15A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE subject_forum ADD CONSTRAINT FK_94B87F15948C433C FOREIGN KEY (category_subject_forum_id) REFERENCES category_forum (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE subject_forum DROP FOREIGN KEY FK_94B87F15948C433C');
        $this->addSql('ALTER TABLE discipline DROP FOREIGN KEY FK_75BEEE3FB5184C7A');
        $this->addSql('ALTER TABLE category_forum DROP FOREIGN KEY FK_6D18F184393158A1');
        $this->addSql('ALTER TABLE message_forum DROP FOREIGN KEY FK_7A8D412641025DEE');
        $this->addSql('ALTER TABLE category_forum DROP FOREIGN KEY FK_6D18F184A76ED395');
        $this->addSql('ALTER TABLE message_forum DROP FOREIGN KEY FK_7A8D4126A76ED395');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE subject_forum DROP FOREIGN KEY FK_94B87F15A76ED395');
        $this->addSql('DROP TABLE amhe');
        $this->addSql('DROP TABLE category_forum');
        $this->addSql('DROP TABLE contact_message');
        $this->addSql('DROP TABLE discipline');
        $this->addSql('DROP TABLE faq');
        $this->addSql('DROP TABLE home_discipline');
        $this->addSql('DROP TABLE home_info');
        $this->addSql('DROP TABLE home_pictures');
        $this->addSql('DROP TABLE home_section_forum');
        $this->addSql('DROP TABLE how_we_are');
        $this->addSql('DROP TABLE les_lames_du_ponant');
        $this->addSql('DROP TABLE medieval_family');
        $this->addSql('DROP TABLE message_forum');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE subject_forum');
        $this->addSql('DROP TABLE time_stamp');
        $this->addSql('DROP TABLE user');
    }
}
