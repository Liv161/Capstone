<?php

// put your code here
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Elizabeth Warren</title>
<link rel="stylesheet" href="../../style.css" />
    </head>
    <body>        
        <div id="wrapper">   
            <div id="test"></div>
        <div id="header">
            <h1>~ VOTE 2020 ~</h1>
        </div>
        <div class="picsize">
            <img class="demtool" src="../../d_candidates/liz.jpg" alt="elizabeth warren" style="width:100%"/>           
        </div> 
        <h1>I Have A Plan For That</h1> 
        <div id="slogan">            
            <p class="info">Elizabeth Warren is a Democratic member of the U.S. Senate from Massachusetts. She launched her exploratory presidential committee on December 31, 2018, and formally declared her candidacy on February 9, 2019.<br>Warren has focused her campaign on economic issues, including proposing a wealth tax on the wealthiest 75,000 families to partially fund universal childcare, student loan debt relief, the Green New Deal, and Medicare for All.<br>Warren's professional experience includes time in both the government and academic sectors. Prior to serving in the U.S. Senate, Warren helped establish the Consumer Financial Protection Bureau under the Obama administration. She also served as the chair of the Congressional Oversight Panel for the Troubled Asset Relief Program from 2008 to 2010.<br>Warren worked as a law professor for three decades at several universities, including the University of Pennsylvania and Harvard University.
            </p>           
<br>
        </div>
        <div id="quote" style="margin-top: -48%">
            <h1>Notable Quote</h1>
            <p class="quote">"Every person in America should be able to work hard, play by the same set of rules, & take care of themselves & the people they love. That’s what I’m fighting for, & that’s why I’m launching an exploratory committee for president."
            </p>
        </div>
        <div id="vote" style="margin-top: -48%">                
            <form action="#" method="post">
                <h1>Vote Now!</h1>
                <label class="lblvote">                        
                    <p>Submit your vote and check out the polls!</p>
                    <input type="submit" class="vote" name="submit-vote" value="Vote!">
                </label>
            </form>                
        </div>           
        <div id="donate" style="margin-top: -29.78%">
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
        <div id="twitter-timeline" style="margin-top: -29.78%">
        <h1>Follow me on twitter!</h1>
        <a class="twitter-timeline" data-width="300" data-height="300" href="https://twitter.com/ewarren?ref_src=twsrc%5Etfw" style="width:100%">Tweets by ewarren</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div> 
    <div class="form">
        <p><a href="../../index.php">Home</a><br>
        <a href="../../dashboard.php">Go Back</a><br>
        <a href="../../logout.php">Logout</a></p>
    </div> 
        </div>
    </body>
</html>
