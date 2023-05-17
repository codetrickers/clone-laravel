<?php

namespace Hlx\Contracts\Broadcasting;

interface ShouldBroadcast
{
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Hlx\Broadcasting\Channel|\Hlx\Broadcasting\Channel[]|string[]|string
     */
    public function broadcastOn();
}
