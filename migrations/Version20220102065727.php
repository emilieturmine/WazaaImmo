<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220102065727 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, waz_type_offre VARCHAR(50) NOT NULL, waz_type_bien VARCHAR(50) NOT NULL, waz_nn_piece INT NOT NULL, waz_reference VARCHAR(10) NOT NULL, waz_titre VARCHAR(200) NOT NULL, waz_description LONGTEXT NOT NULL, waz_localisation VARCHAR(100) NOT NULL, waz_surface_habitable INT DEFAULT NULL, waz_surface_totale INT NOT NULL, waz_option VARCHAR(50) DEFAULT NULL, waz_prix INT NOT NULL, waz_diagnostique VARCHAR(50) NOT NULL, waz_photos VARCHAR(255) DEFAULT NULL, waz_date_ajout DATE NOT NULL, waz_date_modif DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE produit');
    }
}
