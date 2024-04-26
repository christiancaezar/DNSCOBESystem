<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DNSC OBE | Dashboard</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="navbar/navbar.css">
<link rel="stylesheet" href="style.css">

<body>
  <?php
  $location = 'assets';
  include 'navbar/navbar.php';
  ?>
  <hr>


 <div class="upperBody flex-row">
    <div class="bgPic p-2">
      <img src="img/KNT01281-5.png" alt="BackGroundPic">
    </div> 

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ab fugit nesciunt. Explicabo illo cum quam obcaecati sapiente quo impedit consequatur att?</p>


    <div class="ga-div p-2"> 
     
        <div id="GrandAverage" class="GrandProgress "></div> 
    </div>

   

 </div>

  
     

  <hr>
  <div class="bottom-container">
    <div class="container text-center">
      <div class="row align-items-end">
        <div class="col">
          <div id="po1" class="ProgressBar">
          </div>
          <p> Program Outcome 1</p>
        </div>
        <div class="col">
          <div id="po2" class="ProgressBar">
          </div>
          <p> Program Outcome 2</p>
        </div>
        <div class="col">
          <div id="po3" class="ProgressBar">
          </div>
          <p> Program Outcome 3</p>
        </div>
        <div class="col">
          <div id="po4" class="ProgressBar">
          </div>
          <p> Program Outcome 4</p>
        </div>
      </div>
    </div>

    <div class="container text-center">
      <div class="row align-items-end">
        <div class="col">
          <div id="po5" class="ProgressBar">
          </div>
          <p> Program Outcome 5</p>
        </div>
        <div class="col">
          <div id="po6" class="ProgressBar">
          </div>
          <p> Program Outcome 6</p>
        </div>
        <div class="col">
          <div id="po7" class="ProgressBar">
          </div>
          <p>Program Outcome 7</p>
        </div>

        <div class="col">
          <div id="po8" class="ProgressBar">
          </div>
          <p>Program Outcome 8</p>

        </div>
      </div>
    </div>

    <div class="container text-center">
      <div class="row align-items-end">
        <div class="col">
          <div id="po9" class="ProgressBar">
          </div>
          <p>Program Outcome 9</p>

        </div>
        <div class="col">
          <div id="po10" class="ProgressBar">
          </div>
          <p>Program Outcome 10</p>

        </div>
        <div class="col">
          <div id="po11" class="ProgressBar">
          </div>
          <p>Program Outcome 11</p>

        </div>
        <div class="col">
          <div id="po12" class="ProgressBar">
          </div>
          <p>Program Outcome 12</p>

        </div>
      </div>
    </div>

    <div class="container text-center">
      <div class="row align-items-end">
        <div class="col">
          <div id="po13" class="ProgressBar">
          </div>
          <p>Program Outcome 13</p>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.1.1/progressbar.min.js" integrity="sha512-8RAwsP5DBXxOKowV9rc4TwxbW0Z+YG856FOh4ymLgoAQlfhCmkYm8G46FaFAZYsG/J8jcAlI/22q0PSLHz4HAQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="main.js"></script>
</body>

</html>