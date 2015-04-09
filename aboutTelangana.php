<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>
<body>  
<div class="container">
	<div>	
  		<?php include 'navbar.php';?>
 	</div>
  <div class="row">
      <!--<div id="equalheight">      -->
          <div class="col-3 col-lg-2 col-md-2 col-sm-2 col-xs-12 demo row">
              
              <div class="info-block"><!-- BODY BOX-->
                   <img class="img-responsive img-thumbnail" src="./images/img_flower.jpg" alt="Chania">
              </div>
          </div>
          <div class="row">  
            <div class="col-6 col-lg-8 col-md-8 col-sm-8 col-xs-10 demo">
               <div class="panel-group" id="accordion">
                  <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 demo">
                    <!--<div id="equalheight">-->      
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                      </div>
                    </div>
                    <!--</div>-->
                  </div>
                  <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 demo">
                    <!--<div id="equalheight">-->      
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                      </div>
                    </div>
                    <!--</div>-->
                  </div>
              </div> 
          </div>
          <div class="col-3 col-lg-2 col-md-2 col-sm-2 col-xs-2 demo row">
			<?php include 'rightColumn-ads.php';?>          
		  </div> 
      <!--</div>-->
  </div><!--/row-->

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>