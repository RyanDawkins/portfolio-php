<?php

abstract class Presenter_Site extends \Fuel\Core\Presenter
{
    public function view()
    {
    }

    abstract public function get_css();

    abstract public function get_js();
}