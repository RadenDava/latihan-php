<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              LOGIN
            </div>
            <div class="card-body">
              <form action="data-siswa.php" method="POST">
                
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" placeholder="Masukkan Username" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Masukkan Email" class="form-control">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
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