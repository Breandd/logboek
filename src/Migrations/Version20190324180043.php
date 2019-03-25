<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190324180043 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE logboek (id INT AUTO_INCREMENT NOT NULL, userid_id INT DEFAULT NULL, chauffeurid_id INT DEFAULT NULL, truckid_id INT DEFAULT NULL, brief_nr INT NOT NULL, datum DATE DEFAULT NULL, kubs VARCHAR(255) DEFAULT NULL, laadplaats VARCHAR(255) NOT NULL, vertrektijd TIME DEFAULT NULL, bestemming VARCHAR(255) DEFAULT NULL, evenement VARCHAR(255) DEFAULT NULL, INDEX IDX_13847B9A58E0A285 (userid_id), INDEX IDX_13847B9A63221C1A (chauffeurid_id), INDEX IDX_13847B9A47C6F998 (truckid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE truck (id INT AUTO_INCREMENT NOT NULL, kenteken VARCHAR(255) NOT NULL, merk VARCHAR(255) DEFAULT NULL, bouwjaar SMALLINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE logboek ADD CONSTRAINT FK_13847B9A58E0A285 FOREIGN KEY (userid_id) REFERENCES fos_user (id)');
        $this->addSql('ALTER TABLE logboek ADD CONSTRAINT FK_13847B9A63221C1A FOREIGN KEY (chauffeurid_id) REFERENCES fos_user (id)');
        $this->addSql('ALTER TABLE logboek ADD CONSTRAINT FK_13847B9A47C6F998 FOREIGN KEY (truckid_id) REFERENCES truck (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE logboek DROP FOREIGN KEY FK_13847B9A47C6F998');
        $this->addSql('DROP TABLE logboek');
        $this->addSql('DROP TABLE truck');
    }
}
