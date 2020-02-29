<?php

namespace Satupersen\Contracts\Mail;

interface Factory
{
    /**
     * Get a mailer instance by name.
     *
     * @param  string|null  $name
     * @return \Satupersen\Mail\Mailer
     */
    public function mailer($name = null);
}
