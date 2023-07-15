<?php 
  include('model/class.db.inc');
  include('model/class.student.inc');

  
  // $Data =  $Obj->getAll();


  // if(isset($_POST['submit']))
  // {
  //   if ($_POST['submit'] == 'Delete') {
  //     $id = $_POST['id'];

  //     $Obj->delete($id);
  //   }
  // }

  if(isset($_POST['submit'])){
    if ($_POST['submit'] == 'Edit') {
      $id = $_POST['id'];

      $Obj = new student();

      $Data = $Obj->getByPK($id);
    }
  }

 ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Student</h1>
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
              <h5 class="card-title">Student Edit</h5>

              <!-- Horizontal Form -->
              <form action="controller/student.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $Data[0]['id']; ?>">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Student name</label>
                  <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" id="inputText" value="<?php echo $Data[0]['name']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Roll</label>
                  <div class="col-sm-9">
                    <input type="text" name="roll" class="form-control" id="inputEmail" value="<?php echo $Data[0]['roll']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Phone</label>
                  <div class="col-sm-9">
                    <input type="text" name="phone" class="form-control" id="inputPassword" value="<?php echo $Data[0]['phone']; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Address</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="address" id="" cols="30" rows="10"><?php echo $Data[0]['address']; ?></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" value="Update Student" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
