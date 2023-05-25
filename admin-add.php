<!DOCTYPE html>
<html>

    <?php 
        require('./headerandfooter/header.php'); /* using the html from header.php file */
    ?>
       
   <body>      
        <h1 id="adminHeadingText1"> Add An Adventure</h1> <!--heading -->
            
            <div id='tripFormData'> <!-- the form to be submitted to datebase -->

                <form action="admin-confirm.php" method="post">

                    <div class="form-group">
                    <label for="heading">Heading</label>
                    <input type="text" id="heading"  name="heading"/>
                    </div>
                        <br>
                    <div class="form-group">
                    <label for="tripDate">Trip Date</label>
                    <input type="date" id="tripDate" name="tripDate"/>
                    </div>
                        <br>
                    <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="number" id="duration" name="duration" min="1" max="3"/>
                    </div>
                        <br>
                    <div class="form-group">
                    <label for="summary">Summary</label>
                    <input type="text" id="summary" name="summary" />
                    </div>
                        <br><br>

                <input type="submit" value="submit">
                
                </form>
            </div>
    </body>

        

    <?php 
        require('./headerandfooter/footer.php'); /* using the html from footer.php file */
    ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> <!--jquery for the menu-->

<script type="text/javascript" src="script.js"></script> <!-- jquery for the click for the menu-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> <!--jquery for the menu-->

<script type="text/javascript" src="script.js"></script> <!-- jquery for the click for the menu-->

</hmtl>







