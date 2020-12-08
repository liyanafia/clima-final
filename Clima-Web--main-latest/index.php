<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClimaWeb</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="icon" href="favicon1.ico">
  <link rel="stylesheet" href="css\styles.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/6207f2cb43.js" crossorigin="anonymous"></script>

<body>

  <section id="title">



    <div class="container-fluid" id="this">

      <nav class="navbar navbar-expand-lg navbar-dark" id="big">
        <a class="navbar-brand" href="index.php">ClimaWeb</a>
        <img src="https://media4.giphy.com/media/SvWMDP7gogN0TCVoSQ/200w.webp?cid=ecf05e471wkagifpk4a2hn2ew595bfx3ri6q4wjuo3sfktr7&rid=200w.webp" alt="justagif" height="80px" width="80px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php"><span class="highlight">Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pricing.php">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fact.php">Extras</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- API OPENWEATHER -->





      <!-- Title -->
      <div class="row" id="someNotes">


        <div class="col-lg-6">
          <h1 id="h1">Accurate weather information anytime and anywhere.</h1>
          <button type="button" class="btn btn-dark btn-lg Download-Button"><i class="fa fa-apple" aria-hidden="true"></i> Download</button>
          <button type="button" class="btn btn-light btn-lg Download-Button"><i class="fab fa-google-play"></i> Download</button>
        </div>
        <div class="col-lg-6 p">
          <img class="title-image" src="images\5.webp" width="480px" height="480px" alt="iphone-mockup">
        </div>
      </div>
  </section>
  <div class="weather-forcast">
    <form action="" id="search-form">
      <input type="search" placeholder="Enter City Name" id="search-input" name="plc" required autocomplete="off">
      <br>

      <button type="submit" name="submit" id="search-button" class="searching" onclick="myfunction()">Search</button>


    </form>



    <main id="app-container">
      <div id="location">
        <p>-------</p>
      </div>
      <div id="temp">
        <img id="temp-icon" src="./icons/sun.svg" alt="">
        <p><span id="temp-value">-----</span> <span id="temp-unit">&#176c</span> </p>
      </div>

      <div id="climate">
        <p>------</p>
      </div>
    </main>
    <script src="main.js"></script>
  </div>
  <div class='recently-searched'>
    <?php
    echo  "<br>";
    echo  "<br>";
    echo  "<br>";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "checkedplaces";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT DISTINCT * FROM LOCATION ORDER BY PLACE DESC;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<div class=\"wrong\"> RECENTLY SEARCHED  :  </div>";

      while ($row = $result->fetch_assoc()) {
        echo  strtoupper($row["PLACE"]) . ",  ";

      }
    } else {
      echo '
<p color="white" class="recently-searched">NO RECENTLY SEARCHED PLACES</p>';
    }
    $conn->close();
    ?>

  </div>


  <div class="bottom-container">
    <a class="footer-link" href="https://www.linkedin.com/search/results/all/?keywords=weather%20company&origin=RELATED_SEARCH_FROM_SRP">LinkedIn</a>
    <a class="footer-link" href="https://twitter.com/hashtag/weather">Twitter</a>
    <a class="footer-link" href="https://www.facebook.com/searchweather/">Facebook</a>
    <p class="copyrightmsg">© 2018 ClimaWeb.</p>
  </div>
  <script>
    function myfunction() {
      var s = document.getElementById("search-input").value;
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {


        }

      };
      xhttp.open("GET", "connect.php?plc=" + s, true);
      xhttp.send();
    }
  </script>


</body>

</html>
