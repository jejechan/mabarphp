<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Menambahkan Data</title>
</head>
<body>
<!-- Awal Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./dashboard.php">Jenny-Bakery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create.php">Create</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="read.php">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="delete.php">Delete</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="update.php">Update</a>
        </li>
      </ul>
      <form class="d-flex" action="logout.php" method="POST">
        <button class="btn btn-outline-danger" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>  
<!-- Akhir Navbar -->

<!-- Awal form -->
<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Create Data Buku </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image:url()"></div>
                        <div class="login-wrap p-4 p-md-5">
                        <h3 class="mb-3 ">Silahkan isikan data dibawah ini</h3>
                            <form action="./crud/fungsicreate.php" method="POST">
                                <div class="form-group mt-3">
                                    <label class="form-control-placeholder" for="id">Id Buku</label>
                                    <input name="id" id="id" type="text" class="form-control" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="form-control-placeholder" for="id_user">Id User</label>
                                    <input id="id_user" name="id_user" type="id_user" class="form-control" required>
                                    </div>
                                <div class="form-group mt-3">
                                    <label class="form-control-placeholder" for="nama_buku">Nama Buku</label>
                                    <input id="nama_buku" name="nama_buku" type="nama_buku" class="form-control" required>
                                    </div>
                                <div class="form-group mt-3">
                                    <label class="form-control-placeholder" for="harga_buku">Harga Buku</label>
                                    <input id="harga_buku" name="harga_buku" type="harga_buku" class="form-control" required>
                                    </div>
                                <div class="form-group mt-3">
                                    <button name="submit" type="submit" class="form-control btn btn-primary rounded submit px-3">Create Data</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Akhir Form -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>