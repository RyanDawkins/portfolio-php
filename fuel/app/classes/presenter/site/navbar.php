<?php

class Presenter_Site_Navbar extends \Fuel\Core\Presenter
{
    public function view()
    {
        if(isset($this->viewing)) {
            $viewing = $this->viewing;
            $this->$viewing = true;
        }
    }
}