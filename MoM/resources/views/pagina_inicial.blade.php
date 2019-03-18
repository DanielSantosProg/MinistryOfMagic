<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ministry of Magic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div id="imglogo">
        <img src="/imgs/logo_g.png" class="img1">
    </div>   
    <div>
        <button type="button" class="btn btn-outline-primary" id="login_but">Login</button>
        <button type="button" class="btn btn-outline-primary" id="reg_but">Registrar funcionário</button>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide mycarousel" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 imgcar" src="\imgs\varinhas.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 imgcar" src="\imgs\dumbledore.jpg" alt="Second slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
    </div>     
      <script type="text/javascript" src="{{asset('js/app.js')}}"></script>  
</body>
</html>