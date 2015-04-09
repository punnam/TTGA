<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style>
      .carousel {
      margin-bottom: 2.5%;
      margin-top:-2%;
      margin-left: auto;
      margin-right: auto;
      }
      .carousel-inner > .item > img,
      .carousel-inner > .item > a > img {
      width: 10%;
      margin: auto;
      }
    </style>

  </head>
  <body>
    <div class="container">
	<div>	
  		<?php include 'navbar.php';?>
 	</div>
      <div class="jumbotron">
        <h1 class="text-primary">Triangle Telangana Association!</h1>
        <p class="text-primary">This page will grow as we add more and more components from Bootstrap...</p>
      </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="row">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <a href="http://www.suntechpros.com/contact.htm">
                <img src="images/SunTechPros.jpg" class="img-thumbnail" alt="Flower">
              </a>
              <div class="carousel-caption">
                <p>Praveen Chakraraj</p>
              </div>    
            </div>
            <div class="item">
              <a href="http://www.suntechpros.com/contact.htm">
                <img src="images/Hydrangeas.jpg" class="img-thumbnail" alt="Flower">
              </a>
            </div>
            <div class="item">
              <a href="http://www.suntechpros.com/contact.htm">
                <img src="./images/jellyfish.jpg" class="img-thumbnail" alt="Flower">
              </a>
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- Carousel for $500-->
      <div id="Carousel500" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="row">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <a href="http://www.suntechpros.com/contact.htm">
                <img src="images/SunTechPros.jpg" class="img-thumbnail" alt="Flower">
              </a>    
            </div>
            <div class="item">
              <a href="http://www.suntechpros.com/contact.htm">
                <img src="images/Hydrangeas.jpg" class="img-thumbnail" alt="Flower">
              </a>
            </div>
            <div class="item">
              <a href="http://www.suntechpros.com/contact.htm">
                <img src="./images/jellyfish.jpg" class="img-thumbnail" alt="Flower">
              </a>
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
      <!-- Carousel for $250-->
      <div id="Carousel250" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="row">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
                <p class="carousel-caption">Ravi Borrugadda</p>    
            </div>
            <div class="item">
              <a href="http://www.suntechpros.com/contact.htm">
                <img src="images/Hydrangeas.jpg" class="img-thumbnail" alt="Flower">
              </a>
            </div>
            <div class="item">
              <a href="http://www.suntechpros.com/contact.htm">
                <img src="./images/jellyfish.jpg" class="img-thumbnail" alt="Flower">
              </a>
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
          
      <div class="row">
              <iframe width="600" height="338" src="http://www.youtube.com/embed/KgMt0dtr4Vc" frameborder="0" allowfullscreen></iframe>
          </div>
	  </div>
    <!-- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>