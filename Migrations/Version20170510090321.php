<?php

/*
 * This file is part of Mindy Framework.
 * (c) 2017 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mindy\Bundle\RatingBundle\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Mindy\Bundle\RatingBundle\Model\Rating;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170510090321 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $ratingTable = $schema->createTable(Rating::tableName());
        $ratingTable->addColumn('id', 'integer', ['autoincrement' => true, 'unsigned' => true, 'length' => 11]);
        $ratingTable->addColumn('object_type', 'string', ['length' => 255]);
        $ratingTable->addColumn('object_id', 'integer', ['length' => 11]);
        $ratingTable->addColumn('vote', 'smallint', ['length' => 1, 'default' => 0]);
        $ratingTable->addColumn('ip', 'string', ['length' => 255]);
        $ratingTable->setPrimaryKey(['id']);
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $schema->dropTable(Rating::tableName());
    }
}
