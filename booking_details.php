<?php
$servername="localhost";
$username="root";
$password="";
// $database_name="booking";
$dbname= "bookings";

$conn=mysqli_connect($servername,$username,$password,$dbname);


if(isset($_POST["save"]))
{
  $parent_forename = $_POST["parent_forename"];
  $parent_surname = $_POST["parent_surname"];
  $email = $_POST["email"];
  $phone_number = $_POST["phone_number"];
  $child_forename = $_POST["child_forename"];
  $child_surname = $_POST["child_surname"];
  $child_age = $_POST["child_age"];
  $chosen_class = $_POST["chosen_class"];

  $sql_query1 = "INSERT INTO parent (parent_forename,parent_surname,email,telephone)
  VALUES ('$parent_forename', '$parent_surname', '$email', '$phone_number')";
  $sql_query2 = "INSERT INTO child (child_forename,child_surname,child_age)
  VALUES ('$child_forename', '$child_surname', '$child_age')";
  
  
  
   if (mysqli_query($conn, $sql_query1) && (mysqli_query($conn, $sql_query2)))
   {
    mysqli_close($conn);  
    echo '<script>alert("Booking Successful")</script>';
   }
 
 else 
   echo '<script>alert("An erorr occured when submitting the data")</script>';
  
}
?>


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
  
<main>

    
    <aside><!--Side bar with link to social media-->
    
    <br><br><a href="https://en-gb.facebook.com/Iconsdrama/" target="_blank"><img src="images/facebook_logo.jpg" class = "FB_logo"alt="facebook image" height="40" width"150" align: "centre"/></a>
    
    </aside>

    <section class="details_section">


        <br>
        <br>
        <article class="confirmed_details">
        <h1>Thank you. Your booking has been confirmed!</h1>

        <h2>Here are your booking details:</h2>

<?php
    echo"<p>Parent name: " .$parent_forename." ".$parent_surname."</p>";
    echo"<p>Child name: " .$child_forename." ".$child_surname."</p>";
    echo"<p>Child age: " .$child_age."</p>";
    echo"<p>Class details: " .$chosen_class."</p>"; 
?>

<h2>Would you like a booking confirmation email? <br>
If so please click the button below:</h2>

<input type="button" name="send_email" value="Send Email">
<br>
<br>
<h2>Thank you for booking with us. We look <br>
forward to seeing you at our classes!</h2>
</article>
<br>
<br>

<article>
  <img height="300px" width="500px;" src="images/drama-1.jpg">
  <img height="300px" width="500px;" src="images/drama-2.jpg">
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