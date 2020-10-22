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
	$email = $name = '';
    $errors = array('email' => '', 'name' => '');
  

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

        if(array_filter($errors)){
            //echo 'there are errors in the form';
        }
        else{ 
           
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $name = mysqli_real_escape_string($conn,$_POST['name']);
            //creating neww sql variable to issue the insert command
            $sql = "INSERT INTO data (name,email) VALUES('$email','$name')";
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


<!doctype html>
<!--
	Solution by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="en">
<head>
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
    <title>Ytriple B Marketing</title>
    <style>

    </style>
</head>
<body>


    


  
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
    <div class="container"><a class="navbar-brand">YTriple B</a>
        <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"><span
                class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span></button>
        <div id="my-nav" class="">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item"><a class="" href="#">Home</a></li>
                <li class="nav-item"><a class="" href="#about">Services</a></li>
                <li class="nav-item"><a class="" href="#services">About</a></li>
                <li class="nav-item"><a class="" href="#news">News</a></li>
                <li class="nav-item"><a class="" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid gtco-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1> Your <span>"Go To"</span> Digital 
                    Marketing Agency
                    </h1>
                <p>We are Your Business Building Bricks. </p>
                <a href="#contact">Contact Us <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <div class="col-md-6">
                <div class="card"><img class="card-img-top img-fluid" src="images/banner.png" alt=""></div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid gtco-feature" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="cover">
                    <div class="card">
                        <svg
                                class="back-bg"
                                width="100%" viewBox="0 0 900 700" style="position:absolute; z-index: -1">
                            <defs>
                                <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                    <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                    <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                                </linearGradient>
                            </defs>
                            <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                  d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"/>
                        </svg>
                        <!-- *************-->

                        <svg width="100%" viewBox="0 0 700 500">
                            <clipPath id="clip-path">
                                <path d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"></path>
                            </clipPath>
                            <!-- xlink:href for modern browsers, src for IE8- -->
                            <image clip-path="url(#clip-path)" xlink:href="images/learn-img.jpg" width="100%"
                                   height="465" class="svg__image"></image>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h2> We are a Creative Digital
                    Agency & Marketing Experts </h2>
                    <small>
                <p>

                    Y-TripleB Marketing is a Lebanon-based, full-service digital marketing company. Like you, we are entrepreneurs focused on providing exceptional service to our clients. What makes us different? Our tools, our technology, and most importantly, our teams.. When you partner with Y-TripleB to grow your business online you get a dedicated team of industry experts who collaborate on everything from your digital marketing strategy to design and development, to analytics and optimization, to content and performance management. We take a deep dive into your business and growth goals, and use proven strategies to help make them happen. <br>
                    
                      In an industry where every digital marketing company says they can get you results, we go one step farther; we make you relevant, relevant to your potential customers. Because in today’s competitive marketplace, getting you more leads is about positioning your business as the better choice. And positioning you as the better choice is our specialty.
                     </p>
                <p>
                  
                    </small>
                </p>
                <a href="#">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-features" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-5">
                <h2> Explore The Services<br/>
                    We Offer For You </h2>
                <p>  Powered by leading creativity, strategy building and teamwork. Our services are tailored to every client’s specific needs. With a full suite of capabilities. </p>
                <a href="#">All Services <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <div class="col-lg-8">
                <svg id="bg-services"
                     width="100%"
                     viewBox="0 0 1000 800">
                    <defs>
                        <linearGradient id="PSgrad_02" x1="84.279%" x2="0%" y1="96.604%" y2="0%">
                            <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                            <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                        </linearGradient>
                    </defs>
                    <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_02)"
                          d="M801.878,3.146 L116.381,128.537 C26.052,145.060 -21.235,229.535 9.856,312.073 L159.806,710.157 C184.515,775.753 264.901,810.334 338.020,792.380 L907.021,652.668 C972.912,636.489 1019.383,573.766 1011.301,510.470 L962.013,124.412 C951.950,45.594 881.254,-11.373 801.878,3.146 Z"/>
                </svg>
                <div class="row">
                    <div class="col">
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="images/web-design.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Web Design</h3>
                                <p class="card-text">We're not just responsible for giving you a modern, updated website design – we're also responsible for making your website a powerful sales tool for your business.
                                    </p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="images/marketing.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Email Marketing</h3>
                                <p class="card-text"> A strong email marketing campaign is crucial in strengthening relationships with your customers.
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="images/seo.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">SEO</h3>
                                <p class="card-text">Our ever-expanding network of websites gives us the ability to increase your rankings for the most relevant keywords.
                                   </p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="images/online-pay.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">PPC</h3>
                                <p class="card-text">Digital advertising is just one strategy Y TripleB Marketing leverages to build a holistic, effective advertising campaign for your business.
                                    </p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="images/relationship.png " alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Social Media Management</h3>
                                <p class="card-text"> Our social media specialists can work for you and get you known by everyone around!
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-testimonials">
    <div class="container">
        <h2>What our customers say about us.</h2>
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/customer1.jpg" alt="">
                    <div class="card-body">
                        <h5>Lisa Gally <br/>
                            <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/customer2.jpg" alt="">
                    <div class="card-body">
                        <h5>Missy Limana<br/>
                            <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/customer3.jpg" alt="">
                    <div class="card-body">
                        <h5>Aana Brown<br/>
                            <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/customer3.jpg" alt="">
                    <div class="card-body">
                        <h5>Aana Brown<br/>
                            <span> Project Manager </span></h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id quod maxime placeat ” </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-features-list">
    <div class="container">
    <h2>What we offer</h2>
        <div class="row">
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="images/quality-results.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Quality Results</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="images/analytics.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Analytics</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="images/affordable-pricing.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Affordable Pricing</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="images/easy-to-use.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Easy To Use</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="images/free-support.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Free Support</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="images/effectively-increase.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Effectively Increase</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid gtco-news" id="news">
    <div class="container">
        <h2>Latest News & Articles</h2>
        <div class="owl-carousel owl-carousel2 owl-theme">
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/article1.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>7-Step Social Media Advertising Strategy to Better Performing Ads
                             </h5>
                        <p class="card-text">You’ve felt it. Your organic content doesn’t have the same reach on social media anymore. In fact, BuzzSumo found Facebook posts from brand pages saw a 50% decline in engagement just since January 2017. Ouch. You’ve certainly felt it...
                         </p>
                        <a href="https://www.linkedin.com/pulse/7-step-social-media-advertising-strategy-better-ads-haissam-massoud/?trackingId=1N2TQBmCRmK1Eb6ncSythA%3D%3D">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/article2.png" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5> Best Social Media Management Workflows To Help Your Business </h5>
                        <p class="card-text">Facebook, YouTube, Instagram, Tumblr, Twitter, LinkedIn, Snapchat, Pinterest—with so many viral social channels out there, it often gets tricky for brands/businesses to keep track of their social media calendar.
                        Social media is the front and centre of...
                         </p>
                        <a href="https://www.linkedin.com/pulse/best-social-media-management-workflows-help-your-business-massoud-1f/?trackingId=T5kOw4ymRsGMFCDU5gMK9A%3D%3D">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/article3.png" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Why And How To Improve Your Average Email Response Rate</h5>
                        <p class="card-text">Key performance indicators (KPI) like open rate, click-through rate are widely used to determine the results and improve email marketing performance, but what about the average response rate of your email? How much does it matter? How does it impact...</p>
                        <a href="https://www.linkedin.com/pulse/why-how-improve-your-average-email-response-rate-haissam-massoud/?trackingId=p2%2F5CfY1SWq3yCYiGy0uwA%3D%3D">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/article4.png" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>TOP SEO TOOLS ULTIMATE GUIDE!! </h5>
                        <p class="card-text">An SEO tool that covers several bases, Majestic bills itself as a backlink checker and link building suite. The platforms bread-and-butter is backlink tracking–after all, they’ve crawled over 1.3 trillion links since 2004–and they’re pros at distilling backlink data into... </p>
                        <a href="https://www.linkedin.com/pulse/top-seo-tools-ultimate-guide-haissam-massoud/">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
   
    </div>
