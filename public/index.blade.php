<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            OneStopShop
        </title>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
        </script>
        <script src="./js/bootstrap.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
  

  <style>
                                /* Remove the navbar's default rounded borders and increase the bottom margin */
   
   
  .center {
    margin: 0 auto;
    width: 80%;
  }
  .nav-wSrapper
  {
 
  padding-top: 80px;
  }

  
  .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
  
    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      height: 54vw;
      min-width: 300px;
      padding: 0;
      margin-bottom: 0;
      max-height:280px;
    }
  
   .affix {
      top: 0;
      width: 100%;
    z-index: 9999 !important;
  }
    .affix ~ .container-fluid {
     position: relative;
     top: 102px;
  }
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
                            </style>
    </head>
    <body>
        <div class="jumbotron">

      <div class="carousel slide carousel-fade" id="featured" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#featured" data-slide-to="0"></li>
        <li data-target="#featured" data-slide-to="1" class="active"></li>
        <li data-target="#featured" data-slide-to="2"></li>
      </ol>           


        <div class="carousel-caption text-centered">
          <h1>One-Stop Shop</h1><!DOCTYPE html>
        </div>

            <div class="carousel-inner">
                <div class="item">
                    <img alt="Sparrow n Butterfly"  class="img-responsive" src="a.jpg">   
                </div>
                <div class="item active">
                    <img alt="Cherry Blossom" class="img-responsive" src="b.jpg" >
                </div>
                <div class="item">
                    <img alt="City Lights" class="img-responsive" src="c.jpg" >
                </div>
            </div>

            <!--inner-carousel-->

            <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a class="right carousel-control" href="#featured" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a> 
            
        </div>
  
            </div>
            <nav class="navbar navbar-inverse" data-smart-affix="238px">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button">
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                            <span class="icon-bar">
                            </span>
                        </button>
                        <a class="navbar-brand" href="#">
                            OSS
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="glyphicon glyphicon-th-list">
                                    </span>
                                    Products
                                    <span class="caret">
                                    </span> </a>
                                
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            Category
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Brand
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Price
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">
                                    Deals
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Stores
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Contact
                                </a>
                            </li>
                        </ul>
                       
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-user">
                                    </span>
                                    Log In
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-plus">
                                    </span>
                                    Sign Up
                                </a>
                            </li>
                            <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>-->
                            <!--<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>-->
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">                      
                        <div class="panel panel-primary">
                                <div class="panel-heading">
                                    BLACK FRIDAY DEAL
                                </div>
                                <div class="panel-body">
                                    <img alt="Image" class="img-responsive" src="http://placehold.it/150x80?text=IMAGE" style="width:100%"/>
                                </div>
                                <div class="panel-footer">
                                    Buy 50 mobiles and get a gift card
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    BLACK FRIDAY DEAL
                                </div>
                                <div class="panel-body">
                                    <img alt="Image" class="img-responsive" src="http://placehold.it/150x80?text=IMAGE" style="width:100%"/>
                                </div>
                                <div class="panel-footer">
                                    Buy 50 mobiles and get a gift card
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    BLACK FRIDAY DEAL
                                </div>
                                <div class="panel-body">
                                    <img alt="Image" class="img-responsive" src="http://placehold.it/150x80?text=IMAGE" style="width:100%"/>
                                </div>
                                <div class="panel-footer">
                                    Buy 50 mobiles and get a gift card
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        BLACK FRIDAY DEAL
                                    </div>
                                    <div class="panel-body">
                                        <img alt="Image" class="img-responsive" src="http://placehold.it/150x80?text=IMAGE" style="width:100%"/>
                                    </div>
                                    <div class="panel-footer">
                                        Buy 50 mobiles and get a gift card
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        BLACK FRIDAY DEAL
                                    </div>
                                    <div class="panel-body">
                                        <img alt="Image" class="img-responsive" src="http://placehold.it/150x80?text=IMAGE" style="width:100%"/>
                                    </div>
                                    <div class="panel-footer">
                                        Buy 50 mobiles and get a gift card
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        BLACK FRIDAY DEAL
                                    </div>
                                    <div class="panel-body">
                                        <img alt="Image" class="img-responsive" src="http://placehold.it/150x80?text=IMAGE" style="width:100%"/>
                                    </div>
                                    <div class="panel-footer">
                                        Buy 50 mobiles and get a gift card
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </br>
            </div>
            <br>
                <br>




        <script src="js/jquery-2.1.4.min.js">
        </script>
        <script src="js/bootstrap.min.js">
        </script>
        <script src="js/bootstrap.js">
        </script>
        <script src="js/script.js">
        </script>

                    <script>
                        var $attribute = $('[data-smart-affix]');
$attribute.each(function(){
  $(this).affix({
    offset: {
      top: $(this).offset().top,
    }
  })
})



$(window).on("resize", function(){
  $attribute.each(function(){
    $(this).data('bs.affix').options.offset = $(this).offset().top
  })
})
                    </script>
                    <footer class="container-fluid text-center">
                        <p>
                            Online Store Copyright
                        </p>
                        <form class="form-inline">
                            Get deals:
                            <input class="form-control" placeholder="Email Address" size="50" type="email">
                                <button class="btn btn-danger" type="button">
                                    Sign Up
                                </button>
                                <p>
                                    Join with us
                                </p>
                                <div class="row">
                                    <div class="center">
                                        <div class="col-sm-4">
                                            <iframe allowtransparency="true" frameborder="0" height="65" scrolling="no" src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2FAmazon&width=78&height=65&layout=button&size=large&show_faces=true&appId" style="border:none;overflow:hidden" width="78">
                                            </iframe>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- Place this code where you want the badge to render. -->
                                            <a href="https://plus.google.com/114402400299867750494?prsrc=3" rel="publisher" style="text-decoration:none;" target="_top">
                                                <img alt="Google+" src="//ssl.gstatic.com/images/icons/gplus-32.png" style="border:0;width:32px;height:32px;"/>
                                            </a>
                                        </div>
                                        <div class="col-sm-4">
                                            <script>
                                                window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));
                                            </script>
                                            <a class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" data-size="large" href="https://twitter.com/AlibabaGroup">
                                                Follow @AlibabaGroup
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </input>
                        </form>
                    </footer>
                </br>
            </br>
        </div>
    </body>
</html>
