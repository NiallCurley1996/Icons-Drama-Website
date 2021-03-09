<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Icons Drama & Singing</title>
<meta name="Author" content="Niall Curley" />
<script type="text/javascript" src = "validate_form.js"></script><!-- link to the JavaScript file-->
<meta name="Keywords" content="icons drama, drama groups, singing lessons, acting in Belfast, west Belfast drama, icons singing, drama disability friendly, children drama, youth drama, volunteer drama west Belfast, drama confidence building." />   
<link rel="stylesheet" type="text/css" href="css/styles.css"><!-- link to the CSS file-->
</head> 
    
<body>

    
<header>
    <section>
    <article class="article-half-left"><img src="images/index-iconslogo.jpg" alt=" a yellow star"  height="100" width="100"></article>
    <article class="article-half-right"><img src="images/index-icons-faces.gif" alt="two coloured actors masks"  height="100" width="100"></article>
    </section>
<h1>Icons Drama & Singing</h1> <!--Main website title-->
   
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
 
  <aside> <!--Side bar with link to social media-->
    
    <br><br><a href="https://en-gb.facebook.com/Iconsdrama/" target="_blank"><img src="images/facebook_logo.jpg" alt="facebook image" height="40" width"150" align: "centre"/></a>
    
</aside>
    
    <br>
<section>
<article class="main-form"><h1>Fill in the form below to make a booking<br> for one of our classes:</h1>

<form name="booking_form" action="booking_details.php" method="post" onsubmit="validateForm"><!--Form for making a class booking-->

<p class="Firstname_of_parent">

           <label>Parent Forename: </label>
           <input type="text" name="parent_forename" required pattern="[a-zA-Z]{1,30}" title="Letters only" />
          
    </p>


    <p class="Surname_of_parent">

           <label>Parent Surname: </label>
           <input type="text" name="parent_surname" required pattern="[a-zA-Z]{1,30}" title="Letters only"/>
          
    </p>
    
    
<p class="Parent_email"> 
           <label>Email: </label>         
           <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="E.g. joebloggs@live.com"/>
          
    </p>

<p class="Parent_num"> 
           <label>Phone Number: </label>         
           <input type="text" name="phone_number" required  pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="E.g. 08456783216"/>
           
    </p>


<p class="Firstname_of_child">

           <label>Child Forename: </label>
           <input type="text" name="child_forename" required pattern="[a-zA-Z]{1,30}"  title="Letters only"/>
          
    </p>


<p class="Surname_of_child">

           <label>Child Surname: </label>
           <input type="text" name="child_surname" required pattern="[a-zA-Z]{1,30}" title="Letters only"/>
          
    </p>

<p class="Age_of_child">

           <label>Age: </label>
           <input type="text" name="child_age" required pattern="[6-9]|1[0-6]" title="Between 6 and 16"/>
          
    </p>


<p class="Select_a_class">

 <label>Choose a class:  </label><!--Dropdown box to choose a class-->

 <select name="chosen_class" >

 <!--Snippets of the following PHP code was used to insert DB records into a dropbox. Code was retrieved from https://www.11zon.com/zon/php/how-to-retrieve-data-from-database-in-html-form.php -->
<?php

include "db_connect.php"; // Use this PHP file to connect to database

$records = mysqli_query($db,"select session_name, session_date, session_time from session"); // retrieve the session details from the DB


while($data = mysqli_fetch_array($records)) //while loop to iterate across all the database records
{
?>
    
    <option><?php echo $data['session_name']; echo " - "; echo $data['session_date']; echo " "; echo "("; echo $data['session_time']; echo ")";?></option>
<!--The name and date of the class is fed in from the database into the dropbox on the form-->
 
<?php
}
?>

</select>    

    </p>


          <p class="submit">
          <input type="submit" name = "save" value="Submit"/>
              

  <!--This code is to take the supplied data in the form and send it into the database in phpMyAdminm. Code snippets retrieved from https://www.youtube.com/watch?v=16wcGN1SKzo-->


</form>
</article>   
                  
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