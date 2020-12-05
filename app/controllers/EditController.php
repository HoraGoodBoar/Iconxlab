<?php

include_once(ROOT.'/app/classes/Controller.php');
include_once(ROOT.'/app/models/EditModel.php');
include_once(ROOT.'/app/classes/Student.php');

class EditController extends Controller
{
       // Обновлення даних студента
     public function updateUserAction()
     {
        $_value = new Student();
        
        $_value->id=$_POST['update_id'];
        $_value->FirstName = $_POST['update_FirstName'];
        $_value->LastName = $_POST['update_LastName'];    
        $_value->Kind =  $_POST['update_Kind']=="Man"?1:0;
        $_value->GroupF = $_POST['update_GroupF'];
        $_value->Faculty = $_POST['update_Faculty'];
        $_value->Age = $_POST['update_Age'];

        EditModel::updateById($_value);

        require_once(ROOT.'/app/views/messagesView.php'); 
     } 

    // Повертаю дані одного студента
    public function getUserAction($_value)
    {
        $data = EditModel::getStudentsById($_value);

        require_once(ROOT.'/app/views/editView.php');       

        return true;
    }   

    // Видаляю студента
    public function deleteUserAction($_value)
    {
        EditModel::deleteById($_value);

        require_once(ROOT.'/app/views/messagesView.php');
        
        return true;
    }    
}