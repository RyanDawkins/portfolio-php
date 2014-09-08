<?php

class Presenter_Email_Contact extends \Fuel\Core\Presenter
{
    public function view()
    {
        $this->first_name = $this->data["first_name"];
        $this->last_name = $this->data["last_name"];
        $this->email = $this->data["email"];
        $this->phone = $this->data["phone"];
    }
}