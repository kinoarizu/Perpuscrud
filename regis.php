<!doctype html>
<html lang="en">
  <head>
    <title>Registrasi | Perpustakaan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Favicon Perpus -->
    <link rel="shortcut icon" href="img/logo.png">
  </head>
  <body>
    <!-- awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark latar fixed-top">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="33" height="33" class="d-inline-block align-top" alt="">
        <b>Perpustakaan</b>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Anggota
            </a>
            <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="anggota.php">Data Anggota</a>
              <a class="dropdown-item" href="#">Registrasi Anggota</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Buku
            </a>
            <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Genre Buku</a>
              <a class="dropdown-item" href="#">Jenis Buku</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pelayanan
            </a>
            <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Peminjaman Buku</a>
              <a class="dropdown-item" href="#">Pengembalian Buku</a>
              <a class="dropdown-item" href="#">Booking Buku</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign Up</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>    
    <!-- akhir navbar -->

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-8 offset-sm-2 marginatas">
            <h1 class="text-center marginatas"><b>REGISTRASI ANGGOTA</b></h1>
            <form class="marginbawah">
              <div class="form-group">
                <label for="nama"><b>Nama</b></label>
                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama">
              </div>
              <div class="form-group">
                <label for="alamat"><b>Alamat</b></label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat">
              </div>
              <div class="form-group">
                <label for="tanggal"><b>Tanggal Lahir</b></label>
                <input type="date" class="form-control" id="tanggal">
              </div>
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0"><b>Gender</b></legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          Pria
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                         Wanita
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
              <div class="form-group">
                <label for="inputState"><b>Jurusan</b></label>
                <select id="inputState" class="form-control">
                  <option selected>--Pilih Jurusan--</option>
                  <option>MM</option>
                  <option>RPL</option>
                  <option>TKJ</option>
                </select>
              </div>
              <div class="form-group">
                <label for="telp"><b>No Telpon</b></label>
                <input type="text" class="form-control" id="telp" placeholder="Masukan No Telp">
              </div>
              <div class="form-group">
                <label for="gambar"><b>Foto</b></label>
                <input type="text" class="form-control" id="gambar" placeholder="Masukan Gambar">
              </div>
              <div class="form-group row">
                <div class="col-sm-2"><b>Izin</b></div>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                      Diizinkan
                    </label>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-primary btn-lg btn-block"><b>REGISTRASI</b></button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- footer atas -->
    <section class="bg-dark">
      <div class="container">
        <div class="row warnadrop">
          <div class="col-sm-4 text-left">
            <h3 class="warnadrop marginatas"><b>RELATED LINKS</b></h3>
              <div><a href="">Lorem ipsum dolor sit amet, consectetur</a></div>
              <div><a href="">Lorem ipsum dolor sit</a></div>
              <div><a href="">Lorem ipsum dolor sit amet, </a></div>
              <div><a href="">Lorem ipsum dolor sit amet, consectetur</a></div>
              <div><a href="">Lorem ipsum dolor </a></div>
          </div>
          <div class="col-sm-4 text-center">
            <h3 class="warnadrop marginatas"><b>FIND ME ON</b></h3>
            <a href=""><img src="img/email.png" class="marginatas rounded-circle lebaremail"></a>
            <a href=""><img src="img/lokasi.png" class="marginatas rounded-circle lebaremail"></a>
            <a href=""><img src="img/telpon.png" class="marginatas rounded-circle lebaremail"></a>
          </div>
          <div class="col-sm-4 text-right">
            <h3 class="warnadrop marginatas"><b>KONTAK KITA</b></h3>
            <div>Perpustakaan Sekolah</div>
            <div>SMK NEGERI 1 KOTA BEKASI</div>
            <div>Jln. Bintara VIII</div>
            <div>Bintara Jaya, Kota Bekasi</div>
            <div>021 44233857</div>
            <div>www.smkn1kotabekasi.co.id</div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir footer atas -->

    <!-- copyright -->
    <footer class="latarfoot warnadrop">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <p class="text-center marginatas">&copy; Copyright 2018 | Designed By <a href="http://instagram.com/abutoyibaz">Abu T.A</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir copyright -->

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>