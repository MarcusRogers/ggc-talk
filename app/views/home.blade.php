<!DOCTYPE html>
<html>
  <head>
    <title>ggc-talk</title>
    <link rel="shortcut icon" href="{{ asset('img/ggctalk-small.png'); }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css'); }}" rel="stylesheet"> 
    <script src="{{ asset('js/jquery-2.0.3.min.js'); }}"></script>
    <script src="{{ asset('js/bootstrap.min.js'); }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <!-- twitter bootstrap sample code  http://getbootstrap.com/examples/starter-template/# -->
  <body>
    <div class="container">
    <div class="navbar navbar-ggc navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GGC Talk</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">App 1</a></li>
            <li><a href="#about">App 2</a></li>
            <li><a href="#about">App 3</a></li>
            <li><a href="#about">About</a></li>
            <li class="dropbdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 Developers
              </a>
              <ul class="dropdown-menu">
                <li><a href="http://168.28.21.90:1080/" target="_blank">Redmine</a></li>
                <li><a href="https://github.com/ggc-itec/ggc-talk" target="_blank">Github</a></li>              
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
 
    <div class="jumbotron">
      <h2>Quote of the Day</h2> 
      <p>
      <?php 
        $quotes = DB::table('quotes')->get();
        $num = sizeof($quotes); 
        $rand = rand(1,$num-1);
         
        echo $quotes[$rand]->quote . '   </br>-' . $quotes[$rand]->name ;
      ?>
      </p>
    </div>

    </div>
  </body>

</html>

