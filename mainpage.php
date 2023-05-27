<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <title>Study Space Main Page</title>
  <head>

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="mainpage1.css" rel="stylesheet"><link href="mainpage2.css" rel="stylesheet"><link href="IndRoom.css" rel="stylesheet">

  </head>
  <body>
<style>
  .filterDiv {
  text-align: center;
  display: none;
  }

  .show {
  display:inline-block;
  }

  .container1 {
  margin-top: 20px;
  overflow: hidden;
  }

  /* Style the buttons */
  .btn1 {
  border: none;
  outline: none;
  padding: 12px 25px;
  background: #f7f7fa;
  cursor: pointer;
  font-size: 12px;
  line-height: 20px;
  text-transform: uppercase;
  border-radius: 4px;
  transition: all 0.3s ease-in-out;
  margin: 0 0 0 20px;
  font-family: "Open Sans", sans-serif;
  color: #000066;
  }

  .btn1:hover {
  background: #000066;
  color: #f7f7fa;
  }

  .myBtnContainer{
  padding: 0px;
  margin:0 0 20px 0;
  list-style: none;
  text-align: center;


  }
</style>

</head>
<body>


  <?php 
  session_start();
  include 'Header.php'; ?>




<!-- ======= Header if user is not logged in======= -->


<!==start of slogn section ==-->
  <!--bdayt el slogan-->
  <section id="astro" class="d-flex flex-column justify-content-center align-items-center">
    <div style="justify-content: center;" class="container text-center text-md-left" data-aos="fade-up">
      <h1 style="text-align: center;">Reserve your own workplace, with plenty of <span>Space</span></br></h1>
      <br><div class="d-flex justify-content-center"><a href="RoomsMenu.php" class="btn-get-started scrollto">Browse Rooms</a></div>
    </div>
  </section><!--nihayt el slogan-->

  <main id="main">

    <!-- ======= what we do introductory section ======= -->
    <section id="move-study-space" class="move-study-space">
      <div class="container">

        <div class="section-title">
          <h2><br>Move to Study Space</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center justify-content-md-end">
            <div class="icon-box">
              <div class="icon"><img src="Pics/privacy.png" class="img-fluid" alt=""></div>
              <h4>Full privacy & quietude</h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 justify-content-center">
            <div class="icon-box">
              <div class="icon"><img src="Pics/clock.png" class="img-fluid" alt=""></div>
              <h4>For as long as you want to work for</h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 justify-content-center justify-content-md-center">
            <div class="icon-box">
              <div class="icon"><img src="Pics/services.png" class="img-fluid" alt=""></div>
              <h4>With as many tools to assist you</h4>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= popular eection ======= -->
    <section id="popular" class="popular section-bg">
      <div class="container">

        <div class="section-title">
          <h2><br>Our Most Popular Rooms</h2>
        </div>

        <div class="row">
          <div class="col-md-6 mt-4 mt-lg-0">
            <a href="view.php?rid=5"><div class="icon-box">
            <img src="Pics/RPopular1.png" class="img-fluid">
              <!--<p><br><b>Enjoy the plentiful of space in our customer's favorite!</b></p>-->
            </div>
            </a>
          </div>
          <a href="view.php?rid=6"><div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
            <img src="Pics/RPopular2.png" class="img-fluid">
            </div>
          </a>
      </div>
    </section>

    <!-- ======= catalog section ======= -->
    <section id="catalog" class="catalog">
      <div class="container">
