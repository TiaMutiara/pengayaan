<?php
include 'koneksi.php';

$query_user = mysqli_query($con, "select * from user");
$user = mysqli_fetch_assoc($query_user);

$query_a = mysqli_query($con, "select * from about");
$about = mysqli_fetch_assoc($query_a);




?>
<?php
  if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $nama = $_POST["nama_k"];
    $pesan = $_POST["pesan"];

    $query = "INSERT INTO contact
              VALUES
              ('','$email','$nama','$pesan')
              ";
  mysqli_query($con, $query);
  }
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PORTOFOLIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  </head>
  
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-warning">
      <div class="container">
        <a class="navbar-brand" href="#">Rsmyaptr</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./admin/index.php"><i class="bi bi-gear"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Jumbotron-->
    <div class="jumbotron text-center" data-aos="flip-left"data-aos-duration="2000">
      <img src="img/<?= $user["foto"];?>" alt="" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-5"><?= $user["nama"];?> </h1>
      <p class="lead"><?= $user["jabatan"];?> | <?= $user["perusahaan"];?> </p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,224L12,218.7C24,213,48,203,72,213.3C96,224,120,256,144,272C168,288,192,288,216,288C240,288,264,288,288,288C312,288,336,288,360,272C384,256,408,224,432,197.3C456,171,480,149,504,133.3C528,117,552,107,576,133.3C600,160,624,224,648,245.3C672,267,696,245,720,234.7C744,224,768,224,792,234.7C816,245,840,267,864,266.7C888,267,912,245,936,202.7C960,160,984,96,1008,106.7C1032,117,1056,203,1080,218.7C1104,235,1128,181,1152,138.7C1176,96,1200,64,1224,90.7C1248,117,1272,203,1296,229.3C1320,256,1344,224,1368,208C1392,192,1416,192,1428,192L1440,192L1440,320L1428,320C1416,320,1392,320,1368,320C1344,320,1320,320,1296,320C1272,320,1248,320,1224,320C1200,320,1176,320,1152,320C1128,320,1104,320,1080,320C1056,320,1032,320,1008,320C984,320,960,320,936,320C912,320,888,320,864,320C840,320,816,320,792,320C768,320,744,320,720,320C696,320,672,320,648,320C624,320,600,320,576,320C552,320,528,320,504,320C480,320,456,320,432,320C408,320,384,320,360,320C336,320,312,320,288,320C264,320,240,320,216,320C192,320,168,320,144,320C120,320,96,320,72,320C48,320,24,320,12,320L0,320Z"></path></svg>
      </svg>
    </div>
    <!-- Akhir Jumbotron-->
    <!-- About -->
    <section id="about">
      <div class="row text-center"data-aos="zoom-in">
        <h2>About</h2>
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-sm-4"data-aos="fade-right">
          <p><?= $about ["column1"];?> </p>
        </div>
        <div class="col-sm-4"data-aos="fade-left">
          <p><?= $about ["column2"];?> </p>
        </div>
        </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#808080" fill-opacity="1" d="M0,224L12,218.7C24,213,48,203,72,213.3C96,224,120,256,144,272C168,288,192,288,216,288C240,288,264,288,288,288C312,288,336,288,360,272C384,256,408,224,432,197.3C456,171,480,149,504,133.3C528,117,552,107,576,133.3C600,160,624,224,648,245.3C672,267,696,245,720,234.7C744,224,768,224,792,234.7C816,245,840,267,864,266.7C888,267,912,245,936,202.7C960,160,984,96,1008,106.7C1032,117,1056,203,1080,218.7C1104,235,1128,181,1152,138.7C1176,96,1200,64,1224,90.7C1248,117,1272,203,1296,229.3C1320,256,1344,224,1368,208C1392,192,1416,192,1428,192L1440,192L1440,320L1428,320C1416,320,1392,320,1368,320C1344,320,1320,320,1296,320C1272,320,1248,320,1224,320C1200,320,1176,320,1152,320C1128,320,1104,320,1080,320C1056,320,1032,320,1008,320C984,320,960,320,936,320C912,320,888,320,864,320C840,320,816,320,792,320C768,320,744,320,720,320C696,320,672,320,648,320C624,320,600,320,576,320C552,320,528,320,504,320C480,320,456,320,432,320C408,320,384,320,360,320C336,320,312,320,288,320C264,320,240,320,216,320C192,320,168,320,144,320C120,320,96,320,72,320C48,320,24,320,12,320L0,320Z"></path></svg>
    </svg>
    </section>
    <!-- Akhir About-->
    <!-- Project -->
    <section id="project">
      <div class="container">
        <div class="row text-center"data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
            <h2>Project</h2>
        </div>
        <div class="row justify-content-evenly">

          <?php 
          $query_project = mysqli_query($con, "select * from project");
          while($pro = mysqli_fetch_array($query_project)) { ?>
              <div class="col-sm-4 mb-4"data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
                <div class="card">
                  <img src="img/projects/<?= $pro ["foto"];?>" class="card-img-top" alt="..." />
                  <div class="card-body">
                  <h2 class="display-6"><?= $pro["nama_p"];?></h2>
                    <p class="card-text"><?= $pro["ket"];?></p>
                  </div>
                </div>
              </div>
            <?php } ?>

      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#808080" fill-opacity="1" d="M0,224L13.3,186.7C26.7,149,53,75,80,42.7C106.7,11,133,21,160,69.3C186.7,117,213,203,240,250.7C266.7,299,293,309,320,282.7C346.7,256,373,192,400,176C426.7,160,453,192,480,186.7C506.7,181,533,139,560,138.7C586.7,139,613,181,640,192C666.7,203,693,181,720,154.7C746.7,128,773,96,800,85.3C826.7,75,853,85,880,117.3C906.7,149,933,203,960,234.7C986.7,267,1013,277,1040,261.3C1066.7,245,1093,203,1120,202.7C1146.7,203,1173,245,1200,240C1226.7,235,1253,181,1280,133.3C1306.7,85,1333,43,1360,69.3C1386.7,96,1413,192,1427,240L1440,288L1440,0L1426.7,0C1413.3,0,1387,0,1360,0C1333.3,0,1307,0,1280,0C1253.3,0,1227,0,1200,0C1173.3,0,1147,0,1120,0C1093.3,0,1067,0,1040,0C1013.3,0,987,0,960,0C933.3,0,907,0,880,0C853.3,0,827,0,800,0C773.3,0,747,0,720,0C693.3,0,667,0,640,0C613.3,0,587,0,560,0C533.3,0,507,0,480,0C453.3,0,427,0,400,0C373.3,0,347,0,320,0C293.3,0,267,0,240,0C213.3,0,187,0,160,0C133.3,0,107,0,80,0C53.3,0,27,0,13,0L0,0Z"></path></svg>    </section>
    
    <!-- Akhir project -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#808080" fill-opacity="1" d="M0,224L13.3,186.7C26.7,149,53,75,80,42.7C106.7,11,133,21,160,69.3C186.7,117,213,203,240,250.7C266.7,299,293,309,320,282.7C346.7,256,373,192,400,176C426.7,160,453,192,480,186.7C506.7,181,533,139,560,138.7C586.7,139,613,181,640,192C666.7,203,693,181,720,154.7C746.7,128,773,96,800,85.3C826.7,75,853,85,880,117.3C906.7,149,933,203,960,234.7C986.7,267,1013,277,1040,261.3C1066.7,245,1093,203,1120,202.7C1146.7,203,1173,245,1200,240C1226.7,235,1253,181,1280,133.3C1306.7,85,1333,43,1360,69.3C1386.7,96,1413,192,1427,240L1440,288L1440,0L1426.7,0C1413.3,0,1387,0,1360,0C1333.3,0,1307,0,1280,0C1253.3,0,1227,0,1200,0C1173.3,0,1147,0,1120,0C1093.3,0,1067,0,1040,0C1013.3,0,987,0,960,0C933.3,0,907,0,880,0C853.3,0,827,0,800,0C773.3,0,747,0,720,0C693.3,0,667,0,640,0C613.3,0,587,0,560,0C533.3,0,507,0,480,0C453.3,0,427,0,400,0C373.3,0,347,0,320,0C293.3,0,267,0,240,0C213.3,0,187,0,160,0C133.3,0,107,0,80,0C53.3,0,27,0,13,0L0,0Z"></path></svg>
     <!-- Contact -->
     <section id="contact"> 
      <div class="container pt-5">
        <div class="row text-center">
          <h2>Contact</h2>
      </div>
    <div class="row justify-content-center"data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
      <div class="col-sm-6">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama_k" id="nama"/>
            </div>
            <div class="form-floating">
            <label for="pesan">Pesan</label>
              <textarea class="form-control" placeholder="Leave a comment here" name="pesan" id="pesan" style="height: 100px"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-4">Kirim</button>
          </form>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#808080" fill-opacity="1" d="M0,224L12,218.7C24,213,48,203,72,213.3C96,224,120,256,144,272C168,288,192,288,216,288C240,288,264,288,288,288C312,288,336,288,360,272C384,256,408,224,432,197.3C456,171,480,149,504,133.3C528,117,552,107,576,133.3C600,160,624,224,648,245.3C672,267,696,245,720,234.7C744,224,768,224,792,234.7C816,245,840,267,864,266.7C888,267,912,245,936,202.7C960,160,984,96,1008,106.7C1032,117,1056,203,1080,218.7C1104,235,1128,181,1152,138.7C1176,96,1200,64,1224,90.7C1248,117,1272,203,1296,229.3C1320,256,1344,224,1368,208C1392,192,1416,192,1428,192L1440,192L1440,320L1428,320C1416,320,1392,320,1368,320C1344,320,1320,320,1296,320C1272,320,1248,320,1224,320C1200,320,1176,320,1152,320C1128,320,1104,320,1080,320C1056,320,1032,320,1008,320C984,320,960,320,936,320C912,320,888,320,864,320C840,320,816,320,792,320C768,320,744,320,720,320C696,320,672,320,648,320C624,320,600,320,576,320C552,320,528,320,504,320C480,320,456,320,432,320C408,320,384,320,360,320C336,320,312,320,288,320C264,320,240,320,216,320C192,320,168,320,144,320C120,320,96,320,72,320C48,320,24,320,12,320L0,320Z"></path></svg>
  </svg>
    </section>
        <!-- Akhir Contact --> 

    <footer class="text-center text-white" style="background-color: #808080;">
       <p>Created with <i class="bi bi-heart-fill"></i> by <a href="">RISMAYA PUTRI</a><p>
        <p><i class="bi bi-telegram"></i> <a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a></i> <i class="bi bi-whatsapp"></i> <i class="bi bi-twitter"></i></p>
       </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>