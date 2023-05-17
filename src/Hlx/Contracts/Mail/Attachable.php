<?php

namespace Hlx\Contracts\Mail;

interface Attachable
{
    /**
     * Get an attachment instance for this entity.
     *
     * @return \Hlx\Mail\Attachment
     */
    public function toMailAttachment();
}
