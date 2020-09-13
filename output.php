<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Your Website</title>
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

    
        <div class="grid-container">
            <div class="item1">
                <img class="mypic" src="images/avatar.png" alt="Profile Pic">
            </div>
            <div class="item2">
                <h1><?php echo $_POST["name"]; ?></h1>
                <h4><?php echo $_POST["tagline"]; ?></h4>
                <hr class="header">
                <a href="https://www.twitter.com/<?php echo $_POST["twitter"]; ?>/">
                    <i class="fab fa-twitter social-icon"></i></a>
                    <a href="https://www.linkedin.com/in/<?php echo $_POST["linkedin"]; ?>/">
                    <i class="fab fa-linkedin social-icon"></i></a>
                    <a href="mailto:<?php echo $_POST["email"]; ?>/">
                    <i class="fas fa-envelope social-icon"></i></a>
                    <a href="https://www.github.com/<?php echo $_POST["github"]; ?>/">
                    <i class="fab fa-github social-icon"></i></a>
                   
            </div>

            <div class="item3">
                <h3>ABOUT ME<hr class="default"></h3>
                <p><?php echo $_POST["about"]; ?></p>
            </div>  

            <div class="item4">
                <h3>EDUCATION<hr class="default"></h3>
                <h5><?php echo $_POST["pgdegree"]; ?></h5>
                <h6><?php echo $_POST["pgcollege"]; ?></h6>
                <p> Relevalent CourseWork: Internet Technologies, Python Programming, Data Structures, Discrete Structures, Operating Systems,
                    Database Mangagement Systems
                </p>
                <h5><?php echo $_POST["ugdegree"]; ?></h5>
                <h6><?php echo $_POST["ugcollege"]; ?></h6>
                <p> Relevalent CourseWork: Advanced Algorithms, Software Engineering, Computer System Acrchitecture, Computer Graphics, Data Mining, Data Science
                </p>

            </div>

            

            <div class="item5">
                <h3>SKILLS<hr class="default"></h3>
                <ul>
                    <li><?php echo $_POST["skill1"]; ?></li>
                    <li><?php echo $_POST["skill2"]; ?></li>
                    <li><?php echo $_POST["skill3"]; ?></li>
                    <li><?php echo $_POST["skill4"]; ?></li>
                    <li><?php echo $_POST["skill5"]; ?></li>
                    <li><?php echo $_POST["skill6"]; ?></li>
                    <li><?php echo $_POST["skill7"]; ?></li>
                    <li><?php echo $_POST["skill8"]; ?></li>
                  </ul>

                  <h3>HOBBIES<hr class="default"></h3>
                <ul>
                    <li><?php echo $_POST["hobby1"]; ?></li>
                    <li><?php echo $_POST["hobby2"]; ?></li>
                    <li><?php echo $_POST["hobby3"]; ?></li>
                    <li><?php echo $_POST["hobby4"]; ?></li>
                  </ul>

                                  
            
            </div>


            <div class="item6">
                <h3>PROJECTS<hr class="default"></h3>
                <h5><?php echo $_POST["pname1"]; ?></h5>
                <h6><?php echo $_POST["pdescription1"]; ?></h6>
                <p> Tech Stack: <?php echo $_POST["ptechstack1"]; ?></p>

                <h5><?php echo $_POST["pname2"]; ?></h5>
                <h6><?php echo $_POST["pdescription2"]; ?></h6>
                <p> Tech Stack: <?php echo $_POST["ptechstack2"]; ?></p>

                <h5><?php echo $_POST["pname3"]; ?></h5>
                <h6><?php echo $_POST["pdescription3"]; ?></h6>
                <p> Tech Stack: <?php echo $_POST["ptechstack3"]; ?></p>

                <h5><?php echo $_POST["pname4"]; ?></h5>
                <h6><?php echo $_POST["pdescription4"]; ?></h6>
                <p> Tech Stack: <?php echo $_POST["ptechstack4"]; ?></p>
        
            </div>

    

        </div>


</body>
</html>
