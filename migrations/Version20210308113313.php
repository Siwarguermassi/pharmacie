<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210308113313 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fiche (id INT AUTO_INCREMENT NOT NULL, id_med_id INT DEFAULT NULL, qte INT DEFAULT NULL, prix_vente DOUBLE PRECISION DEFAULT NULL, UNIQUE INDEX UNIQ_4C13CC785F098C81 (id_med_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fiche ADD CONSTRAINT FK_4C13CC785F098C81 FOREIGN KEY (id_med_id) REFERENCES medicament (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE fiche');
    }
}
