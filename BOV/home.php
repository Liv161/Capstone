<!DOCTYPE html>
<html>
<title>Build Or Vote</title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>     
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif; color:black}
.navbar {margin-bottom: 0;border-radius: 0; }    
</style>

<!-- JavaScript for Countdown--> <script>
// Set the date we're counting down to
var countDownDate = new Date("Sep 22, 2019 24:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  
  //message with countdown
  var message = "Countdown To Next Polling Questions";
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="poll_time"
  document.getElementById("poll_time").innerHTML = message + " " + days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("poll_time").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<body class="w3-light-grey">
    <?php 
        
    ?>
  <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="CRUD/view-action_1.php">B.O.V</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                   <li class="active"><a href="home.php">Home</a></li>
                  <li><a href="CRUD/index.php">Build Your Own</a></li>
                  <li><a href="CRUD/view-action.php">Campaigns</a></li>
                  <li><a href="vote&poll.php">Vote Now</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="Credentials/registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="Credentials/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  <li><a href="Credentials/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>                  
                </ul>
              </div>
            </div>
         </nav>
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="Uploads/bovimg.png" alt="" style="width:100%">
          <div class="w3-display-bottomright w3-container w3-text-black">
            <h2>BUILD OR VOTE</h2>
          </div>
        </div>
          <div class="w3-container" style="text-align:center">
            <div>
            <h1>Build A Campaign</h1>
            <a href="CRUD/index.php"><img src="Uploads/build.gif" alt="" style="width:100%"/></a>
            </div>
            <hr>
          <br>
          <div>
          <h1>Vote Now!</h1>
          <a href="vote&poll.php"><img src="Uploads/2ndgif.gif" alt=""style="width:75%;height: 75%"/></a>
            </div>
          <hr>
          <br>
        </div>
      </div><br>
    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-padding-16" style="text-align:center"><i class="fa fa-bar-chart fa-fw w3-margin-right w3-xxlarge w3-text-black"></i><b>B.O.V Polling Results</b></h2>
          <p id="poll_time" style="text-align:center"></p>
      </div>
        <div class="w3-container w3-card w3-white w3-margin-bottom">
        <hr>
        <div class="w3-container">
          <h5><b>In 2020 what party would you rather hold the White House?</b></h5>
          <!--Poll # 1 --> <editor-fold>
                    <?php
            //get content of textfile
            $filename = "Poll_1/poll_1_result.txt";
            $content = file($filename);

            //put content in array
            $array = explode("||", $content[0]);
            $democrat = $array[0];
            $republican = $array[1];
            $other = $array[2];
            ?>
<!--            <h2>Result:</h2>-->
            <table>
            <tr>
            <td>Democrat:</td>
            <td>
                <img src="Poll_1/poll.gif"
            width='<?php echo(100*round($democrat/($republican+$democrat+$other),3)); ?>'
            height='18'>
            <?php echo round((100*round($democrat/($republican+$democrat+$other),3)),1); ?>%
            </td>
            </tr>
            <tr>
            <td>Republican:</td>
            <td>
            <img src="Poll_1/poll.gif"
            width='<?php echo(100*round($republican/($republican+$democrat+$other),3)); ?>'
            height='18'>
            <?php echo round((100*round($republican/($republican+$democrat+$other),3)),1); ?>%
            </td>
            </tr>
            <tr>
            <td>Other:</td>
            <td>
            <img src="Poll_1/poll.gif"
            width='<?php echo(100*round($other/($republican+$democrat+$other),3)); ?>'
            height='18'>
            <?php echo round((100*round($other/($republican+$democrat+$other),3)),1); ?>%
            </td>
            </tr>
            </table>
            </editor-fold> 
          <hr>
        </div>
        </div>
        <div class="w3-container w3-card w3-white w3-margin-bottom">
            <hr>
        <div class="w3-container">
          <h5><b>In a field as crowded as the democrats, who would you want to see win the primary election?</b></h5>
          <!--Poll # 2 --> <editor-fold>
                            <?php
                //get content of textfile
                $filename = "Poll_2/poll_2_result.txt";
                $content = file($filename);

                //put content in array
                $array = explode("||", $content[0]);
                $biden = $array[0];
                $harris = $array[1];
                $sanders = $array[2];
                $warren = $array[3];
                $booker = $array[4];
                $beto = $array[5];
                $yang = $array[6];
                $other2 = $array[7];
                ?>
<!--                <h2>Result:</h2>-->
                <table>
                <tr>
                <td>Joe Biden:</td>
                <td>
                    <img src="Poll_2/poll.gif"
                width='<?php echo(100*round($biden/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)); ?>'
                height='18'>
                <?php echo round((100*round($biden/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)),1); ?>%
                </td>
                </tr>
                <tr>
                <td>Kamala Harris:</td>
                <td>
                <img src="Poll_2/poll.gif"
                width='<?php echo(100*round($harris/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)); ?>'
                height='18'>
                <?php echo round((100*round($harris/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)),1); ?>%
                </td>
                </tr>
                <tr>
                <td>Bernie Sanders:</td>
                <td>
                <img src="Poll_2/poll.gif"
                width='<?php echo(100*round($sanders/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)); ?>'
                height='18'>
                <?php echo round((100*round($sanders/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)),1); ?>%
                </td>
                </tr>
                <tr>
                <td>Elizabeth Warren:</td>
                <td>
                <img src="Poll_2/poll.gif"
                width='<?php echo(100*round($warren/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)); ?>'
                height='18'>
                <?php echo round((100*round($warren/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)),1); ?>%
                </td>
                </tr>
                <tr>
                <td>Corey Booker:</td>
                <td>
                <img src="Poll_2/poll.gif"
                width='<?php echo(100*round($booker/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)); ?>'
                height='18'>
                <?php echo round((100*round($booker/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)),1); ?>%
                </td>
                </tr>
                <tr>
                <td>Beto O'rourke:</td>
                <td>
                <img src="Poll_2/poll.gif"
                width='<?php echo(100*round($beto/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)); ?>'
                height='18'>
                <?php echo round((100*round($beto/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)),1); ?>%
                </td>
                </tr>
                <tr>
                <td>Andrew Yang:</td>
                <td>
                <img src="Poll_2/poll.gif"
                width='<?php echo(100*round($yang/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)); ?>'
                height='18'>
                <?php echo round((100*round($yang/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)),1); ?>%
                </td>
                </tr>
                <tr>
                <td>Other:</td>
                <td>
                <img src="Poll_2/poll.gif"
                width='<?php echo(100*round($other2/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)); ?>'
                height='18'>
                <?php echo round((100*round($other2/($biden+$harris+$sanders+$warren+$booker+$beto+$yang+$other2),8)),1); ?>%
                </td>
                </tr>
                </table>
                </editor-fold>
          <hr>
        </div>
        </div>
        <div class="w3-container w3-card w3-white w3-margin-bottom">
            <hr>
        <div class="w3-container">
          <h5><b>Is the party of "Lincoln" dead?</b></h5>
          <!--Poll # 3 --> <editor-fold>
                                    <?php
                            //get content of textfile
                            $filename = "Poll_3/poll_3_result.txt";
                            $content = file($filename);

                            //put content in array
                            $array = explode("||", $content[0]);
                            $same = $array[0];
                            $more = $array[1];
                            $less = $array[2];
                            $trp = $array[3];
                        ?>
<!--                        <h2>Result:</h2>-->
                        <table>
                            <tr>
                            <td>Exactly the same:</td>
                            <td>
                                <img src="Poll_3/poll.gif"
                            width='<?php echo(100*round($same/($same+$more+$less+$trp),4)); ?>'
                            height='18'>
                            <?php echo round((100*round($same/($same+$more+$less+$trp),4)),1); ?>%
                            </td>
                            </tr>
                            <tr>
                            <td>More conservative:</td>
                            <td>
                            <img src="Poll_3/poll.gif"
                            width='<?php echo(100*round($more/($same+$more+$less+$trp),4)); ?>'
                            height='18'>
                            <?php echo round((100*round($more/($same+$more+$less+$trp),4)),1); ?>%
                            </td>
                            </tr>
                            <tr>
                            <td>Less conservative:</td>
                            <td>
                            <img src="Poll_3/poll.gif"
                            width='<?php echo(100*round($less/($same+$more+$less+$trp),4)); ?>'
                            height='18'>
                            <?php echo round((100*round($less/($same+$more+$less+$trp),4)),1); ?>%
                            </td>
                            </tr>
                            <tr>
                            <td>Party of Trump:</td>
                            <td>
                            <img src="Poll_3/poll.gif"
                            width='<?php echo(100*round($trp/($same+$more+$less+$trp),4)); ?>'
                            height='18'>
                            <?php echo round((100*round($trp/($same+$more+$less+$trp),4)),1); ?>%
                            </td>
                            </tr>
                        </table>
                            </editor-fold>
          <hr>
        </div>
      </div>
       
      <div class="w3-container w3-card w3-white w3-margin-bottom">
          <hr>
        <div class="w3-container">
          <h5><b>Our next president's 1st term's main focus should be?</b></h5>
           <!--Poll # 4 --> <editor-fold>
                       <?php
                //get content of textfile
                $filename = "Poll_4/poll_4_result.txt";
                $content = file($filename);

                //put content in array
                $array = explode("||", $content[0]);
                $debt = $array[0];
                $reform = $array[1];
                $health = $array[2];
                $climate = $array[3];
                ?>
<!--                <h2>Result:</h2>-->
                <table>
                <tr>
                <td>US Student Debt:</td>
                <td>
                <img src="Poll_4/poll.gif"
                width='<?php echo(100*round($debt/($debt+$reform+$health+$climate),4)); ?>'
                height='18'>
                <?php echo round((100*round($debt/($debt+$reform+$health+$climate),4)),1); ?>%
                </td>
                </tr>
                <tr>
                <td>Gun Reform:</td>
                <td>
                <img src="Poll_4/poll.gif"
                width='<?php echo(100*round($reform/($debt+$reform+$health+$climate),4)); ?>'
                height='18'>
                <?php echo round((100*round($reform/($debt+$reform+$health+$climate),4)),1); ?>%
                </td>
                </tr>
                <tr>
                <td>Health Care:</td>
                <td>
                <img src="Poll_4/poll.gif"
                width='<?php echo(100*round($health/($debt+$reform+$health+$climate),4)); ?>'
                height='18'>
                <?php echo round((100*round($health/($debt+$reform+$health+$climate),4)),1); ?>%
                </td>
                </tr>
                <tr>
                <td>Climate Control:</td>
                <td>
                <img src="Poll_4/poll.gif"
                width='<?php echo(100*round($climate/($debt+$reform+$health+$climate),4)); ?>'
                height='18'>
                <?php echo round((100*round($climate/($debt+$reform+$health+$climate),4)),1); ?>%
                </td>
                </tr>
                </table>
                </editor-fold> 
          <hr>
        </div>
      </div>
        <div class="w3-container w3-card w3-white w3-margin-bottom">
            <hr>
        <div class="w3-container">
          <h5><b>Choose your age group?</b></h5>
           <!--Poll # 5 --> <editor-fold>
                                <?php
                            //get content of textfile
                            $filename = "Poll_5/poll_5_result.txt";
                            $content = file($filename);

                            //put content in array
                            $array = explode("||", $content[0]);
                            $age18 = $array[0];
                            $age25 = $array[1];
                            $age30 = $array[2];
                            $age35 = $array[3];
                        ?>

<!--                        <h2>Result:</h2>-->
                        <table>
                        <tr>
                        <td>18 - 24:</td>
                        <td>
                            <img src="Poll_5/poll.gif"
                        width='<?php echo(100*round($age18/($age18+$age25+$age30+$age35),4)); ?>'
                        height='18'>
                        <?php echo round((100*round($age18/($age18+$age25+$age30+$age35),4)),1); ?>%
                        </td>
                        </tr>
                        <tr>
                        <td>25 - 29:</td>
                        <td>
                            <img src="Poll_5/poll.gif"
                        width='<?php echo(100*round($age25/($age18+$age25+$age30+$age35),4)); ?>'
                        height='18'>
                        <?php echo round((100*round($age25/($age18+$age25+$age30+$age35),4)),1); ?>%
                        </td>
                        </tr>
                        <tr>
                        <td>30 - 34:</td>
                        <td>
                            <img src="Poll_5/poll.gif"
                        width='<?php echo(100*round($age30/($age18+$age25+$age30+$age35),4)); ?>'
                        height='18'>
                        <?php echo round((100*round($age30/($age18+$age25+$age30+$age35),4)),1); ?>%
                        </td>
                        </tr>
                        <tr>
                        <td>35 - Older:</td>
                        <td>
                            <img src="Poll_5/poll.gif"
                        width='<?php echo(100*round($age35/($age18+$age25+$age30+$age35),4)); ?>'
                        height='18'>
                        <?php echo round((100*round($age35/($age18+$age25+$age30+$age35),4)),1); ?>%
                        </td>
                        </tr>
                        </table>
                        </editor-fold>
          <hr>
        </div>
        </div>
        <div class="w3-container w3-card w3-white w3-margin-bottom">
            <hr>
        <div class="w3-container">
          <h5><b>Assuming Joe Biden wins the democratic primary and Donald Trump does not get impeached, who would you choose?</b></h5>
          <!--Poll # 6 --> <editor-fold>
                       <?php
                            //get content of textfile
                            $filename = "Poll_6/poll_6_result.txt";
                            $content = file($filename);

                            //put content in array
                            $array = explode("||", $content[0]);
                            $joe = $array[0];
                            $don = $array[1];
                        ?>
<!--                        <h2>Result:</h2>-->
                        <table>
                            <tr>
                            <td>Joe Biden:</td>
                            <td>
                                <img src="Poll_6/poll.gif"
                            width='<?php echo(100*round($joe/($joe+$don),2)); ?>'
                            height='18'>
                            <?php echo round((100*round($joe/($joe+$don),2)),1); ?>%
                            </td>
                            </tr>
                            <tr>
                            <td>Donald Trump:</td>
                            <td>
                                <img src="Poll_6/poll.gif"
                            width='<?php echo(100*round($don/($joe+$don),2)); ?>'
                            height='18'>
                            <?php echo round((100*round($don/($joe+$don),2)),1); ?>%
                            </td>
                            </tr>
                        </table>
                        </editor-fold>
          <hr>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-center w3-margin-top" style="background-color:#000000;color:lightgrey">
  <p>Find me on social media.</p>
  <a class="fa fa-facebook-official w3-hover-opacity" href="http://facebook.com" target="blank"></a>
  <a class="fa fa-instagram w3-hover-opacity" href="http://instagram.com" target="blank"></a>
  <a class="fa fa-twitter w3-hover-opacity" href="http://twitter.com" target="blank"></a>
  <p>&copy;B.O.V 2019</p>
</footer>

</body>
</html>