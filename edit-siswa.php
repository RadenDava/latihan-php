<?php 
  
  include('konek.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM user WHERE id_siswa = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA
            </div>
            <div class="card-body">

                <!-- update-siswa.php -->
              <form action="update-siswa.php" method="POST">
                
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" value="<?php echo $row['username'] ?>" placeholder="Masukkan Username Siswa" class="form-control" >
                  <!-- INPUT ID_Siswa untuk apa pak? -->
                  <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="<?php echo $row['email'] ?>" placeholder="Masukkan Email Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" name="password" placeholder="Masukkan Password Siswa"><?php echo $row['password'] ?>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>