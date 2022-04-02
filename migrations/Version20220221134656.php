<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220221134656 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE events ADD eventtheme_id INT NOT NULL, ADD eventprog_id INT NOT NULL');
        $this->addSql('ALTER TABLE events ADD CONSTRAINT FK_5387574AA81D3C55 FOREIGN KEY (eventtheme_id) REFERENCES themes (id)');
        $this->addSql('ALTER TABLE events ADD CONSTRAINT FK_5387574AD8D7004A FOREIGN KEY (eventprog_id) REFERENCES event_program (id)');
        $this->addSql('CREATE INDEX IDX_5387574AA81D3C55 ON events (eventtheme_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5387574AD8D7004A ON events (eventprog_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event_program CHANGE activity activity VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE events DROP FOREIGN KEY FK_5387574AA81D3C55');
        $this->addSql('ALTER TABLE events DROP FOREIGN KEY FK_5387574AD8D7004A');
        $this->addSql('DROP INDEX IDX_5387574AA81D3C55 ON events');
        $this->addSql('DROP INDEX UNIQ_5387574AD8D7004A ON events');
        $this->addSql('ALTER TABLE events DROP eventtheme_id, DROP eventprog_id, CHANGE eventname eventname VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE imageevent imageevent VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE format format VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE link link VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE eventaddress eventaddress VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE themes CHANGE themename themename VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE imagetheme imagetheme VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