<!==== new div section ===-->
        <div class="section-title">
          <h2>Preview Of Our Rooms</h2>
          <p>Rooms for all, tailored for your preference.</p>
        </div>

        <div class="row align-items-center justify-content-center justify-content-sm-between">
            <div class="col-lg-12 myBtnContainer">
                <button class="btn1 active" onclick="filterSelection('all')"> All</button>
                <button class="btn1" onclick="filterSelection('study')"> Best for students</button>
                <button class="btn1" onclick="filterSelection('teaching')"> Best for instructors</button>
                <button class="btn1" onclick="filterSelection('conference')"> Best for businessmen</button>
        </div>
        </div>
  <?php
        require("includes/connection.inc.php");
            try {

            $sql = "SELECT * FROM room WHERE roomID=1";
            $rooms = $db->query($sql);
            $db = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
       ?>
        <div class="row catalog-container container1">
        <?php foreach ($rooms as $row) {
        ?>
                  <div class="col-lg-4 col-md-6 catalog-item filter-app wow fadeInUp filterDiv study" style="margin-bottom: 40px;">
                    <a href="view.php?rid=1"><div class="catalog-wrap">
                      <figure>
                        <img src="Pics/1.jpg" class="img-fluid" alt="">
                      </figure>

                      <div class="catalog-info h-25 d-inline-block" style="width: 100%; margin-top: -10px;">
                        <h4>Mercury</h4>
                        <p>Study Room</p>
                        <div class="container-star">
                     <?php $i=1;
                     while ($i<= $row['rating']){?> <span class="fa fa-star checked"></span>
                     <?php $i++; }?>
                     <?php $i= 5-$row['rating'];
                     while ($i>0){?> <span class="fa fa-star"></span>
                     <?php $i--; }?>
                  <h6><?= $row['rating'] ?> out of 5</h6>
                     </div>
                      </div>
                    </div>
                    </a>
                  </div>
                  <?php
        }
        ?>
        <?php
              require("includes/connection.inc.php");
                  try {

                  $sql = "SELECT * FROM room WHERE roomID=2";
                  $rooms = $db->query($sql);
                  $db = null;
              } catch (PDOException $e) {
                  echo $e->getMessage();
              }
                 ?>
              <?php foreach ($rooms as $row) {
              ?>
                        <div class="col-lg-4 col-md-6 catalog-item filter-app wow fadeInUp filterDiv teaching" style="margin-bottom: 40px;">
                          <a href="view.php?rid=2"><div class="catalog-wrap">
                            <figure>
                              <img src="Pics/2.jpg" class="img-fluid" alt="">
                            </figure>

                            <div class="catalog-info h-25 d-inline-block" style="width: 100%; margin-top: -10px;">
                              <h4>Venus</h4>
                              <p>Teaching Room</p>
                              <div class="container-star">
                           <?php $i=1;
                           while ($i<= $row['rating']){?> <span class="fa fa-star checked"></span>
                           <?php $i++; }?>
                           <?php $i= 5-$row['rating'];
                           while ($i>0){?> <span class="fa fa-star"></span>
                           <?php $i--; }?>
                        <h6><?= $row['rating'] ?> out of 5</h6>
                           </div>
                            </div>
                          </div>
                          </a>
                        </div>
                        <?php
              }
              ?>
            <?php
                  require("includes/connection.inc.php");
                      try {

                      $sql = "SELECT * FROM room WHERE roomID=3";
                      $rooms = $db->query($sql);
                      $db = null;
                  } catch (PDOException $e) {
                      echo $e->getMessage();
                  }
                 ?>

                  <?php foreach ($rooms as $row) {
                  ?>
                            <div class="col-lg-4 col-md-6 catalog-item filter-app wow fadeInUp filterDiv study" style="margin-bottom: 40px;">
                              <a href="view.php?rid=1"><div class="catalog-wrap">
                                <figure>
                                  <img src="Pics/3.jpg" class="img-fluid" alt="">
                                </figure>

                                <div class="catalog-info h-25 d-inline-block" style="width: 100%; margin-top: -10px;">
                                  <h4>Earth</h4>
                                  <p>Study Room</p>
                                  <div class="container-star">
                               <?php $i=1;
                               while ($i<= $row['rating']){?> <span class="fa fa-star checked"></span>
                               <?php $i++; }?>
                               <?php $i= 5-$row['rating'];
                               while ($i>0){?> <span class="fa fa-star"></span>
                               <?php $i--; }?>
                            <h6><?= $row['rating'] ?> out of 5</h6>
                               </div>
                                </div>
                              </div>
                              </a>
                            </div>
                            <?php
                  }
                  ?>
                  <?php
                        require("includes/connection.inc.php");
                            try {

                            $sql = "SELECT * FROM room WHERE roomID=4";
                            $rooms = $db->query($sql);
                            $db = null;
                        } catch (PDOException $e) {
                            echo $e->getMessage();
                        }
                     ?>
                        <?php foreach ($rooms as $row) {
                        ?>
                                  <div class="col-lg-4 col-md-6 catalog-item filter-app wow fadeInUp filterDiv conference" style="margin-bottom: 40px;">
                                    <a href="view.php?rid=4"><div class="catalog-wrap">
                                      <figure>
                                        <img src="Pics/4.jpg" class="img-fluid" alt="">
                                      </figure>

                                      <div class="catalog-info h-25 d-inline-block" style="width: 100%; margin-top: -10px;">
                                        <h4>Mars</h4>
                                        <p>Conference Room</p>
                                        <div class="container-star">
                                     <?php $i=1;
                                     while ($i<= $row['rating']){?> <span class="fa fa-star checked"></span>
                                     <?php $i++; }?>
                                     <?php $i= 5-$row['rating'];
                                     while ($i>0){?> <span class="fa fa-star"></span>
                                     <?php $i--; }?>
                                  <h6><?= $row['rating'] ?> out of 5</h6>
                                     </div>
                                      </div>
                                    </div>
                                    </a>
                                  </div>
                                  <?php
                        }
                        ?>
                        <?php
                              require("includes/connection.inc.php");
                                  try {

                                  $sql = "SELECT * FROM room WHERE roomID=5";
                                  $rooms = $db->query($sql);
                                  $db = null;
                              } catch (PDOException $e) {
                                  echo $e->getMessage();
                              }
                           ?>
                              <?php foreach ($rooms as $row) {
                              ?>
                                        <div class="col-lg-4 col-md-6 catalog-item filter-app wow fadeInUp filterDiv teaching" style="margin-bottom: 40px;">
                                          <a href="view.php?rid=5"><div class="catalog-wrap">
                                            <figure>
                                              <img src="Pics/5.jpg" class="img-fluid" alt="">
                                            </figure>

                                            <div class="catalog-info h-25 d-inline-block" style="width: 100%; margin-top: -10px;">
                                              <h4>Jupiter</h4>
                                              <p>Teaching Room</p>
                                              <div class="container-star">
                                           <?php $i=1;
                                           while ($i<= $row['rating']){?> <span class="fa fa-star checked"></span>
                                           <?php $i++; }?>
                                           <?php $i= 5-$row['rating'];
                                           while ($i>0){?> <span class="fa fa-star"></span>
                                           <?php $i--; }?>
                                        <h6><?= $row['rating'] ?> out of 5</h6>
                                           </div>
                                            </div>
                                          </div>
                                          </a>
                                        </div>
                                        <?php
                              }
                              ?>

                              <?php
                                    require("includes/connection.inc.php");
                                        try {

                                        $sql = "SELECT * FROM room WHERE roomID=6";
                                        $rooms = $db->query($sql);
                                        $db = null;
                                    } catch (PDOException $e) {
                                        echo $e->getMessage();
                                    }
                                   ?>
                                    <?php foreach ($rooms as $row) {
                                    ?>
                                              <div class="col-lg-4 col-md-6 catalog-item filter-app wow fadeInUp filterDiv study" style="margin-bottom: 40px;">
                                                <a href="view.php?rid=6"><div class="catalog-wrap">
                                                  <figure>
                                                    <img src="Pics/6.jpg" class="img-fluid" alt="">
                                                  </figure>

                                                  <div class="catalog-info h-25 d-inline-block" style="width: 100%; margin-top: -10px;">
                                                    <h4>Saturn</h4>
                                                    <p>Study Room</p>
                                                    <div class="container-star">
                                                 <?php $i=1;
                                                 while ($i<= $row['rating']){?> <span class="fa fa-star checked"></span>
                                                 <?php $i++; }?>
                                                 <?php $i= 5-$row['rating'];
                                                 while ($i>0){?> <span class="fa fa-star"></span>
                                                 <?php $i--; }?>
                                              <h6><?= $row['rating'] ?> out of 5</h6>
                                                 </div>
                                                  </div>
                                                </div>
                                                </a>
                                              </div>
                                              <?php
                                    }
                                    ?>
          </div>
      </div>
    </section>


  </main>

  <script>
       filterSelection("all")
       function filterSelection(c) {
         var x, i;
         x = document.getElementsByClassName("filterDiv");
         if (c == "all") c = "";
         for (i = 0; i < x.length; i++) {
           w3RemoveClass(x[i], "show");
           if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
         }
       }

       function w3AddClass(element, name) {
         var i, arr1, arr2;
         arr1 = element.className.split(" ");
         arr2 = name.split(" ");
         for (i = 0; i < arr2.length; i++) {
           if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
         }
       }

       function w3RemoveClass(element, name) {
         var i, arr1, arr2;
         arr1 = element.className.split(" ");
         arr2 = name.split(" ");
         for (i = 0; i < arr2.length; i++) {
           while (arr1.indexOf(arr2[i]) > -1) {
             arr1.splice(arr1.indexOf(arr2[i]), 1);
           }
         }
         element.className = arr1.join(" ");
       }

       var btnContainer = document.getElementById("myBtnContainer");
       var btns = btnContainer.getElementsByClassName("btn1");
       for (var i = 0; i < btns.length; i++) {
         btns[i].addEventListener("click", function(){
           var current = document.getElementsByClassName("active");
           current[0].className = current[0].className.replace(" active", "");
           this.className += " active";
         });
       }
       </script>

 <?php include 'footer.php'; ?>

</body>
</html>
