<?php

namespace controllers\Usersystem;

class mainController extends \BaseController {

    public $test = "TEST";

    public function __construct() {
        return $this->test;
    }

    public function login() {
        return $_REQUEST;
    }

}