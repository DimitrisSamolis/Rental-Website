<!--INTERFACE 5 , EPIKOINVNIA -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="" IE=edge>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
        <title> Car Rental - Contact Us </title>
        <link rel="stylesheet" href="YpoxrewtikhErg.css">
        <style>
            th,td{
                padding:15px;
                border:solid;
            }
            table{
                width:100%;
                text-align:center;
                background-color:var(--orange);
            }
        </style>
        
    </head>


    <body>
      
      <header class="header" style="background-color:rgb(88, 219, 221);">
        <img src="images/gif2.gif" style="width:70px;">
        <a href="contact.html" class="logo"> <span>Easy</span>Rental</a>
        <nav class="navbar">    
            <a href="YpoxrewtikhErg.html">Home</a>
            <a href="about.html">About Us</a>
            <a href="stolos.html"> Cars Collection</a>
            <a href="calculator.html">Calculate Rent</a>
            <a href="contact.html">Contact Us</a>
            <a href="interface6.html">Manage</a>
        </nav>

        <div id="login-btn">
            <button class="btn"><a href="interface6.html">Log-In </a></button>
            <i class="far fa-user"></i>
        </div>

     </header>

     <div class="php file" style="margin:100px;"> 
<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
	include 'manage1.php';

	
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
    if (empty($username) || empty($password)) {
		echo "Please complete all form fields!";
    
	}else if (($username) != "root" || ($password) !="admin123") {
		echo '<script>alert("Sorry, you have No permission!")</script>';
     }else {

            $result = mysqli_query($conn,"SELECT * FROM clients");
            echo "<table>
            <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            </tr>";

            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";	
                echo "<td>" . $row['Username'] . "</td>";
                echo "<td>" . $row['mail'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";

            mysqli_close($conn);
    }
}else {
	echo "Please complete all form fields!";
}
echo "</br><a href='interface6.html'>Back</a>"
?>
</div>

    </body>

<footer>

    <div class="row">
      <div class="footer-content" >
        <h1> Thanks for visiting my site! </h1>
     </div>
        <div class="column">
            <div class="container" style="margin:0px;">
                <h3>Subscribe to our Newsletter</h3>
              </div>
              
              <form action="newsletter.php" method="post">
              <div class="contain">
                <input type="text" placeholder="Username" name="Username" required> </br>
                <input type="text" placeholder="Name" name="name" required> </br>
                <input type="text" placeholder="Email address" name="mail" required>
                <label>
                </br><input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
                </label>
              </div>
            
              <div class="container" style="margin:0px; ">
                <input type="submit" value="Subscribe">
              </div>
              </form>
        </div>
        <div class="column">
            <div class="tel">
             <h3> <a href="tel:+6999999999" style="color:white;">Call us at: 6999999999</a> </h3></br>
             <h3> <a href="mailto:dimitrissamolis2001@gmail.com" style="color:white;" >Email Us at: dimitrissamolis2001@gmail.com </a> </h3>
           </div>
        </div>
        <div class="column">
          <div class="container" >
            <h3>You can find us here!</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25162.728875718156!2d23.712184953862852!3d37.96916805235183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd1837f5acf3%3A0x5c97c042f5eb0df6!2zzpHOus-Bz4zPgM6_zrvOtyDOkc64zrfOvc-Ozr0!5e0!3m2!1sel!2sgr!4v1653492390788!5m2!1sel!2sgr" style="border:0; padding-top:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
        </div>
      </div>
      </div>

    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2022 <a href="#">DimSam </a>  </p>
     </div>
    

  </footer>

</html>

