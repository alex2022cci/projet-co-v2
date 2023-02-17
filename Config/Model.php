<?php

class Model
{
    static $connections = array();
    //configation pour la connection à la database
    public $conf = 'default';
    public $table = false;

    public function __construct()
    {

    }
}