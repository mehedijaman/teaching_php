  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add New Student</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Students</li>
          <li class="breadcrumb-item active">Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <?php 
                  if ($_REQUEST['status']) {
                    if ($_REQUEST['status'] == 1) {
                      echo "Student Entry Successful";
                    }


                    if ($_REQUEST['status'] == 0) {
                      echo "Student Entry Failed !";
                    }
                  }

                ?>
              </h5>

              <!-- Horizontal Form -->
              <form action="controller/student.php" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Student name</label>
                  <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Roll</label>
                  <div class="col-sm-9">
                    <input type="text" name="roll" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Phone</label>
                  <div class="col-sm-9">
                    <input type="text" name="phone" class="form-control" id="inputPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Address</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="address" id="" cols="30" rows="10"></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" value="Insert Student" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
