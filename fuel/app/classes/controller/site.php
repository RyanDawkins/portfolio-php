<?php

class Controller_Site extends \Fuel\Core\Controller_Template
{
    public $template = "site/template";
    private $view_nav;

    public function before()
    {
        parent::before();
        $this->view_nav = \Fuel\Core\Presenter::forge("site/navbar");
    }

    public function after($response) {
        $this->template->navbar = $this->view_nav;
        $this->template->css = $this->template->content->get_css();
        return parent::after($response);
    }

    public function action_index()
    {
        $this->view_nav->set("viewing", "home");
        $this->template->content = \Fuel\Core\Presenter::forge("site/index");
    }

}