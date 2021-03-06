<?php

// get value of email on submit
  $email = $_POST['email'];

  $conn = new mysqli('http://db4free.net:3306/','nueldona','nueldona','subdetails');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die('Connection Failed : '.$conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into emaildetails(email) values(?)");
		$stmt->bind_param("s", $email);

	}	  $stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="./sass/index.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <title>clean water</title>
  </head>
  <body>
    <article>
      
      <!-- HEADER -->
      <header>
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand"><img src="assets/images/Logo.png" alt="brand logo"></a>
          </nav>
  
          <section class="header__section__content">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="lead__text">Scan Water For Safety Before Drinking</h1>
                <p class="subordinate__text">Don’t just scan pictures and files. With CleanWater Scanner, you can scan any water you want to drink to make sure it is safe for drinking. It takes just seconds! </p>
                <p class="subordinate__text-two"> CleanWater Scanner is coming soon. Be the first to know when we launch: </p>
                
                <form method="post" action="index.php" class="form" id="subscribers">
                  <input type="email" name="email" id="email" class="text__input" placeholder="Email Address" required>
                  <input type="submit" value="Notify Me" class="btn" name="submit">
                </form>
              
              </div>

              <div class="col-lg-6">
                <section class="header__section__img">
                  <img src="assets/Mockups/MockUp.png" alt="" class="mockUp__1">
                  <img src="assets/Mockups/MockUp2.png" alt="" class="mockUp__2">
                </section>
              </div>
            </div>
          </section >
        </div>
        
      </header>


      <!-- PAGE CONTENT -->

      <main class="main">
        <!-- APP FEATURES -->

        <section class="App__features">
          <div class="container">
            <section class="App__features__details">
              <h1 class="text-center mb-4">App Features</h1>
              <p class="small text-center">CleanWater Scanner works in three (3) quick steps, inorder to ensure your safety and optimum health without slowing down your water drinking.</p>
              
              <div class="App__features__details method">
                <p>Scan Water <i class="fas fa-long-arrow-alt-right"></i></p>
                <p>Confirm Safety  <i class="fas fa-long-arrow-alt-right"></i></p>
                <p>Drink Water </p>
              </div>
            </section >

            <section class="App__features__content">
              <div class="row">

                <div class="col-sm mb-3 col-lg-4" >
                  <div class="card text-center">
                    <div class ="img">
                      <img src="assets/Icons/qr-code-scan.svg" alt="">
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mb-2">Quick Scan</h3>
                      <p class="card-text">Open the app, scan your water, and obtain results within seconds.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm mb-3 col-lg-4">
                  <div class="card text-center">
                    <div class ="img">
                      <img src="assets/Icons/visualization.svg" alt="">
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mb-2">Retina Ready</h3>
                      <p class="card-text">On opening, the app’s home page is on the camera and is ready to scan.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm mb-3 col-lg-4">
                  <div class="card text-center">
                    <div class ="img">
                      <img src="assets/Icons/bullseye.svg" alt="">
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mb-2">Accurate Result</h3>
                      <p class="card-text">Despite split second scanning, the app uses AI to produce accurate results.</p>
                    </div>
                  </div>
                </div>
                
              </div>  
            </section >
          </div>
        </section>


        <!-- APP SCREENS -->
        <section class="App__screen w-100 h-100">
          <div class="container">
            <h1 class="text-center mb-4">App Screens</h1>
            
            <div class="App__screen__mockup">
              
              <div class="App__screen__mockup-1">
                <div class=" image-fit one">
                  <img src="assets/Mockups/FlatMocks/Screen Here-3.png" alt="" srcset="">
                </div>
                <div class="image-fit">
                  <img src="assets/Mockups/FlatMocks/Screen Here-7.png" alt="" srcset="">
                </div>
                <div class=" image-fit one">
                  <img src="assets/Mockups/FlatMocks/Screen Here-2.png" alt="" srcset="">
                </div>
              </div>
      
              <div class="App__screen__mockup-1">
                <div class="one image-fit">
                  <img src="assets/Mockups/FlatMocks/Screen Here.png" alt="" srcset="">
                </div>
                <div class=" image-fit">
                  <img src="assets/Mockups/FlatMocks/Screen Here-1.png" alt="" srcset="">
                </div>
                <div class="one image-fit">
                  <img src="assets/Mockups/FlatMocks/Screen Here-6.png" alt="" srcset="">
                </div>
              </div>  
            </div> 
            
          </div>
        </section>


         <!-- APP PARTNERS -->
        <section class="App__partners w-100 h-100">

          <section class="App__partners__blobs">
            <div class="blobs blobs__1"></div>
            <div class="blobs blobs__2"></div>
          </section>

          <div class="container">
            <div class="App__partners__details">
              <h4 class="text-center mb-4">They already think we are cool </h4>
              <div class="line"></div>

              <div class="img">
                <img src="assets/Images/1_hQkaUtaMtweT-sHcM2qBAw-removebg-preview.png" alt="">
              </div>
            </div>
            

            <section class="App__partners__img">
              <h4 class="text-center mb-4">You’re In Good Hands Too</h4>
              <div class="img">
                <div class="container">

                  <div class="row mb-2">
                    <div class="col-sm">
                      <img src="assets/Images/PepsiCo-logo-Feature-removebg-preview.png" alt="pepsico img">
                    </div>
                    <div class="col-sm">
                      <img src="assets/Images/UN-Water-logo-removebg-preview.png" alt="Un waters img">
                    </div>
                    <div class="col-sm">
                      <img src="assets/Images/WaterOrgLogo-removebg-preview.png" alt="water Org img">
                    </div>
                    <div class="col-sm">
                      <img src="assets/Images/clean-water-fund-logo-removebg-preview.png" alt="clean water funds">
                    </div>
                  </div>
                  
                </div>
              </div>
            </section>
          </div>
        </section>
      </main>
      
      <!-- FOOTER SECTION -->

      <footer class="w-100 h-100">
        <div class="container">
          <div class="social__medias">

            <div class="brand__social">
              <a class="navbar-brand"><img src="assets/Images/Logo.png" alt="brand logo"></a>
            </div>  

            <div>
              <ul class="media__icons">

                <li><a href="#" class="socialLink"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#" class="socialLink"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="socialLink"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="socialLink"><i class="fab fa-instagram"></i></a></li>
                
                </ul>
            </div>
          </div>
          <p class="text-center">Copyright@CleanWaterScanner. All rights reserved </p>
        </div>
      </footer >
    </article>

    
    
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script src="ajax.js"></script>
   
  </body>
</html>
