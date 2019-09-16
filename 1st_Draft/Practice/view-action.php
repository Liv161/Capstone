<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
         * include the data base connect file
         * and helper functions as if we are adding
         * the code on the page
         */
        include './phpCode.php';
        ?>

        <table>
            <table>
            <thead>
                <tr>
                    <!--<th>ID</th>-->
                    <th><h2>Image Name</h2></th>
                    <!--<th>Data Two</th>-->
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php
            /*
             * Use a for each loop to go through the
             * associative array. $results is a multi 
             * dimensional array. Arrays with arrays.
             * 
             * So we loop through each result to get back
             * an array with values
             * 
             * feel free to 
             * <?php echo print_r($results); ?>
             * to see how the array is structured
             */            
            ?>
            
            <?php foreach ($results as $row): ?>
                <tr>
                    <!--
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['imagename']; ?></td>
                    -->
                    <td><?php echo $row['imagename']; ?></td> 
                    <td><a href="read.php?id=<?php echo $row['Id']; ?>">Read</a></td>     
                    <td><a href="Update.php?id=<?php echo $row['Id']; ?>">Update</a></td>            
                    <td><a href="Delete.php?id=<?php echo $row['Id']; ?>">Delete</a></td>            
                </tr>
            <?php endforeach; ?>
        </table>

    </body>
</html>
