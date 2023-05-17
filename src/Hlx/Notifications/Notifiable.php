<?php

namespace Hlx\Notifications;

trait Notifiable
{
    use HasDatabaseNotifications, RoutesNotifications;
}
