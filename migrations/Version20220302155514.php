<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220302155514 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE events ADD org_id INT NOT NULL');
        $this->addSql('ALTER TABLE events ADD CONSTRAINT FK_5387574AF4837C1B FOREIGN KEY (org_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_5387574AF4837C1B ON events (org_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE events DROP FOREIGN KEY FK_5387574AF4837C1B');
        $this->addSql('DROP INDEX IDX_5387574AF4837C1B ON events');
        $this->addSql('ALTER TABLE events DROP org_id, CHANGE eventname eventname VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE imageevent imageevent VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE eventaddress eventaddress VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE themes CHANGE themename themename VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE imagetheme imagetheme VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE nom_user nom_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom_user prenom_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email_user email_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE login_user login_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE mdp_user mdp_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image_user image_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
