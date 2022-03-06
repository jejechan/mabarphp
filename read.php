<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Search</title>
</head>
<body>
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
          <a class="nav-link active" aria-current="page" href="read.php">Read</a>
        </li>
      </ul>
      <form class="d-flex" action="logout.php" method="POST">
        <button class="btn btn-outline-danger" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
        <h1 class="text-center mb-5">Daftar Buku</h1>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">ID</th>
              <th scope="col">ID User</th>
              <th scope="col">Nama Buku</th>
              <th scope="col">Harga Buku</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM buku;");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td class="datalist"><?php echo $data['id'] ?></td>
                    <td class="datalist"><?php echo $data['id_user'] ?></td>
                    <td class="datalist"><?php echo $data['nama_buku'] ?></td>
                    <td class="datalist"><?php echo $data['hagra_buku'] ?></td>
                    <td>
                        <a class="btn btn-primary" href="update.php?id=<?php echo $data['id'] ?>">Edit</a>
                        <a class="btn btn-secondary" href="delete.php?id=<?php echo $data['id'] ?>">Delete</a>    

                    </td>
                  </tr>
                <?php } ?>
              </tbody>
        </table>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>