<?php
//include("../../auth.php");
//require ("../../db.php");
// put your code here
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Kamala Harris</title>
<link rel="stylesheet" href="../../style.css" />
    </head>
    <body>        
        <div id="wrapper">   
            <div id="test"></div>
        <div id="header">
            <h1>~ VOTE 2020 ~</h1>
        </div>
        <div class="picsize">
            <img class="demtool" src="../../d_candidates/kam.jpg" alt="kamala harris" style="width:100%"/>           
        </div> 
        <h1>For The People</h1> 
        <div id="slogan">            
            <p class="info">Kamala Harris is a Democratic member of the U.S. Senate from California. She formally declared her candidacy for president on January 21, 2019.Harris has focused her campaign on economic issues, including universal pre-K, debt-free college, a tax cut for working- and middle-class families of up to $500 a month, and Medicare for All.<br>Prior to serving in the U.S. Senate, Harris served as the attorney general of California from 2011 to 2017 and district attorney of San Francisco from 2004 to 2011.Harris worked as an attorney in both the Alameda County District Attorney’s Office and the San Francisco District Attorney’s Office.
            </p>           
<br>
        </div>
        <div id="quote" style="margin-top: -42%">
            <h1>Notable Quote</h1>
            <p class="quote">"I feel very confident about my ability to listen and to work on behalf of the American public. The American public wants a fighter, and they want someone that is going to fight like heck for them and not fight based on self-interests. I'm prepared to do that." 
            </p>
        </div>
        <div id="vote"style="margin-top: -42%">                
            <form action="#" method="post">
                <h1>Vote Now!</h1>
                <label class="lblvote">                        
                    <p>Submit your vote and check out the polls!</p>
                    <input type="submit" class="vote" name="submit-vote" value="Vote!">
                </label>
            </form>                
        </div>           
        <div id="donate" style="margin-top: -22.4%">
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
    <div id="twitter-timeline" style="margin-top: -22.4%">
        <h1>Follow me on twitter!</h1>
        <a class="twitter-timeline" data-width="300" data-height="300" href="https://twitter.com/KamalaHarris?ref_src=twsrc%5Etfw" style="width:100%">Tweets by KamalaHarris</a> 
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div> 
    <div class="form">
        <p><br><br><a href="../../index.php">Home</a><br>
        <a href="../../dashboard.php">Go Back</a><br>
        <a href="../../logout.php">Logout</a></p>
    </div> 
        </div>
    </body>
</html>
