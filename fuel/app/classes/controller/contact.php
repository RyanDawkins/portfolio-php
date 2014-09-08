<?php

class Controller_Contact extends \Fuel\Core\Controller_Rest
{
    public function post_index() {
        return Model_Contact::handle(Input::json());
    }
}