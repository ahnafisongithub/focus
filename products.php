<!DOCTYPE html>
<html>
<head>
<title> Focus Furniture & Interior </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body class="w3-black">



<!-- Products Section -->

<div class="w3-black w3-center">
    <h1  >Hello!</h1>
    <h1  >Welcome to the Products Section!</h1>
</div>
<br><br><br>
<div>
<form action="search_handler.php" method="post">
  <input type="search" id="search" name='search' required>
  <i class="fa fa-search"></i>
  <a href="javascript:void(0)" id="clear-btn">Clear</a>
</form>

<script>
const clearInput = () => {
  const input = document.getElementsByTagName("input")[0];
  input.value = "";
}

const clearBtn = document.getElementById("clear-btn");
clearBtn.addEventListener("click", clearInput);

</script>


</head>
<body>
<!-- Video -->
<h4 class='w3-center'> Past Work Preview </h4><br>
<div class='w3-center'>
<video width="649" height="360" controls>
  <source src="images/past_work.mp4" type="video/mp4">
 
  Your browser does not support the video tag.
</video>
</div>


<!-- Photo Grid -->
<div class="row w3-center" > 
  <div class="column">
    <img src="images/p1.png" style="width:25%">
    <img src="images/p2.png" style="width:25%">
    <img src="images/p3.png" style="width:25%">
    <img src="images/p4.png" style="width:25%">
    <img src="images/p5.png" style="width:25%">
    <img src="images/p6.png" style="width:25%">
    <img src="images/p7.png" style="width:25%">
  </div>

</div>




  

</div>
  

    










<!-- END PAGE CONTENT -->





</body>
</html>
