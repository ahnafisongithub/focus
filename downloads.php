<!DOCTYPE html>
<html>
<head>
<title> Focus Furniture & Interior </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->

  <a href="https://focusbd.xyz/abante/" class="w3-bar-item w3-button w3-padding-large w3-yellow ">
  <i class="fa fa-shopping-cart" style="font-size:48px;color:red"></i>
    <p>BUY PRODUCTS</p>
  </a>
  
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#biography" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>BIOGRAPHY</p>
  </a>
  <a href="#portfolio" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PORTFOLIO</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>

  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-info w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>

  <a href="#reviews" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>REVIEWS</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#biography" class="w3-bar-item w3-button" style="width:25% !important">BIO</a>
    <a href="#portfolio" class="w3-bar-item w3-button" style="width:25% !important">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#reviews" class="w3-bar-item w3-button" style="width:25% !important">REVIEWS</a>
  </div>
</div>

<!-- Downloads Section -->

<div class="w3-black w3-center">
    <h1  >Hello!</h1>
    <h1  >Welcome to the Uploads/Downloads section!</h1>

    <hr>
    <hr>

    <form action="create_folder.php" method="post">
      <p>STEP 1: CREATE A FOLDER ON THE SERVER </p>
    <label for="name">Enter nickname:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="pin">Enter 4-digit pin code:</label>
  <input type="password" id="pin" name="pin"><br><br>

  <br>
  
 
          
  


        <button href="" class="btn w3-blue"><i class="fa fa-download "></i> Create</button>
  
</form>

<hr>
<hr>

    <form action="upload.php" method="post" enctype="multipart/form-data">
    <p>STEP 2: UPLOAD A FILE ON THE SERVER </p>
    <label for="name2">Enter nickname [MUST MATCH FOLDER NAME!]:</label>
  <input type="text" id="name2" name="name2"><br><br>
  <label for="pin">Enter 4-digit pin code:</label>
  <input type="password" id="pin" name="pin"><br><br>

  <br>
  
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
          
        <br /><br />


  <button href="" class="btn w3-blue"><i class="fa fa-download "></i> Upload</button>
  
</form>

<hr>
    <hr>
<!-- 
    <button href="" class="btn w3-blue"><i class="fa fa-download "></i> Download</button> -->

    <form action="download.php" method="post" enctype="multipart/form-data">
    <p>STEP 3: DOWNLOAD THE FILE ON THE SERVER </p>
    <label for="name">Enter nickname [MUST MATCH FOLDER NAME!]:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="pin">Enter 4-digit pin code:</label>
  <input type="password" id="pin" name="pin"><br><br>

  <br>
  



        <button href="" class="btn w3-blue"><i class="fa fa-download "></i> Download</button>
  
</form>



    <hr>
    <hr>


</div>


    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>



  <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off" >
  <a href="https://www.facebook.com/FocusDesignStudio2021" class="w3-button w3-hover-opacity"> <i class=" fa fa-facebook-official" style="font-size:36px"></i> Follow Us</a>


  <!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off" >
  <a href="#" class="w3-button w3-light-grey"> <i class="fa fa-arrow-circle-up" style="font-size:36px"></i> To the top</a>

  <p> POWERED BY TEAM FOCUS </p>
  <br>
  <p> Ahnaf Tech Services Limited &#169; </p>

  <!-- AHNAF WAS HERE -->
  
</footer>

</body>
</html>
