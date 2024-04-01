<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="navbar/navbar.css">
    <style>
        *{
        box-sizing: border-box;
        margin: 0px;
        padding: 0px;
        }

        .upperBody{
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        height: 300px;
        }

        .upperBody img{
          width: 100vw;
          height: 100%;
          object-fit: contain;
          
        }

        
        .bottom-container{
          width: 100%;
          min-height: max-content;
          padding-top: 50px;
       
        }

        

        .bgPic2{
          position: absolute;
          z-index: -5;
          width: 100%;
          height: 100%;
          object-fit: contain;
        }
        hr{
          margin: 0px;
          height: 30px;
          background-color: #1F4727;
          opacity: 100%;
          border: none;
        }

      
       

    </style>
    <body>
    <?php include 'navbar/navbar.php'; ?>
        
       
<div class="upperBody">
        <div class="bgPic">
            <img src="img/KNT01281-5.png" alt="BackGroundPic">
        </div>

</div>

<hr>

<div class="bottom-container">
    <div class="container text-center">
        <div class="row align-items-end">
          <div class="col">
            Program Outcome 1
          </div>
          <div class="col">
            Program Outcome 2
          </div>
          <div class="col">
            Program Outcome 3
          </div>
          <div class="col">
            Program Outcome 4
          </div>
        </div>
      </div>
<pre></pre>
      <div class="container text-center">
        <div class="row align-items-end">
          <div class="col">
            Program Outcome 5
          </div>
          <div class="col">
            Program Outcome 6
          </div>
          <div class="col">
            Program Outcome 7
          </div>
          <div class="col">
            Program Outcome 8
          </div>
        </div>
      </div>
<pre></pre>
      <div class="container text-center">
        <div class="row align-items-end">
          <div class="col">
            Program Outcome 9
          </div>
          <div class="col">
            Program Outcome 10
          </div>
          <div class="col">
            Program Outcome 11
          </div>
          <div class="col">
            Program Outcome 12
          </div>
        </div>
      </div>
<pre></pre>
      <div class="container text-center">
        <div class="row align-items-end">
        <div class="col">
           <!-- Program Outcome 13 -->
            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-success" style="width: 25%"></div>
            </div>
        </div>
        </div>
      </div>

      <div class="circular-progress-div">
        
      </div>

</div>
<div class="fixed-bottom">
<hr>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>