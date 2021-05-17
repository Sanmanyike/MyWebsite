<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Stylesheet link -->
    <link rel="stylesheet" href="cvstylesheet.css">
    <!-- Profile icon -->
    <link rel="shortcut icon" href="includes/Myself.png" type="image/png">
    <title>Manyike San Terence</title>
</head>
<body onload="myDownload()">

  <?php
    //Getting the variables from user input
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $job = $_POST['job'];
    $qualification = $_POST['qualification'];
    $university = $_POST['university'];
    $ucountry = $_POST['ucountry'];
    $ufrom = $_POST['ufrom'];
    $uto = $_POST['uto'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $province = $_POST['province'];
    $town = $_POST['town'];
    $city = $_POST['city'];
    $code = $_POST['code'];
    $about = $_POST['about'];
    $sskill = $_POST['sskill'];
    $hskill1 = $_POST['hskill1'];
    $hskill2 = $_POST['hskill2'];
    $hskill3 = $_POST['hskill3'];
    $etitle = $_POST['etitle'];
    $cname = $_POST['cname'];
    $yfrom = $_POST['yfrom'];
    $yto = $_POST['yto'];
    $duties = $_POST['duties'];
    $hobie1 = $_POST['hobie1'];
    $hobie2 = $_POST['hobie2'];
    $refname1 = $_POST['refname1'];
    $refphone1 = $_POST['refphone1'];
    $refrel1 = $_POST['refrel1'];
    $refname2 = $_POST['refname2'];
    $refphone2 = $_POST['refphone2'];
    $refrel2 = $_POST['refrel2'];
  ?>
<div  class="container-fluid">
  <div class="row">
    <div class="col-4 text-center resume_details">
      <div>
        <h4>Contacts</h4>
        <p><?php echo $phone ?></p>
        <p><?php echo $email ?></p>
      </div>
      <div class="pdata">
        <h4>Address</h4>
        <p><?php echo $country." ".$province ?></p>
        <p><?php echo $city." ".$town ?></p>
        <p><?php echo $code ?></p>
      </div>
      <div class="pdata">
        <h4>Education</h4>
        <p><?php echo $qualification ?></p>
        <p><?php echo $university ?></p>
        <p><?php echo $ucountry ?></p>
        <p><?php echo $ufrom.' - '.$uto ?></p>
      </div>
      <div class="pdata">
        <h4>Hard Skills</h4>
        <p><?php echo $hskill1 ?></p>
        <p><?php echo $hskill2 ?></p>
        <p><?php echo $hskill3 ?></p>
      </div>
      <div class="pdata">
      <h4>Hobies</h4>
        <p><?php echo $hobie1 ?></p>
        <p><?php echo $hobie2 ?></p>
      </div><br>
    </div>
    <div class="col-8 text-center resume_profile">
      <div>
        <h2><?php echo $name.' '.$surname ?></h2>
        <h3><?php echo $job ?></h3>
      </div>
      <div class="pdata">
        <h4>Profile</h4>
        <p><?php echo $about ?></p>
      </div>
      <div class="pdata">
        <h4>Soft Skills</h4>
        <p><?php echo $sskill ?></p>
      </div>
      <div class="pdata">
        <h4>Professional Experience</h4>
        <p><?php echo $etitle ?></p>
        <p><?php echo $cname ?></p>
        <p><?php echo $yfrom.' - '.$yto ?></p>
      </div>
      <div class="pdata">
        <div class="pdata">
          <h4>References</h4>
          <p><?php echo $refname1 ?></p>
          <p><?php echo $refphone1 ?></p>
          <p><?php echo $refrel1 ?></p>
        </div>
        <div class="pdata">
          <p><?php echo $refname2 ?></p>
          <p><?php echo $refphone2 ?></p>
          <p><?php echo $refrel2 ?></p>
        </div>
        <input type="button" onclick="window.print()" class="btn btn-info" value="Download CV">
      </div>
    </div>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="jquery.js"></script>
  <script src="javascript.js"></script>
</body>
</html>