<?php

namespace Satupersen\Contracts\Redis;

interface Factory
{
    /**
     * Get a Redis connection by name.
     *
     * @param  string|null  $name
     * @return \Satupersen\Redis\Connections\Connection
     */
    public function connection($name = null);
}
