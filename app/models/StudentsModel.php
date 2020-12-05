<?php

include_once(ROOT.'/app/classes/Model.php');
include_once(ROOT.'/app/classes/Student.php');
include_once(ROOT.'/app/components/DB.php');

class StudentsModel extends Model
{
    // Створюю запит до БД на список усіх студентів і повертаю дані контролеру назад
    public static function getStudents()
    {
        // Підключаємось до бази
        $db = new DB();
        $result = $db->sendQuery('SELECT * FROM users'); // Надсилаємо запит

        $rows = mysqli_num_rows($result); // Дізнаємось скільки рядків даних нам повернуло

        // Зберігаємо дані у масив та поветраємо їх
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
            $students[$i]->Group        = $row[5];
            $students[$i]->Faculty      = $row[6];
        }
        return $students;
    }
}