<?php

if (! function_exists('mailer')) {
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param  string|array  $view
     * @param  array  $data
     * @param  \Closure|string  $callback
     * @return \Illuminate\Mail\Mailer
     */
    function mailer($view = null, $data = [], $callback = null)
    {
        $mailer = app('mailer');

        if (is_null($view)) {
            return $mailer;
        }

        $mailer->send($view, $data, $callback);

        return $mailer;
    }
}