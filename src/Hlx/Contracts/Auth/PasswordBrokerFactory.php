<?php

namespace Hlx\Contracts\Auth;

interface PasswordBrokerFactory
{
    /**
     * Get a password broker instance by name.
     *
     * @param  string|null  $name
     * @return \Hlx\Contracts\Auth\PasswordBroker
     */
    public function broker($name = null);
}
