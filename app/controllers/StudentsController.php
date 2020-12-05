<?php

include_once(ROOT.'/app/classes/Controller.php');
include_once(ROOT.'/app/models/StudentsModel.php');
include_once(ROOT.'/app/classes/Student.php');

class StudentsController extends Controller
{
    public function mainAction()
    {
        $data = StudentsModel::getStudents();

        require_once(ROOT.'/app/views/studentsView.php');
    }
}