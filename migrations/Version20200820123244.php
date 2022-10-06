<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200820123244 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE amhe (id INT AUTO_INCREMENT NOT NULL, title_amhe VARCHAR(50) DEFAULT NULL, description_amhe LONGTEXT DEFAULT NULL, photo_one_amhe VARCHAR(255) DEFAULT NULL, photo_two_amhe VARCHAR(255) DEFAULT NULL, photo_three_amhe VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE les_lames_du_ponant (id INT AUTO_INCREMENT NOT NULL, title_lldp VARCHAR(50) DEFAULT NULL, desciption_lldp LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medieval_family (id INT AUTO_INCREMENT NOT NULL, title_medieval_family VARCHAR(50) DEFAULT NULL, description_medieval_family LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE amhe');
        $this->addSql('DROP TABLE les_lames_du_ponant');
        $this->addSql('DROP TABLE medieval_family');
    }
}
