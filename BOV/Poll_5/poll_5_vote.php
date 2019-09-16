<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Age Group</title>
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
        .navbar {
          margin-bottom: 0;
          border-radius: 0;
        }
        body{
/*            background-image: url("../Uploads/vote.jpg");*/
            background-color: lightgrey;
            width:100%;            
            min-height: 100%;
/*            background-position: center;
            background-size: cover;*/
        }
        @media(min-width:1200px){
             main{
                height: 100%;
                margin-left: 17%;
                margin-top: 7%;
                padding:2%;
            }
        }
        
        @media(min-width:1199px) and (min-width:600px){
             main{
                height: 100%;
                margin-left: 17%;
                margin-top: 7%;
            }
        }
        @media(min-width:599px) and (min-width:300px){
            main{
               height: 100%;
               margin-left: 17%;
               margin-top: 7%;
            }           
        }  
         table{
            font-size:16px;
        }
        #previous{
            float:left;
        }
        #next{
            float: right;
        }
        #poll{
            width:60%;
            padding:5%;
            margin-left: 20%;
            margin-top: 5%;
        }
        
        footer{
            text-align: center;
            padding: 1%;
        }
    </style>
    </head>
    <body>
        <?php
            $vote = $_REQUEST['vote'];

            //get content of textfile
            $filename = "poll_5_result.txt";
            $content = file($filename);

            //put content in array
            $array = explode("||", $content[0]);
            $age18 = $array[0];
            $age25 = $array[1];
            $age30 = $array[2];
            $age35 = $array[3];

            if ($vote == 0) {
              $age18 = $age18 + 1;
            }
            if ($vote == 1) {
              $age25 = $age25 + 1;
            }
            if ($vote == 2) {
              $age30 = $age30 + 1;
            }
            if ($vote == 3) {
              $age35 = $age35 + 1;
            }

            //insert votes to txt file
            $insertvote = $age18."||".$age25."||".$age30."||".$age35;
            $fp = fopen($filename,"w");
            fputs($fp,$insertvote);
            fclose($fp);
        ?>
    <main class="w3-container w3-light-grey w3-margin-bottom w3-twothird">
        <h2 style="margin:0">Result:</h2>
            <table>
            <tr>
            <td>18 - 24:</td>
            <td>
                <img src="poll.gif"
            width='<?php echo(100*round($age18/($age18+$age25+$age30+$age35),4)); ?>'
            height='18'>
            <?php echo round((100*round($age18/($age18+$age25+$age30+$age35),4)),1); ?>%
            </td>
            </tr>
            <tr>
            <td>25 - 29:</td>
            <td>
            <img src="poll.gif"
            width='<?php echo(100*round($age25/($age18+$age25+$age30+$age35),4)); ?>'
            height='18'>
            <?php echo round((100*round($age25/($age18+$age25+$age30+$age35),4)),1); ?>%
            </td>
            </tr>
            <tr>
            <td>30 - 34:</td>
            <td>
            <img src="poll.gif"
            width='<?php echo(100*round($age30/($age18+$age25+$age30+$age35),4)); ?>'
            height='18'>
            <?php echo round((100*round($age30/($age18+$age25+$age30+$age35),4)),1); ?>%
            </td>
            </tr>
            <tr>
            <td>35 - Older:</td>
            <td>
            <img src="poll.gif"
            width='<?php echo(100*round($age35/($age18+$age25+$age30+$age35),4)); ?>'
            height='18'>
            <?php echo round((100*round($age35/($age18+$age25+$age30+$age35),4)),1); ?>%
            </td>
            </tr>
            </table>
        </main>
           <footer class="w3-container w3-center w3-bottom" style="background-color:#000000;color:lightgrey">
              <p>Find me on social media.</p>
                <a class="fa fa-facebook-official w3-hover-opacity" href="http://facebook.com" target="blank"></a>
                 <a class="fa fa-instagram w3-hover-opacity" href="http://instagram.com" target="blank"></a>
                 <a class="fa fa-twitter w3-hover-opacity" href="http://twitter.com" target="blank"></a>
              <p>&copy;B.O.V 2019</p>
        </footer>
    </body>
</html>
