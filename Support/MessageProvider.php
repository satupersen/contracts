<?php

namespace Satupersen\Contracts\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \Satupersen\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}
