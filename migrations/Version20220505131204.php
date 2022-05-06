<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220505131204 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_497DD634727ACA70');
        $this->addSql('CREATE TEMPORARY TABLE __temp__categorie AS SELECT id, parent_id, titre, description, created_at, updated_at FROM categorie');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('CREATE TABLE categorie (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, parent_id INTEGER DEFAULT NULL, titre VARCHAR(50) NOT NULL, description VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , updated_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , CONSTRAINT FK_497DD634727ACA70 FOREIGN KEY (parent_id) REFERENCES categorie (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO categorie (id, parent_id, titre, description, created_at, updated_at) SELECT id, parent_id, titre, description, created_at, updated_at FROM __temp__categorie');
        $this->addSql('DROP TABLE __temp__categorie');
        $this->addSql('CREATE INDEX IDX_497DD634727ACA70 ON categorie (parent_id)');
        $this->addSql('DROP INDEX IDX_B6BD307F1F55203D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__message AS SELECT id, topic_id, contenu, created_at, updated_at FROM message');
        $this->addSql('DROP TABLE message');
        $this->addSql('CREATE TABLE message (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, topic_id INTEGER NOT NULL, contenu VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , updated_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , CONSTRAINT FK_B6BD307F1F55203D FOREIGN KEY (topic_id) REFERENCES topic (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO message (id, topic_id, contenu, created_at, updated_at) SELECT id, topic_id, contenu, created_at, updated_at FROM __temp__message');
        $this->addSql('DROP TABLE __temp__message');
        $this->addSql('CREATE INDEX IDX_B6BD307F1F55203D ON message (topic_id)');
        $this->addSql('DROP INDEX IDX_9D40DE1BBCF5E72D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__topic AS SELECT id, categorie_id, titre, created_at, updated_at FROM topic');
        $this->addSql('DROP TABLE topic');
        $this->addSql('CREATE TABLE topic (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, categorie_id INTEGER NOT NULL, titre VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , updated_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , CONSTRAINT FK_9D40DE1BBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO topic (id, categorie_id, titre, created_at, updated_at) SELECT id, categorie_id, titre, created_at, updated_at FROM __temp__topic');
        $this->addSql('DROP TABLE __temp__topic');
        $this->addSql('CREATE INDEX IDX_9D40DE1BBCF5E72D ON topic (categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_497DD634727ACA70');
        $this->addSql('CREATE TEMPORARY TABLE __temp__categorie AS SELECT id, parent_id, titre, description, created_at, updated_at FROM categorie');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('CREATE TABLE categorie (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, parent_id INTEGER DEFAULT NULL, titre VARCHAR(50) NOT NULL, description VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , updated_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('INSERT INTO categorie (id, parent_id, titre, description, created_at, updated_at) SELECT id, parent_id, titre, description, created_at, updated_at FROM __temp__categorie');
        $this->addSql('DROP TABLE __temp__categorie');
        $this->addSql('CREATE INDEX IDX_497DD634727ACA70 ON categorie (parent_id)');
        $this->addSql('DROP INDEX IDX_B6BD307F1F55203D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__message AS SELECT id, topic_id, contenu, created_at, updated_at FROM message');
        $this->addSql('DROP TABLE message');
        $this->addSql('CREATE TABLE message (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, topic_id INTEGER NOT NULL, contenu VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , updated_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('INSERT INTO message (id, topic_id, contenu, created_at, updated_at) SELECT id, topic_id, contenu, created_at, updated_at FROM __temp__message');
        $this->addSql('DROP TABLE __temp__message');
        $this->addSql('CREATE INDEX IDX_B6BD307F1F55203D ON message (topic_id)');
        $this->addSql('DROP INDEX IDX_9D40DE1BBCF5E72D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__topic AS SELECT id, categorie_id, titre, created_at, updated_at FROM topic');
        $this->addSql('DROP TABLE topic');
        $this->addSql('CREATE TABLE topic (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, categorie_id INTEGER NOT NULL, titre VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , updated_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('INSERT INTO topic (id, categorie_id, titre, created_at, updated_at) SELECT id, categorie_id, titre, created_at, updated_at FROM __temp__topic');
        $this->addSql('DROP TABLE __temp__topic');
        $this->addSql('CREATE INDEX IDX_9D40DE1BBCF5E72D ON topic (categorie_id)');
    }
}
