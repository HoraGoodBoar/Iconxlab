<?php

include_once(ROOT.'/app/classes/Controller.php');

class EditController extends Controller
{
    // Повертаю дані одного студента
    public function getUserAction($_value)
    {
        echo 'Get - '.$_value.'<br>';

        return true;
    }   

    // Видаляю студента
    public function deleteUserAction($_value)
    {
        echo 'Delete - '.$_value.'<br>';

        return true;
    }   

    // Обновлюю дані студента
    public function updateUserAction($_value)
    {
        echo 'Update - '.$_value.'<br>';

        return true;
    } 
}