<?php

namespace Satupersen\Contracts\Cache;

interface Factory
{
    /**
     * Get a cache store instance by name.
     *
     * @param  string|null  $name
     * @return \Satupersen\Contracts\Cache\Repository
     */
    public function store($name = null);
}
