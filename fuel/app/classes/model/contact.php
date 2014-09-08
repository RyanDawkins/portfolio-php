<?php

class Model_Contact
{
    public static function handle($json)
    {
        $email = \Email\Email::forge();
        $email->to("ryan@ryanddawkins.com");
        $email->subject("Someone wants to contact you");
        $email->from("contact@ryanddawkins.com");

        $html = Presenter::forge("email/contact");
        $html->set("data", $json);
        $email->html_body($html);
        $email->send();
    }
}