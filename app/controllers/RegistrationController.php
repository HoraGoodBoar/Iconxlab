<?php

include_once(ROOT.'/app/classes/Controller.php');
include_once(ROOT.'/app/models/RegistrationModel.php');

class RegistrationController extends Controller
{
    public function mainAction()
    {
        echo 'Registration';
    }
}