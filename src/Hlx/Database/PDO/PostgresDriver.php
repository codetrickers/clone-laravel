<?php

namespace Hlx\Database\PDO;

use Doctrine\DBAL\Driver\AbstractPostgreSQLDriver;
use Hlx\Database\PDO\Concerns\ConnectsToDatabase;

class PostgresDriver extends AbstractPostgreSQLDriver
{
    use ConnectsToDatabase;

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_pgsql';
    }
}
