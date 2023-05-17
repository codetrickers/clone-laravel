<?php

namespace Hlx\Notifications;

use Hlx\Database\Eloquent\Collection;

/**
 * @template TKey of array-key
 * @template TModel of DatabaseNotification
 *
 * @extends \Hlx\Database\Eloquent\Collection<TKey, TModel>
 */
class DatabaseNotificationCollection extends Collection
{
    /**
     * Mark all notifications as read.
     *
     * @return void
     */
    public function markAsRead()
    {
        $this->each->markAsRead();
    }

    /**
     * Mark all notifications as unread.
     *
     * @return void
     */
    public function markAsUnread()
    {
        $this->each->markAsUnread();
    }
}
