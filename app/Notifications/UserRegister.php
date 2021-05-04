<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegister extends Notification implements ShouldQueue
{
    use Queueable;

    protected $email;
    protected $name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($email, $name)
    {
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $email = $this->email;
        $name = $this->name;
        $url = url('');

        return (new MailMessage)
                    ->subject('Bienvenido')
                    ->markdown('mail.email-register', compact('email', 'name', 'url'));
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
