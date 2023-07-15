<?php 
  // echo "HEllo WOrld";
  include('../model/class.db.inc');
  include('../model/class.student.inc');

  if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'Insert Student') {
        $Data = [
          'name'    => $_POST['name'],
          'roll'    => $_POST['roll'],
          'phone'   => $_POST['phone'],
          'address' => $_POST['address'],
        ];

        // var_dump($Data);

        $Student = new student();

        $Student->add($Data);

        header('Location:../index.php?Page=student_add&status=1');
    }
  }

?>