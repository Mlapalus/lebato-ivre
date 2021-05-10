<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210510224116 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE premium_digestif (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, low_price INT NOT NULL, high_price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE premium_gin (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, low_price INT NOT NULL, high_price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE premium_rhum (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, low_price INT NOT NULL, high_price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE premium_tequila (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, low_price INT NOT NULL, high_price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE premium_vodka (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, low_price INT NOT NULL, high_price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE premium_whisky (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, low_price INT NOT NULL, high_price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE archive ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cocktail ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE draft_beer ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE food ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE photo ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE rum ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE shot ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE soft ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE wine ADD slug VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE premium_digestif');
        $this->addSql('DROP TABLE premium_gin');
        $this->addSql('DROP TABLE premium_rhum');
        $this->addSql('DROP TABLE premium_tequila');
        $this->addSql('DROP TABLE premium_vodka');
        $this->addSql('DROP TABLE premium_whisky');
        $this->addSql('ALTER TABLE archive DROP slug');
        $this->addSql('ALTER TABLE cocktail DROP slug');
        $this->addSql('ALTER TABLE draft_beer DROP slug');
        $this->addSql('ALTER TABLE event DROP slug');
        $this->addSql('ALTER TABLE food DROP slug');
        $this->addSql('ALTER TABLE photo DROP slug');
        $this->addSql('ALTER TABLE rum DROP slug');
        $this->addSql('ALTER TABLE shot DROP slug');
        $this->addSql('ALTER TABLE soft DROP slug');
        $this->addSql('ALTER TABLE wine DROP slug');
    }
}
