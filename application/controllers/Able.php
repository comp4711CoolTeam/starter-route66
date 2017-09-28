<?php

/**
 * Created by PhpStorm.
 * User: Pkao
 * Date: 2017-09-28
 * Time: 1:17 PM
 */
class Able extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->show(1);
    }

}