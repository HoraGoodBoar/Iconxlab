<?php

include_once(ROOT.'/app/classes/Model.php');
include_once(ROOT.'/app/classes/Student.php');
include_once(ROOT.'/app/components/DB.php');

class StudentsModel extends Model
{
    // I create a query to the database on the list of all students and return the data to the controller
    public static function getStudents()
    {
        
        $db = new DB();
        $result = $db->sendQuery('SELECT * FROM users'); 

        $rows = mysqli_num_rows($result); 

        $students = array();
        for ($i = 0 ; $i < $rows ; ++$i)
        {
            $row = mysqli_fetch_row($result);
            $students[$i] = new Student();

            $students[$i]->id           = $row[0];
            $students[$i]->FirstName    = $row[1];
            $students[$i]->LastName     = $row[2];
            $students[$i]->Kind         = $row[3];
            $students[$i]->Age          = $row[4];
            $students[$i]->GroupF        = $row[5];
            $students[$i]->Faculty      = $row[6];
        }
        return $students;
    }
}