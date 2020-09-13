<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Resume</title>
<link rel="stylesheet" href="css/styles.css">

 <!-- Bootstrap-->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <!-- Icons -->
 <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body >
    
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
    <h4> Fill Information for your website ;)</h4>
    <br>
<form action="output.php" method="post">

  <div class="form-group">
  <h4>Personal Details</h4>
    <hr>
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="Enter Name in capital letters" name="name">
  </div>

  <div class="form-group">
  <label>TagLine</label>
    <input type="text" class="form-control"  placeholder="" name="tagline">
  </div>

  <div class="form-group">
    <label>Email Address</label>
    <input type="text" class="form-control"  placeholder="" name="email">
    </div>

  <div class="form-group">
    <label>About You</label>
    <input type="text" class="form-control"  placeholder="" name="about">
    </div>

    <h6>Social Media Contact</h6>
    <div class="form-group">
    <label>LinkedIn</label>
    <input type="text" class="form-control"  placeholder="Write after https://www.linkedin.com/ " name="linkedin">
    </div>

    <div class="form-group">
    <label>Twitter</label>
    <input type="text" class="form-control"  placeholder="Write after https://www.twitter.com/" name="twitter">
    </div>

    <div class="form-group">
    <label>GitHub</label>
    <input type="text" class="form-control"  placeholder="Write after https://www.github.com/" name="github">
    </div>


    
    <h4>Education Details</h4>
    <hr>
    <h6>Post Graduation Course Details</h6>

    <div class="form-group">
  <label>Degree</label>
    <input type="text" class="form-control"  placeholder="" name="pgdegree">
  </div>

  <div class="form-group">
    <label>About You</label>
    <input type="text" class="form-control"  placeholder="" name="coursework1">
    </div>

  <div class="form-group">
  <label>Relevant CourseWork</label>
    <input type="text" class="form-control"  placeholder="" name="pgcollege">
  </div>

  <h6>Graduation Course Details</h6>
  <div class="form-group">
  <label>Degree</label>
    <input type="text" class="form-control"  placeholder="" name="ugdegree">
  </div>

  <div class="form-group">
  <label>College</label>
    <input type="text" class="form-control"  placeholder="" name="ugcollege">
  </div>

  <div class="form-group">
    <label>Relevant CourseWork</label>
    <input type="text" class="form-control"  placeholder="" name="coursework2">
    </div>


  <h4>Skills</h4>
    <hr>

    <div class="form-row">
    <div class="col">
    
      <input type="text" class="form-control" placeholder="1. " name="skill1">
    </div>
    <div class="col">
  
      <input type="text" class="form-control" placeholder="2. " name="skill2">
    </div>
  </div>
<br>
  <div class="form-row">
    <div class="col">
   
      <input type="text" class="form-control" placeholder="3. " name="skill3">
    </div>
    <div class="col">
   
      <input type="text" class="form-control" placeholder="4. " name="skill4">
    </div>
  </div>
<br>
  <div class="form-row">
    <div class="col">
    
      <input type="text" class="form-control" placeholder="5. " name="skill5">
    </div>
    <div class="col">
   
      <input type="text" class="form-control" placeholder="6. " name="skill6">
    </div>
  </div>
<br>
  <div class="form-row">
    <div class="col">

      <input type="text" class="form-control" placeholder="7. " name="skill7">
    </div>
    <div class="col">
   
      <input type="text" class="form-control" placeholder="8. " name="skill8">
    </div>
  </div>
<br>
  <h4>Hobbies</h4>
    <hr>

    <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="1. " name="hobby1">
    </div>
    <div class="col">
   
      <input type="text" class="form-control" placeholder="2. " name="hobby2">
    </div>
  </div>
<br>
  <div class="form-row">
    <div class="col">

      <input type="text" class="form-control" placeholder="3. " name="hobby3">
    </div>
    <div class="col">
   
      <input type="text" class="form-control" placeholder="4. " name="hobby4">
    </div>
  </div>
<br>

<h4>Project Details</h4>
    <hr>
    <!-- project1111111111111111111 -->
    <h6>Project One</h6>
    <div class="form-group">
  <div class="form-row">
    <div class="col">

    <label>Name</label>
    <input type="text" class="form-control"  placeholder="" name="pname1">
    </div>
    <div class="col">
    <label>Description/ TagLine</label>
    <input type="text" class="form-control"  placeholder="" name="pdescription1">
    </div>
  </div>
<br>
  <div class="form-group">
  <label>Tech Stack</label>
    <input type="text" class="form-control"  placeholder=" Write comma seperated values" name="ptechstack1">
  </div>

   <!-- project222222222222222222222222 -->
   <br>
   <h6>Project Two</h6>
    <div class="form-group">
  <div class="form-row">
    <div class="col">

    <label>Name</label>
    <input type="text" class="form-control"  placeholder="" name="pname2">
    </div>
    <div class="col">
    <label>Description/ TagLine</label>
    <input type="text" class="form-control"  placeholder="" name="pdescription2">
    </div>
  </div>
<br>
  <div class="form-group">
  <label>Tech Stack</label>
    <input type="text" class="form-control"  placeholder=" Write comma seperated values" name="ptechstack2">
  </div>

   <!-- project333333333333333333333333333 -->
   <br>
   <h6>Project Three</h6>
    <div class="form-group">
  <div class="form-row">
    <div class="col">

    <label>Name</label>
    <input type="text" class="form-control"  placeholder="" name="pname3">
    </div>
    <div class="col">
    <label>Description/ TagLine</label>
    <input type="text" class="form-control"  placeholder="" name="pdescription3">
    </div>
  </div>
<br>
  <div class="form-group">
  <label>Tech Stack</label>
    <input type="text" class="form-control"  placeholder=" Write comma seperated values" name="ptechstack3">
  </div>

   <!-- project44444444444444444444444444444 -->
   <br>
   <h6>Project Four</h6>
    <div class="form-group">
  <div class="form-row">
    <div class="col">

    <label>Name</label>
    <input type="text" class="form-control"  placeholder="" name="pname4">
    </div>
    <div class="col">
    <label>Description/ TagLine</label>
    <input type="text" class="form-control"  placeholder="" name="pdescription4">
    </div>
  </div>
<br>
  <div class="form-group">
  <label>Tech Stack</label>
    <input type="text" class="form-control"  placeholder=" Write comma seperated values" name="ptechstack4">
</div>
    <div class="col-lg-2"></div>
  </div>

<br>
<h6>You are just one click away from your personal website.</h6>

  <button type="submit" class="btn btn-primary">Go On!</button>
</form>
</div>

</body>
</html>
