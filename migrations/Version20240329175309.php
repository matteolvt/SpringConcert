<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240329175309 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE musiques DROP INDEX UNIQ_D9372DFA8EF32703, ADD INDEX IDX_D9372DFA8EF32703 (id_artistes_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE musiques DROP INDEX IDX_D9372DFA8EF32703, ADD UNIQUE INDEX UNIQ_D9372DFA8EF32703 (id_artistes_id)');
    }
}
