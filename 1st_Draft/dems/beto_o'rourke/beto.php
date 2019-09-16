<?php
include("../../auth.php");
require ("../../db.php");
// put your code here
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Beto O'rourke</title>
<link rel="stylesheet" href="../../style.css" />
    </head>
    <body>        
        <div id="wrapper">   
            <div id="test"></div>
        <div id="header">
            <h1>~ VOTE 2020 ~</h1>
        </div>
        <div class="picsize">
            <img class="demtool" src="../../d_candidates/beto.jpg" alt="beto o'rourke" style="width:100%"/>           
        </div> 
        <h1>Beto For America, Beto For All</h1> 
        <div id="slogan">            
            <p class="info">Beto O'Rourke is a former U.S. representative from Texas. He announced he was running for president of the United States on March 14, 2019.<br>In his first campaign video, O'Rourke discussed "investing in the dignity of work," establishing universal healthcare, and combating climate change. He also said of immigration, "If immigration is a problem, it's the best possible problem for this country to have and we should ensure that there are lawful paths to work, to be with family, and to flee persecution."<br>O'Rourke served in the U.S. House of Representatives from 2013 to 2019. He ran for U.S. Senate against incumbent Ted Cruz (R) in 2018, losing by 2 percentage points. O'Rourke previously served on the El Paso City Council from 2005 to 2011.
            </p>           
<br>
        </div>
        <div id="quote">
            <h1>Notable Quote</h1>
            <p class="quote">"This is a defining moment of truth for this country and for every single one of us. The challenges that we face right now—the interconnected crises in our economy, our democracy, and our climate have never been greater. And they will either consume us or they will afford us the greatest opportunity to unleash the genius of the United States of America."
            </p>
        </div>
        <div id="vote">                
            <form action="#" method="post">
                <h1>Vote Now!</h1>
                <label class="lblvote">                        
                    <p>Submit your vote and check out the polls!</p>
                    <input type="submit" class="vote" name="submit-vote" value="Vote!">
                </label>
            </form>                
        </div>           
        <div id="donate" style="margin-top: -26.1%">
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
    <div id="twitter-timeline" style="margin-top: -26.1%">
        <h1>Follow me on twitter!</h1>
        <a class="twitter-timeline" data-width="300" data-height="300" href="https://twitter.com/BetoORourke?ref_src=twsrc%5Etfw" style="width:100%">Tweets by BetoORourke</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div> 
    <div class="form">
        <p><a href="../../index.php">Home</a><br>
        <a href="../../dashboard.php">Go Back</a><br>
        <a href="../../logout.php">Logout</a></p>
    </div> 
        </div>
    </body>
</html>
