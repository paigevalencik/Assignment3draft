<!DOCTYPE html>
<html>

  <?php 
    require('./headerandfooter/header.php'); /* using the html & code from header.php file */
  ?>


  <div>  
    <body>
      <main id="main">
        <article> 
            
         
            <div class="mainimagecontainer"> <!-- image of the boat, and the text on the image-->
            <img class="mainimage" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/canoe.jpg" width="100%" alt="Canoe on the water">
            <div class="mainimagetext"> Come Experience Canada
            </div> </div>
        
          
              <!-- the following is the main text in my home webpage-->
              <h2>Upcoming Adventures</h2>              

        <?php 
          
          // connecting to database
          $conn = mysqli_connect("localhost", "root", "", "assignment3db");

          //check connection 
          if($conn === false ) {
          die("ERROR: Could not connect. " . mysqli_connect_error());
          }

        ?>


        <div id='trips'>
        
          <?php //retrievinng data from database to display on page
          
          $sql = "SELECT * FROM addtrip";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo "Where: " . $row["heading"];
            echo "<br>";
            echo "Trip Date: " . $row["tripDate"];
            echo "<br>";
            echo "Duration: " . $row["duration"];
            echo "<br>";
            echo "Summary: " . $row["summary"];
            echo "<br><br>";
          }}

          else { echo "whoops, nothing to see here yet";
          }

          ?>


        </div>       
      </article>  
    </main>
  </body>


  <?php 
    require('./headerandfooter/footer.php'); /* using the html from footer.php file */
  ?>
    


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> <!--jquery for the menu-->

<script type="text/javascript" src="script.js"></script> <!-- jquery for the click for the menu-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> <!--jquery for the menu-->

<script type="text/javascript" src="script.js"></script> <!-- jquery for the click for the menu-->


</html>
