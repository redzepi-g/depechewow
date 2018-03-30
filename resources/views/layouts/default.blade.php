<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Contrail+One|Russo+One" rel="stylesheet"> 
    
    <!-- utility style -->
    <link rel="stylesheet" href="{{asset('css/utility.css')}}" />
    <!-- mainStyle -->
    <link rel="stylesheet" href="{{asset('css/mainStyle.css')}}" />

    <title>Depeche-WoW 2017-2018</title>
  </head>
  <body>


    <div class="container-fluid">


      <div class="row"> <!-- main row start -->
        <div class="col-xs-12 col-sm-12 col-lg-12 mx-auto extra-padding-50" id="headerPanel"> <!-- main col start -->
          
          <div class="row"> <!-- nav -->
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="nav-link">
                  <a href="#">Home</a>
                </div>
                <div class="nav-link">
                  <a href="#">Socials</a>
                </div>
                <div class="nav-link">
                  <a href="#">Mithicc Raiders</a>
                </div>
                <div class="nav-link">
                  <a href="#">Community Guidelines</a>
                </div>
            </div> 
          </div><!-- end nav-->
          <hr style="one"/>
            <div class="text-center extra-padding-50"> <!--center image-->
                <img src="{{asset('img/depecheLogo.png')}}" class="img img-fluid" alt="depeche logo"/>
                <br/>
                <p class="guild-font font-italic">&lt;Depeche&gt; has been founded on January 10th 2017</p>
            </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 extra-padding-25">
                <h3 class="text-center guild-font">&lt;Depeche&gt; EU - Stormscale</h3>
            </div>
        </div>
          
        
        </div> <!-- main col end -->
    </div> <!-- main row end -->

      @yield('content')

      <div class="row"> <!-- footer row -->
          <div class="col-xs-12 col-sm-12 col-lg-12 mx-auto extra-padding-25">
            <h1>I am footer.</h1>
          </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>