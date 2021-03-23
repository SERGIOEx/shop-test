<?php

namespace Modules\Checkout\Listeners;

use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Modules\Checkout\Events\OrderWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Checkout\Notifications\NotifyAdminOfNewOrder;

class SendAdminNotification implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderWasCreated  $event
     * @return void
     */
    public function handle(OrderWasCreated $event)
    {
        // TODO: need added user
        // $admin = User::find(1);
        // Notification::send($admin, new NotifyAdminOfNewOrder($admin, $event->order));
    }
}
