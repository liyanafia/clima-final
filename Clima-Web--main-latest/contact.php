<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/6207f2cb43.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>

<body class="contactInfo-body">

  <section id="title">
    <div class="container-fluid" id="this">
      <nav class="navbar navbar-expand-lg navbar-dark" id="big">
        <a class="navbar-brand" href="">ClimaWeb</a>
        <img src="https://media4.giphy.com/media/SvWMDP7gogN0TCVoSQ/200w.webp?cid=ecf05e471wkagifpk4a2hn2ew595bfx3ri6q4wjuo3sfktr7&rid=200w.webp" alt="justagif" height="80px" width="80px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contact.php"><span class="highlight">Contact</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pricing.php">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="facts.php">Extras</a>
            </li>
          </ul>
        </div>
      </nav>
  </section>


  <div class="regform">
       <h1>
Contact Us</h1>
</div>

<hr>


  <div class="box">
    <form class="form-message" action="insert.php" method="post" >
      <div id="name">

      <h2 class="name">
        Name </h2>
      <input class="firstname" type="text" name="fname"><br>
      <label class="firstlabel">first name</label>
      <input class="lastname" type="text" name="lname"><br>
      <label class="lastlabel">last name</label>
  </div>
  <h2 class="name">
    Email</h2>
  <input class="email" type="email" name="email">

  <h2 class="name">
Message </h2>
<input class="message" type="text" name="messages">

  <button class="button1" type="submit">SUBMIT</button>
  </form>
  </div>
  <hr>



</div>
</body>
<div class="container">
<div class="bottom-container-1">

    <p>Address- Malleshwaram ,Bangalore-08</p>
    <p>Phone number-3432355</p>
    <p>Email- climaweather06@gmail.com</p>

</div>
<div class="bottom-container">
<p class="copyrightmsg">© 2018 ClimaWeb.</p>
</div>


</div>
</html>
