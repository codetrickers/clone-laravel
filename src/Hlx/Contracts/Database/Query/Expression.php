<?php

namespace Hlx\Contracts\Database\Query;

use Hlx\Database\Grammar;

interface Expression
{
    /**
     * Get the value of the expression.
     *
     * @param  \Hlx\Database\Grammar  $grammar
     * @return string|int|float
     */
    public function getValue(Grammar $grammar);
}
