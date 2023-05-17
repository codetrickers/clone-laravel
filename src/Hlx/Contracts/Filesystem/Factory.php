<?php

namespace Hlx\Contracts\Filesystem;

interface Factory
{
    /**
     * Get a filesystem implementation.
     *
     * @param  string|null  $name
     * @return \Hlx\Contracts\Filesystem\Filesystem
     */
    public function disk($name = null);
}
