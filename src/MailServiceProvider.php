<?php namespace Bugotech\Mail;

use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Carregar config
        $this->app->configure('mail', __DIR__ . '/../config/mail.php');
    }
}
