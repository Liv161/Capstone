<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Campaign</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif; color:black}
    body{
        width: 100%;
    }
    main{
        width: 80%;
        margin-top: 2%;
        margin-bottom: 2%;
        margin-left: 10%;
        padding: 2%;
    }
        .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }    
        
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 600px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    
    #more {display: none;}
</style>
    </head>
    <body class="w3-light-grey">
          <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="view-action_1.php">B.O.V</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li><a href="../home.php">Home</a></li>
                  <li class="active"><a href="index.php">Build Your Own</a></li>
                  <li><a href="view-action.php">Campaigns</a></li>
                  <li><a href="../vote&poll.php">Vote Now</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="../Credentials/registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="../Credentials/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  <li><a href="../Credentials/logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                </ul>
              </div>
            </div>
          </nav>
       <?php 
           include("../dbData/updateCode.php");
           include("../dbData/auth.php");    
        ?>
        <main class="w3-card w3-white">
            <h1><?php echo $result; ?></h1>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-row">
            <div class="form-group col-md-6">
                <label>First Name</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $fname;?>" required>
            </div>
            <div class="form-group col-md-6">
                <label>Last Name</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $lname;?>" required>
            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                  <label>Occupation</label>
                  <input type="text" name="occupation" class="form-control" value="<?php echo $occupation;?>" required>
                </div>
                <div class="form-group col-md-3">
                    <label>Candidate's Picture</label>
                    <input type="file" name="uploadfile" value="<?php echo $imgname;?>" />
                </div>
                <div class="form-group col-md-3">
                  <label>Party</label>
                  <select name="party" class="form-control"  required>
                      <option selected><?php echo $party;?></option>
                      <option value="fas fa-democrat fa-fw w3-margin-right w3-xxlarge w3-text-blue">Democrat</option>
                      <option value="fas fa-republican fa-fw w3-margin-right w3-xxlarge w3-text-red">Republican</option>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label>Type of Campaign</label>
                  <select name="campaign" class="form-control" required>
                      <option selected><?php echo $campaign;?></option>
                      <option value="President">Presidential</option>
                      <option value="Congress">Congressional</option>
                      <option value="Senate">Senate</option>
                      <option value="Governor">Governor</option>
                      <option value="Mayor">Mayor</option>
                      <option value="City Council">City Council</option>
                  </select>
                </div>
            </div> 
            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" name="emailC" class="form-control" value="<?php echo $emailC;?>" required>
              </div>
              <div class="form-group col-md-6">
                <label>Twitter URL</label>
                <input type="text" name="twitter" class="form-control" value="<?php echo $twitter;?>" required>
              </div>
            </div>            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>City</label>
                <input type="text" name="city" class="form-control" value="<?php echo $city;?>" required>
              </div>
              <div class="form-group col-md-6">
                <label>State</label>
                <select name="state" class="form-control"  required>
                    <option selected><?php echo $state;?></option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                  <option>...</option>
                </select>
              </div>
            </div>
            
            <div class="form-row">
             <div class="form-group col-md-6">
                 <label>Banner</label>
                 <input type="text" name="banner" class="form-control" value="<?php echo $banner;?>" required>
             </div>
             <div class="form-group col-md-6">
                <label>Slogan</label>
                <input type="text" name="slogan" class="form-control" value="<?php echo $slogan;?>" required>
             </div>
            </div>
            <div class="form-row">
          <div class="form-group col-md-6">
            <label>Biography</label>
            <textarea name="about" class="form-control" required><?php echo $about;?>"</textarea>
          </div>
          <div class="form-group col-md-6">
            <label>Notable Quote</label>
            <textarea name="quote" class="form-control" required><?php echo $quote;?></textarea>
          </div>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Day One</label>
                <label>Focus</label>
                  <select name="day_1f" class="form-control"  required>
                      <option selected><?php echo $day_1f;?></option>
                      <option value="Gun Reform">Gun Reform</option>
                      <option value="Health Care For Everyone">Health Care For Everyone</option>
                      <option value="Tax The 1%">Tax The 1%</option>
                      <option value="Student Debt Relieve">Student Debt Relieve</option>
                      <option value="Increase Teacher Salary">Increase Teacher Salary</option>
                      <option value="Re-enter Paris Agreement">Re-enter Paris Agreement</option>
                      <option value="Legalize Marijuana">Legalize Marijuana</option>
                      <option value="100% Green Energy">100% Green Energy</option>
                      <option value="Increase Funding For AI">Increase Funding For AI</option>
                      <option value="Invest In Our Infrastructure">Invest In Our Infrastructure</option>
                      <option value="New Deal With Iran">New Deal With Iran</option>
                      <option value="Restore Relationships With Alias">Restore Relationships With Alias</option>
                  </select>
              <input type="text" name=day_1s class="form-control" value="<?php echo $day_1s;?>">
            </div>
            <div class="form-group col-md-6">
                <label>1st Month</label>
                <label>Focus</label>
                <select name="month_1f" class="form-control" required>
                      <option selected><?php echo $month_1f;?></option>
                      <option value="Gun Reform">Gun Reform</option>
                      <option value="Health Care For Everyone">Health Care For Everyone</option>
                      <option value="Tax The 1%">Tax The 1%</option>
                      <option value="Student Debt Relieve">Student Debt Relieve</option>
                      <option value="Increase Teacher Salary">Increase Teacher Salary</option>
                      <option value="Re-enter Paris Agreement">Re-enter Paris Agreement</option>
                      <option value="Legalize Marijuana">Legalize Marijuana</option>
                      <option value="100% Green Energy">100% Green Energy</option>
                      <option value="Increase Funding For AI">Increase Funding For AI</option>
                      <option value="Invest In Our Infrastructure">Invest In Our Infrastructure</option>
                      <option value="New Deal With Iran">New Deal With Iran</option>
                      <option value="Restore Relationships With Alias">Restore Relationships With Alias</option>
                  </select>
              <input type="text" name="month_1s" class="form-control" value="<?php echo $month_1s;?>">
            </div>  
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>1st Year</label>
                <label>Focus</label>
                  <select name="year_1f" class="form-control" required>
                      <option selected><?php echo $year_1f;?> </option>
                      <option value="Gun Reform">Gun Reform</option>
                      <option value="Health Care For Everyone">Health Care For Everyone</option>
                      <option value="Tax The 1%">Tax The 1%</option>
                      <option value="Student Debt Relieve">Student Debt Relieve</option>
                      <option value="Increase Teacher Salary">Increase Teacher Salary</option>
                      <option value="Re-enter Paris Agreement">Re-enter Paris Agreement</option>
                      <option value="Legalize Marijuana">Legalize Marijuana</option>
                      <option value="100% Green Energy">100% Green Energy</option>
                      <option value="Increase Funding For AI">Increase Funding For AI</option>
                      <option value="Invest In Our Infrastructure">Invest In Our Infrastructure</option>
                      <option value="New Deal With Iran">New Deal With Iran</option>
                      <option value="Restore Relationships With Alias">Restore Relationships With Alias</option>
                  </select>
              <input type="text" name="year_1s" class="form-control" value="<?php echo $year_1s;?>" >
            </div>
            <div class="form-group col-md-6">
                <label>1st Term</label>
                <label>Focus</label>
                  <select name="term_1f" class="form-control" required>
                      <option selected><?php echo $term_1f;?></option>
                      <option value="Gun Reform">Gun Reform</option>
                      <option value="Health Care For Everyone">Health Care For Everyone</option>
                      <option value="Tax The 1%">Tax The 1%</option>
                      <option value="Student Debt Relieve">Student Debt Relieve</option>
                      <option value="Increase Teacher Salary">Increase Teacher Salary</option>
                      <option value="Re-enter Paris Agreement">Re-enter Paris Agreement</option>
                      <option value="Legalize Marijuana">Legalize Marijuana</option>
                      <option value="100% Green Energy">100% Green Energy</option>
                      <option value="Increase Funding For AI">Increase Funding For AI</option>
                      <option value="Invest In Our Infrastructure">Invest In Our Infrastructure</option>
                      <option value="New Deal With Iran">New Deal With Iran</option>
                      <option value="Restore Relationships With Alias">Restore Relationships With Alias</option>
                  </select>
              <input type="text" name="term_1s" class="form-control" value="<?php echo $term_1s;?>" >
            </div>  
            </div>
            <input type="submit" name="submit " class="btn btn-primary" value="Update">
        </form>
        </main>
    </body>
</html>
