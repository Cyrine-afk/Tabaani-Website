<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220224014151 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE events DROP FOREIGN KEY FK_5387574AD8D7004A');
        $this->addSql('DROP TABLE event_program');
        $this->addSql('DROP INDEX UNIQ_5387574AD8D7004A ON events');
        $this->addSql('ALTER TABLE events DROP eventprog_id, DROP nbrpart, DROP format, DROP link');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE event_program (id INT AUTO_INCREMENT NOT NULL, activity VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, timestart TIME NOT NULL, timeend TIME NOT NULL, nbractivities INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE events ADD eventprog_id INT NOT NULL, ADD nbrpart INT DEFAULT NULL, ADD format VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD link VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE eventname eventname VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE imageevent imageevent VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE eventaddress eventaddress VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE events ADD CONSTRAINT FK_5387574AD8D7004A FOREIGN KEY (eventprog_id) REFERENCES event_program (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5387574AD8D7004A ON events (eventprog_id)');
        $this->addSql('ALTER TABLE themes CHANGE themename themename VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE imagetheme imagetheme VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