</div>
<footer class="container-fluid" id="gtco-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" id="contact">
                <h4> Contact Us </h4>
                <form action="index.php" class="white" method="POST">
                <input type="text" class="form-control" placeholder="Full Name"  name="name" value="<?php echo htmlspecialchars($name)  ?>">
                <div class="text-danger"><?php echo $errors['name'] ?></div>
                <input type="email" class="form-control" placeholder="Email Address"  name="email" value="<?php echo htmlspecialchars($email)  ?>">
                <div class="text-danger"><?php echo $errors['email'] ?></div>
                <textarea class="form-control" placeholder="Message"></textarea>
               <a href="#contact"><input type="submit" name="submit" value="Submit" class="submit-button btn"> </a> 
                <div class="text-success"><?php echo $success ?></div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">
                        <h4>Company</h4>
                        <ul class="nav flex-column company-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="#services">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#new">articles</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        </ul>
                        <h4 class="mt-5">Follow Us</h4>
                        <ul class="nav follow-us-nav">
                            <li class="nav-item"><a class="nav-link pl-0" href="#"><i class="fa fa-facebook"
                                                                                      aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"
                                                                                 aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-google"
                                                                                 aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-linkedin"
                                                                                 aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h4>Services</h4>
                        <ul class="nav flex-column services-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Web Design</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">PPC</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">SEO</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Social Media Management</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Email Marketing</a></li>
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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- owl carousel js-->
<script src="owl-carousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="js/nav.js"></script>
</body>
</html>
