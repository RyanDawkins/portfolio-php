<?php

class Model_Contact
{
    public static function handle($json)
    {
        DB::insert("person")->set($json)->execute();

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