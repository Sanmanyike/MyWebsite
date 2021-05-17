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
    <link rel="stylesheet" href="stylesheet.css">
    <!-- Profile icon -->
    <link rel="shortcut icon" href="includes/Myself.png" type="image/png">
    <title>Manyike San Terence</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <a class="navbar-brand a-nav" href="index.html"><img class="avatar" src="includes/Profilepic.jpg" alt="Myself">&nbsp; My Portfolio</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active a-nav" aria-current="page" href="index.html">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link a-nav" href="index.html#about">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link a-nav" href="index.html#portfolio">PORTFOLIO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link a-nav" href="index.html#pricing">PRICING</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link a-nav" href="#contacts">CONTACT</a>
                  </li>
                  <li class="nav-item">
                      <a name="login" class="nav-link a-nav" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</a>
                  </li>
                </ul>
              </div>
          </div>
        </nav>>
        </nav>
      </div>
    </div>
    <div class="project">
      <form action="Resume_review.php" method="post">
        <div class="row">
          <div class="col-12 text-center">
              <p class="display-5 heading">Create your CV here</p>
              <br><hr><br>
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-3">
            <h4 class="heading">Personal details</h4>
            <input type="text" name="name" class="form-control" placeholder="Full Name" required><br>
            <input type="text" name="surname" class="form-control" placeholder="Surname" required><br>
            <input type="text" name="job" class="form-control" placeholder="Profession" required><br>
            <h4 class="heading">Education</h4>
            <input type="text" name="qualification" class="form-control" placeholder="Qualification" required><br>
            <input type="text" name="university" class="form-control" placeholder="University" required><br>
            <input type="text" name="ucountry" class="form-control" placeholder="Country" required><br>
            <div class="row">
              <div class="col-6">
                <input type="text" name="ufrom" class="form-control" placeholder="From" required><br>
              </div>
              <div class="col-6">
                <input type="text" name="uto" class="form-control" placeholder="To" required><br>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h4 class="heading">Contacts</h4>
            <input type="text" name="phone" class="form-control" placeholder="Phone" required><br>
            <input type="text" name="email" class="form-control" placeholder="Email Address" required><br>
            <h4 class="heading">Address</h4>
            <input type="text" name="country" class="form-control" placeholder="Country" required><br>
            <input type="text" name="province" class="form-control" placeholder="Province" required><br>
            <input type="text" name="city" class="form-control" placeholder="City" required><br>
            <input type="text" name="town" class="form-control" placeholder="Town" required><br>
            <input type="text" name="code" class="form-control" placeholder="Postal code" required><br>
          </div>
          <div class="col-md-3"></div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <h4 class="heading">Profile</h4>
            <textarea name="about" class="form-control" placeholder="About Yourself" rows="3"></textarea><br>
            <h4 class="heading">Soft Skills</h4>
            <textarea name="sskill" class="form-control" placeholder="Explain your soft skills" rows="3"></textarea><br>
          </div>
          <div class="col-md-3"></div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-3">
          <h4 class="heading">Hard Skills</h4>
            <input type="text" name="hskill1" class="form-control" placeholder="1st Skill" required><br>
            <input type="text" name="hskill2" class="form-control" placeholder="2nd Skill" required><br>
            <input type="text" name="hskill3" class="form-control" placeholder="3rd Skill" required><br>
          </div>
          <div class="col-md-3">
          <h4 class="heading">Professional Experience</h4>
            <input type="text" name="etitle" class="form-control" placeholder="Job Title" required><br>
            <input type="text" name="cname" class="form-control" placeholder="Company Name" required><br>
            <h4 class="heading">Years Of Experience</h4>
            <div class="row">
              <div class="col-6">
                <input type="text" name="yfrom" class="form-control" placeholder="From" required><br>
              </div>
              <div class="col-6">
                <input type="text" name="yto" class="form-control" placeholder="To" required><br>
              </div>
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6 text-center">
            <h4 class="heading">Duties And Responsibilities</h4>
            <textarea name="duties" class="form-control" placeholder="Explain your responsibilities carried out from previous job" rows="3"></textarea><br>
            <h4 class="heading">Hobies</h4>
            <div class="row">
              <div class="col-6">
                <input type="text" name="hobie1" class="form-control" placeholder="1st Hobie" required><br>
              </div>
              <div class="col-6">
                <input type="text" name="hobie2" class="form-control" placeholder="2nd Hobie" required><br>
              </div>
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-3">
            <h4 class="heading">Reference 1</h4>
            <input type="text" name="refname1" class="form-control" placeholder="Name" required><br>
            <input type="text" name="refphone1" class="form-control" placeholder="Phone" required><br>
            <input type="text" name="refrel1" class="form-control" placeholder="Relationship" required><br>
          </div>
          <div class="col-md-3">
          <h4 class="heading">Reference 2</h4>
          <input type="text" name="refname2" class="form-control" placeholder="Name" required><br>
          <input type="text" name="refphone2" class="form-control" placeholder="Phone" required><br>
          <input type="text" name="refrel2" class="form-control" placeholder="Relationship" required><br>
          </div>
          <div class="col-md-3"></div>
        </div>
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
          <button type="submit" class="btn btn-info">Create CV</button>
          </div>
          <div class="col-3"></div>
        </div>
      </form>
    </div>
    <div class="footer">
      <div class="row enquiry">
          <div id="contacts" class="col-md-6 contacts">
              <div class="heading">
                  <p class="display-4">Location</p>
              </div>
              <p>At my core is a collection of design and development solutions that represent everything your business needs to compete in the modern marketplace.</p>
              <Address>Nizhny Novgorod(Russia)<br> Prospekt Gagarina 23<br>Nizhny Novgorod Oblast<br>603022 </Address>
              <div class="row">
                  <div class="col-3">
                  <a href="https://www.facebook.com/san.manyike"><img class="pngs" src="includes/png/007-facebook.png" alt="Facebook"></a>
              </div>
              <div class="col-3">
                  <a href="https://mobile.twitter.com/Manyikeeee"><img class="pngs" src="includes/png/008-twitter.png" alt="Twitter"></a>
              </div>
              <div class="col-3">
                  <a href="https://www.instagram.com/san_manyike/"><img class="pngs" src="includes/png/009-instagram.png" alt="instagram"></a>
              </div>
              <div class="col-3">
                  <a href="https://www.linkedin.com/comm/in/san-manyike"><img class="pngs" src="includes/png/linked.png" alt="linked in"></a>
              </div>
              </div>
          </div>
          <div class="col-md-6 chatt">
              <div class="heading">
                  <p class="display-4">Contact me</p>
              </div>
              <form action="">
                  <div class="mb-3">
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name">
                  </div>
                  <div class="mb-3">
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email">
                  </div>
                  <div class="mb-3">
                      <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Your Request" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-info">Send message</button>
              </form>
          </div>
      </div>
      <div class="row copyrights">
          <div class="col-12 align-self-center">
              Lorem, ipsum. &copy Manyike STM
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