<!--
REQUEST URI
GET https://api.carepass.com/good-rx-api/drugprices/low?

Sample response header
{
    "X-Mashery-Responder": "mashery-web6-atl.mashery.com",
    "X-Mashery-Error-Code": "ERR_403_DEVELOPER_INACTIVE",
    "Content-Type": "application/json",
    "Date": "Wed, 06 Mar 2013 17:21:11 GMT",
    "Server": "Mashery Proxy",
    "Content-Length": "58"
}

Sample response body
{
    "error": {
        "code": 403,
        "message": "Developer Inactive"
    }
}
{
    "X-Mashery-Responder": "mashery-web6-atl.mashery.com",
    "Date": "Wed, 06 Mar 2013 13:09:11 GMT",
    "Server": "IBM_HTTP_Server",
    "Keep-Alive": "timeout=15, max=100",
    "Content-Type": "application/json",
    "Transfer-Encoding": "chunked"
}

[{
    "brand": ["klonopin"],
    "generic": ["clonazepam"],
    "display": "Klonopin (clonazepam)",
    "form": "tablet",
    "dosage": "2mg",
    "quantity": "30",
    "price": ["100.3912"],
    "url": "https://www.goodrx.com/klonopin?grx_ref=mobile",
    "manufacturer": "brand",
    "mobileUrl": "http://m.goodrx.com/?grx_ref=mobile#drug/klonopin/tablet"
}]
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MyBestRx - Web Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.html"><img src="img/trophy_single.png" alt="MyBestRx" title="MyBestRx" width="30" height="30" /></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Send Rx<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Check-In</a></li>
                  <li><a href="#">Questions to ask</a></li>
                  <li><a href="aetna_api_form.html">Enter Prescription</a></li>
                  <li><a href="#">Scan Prescription</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">More</li>
                  <li><a href="#">Notes</a></li>
                  <li><a href="#">Schedule</a></li>
                  <li><a href="#">Rx Deals</a></li>
                </ul>
              </li>
              <li class="active"><a href="#">About</a></li>
              <li><a href="#about">Help</a></li>
              <li><a href="#contact">Privacy</a></li>
              
            </ul>
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">


      <h1>Here are your Best Rx</h1>
      <?php
      foreach ($name)
      {
      "<p>" $manufacturer "</p>"
      "<p> Name: " echo $_POST["name"]; "</p>"
      "<p> Price: " echo $_POST["price"]; "</p>"
      "<p> Pharmacy: " echo $location . "</p>";
      }
      ?>


      <footer>
        <p>&copy; MyBestRx 2013</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
