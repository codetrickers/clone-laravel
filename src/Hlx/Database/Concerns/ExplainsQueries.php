<?php

namespace Hlx\Database\Concerns;

use Hlx\Support\Collection;

trait ExplainsQueries
{
    /**
     * Explains the query.
     *
     * @return \Hlx\Support\Collection
     */
    public function explain()
    {
        $sql = $this->toSql();

        $bindings = $this->getBindings();

        $explanation = $this->getConnection()->select('EXPLAIN '.$sql, $bindings);

        return new Collection($explanation);
    }
}
