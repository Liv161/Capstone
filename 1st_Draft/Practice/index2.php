<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="#" method="post">
                       
            <label>Name of Candidate</label><br>
            <input type="text" name="fname" placeholder="First">
            <input type="text" name="lname" placeholder="Last">
            <br>
            
            <label>Banner</label><br>
            <input type="text" name="banner" placeholder="Banner over picture">
            <br>
            
            <label>Type of Campaign</label><br>
            <select name="campaign">
                <option value="">Select</option>
                <option value="President">Presidential</option>
                <option value="Senate">Senate</option>
                <option value="Congress">Congressional</option>
            </select>
            <br>
            
            <label>Slogan</label><br>
            <input type="text" cols="50" name="slogan" placeholder="Slogan">
            <br>
            
            <label>About</label><br>
            <textarea rows="4" cols="50" name="about" placeholder="About the candidate..."></textarea>
            <br>
            
            <label>Notable Quote</label><br>
            <textarea rows="4" cols="50" name="quote" placeholder="Enter Text Here..."></textarea>
            <br>
            
            <label>Twitter URL</label><br>
            <input type='text' name='twitter' placeholder="https://twitter.com/Twitter"/>
            <input type="submit" name="submit" value="Submit">
        </form>
        <form action="index2.php" enctype="multipart/form-data" method="post">
            Select image :<br>
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>
        </form>
        
        <?php        
        include '../db.php';
        // put your code here
            $fname = '';
            $lname = '';
            $banner = '';
            $slogan = '';
            $about = '';
            $quote = '';
            $twitter = '';
            $candName = '';
        if(isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $banner = $_POST['banner'];
            $campaign = $_POST['campaign'];
            $slogan = $_POST['slogan'];
            $about = $_POST['about'];
            $quote = $_POST['quote'];
            $twitter = $_POST['twitter'];
            $candName = $fname.'&nbsp'.$lname;            
            
            echo $fname.'&nbsp'.$lname.'<br>'.$banner.'<br>'.$campaign.'<br>'.$slogan.'<br>'.$about.'<br>'.$quote;                       
            
        }
        if(isset($_POST['Submit1']))
            { 
                $filepath = "Uploads/" . $_FILES["file"]["name"];

                if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
                {
                echo "<img src=".$filepath." height=300 width=300 />";
                } 
                else 
                {
                echo "Error !!";
                }
            } 
        ?>
        
        <div id="wrapper">   
            <div id="test"></div>
        <div id="header">
            <h1><?php echo $banner?></h1>
        </div>
        <div class="picsize">
            <?php echo "<img src=".$filepath." height=350 width=350/>"; ?>
        </div> 
        <h1>Our Best Days Still Lie Ahead</h1> 
        <div id="slogan">            
           <p class="info"><!-- Joe Biden is a former Democratic vice president of the United States who served from 2009 to 2017. He announced that he was running for president on April 25, 2019.<br>He framed his campaign as a challenge to President Donald Trump (R). "I believe history will look back on four years of this president and all he embraces as an aberrant moment in time. But if we give Donald Trump eight years in the White House, he will forever and fundamentally alter the character of this nation—who we are—and I cannot stand by and watch that happen," he said.<br>Biden represented Delaware in the U.S. Senate from 1973 to 2009, where he chaired the Senate Judiciary Committee and the Senate Foreign Relations committee for several years.--><?php echo $about; ?>
            </p>           
<br>
        </div>
        <div id="quote">
            <h1>Notable Quote</h1>
           <p class="quote"><!-- "We’re in a battle for the soul of America. It’s time to remember who we are. We’re Americans: tough, resilient, but always full of hope. It’s time to treat each other with dignity. Build a middle class that works for everybody. Fight back against the incredible abuses of power we’re seeing. It’s time to dig deep and remember that our best days still lie ahead."<br>—Joe Biden (April 2019)--><?php echo $quote; ?>
            </p>
        </div>
        <div id="vote">
            <?php
            if($campaign == 'President'){
                echo'<img src="images/wh.jpg" height=350px width=350px alt=""/>';
            }
            else if($campaign == 'Senate'){
                echo'<img src="images/senate.jpg" alt=""/>';
            }
            else if($campaign == 'Congress'){
                echo'<img src="images/congress.jpg" alt=""/>';
            }
            
            ?>
