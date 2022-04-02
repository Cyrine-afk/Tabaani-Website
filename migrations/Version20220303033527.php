<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220303033527 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participer_event_events DROP FOREIGN KEY FK_571C5317125DC864');
        $this->addSql('ALTER TABLE participer_event_user DROP FOREIGN KEY FK_70D036A3125DC864');
        $this->addSql('DROP TABLE participer_event');
        $this->addSql('DROP TABLE participer_event_events');
        $this->addSql('DROP TABLE participer_event_user');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE participer_event (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE participer_event_events (participer_event_id INT NOT NULL, events_id INT NOT NULL, INDEX IDX_571C53179D6A1065 (events_id), INDEX IDX_571C5317125DC864 (participer_event_id), PRIMARY KEY(participer_event_id, events_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE participer_event_user (participer_event_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_70D036A3A76ED395 (user_id), INDEX IDX_70D036A3125DC864 (participer_event_id), PRIMARY KEY(participer_event_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE participer_event_events ADD CONSTRAINT FK_571C5317125DC864 FOREIGN KEY (participer_event_id) REFERENCES participer_event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participer_event_events ADD CONSTRAINT FK_571C53179D6A1065 FOREIGN KEY (events_id) REFERENCES events (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participer_event_user ADD CONSTRAINT FK_70D036A3125DC864 FOREIGN KEY (participer_event_id) REFERENCES participer_event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participer_event_user ADD CONSTRAINT FK_70D036A3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE events CHANGE eventname eventname VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE imageevent imageevent VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE eventaddress eventaddress VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE themes CHANGE themename themename VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE imagetheme imagetheme VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE nom_user nom_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom_user prenom_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email_user email_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE login_user login_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE mdp_user mdp_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image_user image_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
