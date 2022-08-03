<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class contactNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['telegram'];
    }

    public function toTelegram($notifiable)
    {
        $message = 'new' . "\n\n";
        $message .= 'First Name: ```' . $this->message->firstName . "```\n";
        $message .= 'Last Name: ```' . $this->message->lastName . "```\n";
        $message .= 'Email: ```' . $this->message->email . "```\n\n";
        $message .= 'Description: ```' . $this->message->description . "```\n";

        return TelegramMessage::create()
            ->to('-741098620')
            ->content("UP \n\n" . $message);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
