<?php

include_once(ROOT.'/app/classes/Controller.php');
include_once(ROOT.'/app/models/RegistrationModel.php');

class RegistrationController extends Controller
{
    // Вертає сторінку реєстрації
    public function mainAction()
    {
        require_once(ROOT.'/app/views/registrationView.php');
        return true;
    }

    // Додає студента
    public function addAction()
    {
        $_value = new Student();
        $_value->FirstName = $_POST['FirstName'];
        $_value->LastName = $_POST['LastName'];    
        $_value->Kind = $_POST['Kind']=="Man"?1:0;
        $_value->GroupF = $_POST['GroupF'];
        $_value->Faculty = $_POST['Faculty'];
        $_value->Age = $_POST['Age'];

        RegistrationModel::AddStudent($_value);

        require_once(ROOT.'/app/views/messagesView.php');
        return true;
    }
}