<?php

namespace Satupersen\Contracts\Broadcasting;

interface ShouldBroadcast
{
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Satupersen\Broadcasting\Channel|\Satupersen\Broadcasting\Channel[]
     */
    public function broadcastOn();
}
