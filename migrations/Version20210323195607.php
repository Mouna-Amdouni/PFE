<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210323195607 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, is_active TINYINT(1) DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', plain_password VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, datenaissance DATE DEFAULT NULL, nationalite VARCHAR(255) DEFAULT NULL, civil_status VARCHAR(255) DEFAULT NULL, numero_tel VARCHAR(255) DEFAULT NULL, numero_whatsapp VARCHAR(255) DEFAULT NULL, lien_fbk VARCHAR(255) DEFAULT NULL, lien_youtube VARCHAR(255) DEFAULT NULL, lien_instagram VARCHAR(255) DEFAULT NULL, lien_twitter VARCHAR(255) DEFAULT NULL, lien_email VARCHAR(255) DEFAULT NULL, bio VARCHAR(5000) DEFAULT NULL, cin VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
    }
}
