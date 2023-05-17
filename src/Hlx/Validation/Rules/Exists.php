<?php

namespace Hlx\Validation\Rules;

use Hlx\Support\Traits\Conditionable;

class Exists
{
    use Conditionable, DatabaseRule;

    /**
     * Convert the rule to a validation string.
     *
     * @return string
     */
    public function __toString()
    {
        return rtrim(sprintf('exists:%s,%s,%s',
            $this->table,
            $this->column,
            $this->formatWheres()
        ), ',');
    }
}
