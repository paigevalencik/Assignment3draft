<!DOCTYPE html>
<html>
 
    <?php 
        require('./headerandfooter/header.php'); /* using the html from header.php file */
    ?>

    <h1 id="adminHeadingText"> Admin - Confirm</h1> <!-- heading -->

        <body>
            <br>
            <br>
            <br>

            <div id="adminConfirmText">
                
                <?php
 
                // servername, username, password, database name
                $conn = mysqli_connect("localhost", "root", "", "assignment3db");
         
                // check connection
                if($conn === false){
                die("ERROR: Could not connect. "
                . mysqli_connect_error());
                }
         
                // taking all values from the form data(input)
                $heading =  $_REQUEST['heading'];
                $tripDate = $_REQUEST['tripDate'];
                $duration =  $_REQUEST['duration'];
                $summary = $_REQUEST['summary'];

                $sql = "INSERT INTO addtrip (heading, tripDate, duration, summary) VALUES ('$heading', '$tripDate', '$duration', '$summary' )";

                // confirmation statement if saved to database
                if(mysqli_query($conn, $sql)){                                  
                    echo "<h3>Data stored in a database successfully.</h3>";
                }

                // statement if saved not saved to database
                else{
                    echo "ERROR: data not saved " . $sql . ""  . mysqli_error($conn); }


                 // closing connection
                mysqli_close($conn);

                ?>

                </div>
                
                <!--link to index page to see adventure list -->
                <div id="adminConfirmText">
                    <a href="index.php"><h4> Check out our adventures! </h4> </a>
                </div>

        </body>
 
    <?php 
        require('./headerandfooter/footer.php'); /* using the html from footer.php file */
    ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> <!--jquery for the menu-->

<script type="text/javascript" src="script.js"></script> <!-- jquery for the click for the menu-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> <!--jquery for the menu-->

<script type="text/javascript" src="script.js"></script> <!-- jquery for the click for the menu-->

</html>