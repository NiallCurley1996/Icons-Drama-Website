<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Icons Drama & Singing</title>
<meta name="Author" content="Niall Curley" />
<meta name="Keywords" content="icons drama, drama groups, singing lessons, acting in Belfast, west Belfast drama, icons singing, drama disability friendly, children drama, youth drama, volunteer drama west Belfast, drama confidence building." />   
<link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- link to the CSS document-->

</head> 
    
<body>

<header>
    <section>
    <article class="article-half-left"><img src="images/index-iconslogo.jpg" alt=" a yellow star"  height="100" width="100"></article>
    <article class="article-half-right"><img src="images/index-icons-faces.gif" alt="two coloured actors masks"  height="100" width="100"></article>
    </section>
<h1>Icons Drama & Singing</h1><!--Main website title-->
   
   
</header> 
    
<nav><!--Navigation bar-->
    <ul>
    <li><a href="home.html">Home</a></li>
    <li><a href="gallery.html">Gallery</a></li>
    <li><a href="classes.html">Classes</a></li>
    <li><a href="bookings.php">Make a Booking</a></li>
    <li><a href="contact_us.html">Contact Us</a></li>
    <li><a href="reviews.php">Reviews</a></li>
    </ul> 
</nav>
  

<aside><!--Side bar with link to social media-->
    
    <br><br><a href="https://en-gb.facebook.com/Iconsdrama/" target="_blank"><img src="images/facebook_logo.jpg" class = "FB_logo"alt="facebook image" height="40" width"150" align: "centre"/></a>
    
    </aside>

  
<section class="reviews_list">
  <br>
  <br>
    <h1>This is what some people think about Icons<br> Drama and the services we have to offer!</h1>

<br>
<br>

<?php

include "db_connect.php";

$reviews = mysqli_query($dbobject, "select user_name, review_comment, review_date from review");

while ($reviews_data = mysqli_fetch_array($reviews)) 
{
?>
<blockquote><i><h2>"<?php echo $reviews_data['review_comment'];?>"</h2></i></blockquote>
<p>- Review made by <?php echo $reviews_data['user_name'];?></p><br>




<?php   
}
?>
<br>
<br>
<br>
</section>



<section class="review_form">
    <article>
    <h1>Please leave us a review and let us know what you think!</h1>
    <form name="review_form" action="" method="post" onsubmit="validateForm"> <!-- Add a new review using the form -->
        <p>

           <label>Name:</label>
           <input type="text" name="user_name" required pattern="[a-zA-Z]{1,30}" title="Letters only" />
          
        </p>

        <p>

        <textarea id="review_box" name="review_comment"rows="5" cols="40"  placeholder="Enter your Review...">
        </textarea>
         <input type="submit" name = "save" value="Submit Review"/>

        </p>


<?php
$servername="localhost";
$username="root";
$password="";
$database_name="reviews";

$conn=mysqli_connect($servername,$username,$password,$database_name);


if(isset($_POST["save"]))
{
  $user_name = $_POST["user_name"];
  $review = $_POST["review_comment"];

  $sql_query = "INSERT INTO review (user_name, review_comment)
  VALUES ('$user_name', '$review')";
  
   if (mysqli_query($conn, $sql_query))
   {
    mysqli_close($conn);  
    echo '<script>alert("Data succesfully submitted")</script>';
   }
  else 
   echo '<script>alert("An erorr occured when submitting the data")</script>';
  
}
?>


    </form>
    </article>
</section>

    
    

    

 
<footer><!--Website footer with links-->
    <br>
    <a class="back-to-top" href="#">Back to Top</a>
    <br>
    <br>
    <ul>
        <a href="home.html">Home</a>
       <a href="child_protection.html">Child Protection</a>
        <a href="disability_info.html">Disability Info</a>
        <a href="privacy.html">Privacy Info</a>
        <a href="FAQ.html">FAQ</a>
        <a href="terms_of_use.html">Terms of Use</a>
        
    </ul>
   
</footer>
</html>
</body>
</html>