<?php

include_once(ROOT.'/app/classes/Model.php');
include_once(ROOT.'/app/classes/Student.php');
include_once(ROOT.'/app/components/DB.php');

class RegistrationModel extends Model
{
    // Додаємо студента в базу
    public static function AddStudent($_student)
    {
        $query ="INSERT INTO users VALUES(
            NULL, 
            '$_student->FirtsName',
            '$_student->LastName',
            $_student->Kind,
            $_student->Age,
            '$_student->GroupF',
            '$_student->Faculty'
            )";
        $db = new DB();
        $result = $db->sendQuery($query); // Надсилаємо запит

        return true;
    }
}