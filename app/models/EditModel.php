<?php

include_once(ROOT.'/app/classes/Model.php');
include_once(ROOT.'/app/classes/Student.php');
include_once(ROOT.'/app/components/DB.php');

class EditModel extends Model
{
    // Повернення даних одного студента
    public static function getStudentsById($_id)
    {
        $db = new DB();
        $result = $db->sendQuery('SELECT * FROM users WHERE id='.$_id); // Надсилаємо запит

        $row = mysqli_fetch_row($result);

        $student = new Student();
        $student->id           = $row[0];
        $student->FirstName    = $row[1];
        $student->LastName     = $row[2];
        $student->Kind         = $row[3];
        $student->Age          = $row[4];
        $student->GroupF        = $row[5];
        $student->Faculty      = $row[6];

        return $student;
    }

    // Виделення по ід
    public static function deleteById($_id)
    {
        $db = new DB();
        $result = $db->sendQuery('DELETE FROM users WHERE id ='.$_id); // Надсилаємо запит


        return true;
    }

    // Обновлення даних по ід
    public static function updateById($_data)
    {
        $query =" UPDATE users SET 
            FirstName='$_data->FirstName',
            LastName='$_data->LastName',
            Kind=$_data->Kind,
            Age=$_data->Age,
            GroupF='$_data->GroupF',
            Faculty='$_data->Faculty'
            WHERE id=$_data->id ";

        $db = new DB();
        $result = $db->sendQuery($query); // Надсилаємо запит

        return true;
    }
}