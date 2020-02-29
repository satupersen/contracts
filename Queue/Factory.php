<?php

namespace Satupersen\Contracts\Queue;

interface Factory
{
    /**
     * Resolve a queue connection instance.
     *
     * @param  string|null  $name
     * @return \Satupersen\Contracts\Queue\Queue
     */
    public function connection($name = null);
}
