<?php

namespace Usersystem;

class mainController extends \BaseController {

    private $user;

    public function __construct() {
    }

    public function login() {
        $username = \Input::get("login-username");
        $password = \Input::get("login-password");



        $user = \Doctrine::getRepository('Usersystem\User')->findOneBy(
            array('username' => $username, 'password' => $password)
        );

        if($user) {
            $this->user = $user;
            return \Redirect::action('HomeController@testprint');
        } else {
            return \Redirect::route('loginError');
        }
    }

}