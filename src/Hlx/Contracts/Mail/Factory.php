<?php

namespace Hlx\Contracts\Mail;

interface Factory
{
    /**
     * Get a mailer instance by name.
     *
     * @param  string|null  $name
     * @return \Hlx\Contracts\Mail\Mailer
     */
    public function mailer($name = null);
}
