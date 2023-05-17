<?php

namespace Hlx\Database\PDO;

use Doctrine\DBAL\Driver\AbstractSQLiteDriver;
use Hlx\Database\PDO\Concerns\ConnectsToDatabase;

class SQLiteDriver extends AbstractSQLiteDriver
{
    use ConnectsToDatabase;

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_sqlite';
    }
}
