<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200727142633 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD first_name_user VARCHAR(255) DEFAULT NULL, ADD last_name_user VARCHAR(255) DEFAULT NULL, ADD pseudo_user VARCHAR(255) NOT NULL, ADD photo_avatar_user VARCHAR(255) DEFAULT NULL, ADD birthday_date_user DATE DEFAULT NULL, ADD postal_code_user VARCHAR(20) DEFAULT NULL, ADD adress_user VARCHAR(255) DEFAULT NULL, ADD city_user VARCHAR(50) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP first_name_user, DROP last_name_user, DROP pseudo_user, DROP photo_avatar_user, DROP birthday_date_user, DROP postal_code_user, DROP adress_user, DROP city_user');
    }
}
