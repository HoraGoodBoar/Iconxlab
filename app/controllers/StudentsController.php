<?php

include_once(ROOT.'/app/classes/Controller.php');
include_once(ROOT.'/app/models/StudentsModel.php');

class StudentsController extends Controller
{
    public function mainAction()
    {
        $data = array();
        $data = StudentsModel:: getStudents();

        print_r($data);

        echo 'Students';
    }
}