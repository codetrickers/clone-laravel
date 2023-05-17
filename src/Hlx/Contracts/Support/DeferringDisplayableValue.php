<?php

namespace Hlx\Contracts\Support;

interface DeferringDisplayableValue
{
    /**
     * Resolve the displayable value that the class is deferring.
     *
     * @return \Hlx\Contracts\Support\Htmlable|string
     */
    public function resolveDisplayableValue();
}
