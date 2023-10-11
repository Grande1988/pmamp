<?php
/* PHPMotors Main Controller
         * This file is accessed at http://lvh.me/phpmotors/
         * or at http://lvh.me/phpmotors/index.php
         * 
         * This file controls all traffic to the http://lvh.me/phpmotors/ URL
        */

        // Get the PHP motors model for use as needed
        require_once 'library/connections.php;'
        // Get the php motors model for use as needed
        require_once 'model/main-model.php;
        '
        // get the array of classifications from the database using model
        $classifications = getClassifications();
        
$action = filter_input(INPUT_GET, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_POST, 'action');
 }
 switch ($action){
 case 'template':
  include 'view/template.php';  
  break;
 
 default:
  include 'view/home.php';
  break;
}