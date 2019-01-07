<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190107141157 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE category (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE customer_group (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE customer_group_customer (customer_group_id INT NOT NULL, customer_id INT NOT NULL, PRIMARY KEY(customer_group_id, customer_id))');
        $this->addSql('CREATE INDEX IDX_1164F6BCD2919A68 ON customer_group_customer (customer_group_id)');
        $this->addSql('CREATE INDEX IDX_1164F6BC9395C3F3 ON customer_group_customer (customer_id)');
        $this->addSql('CREATE TABLE customer_group_category (customer_group_id INT NOT NULL, category_id INT NOT NULL, PRIMARY KEY(customer_group_id, category_id))');
        $this->addSql('CREATE INDEX IDX_96116174D2919A68 ON customer_group_category (customer_group_id)');
        $this->addSql('CREATE INDEX IDX_9611617412469DE2 ON customer_group_category (category_id)');
        $this->addSql('CREATE TABLE customer (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE admin (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_880E0D76E7927C74 ON admin (email)');
        $this->addSql('ALTER TABLE customer_group_customer ADD CONSTRAINT FK_1164F6BCD2919A68 FOREIGN KEY (customer_group_id) REFERENCES customer_group (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE customer_group_customer ADD CONSTRAINT FK_1164F6BC9395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE customer_group_category ADD CONSTRAINT FK_96116174D2919A68 FOREIGN KEY (customer_group_id) REFERENCES customer_group (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE customer_group_category ADD CONSTRAINT FK_9611617412469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE customer_group_category DROP CONSTRAINT FK_9611617412469DE2');
        $this->addSql('ALTER TABLE customer_group_customer DROP CONSTRAINT FK_1164F6BCD2919A68');
        $this->addSql('ALTER TABLE customer_group_category DROP CONSTRAINT FK_96116174D2919A68');
        $this->addSql('ALTER TABLE customer_group_customer DROP CONSTRAINT FK_1164F6BC9395C3F3');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE customer_group');
        $this->addSql('DROP TABLE customer_group_customer');
        $this->addSql('DROP TABLE customer_group_category');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE admin');
    }
}
