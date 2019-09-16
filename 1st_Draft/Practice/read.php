<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Campaign Page</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php 
        include './phpCode.php';
        ?>
        <h1>Read: Record <?php echo $id?></h1>
         <div id="header">
            <h1>~ VOTE 2020 ~</h1>
        </div>
        <div class="picsize">
            <?php echo "<img src=".$name." height=350 width=350/>"; ?>
        </div> 
        <div id="slogan">            
            <p class="info">
                <?php echo $about; ?>
            </p>           
<br>
        </div>

        
    </div>
        <p> <a href="view-action.php">View page</a></p>
    </body>
</html>
