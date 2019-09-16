<?php
include("../../auth.php");
require ("../../db.php");
// put your code here
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bill Weld</title>
<link rel="stylesheet" href="../../style.css" />
    </head>
    <body>        
        <div id="wrapper">   
            <div id="test"></div>
        <div id="header">
            <h1>~ VOTE 2020 ~</h1>
        </div>
        <div class="picsize">
            <img class="demtool" src="../../r_candidates/bill.jpg" alt="bill weld" style="width:100%"/>           
        </div> 
        <h1>America Has A Choice</h1> 
        <div id="slogan">            
            <p class="info">Bill Weld announced on April 15, 2019, that he was running in the 2020 presidential election. Weld has focused his potential run on criticisms of President Donald Trump's personality and economic policies, saying the president is paying more attention to dividing people than addressing the problem of overspending or preparing to replace jobs that will be lost to automation in the near future. Weld served as the Republican governor of Massachusetts from 1991 to 1997. Prior to serving elected office, Weld was U.S. attorney for Massachusetts and assistant U.S. attorney general at the Department of Justice's criminal division. Following his governorship, Weld re-entered private law practice. In 2016, he was the Libertarian vice presidential candidate.
            </p>           
<br>
        </div>
        <div id="quote">
            <h1>Notable Quote</h1>
            <p class="quote">"I will not sit quietly on the sidelines any longer while our President praises despotic leaders, insults democratic allies, unravels arms control agreements and rails against the rule of law."<br>
—Bill Weld (February 2019)</p>
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
        <div id="donate" style="margin-top: -24.85%">
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
        <div id="twitter-timeline" style="margin-top: -24.85%">
        <h1>Follow me on twitter!</h1>
        <a class="twitter-timeline" data-width="300" data-height="300" href="https://twitter.com/GovBillWeld?ref_src=twsrc%5Etfw" style="width:100%">Tweets by GovBillWeld</a> 
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div> 
    <div class="form">
        <p><br><a href="../../index.php">Home</a><br>
        <a href="../../dashboard2.php">Go Back</a><br>
        <a href="../../logout.php">Logout</a></p>
    </div> 
        </div>
    </body>
</html>
