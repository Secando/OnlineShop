<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240725123547 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE orders ADD status_payment INT NOT NULL, ADD track_number VARCHAR(255) NOT NULL, CHANGE order_id order_id VARCHAR(255) NOT NULL, CHANGE user_id user_id INT DEFAULT NULL, CHANGE product_id product_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE orders DROP status_payment, DROP track_number, CHANGE order_id order_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE product_id product_id INT NOT NULL');
    }
}
