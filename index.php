<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KELOMPOK KEAMANAN SISTEM JARINGAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="page1.php">IDENTITAS KETUA KELOMPOK</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="page2.php">IDENTITAS ANGGOTA KELOMPOK 1</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="page3.php">IDENTITAS ANGGOTA KELOMPOK 2</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="page4.php">IDENTITAS ANGGOTA KELOMPOK 3</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="page5.php">IDENTITAS ANGGOTA KELOMPOK 4</a>
                </li>
            </ul>
            </div>
        </div>
    </nav><br><br>


    <div class="container">
        <center>
        <h3>KELOMPOK KEAMANAN SISTEM JARINGAN</h3>
        <p>Kelompok ini yang di ketuai oleh : Ahmad Nuril Khakim</p>
        </center>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama-Nama Kelompok</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>Ahmad Nuril Khakim</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Elviani</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Afredo Fadlikal Ilham</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Fakhri Abdurrasyid</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Novio Anggara</td>
            </tr>
        </table>
    </div><br><br>

    <!-- poto kelompok -->

    <div class="container">
        <div class="row">
            <div class="card text-center" style="width: 20rem;">
              <img src="img/p01.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3>Ahmad Nuril Khakim</h3>
                <h4>( 2055201079 )</h4>
                <h5>Universitas Muhammadiyah Bengkulu</h5>
              </div>
            </div>
            <div class="card text-center" style="width: 20rem;">
              <img src="img/p4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3>Elviani</h3>
                <h4>( 2055201031 )</h4>
                <h5>Universitas Muhammadiyah Bengkulu</h5>
              </div>
            </div>
            <div class="card text-center" style="width: 20rem;">
              <img src="img/p2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3>Afredo Fadlikal Ilham</h3>
                <h4>( 2055201119 )</h4>
                <h5>Universitas Muhammadiyah Bengkulu</h5>
              </div>
            </div>
            <div class="card text-center" style="width: 20rem;">
              <img src="img/p5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3>Fakhri Abdurrasyid</h3>
                <h4>( 2055201075 )</h4>
                <h5>Universitas Muhammadiyah Bengkulu</h5>
              </div>
            </div>
            <div class="card text-center" style="width: 20rem;">
              <img src="img/p3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3>Novio Anggara</h3>
                <h4>( 2055201108 )</h4>
                <h5>Universitas Muhammadiyah Bengkulu</h5>
              </div>
            </div>
        </div>
    </div><br><br>
    
     <!-- akhir poto kelompok -->


  
    <div class="bg-info">
        <center>
        <p align="text-center" style="font-size: 15px; color: #fff;"> &copy;2023 Di Buat Oleh 
            KELOMPOK KEAMANAN SISTEM JARINGAN</center>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

 <?php

    if (isset($_GET['page']))
    {
        include $_GET['page'];
    }
    else
    {
        echo "<p>this is the front page.</P>";
    }

    ?>
