<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />

  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Bukina kuhinja</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--slick slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" /> -->

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->

  <link rel="stylesheet" href="css/slick-theme.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  <?php include 'partials/header.php'; ?>
  <section class="kuhinja_section layout_padding">



    <?php
    require 'konekcija.php';
    $baza = "SELECT * FROM products";
    $upit = mysqli_query($konekcija, $baza);
    $rezultat = mysqli_fetch_all($upit, MYSQLI_ASSOC);
    require 'index.prikaz.php';
    ?>
    <div class="container">
      <div class="heading_container">
        <h2>
          Nasa ponuda
        </h2>
        <p>
          Nasi specijaliteti pružaju zadovoljstvo, osećaj topline i nostalgije za porodičnim trenucima.
        </p>
      </div>
    </div>
    <?php foreach ($rezultat as $proizvod) { ?>
    <div class="container">
     
        <div class="kuhinja_container">
          <div class="box">

           <div class="img-box">
              <!-- <img src="images/bozicna_pogaca.jpg" alt=""> -->
            </div>
            <div class="detail-box">
              <h6>
                <span><?php echo $proizvod['naziv']; ?></span>
              </h6>
              <h6>
                <span><?php echo $proizvod['opis']; ?></span>
              </h6>
              <h5>
                <?php echo $proizvod['cena']; ?>
              </h5>
              <a href="">
                Porucite
              </a>
            </div>
          </div>

        </div>

    </div>
  <?php } ?>
  </section>


  <?php include 'partials/info_section.php'; ?>

  <?php include 'partials/footer.php'; ?>


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- slick slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>