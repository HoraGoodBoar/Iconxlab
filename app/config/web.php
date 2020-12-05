<?php

/* наші роути
* students - наш uri
* students/main- ім*я контролера/ім*я події 
*/ 
return array(
    'edit/delete/([0-9]+)' => 'edit/deleteUser/$1',
    'edit/get/([0-9]+)' => 'edit/getUser/$1',
    'edit/update' => 'edit/updateUser',
    
    'students' => 'students/main',
    'registration/add' => 'registration/add',
    'registration' => 'registration/main'
);