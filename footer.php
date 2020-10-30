<?php 
//connecting to the database using MYSQLi
//                      localhost   user      password   database
$conn = mysqli_connect('localhost','rasheed','test1234','ytripleb_users');

//check the connection
if(!$conn){
  echo 'error connecting to the database'. mysqli_connect_error();  
}

//Writing a query for all pizzas


//making the query and getting the result



//fetching the resulting rows as an array 


//free $result from memory


//closing the connection

    $success = '';
	$email = $name = $message= '';
    $errors = array('email' => '', 'name' => '',$message=> '' );
  

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'Please enter your email address';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check title
		if(empty($_POST['name'])){
			$errors['name'] = 'Enter your name ';
		} else{
			$name = $_POST['name'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
				$errors['name'] = 'Name must be letters and spaces only';
			}
		}
        if(empty($_POST['message'])){
			$errors['email'] = 'Please enter your email address';
		} else{
			$message = $_POST['message'];
		}
        if(array_filter($errors)){
            //echo 'there are errors in the form';
        }
        else{ 
           
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $message = mysqli_real_escape_string($conn,$_POST['message']);
            //creating neww sql variable to issue the insert command
            $sql = "INSERT INTO data (name,email,message) VALUES('$email','$name','$message')";
            //save to database and check
            if(mysqli_query($conn,$sql)){
                //success
                $success = 'Form submitted successfully <br> Thank you!';
            }
            else{
                //return an error
                echo 'query error'. mysqli_error($conn);
            }
            //echo 'form is valid';
          
        }

	} // end POST check

?>

<html>
        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- awesone fonts css-->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="css/style.css">
<footer class="container-fluid" id="gtco-footer" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6" id="contact">
                <h4> Contact Us </h4>
                <form action="footer.php" class="white" method="POST">
                <input type="text" class="form-control" placeholder="Full Name"  name="name" value="<?php echo htmlspecialchars($name)  ?>">
                <div class="text-danger"><?php echo $errors['name'] ?></div>
                <input type="email" class="form-control" placeholder="Email Address"  name="email" value="<?php echo htmlspecialchars($email)  ?>">
                <div class="text-danger"><?php echo $errors['email'] ?></div>
                <textarea class="form-control" placeholder="Message" name="message" value="<?php echo htmlspecialchars($email)  ?> "></textarea>
               <a href="#contact"><input type="submit" name="submit" value="Submit" class="submit-button btn"> </a> 
                <div class="text-success"><?php echo $success ?></div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">
                        <h4>Company</h4>
                        <ul class="nav flex-column company-nav">
                            <li class="nav-item"><a class="nav-link"  href="#gtco-main-nav">Home</a></li>
                            <li class="nav-item"><a class="nav-link"target="_blank" href="#about">Services</a></li>
                            <li class="nav-item"><a class="nav-link"target="_blank" href="#services">About</a></li>
                            <li class="nav-item"><a class="nav-link"target="_blank" href="#new">articles</a></li>
                            <li class="nav-item"><a class="nav-link"target="_blank" href="#contact">Contact</a></li>
                        </ul>
                        <h4 class="mt-5">Follow Us</h4>
                        <ul class="nav follow-us-nav">
                            <li class="nav-item"><a class="nav-link pl-0" href="https://www.facebook.com/haissam.massoud.7"><i class="fa fa-facebook"
                                                                                      aria-hidden="true"></i></a></li>
        
                            <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/haissam-massoud-ab14101a5/"><i class="fa fa-linkedin"
                                                                                 aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h4>Services</h4>
                        <ul class="nav flex-column services-nav">
                            <li class="nav-item"><a class="nav-link"target="_blank" href="web.php">Web Design</a></li>
                            <li class="nav-item"><a class="nav-link"target="_blank" href="ppc.php">PPC</a></li>
                            <li class="nav-item"><a class="nav-link"target="_blank" href="seo.php">SEO</a></li>
                            <li class="nav-item"><a class="nav-link"target="_blank" href="#">Social Media Management</a></li>
                            <li class="nav-item"><a class="nav-link"target="_blank" href="#">Email Marketing</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <p>&copy; 2020. All Rights Reserved. Design by <a href="" target="_blank">Holy Create</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
               <!--  Jquery js file  -->
               <script src="./PortFolio_Website-master/js/jquery.3.4.1.js"></script>

<!--  Bootstrap js file  -->
<script src="./PortFolio_Website-master/js/bootstrap.min.js"></script>

<!--  isotope js library  -->
<script src="./PortFolio_Website-master/vendor/isotope/isotope.min.js"></script>

<!--  Magnific popup script file  -->
<script src="./PortFolio_Website-master/vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

<!--  Owl-carousel js file  -->
<script src="./PortFolio_Website-master/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<!--  custom js file  -->
<script src="./PortFolio_Website-master/js/main.js"></script>
</html>