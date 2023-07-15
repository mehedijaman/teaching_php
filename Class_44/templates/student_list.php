<?php 
  include('model/class.db.inc');
  include('model/class.student.inc');

  $Obj = new student();
  $Data =  $Obj->getAll();


  if(isset($_POST['submit']))
  {
    if ($_POST['submit'] == 'Delete') {
      $id = $_POST['id'];

      $Obj->delete($id);
    }
  }

 ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View Student List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Student List</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($Data as $Student){ ?>
                  <tr>
                    <td scope="row"><?php echo $Student['id']; ?></td>
                    <td><?php echo $Student['name']; ?></td>
                    <td><?php echo $Student['roll']; ?></td>
                    <td><?php echo $Student['phone']; ?></td>
                    <td><?php echo $Student['address']; ?></td>
                    <td>
                        <form action="index.php?Page=student_edit" method="POST" enctype="multipart/form-data">
                          <input type="hidden" value="<?php echo $Student['id']; ?>" name="id">
                          <button type="submit" name="submit" value="Edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                        </form>
                        
                        <form action="index.php?Page=student_list" method="POST" enctype="multipart/form-data">
                          <input type="hidden" value="<?php echo $Student['id']; ?>" class="btn btn-danger" name="id">

                          <button type="submit" name="submit" value="Delete" class="btn btn-danger"><i class="bi bi-trash"></i> </button>
                        </form>
                    </td>
                  </tr> 
                  <?php } ?>            
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
