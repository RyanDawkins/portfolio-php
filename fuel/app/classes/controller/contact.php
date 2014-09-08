<?php

class Controller_Contact extends \Fuel\Core\Controller_Rest
{
    public function before()
    {
        parent::before();

        // Defaults to json if no extension given
        if(!Input::extension()) {
            $this->format = "json";
        }
    }

    public function post_index() {
        return $this->response(Model_Contact::handle(Input::json()));
    }
}