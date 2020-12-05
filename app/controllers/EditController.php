<?php

include_once(ROOT.'/app/classes/Controller.php');
include_once(ROOT.'/app/models/EditModel.php');

class EditController extends Controller
{
    // Повертаю дані одного студента
    public function getUserAction($_value)
    {
        $data = array();
        $data = EditModel::getStudentsById($_value);

        echo 'Get - '.$_value.'<br>';
        print_r($data);
        
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