<?php

/* наші роути
* students - наш uri
* students/index - ім*я контролера/ім*я події 
*/ 
return array(
    'edit/delete/([0-9]+)' => 'edit/deleteUser/$1',
    'edit/get/([0-9]+)' => 'edit/getUser/$1',
    'edit/update/([0-9]+)' => 'edit/updateUser/$1',
    'students' => 'students/main',
    'registration' => 'registration/main'
);