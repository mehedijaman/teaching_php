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

        $Result = $Student->add($Data);

        if($Result)
          header('Location:../index.php?Page=student_add&status=1');
        else
          header('Location:../index.php?Page=student_add&status=0');
    }


    if($_POST['submit'] == 'Update Student'){
       $Data = [
          'name'    => $_POST['name'],
          'roll'    => $_POST['roll'],
          'phone'   => $_POST['phone'],
          'address' => $_POST['address'],
        ];

        $id = $_POST['id'];

        $Student = new student();

        $Result = $Student->update($Data, $id);

        if($Result)
          header('Location:../index.php?Page=student_list&edit_status=1');
        else
          header('Location:../index.php?Page=student_list&edit_status=0');
    }


    if($_POST['submit'] == 'Delete'){
      $id = $_POST['id'];

      $Obj = new student();
      $Result = $Obj->delete($id);

      if($Result)
          header('Location:../index.php?Page=student_list&delete_status=1');
        else
          header('Location:../index.php?Page=student_list&delete_status=0');
    }
  }

?>