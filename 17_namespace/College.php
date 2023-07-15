<?php

require_once('Classes/Guardian/Guardian.php');
require_once('Classes/Teacher/Teacher.php');

use App\Classes\Guardian;
use App\Classes\Teacher;

$Guardian = new Guardian();
echo $Guardian->greet();

$Teacher = new Teacher();
echo $Teacher->greet();