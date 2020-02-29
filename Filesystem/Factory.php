<?php

namespace Satupersen\Contracts\Filesystem;

interface Factory
{
    /**
     * Get a filesystem implementation.
     *
     * @param  string|null  $name
     * @return \Satupersen\Contracts\Filesystem\Filesystem
     */
    public function disk($name = null);
}