<!--            <form action="#" method="post">
                <h1>Vote Now!</h1>
                <label class="lblvote">                        
                    <p>Submit your vote and check out the polls!</p>
                    <input type="submit" class="vote" name="submit-vote" value="Vote!">
                </label>
            </form>                -->
        </div>      
        
        
        
        
        
        
        <div id="donate">
            <form action="#" method="post">
            <h1>Campaign Donations Accepted</h1>
        <div id="payment">
<input type="radio" class="payment" name="payment" value="visa"><img src="https://www.merchantequip.com/image/?logos=v&height=32" alt="Merchant Equipment Store Credit Card Logos" />
<input type="radio" class="payment" name="payment" value="mastercard"><img src="https://www.merchantequip.com/image/?logos=m&height=32" alt="Merchant Equipment Store Credit Card Logos" /> <input type="radio" class="payment" name="payment" value="amex"><img src="https://www.merchantequip.com/image/?logos=a&height=32" alt="Merchant Equipment Store Credit Card Logos" />       <input type="radio" class="payment" name="payment" value="paypal"><img src="https://www.merchantequip.com/image/?logos=p&height=32" alt="Merchant Equipment Store Credit Card Logos" />
        </div>
            <label style="color:silver;margin-left:62px">Full Name
            <input type="text" class="text" name="name" value="" placeholder="John Smith">
            </label>
            <br>
            <label style="color:silver;margin-left:42px">Card Number
            <input type="text" class="text" name="cardnumber" value="" placeholder="xxxx-xxxx-xxxx-xxxx">
            </label>
            <br>
        <div class="column">
            <label style="color:silver;margin-left:87.5px">Month</label>
                <select class="text" name="expmonth">
                    <option value="Select">Select</option>
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="Jun">Jun</option>
                    <option value="Jul">Jul</option>
                    <option value="Aug">Aug</option>
                    <option value="Sep">Sep</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select> 
                <br>
            <label style="color:silver;margin-left:100.5px">Year</label>
                <select class="text" name="expyear">
                    <option value="Select">Select</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
        </div>
                <table id="table">
                    <tr>
                    <td><input class="donate" type="submit" name="donate" value="$5"></td>
                    <td><input class="donate" type="submit" name="donate" value="$50"></td>
                    </tr>
                    <tr>
                    <td><input class="donate" type="submit" name="donate" value="$10"></td>
                    <td><input class="donate" type="submit" name="donate" value="$250"></td>
                    </tr>
                    <tr>
                    <td><input class="donate" type="submit" name="donate" value="$15"></td>
                    <td><input class="donate" type="submit" name="donate" value="$500"></td>
                    </tr>
                    <tr>
                    <td><input class="donate" type="submit" name="donate" value="$25"></td>
                    <td><input class="donate" type="submit" name="donate" value="$1000"></td>
                    </tr>
                </table>
            </form>                
        </div>       
        
        
        
        
            <div id="twitter-timeline">
                <h1>Follow me on twitter!</h1>
                <a class="twitter-timeline" data-width="300" data-height="300" href="<?php echo $twitter; ?>" style="width:100%">Tweets by <?php echo $candName?></a> 
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <!--        https://twitter.com/JoeBiden?ref_src=twsrc%5Etfw-->
            </div> 
        
        
        
        
        
            <div class="form">
                <p><a href="../../index.php">Home</a><br>
                <a href="../../dashboard.php">Go Back</a><br>
                <a href="../../logout.php">Logout</a></p>
            </div> 
        </div>
    </body>
</html>
