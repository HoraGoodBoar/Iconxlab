<?php

include_once(ROOT.'/app/classes/Controller.php');
include_once(ROOT.'/app/models/EditModel.php');
include_once(ROOT.'/app/classes/Student.php');

class EditController extends Controller
{
    // Повертаю дані одного студента
    public function getUserAction($_value)
    {
        $data = EditModel::getStudentsById($_value);
        return true;
    }   

    // Видаляю студента
    public function deleteUserAction($_value)
    {
        EditModel::deleteById($_value);

        return true;
    }   

    // Обновлення даних студента
    public function updateUserData ()
    {
        $_value = new Student();
        
        $_value->id=$_POST['update_id'];
        $_value->FirstName = $_POST['update_FirstName'];
        $_value->LastName = $_POST['update_LastName'];    
        $_value->Kind = $_POST['update_Kind'];
        $_value->GroupF = $_POST['update_GroupF'];
        $_value->Faculty = $_POST['update_Faculty'];
        $_value->Age = $_POST['update_Age'];

        EditModel::updateById($_value);
    }    
    
    // Відправлення сторінки редагування даних студента
    public function updateUserAction()
    {

        return true;
    } 
}