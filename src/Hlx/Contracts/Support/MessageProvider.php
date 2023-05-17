<?php

namespace Hlx\Contracts\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \Hlx\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}
