
<html>
<head>
<title>Home Page
</title>
<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<!-- JavaScript and dependencies (Popper.js and Bootstrap JS) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<style>
@media screen and (min-width: 993px)
{
	.dropdown:hover .dropdown-menu
	{
		display: block !important;
	}
	.dropdown:focus .dropdown-menu
	{
		display: block !important;
	}
	.dropdown .dropdown-menu.show
	{
		display: none !important;
	}

}

@import url('https://fonts.googleapis.com/css2?family-Poppins:wghta200;300;400;500;600;700&display=swap');
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	background-color: #FAF6F6;
	font-family: 'Poppinss, sans-serif;
}
.content .box .icon{
		color: #322F2F;
		font-size: 35px;
}

.content .box .counter{
	color: #322F2F;
	font-size: 25px;
	font-weight: 500;
	font-family: sans-serif;
}

.content .box .text{
	color: #322F2F;
	font-weight: 500;
	font-family: Lucida Console;
	
}

.counter-up{
	padding: 0 50px;
	}

.counter-up .content{
	z-index: 1;
	position: relative;
	display: flex;
	margin-top: 50%
	width: 1000%; 
	height: 0%;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between;
	}	

.counter-up .content .box{
		
		width: calc(25% - 30px);
		border-radius: 5px;
		display: flex;
		align-items: center;
		justify-content: space-evenly;
		flex-direction: column;
		padding: 20px;
}
@media screen and (max-width:1036px){
	.counter-up{
		padding: 50px 50px 0 50px;
	}
	.counter-up .content .box{
		width: calc(50%-30px);
		margin-bottom: 50px;
		
	}
}

}


@media screen and (max-width:580px){
	.counter-up .content .box{
		width: 100%;
		
		}
	}

@media screen and (max-width:500px){
		.counter-up{
			padding: 30px 20px 0 20px;
		}
}



.container{
		width:90%;
		margin:50px auto;
		}

.heading{

		text-align: center;
		font-size:30px;
		margin-bottom:50px;
	}

.row{
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	flex-flow: wrap;

}

.card{
	width:30%;
	background:#fff;
	border:1px solid #ccc;
	margin-bottom:50px;
	transition:0.3s;

}
/*.card-header{
		text-align: center;
		padding: 50px 10px;
		background: linear-gradient(to right,#ff416c, #ff4b2b);
		color: #fff;

}
*/
.card-body{
	padding: 30px 20px;
	text-align: center;
	font-size: 18px;
}


.card-body .btn{ 
			
		color:#fff;
		text-align: center;
		background: linear-gradient(to right, #3D9EAB, #3D9EAB);
		margin-top: 3-px;
		text-decoration: none;
		padding: 5px 15px;
		

}

.card:hover{
		transform: scale(1.05);
		box-shadow: 0 0 40px -10px rgba(0,0,0,0.25);
}

/*responsive media queries*/
@media and (max-width:1000px){
	.card{
		width: 40%;
		}

}


@media and (max-width:620px){
	.container{
		width:100%;
		}
	.heading{
		padding: 20px;
		font-size: 20px;
		}
	.card{
		width: 40%;
		}

}

.b{
	background-color: #808080; 
}
.bd{
	background-color: #476468;
}
.about-us {
            padding: 30px 0;
		background-color: #696969;
        }
        .cont {
            max-width: 1200px;
            margin: 0 auto;
		background-color: #696969;
        }
        .about-us h2 {
            font-size: 28px;
            margin-bottom: 20px;
		background-color:#696969;
        }
        .about-us p {
            font-size: 16px;
            line-height: 1.5;
		background-color:#696969;
        }
        .contact-details {
            margin-top: 20px;
		background-color:#696969;
        }
        .contact-details p {
            margin-bottom: 5px;
		background-color:#696969;
		
        }
	h3{
	background-color: #696969;
	}
}
.bcd{
	background-color:#808080;
}
</style>
</head>

<body>

<a name="home"></a>
<section>
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a href="home1.php"><img src="logo.png"  width="120" height="60"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Blue collars
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="plumber.php">Plumbers</a></li>
            <li><a class="dropdown-item" href="carpenters.php">Carpenters</a></li>
           <!-- <li><hr class="dropdown-divider"></li>-->
            <li><a class="dropdown-item" href="electrician.php">Electricians</a></li>
          </ul>
        </li>
      <!--  <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>-->
	
	
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>

	<li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="dum.html">Create Account</a>
        </li>

	<li class="nav-item">
	<a class="nav-link" href="login1.html">Logout</a>
	</li>
      </ul>
     
    </div>
  </div>
</nav>
</section>
<!--carousel-->
<section>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="plumber.jpg" class="d-block w-100" alt="..." height="470">
    </div>
    <div class="carousel-item">
      <img src="electr4.jpg" class="d-block w-100" alt="..." height="470">
    </div>
    <div class="carousel-item">
      <img src="carp.jpg" class="d-block w-100" alt="..." height="470">
    </div>
  </div>
</div>
</section>
<!--wrapper-->

<section>
<div class="counter-up">
<div class="content">


	<div class="box">
	<div class="icon">
		<i class="fa-sharp fa-solid fa-face-smile"></i>
		<!--<i class="fa-regular fa-face-smile"></i>-->
	</div>
		<div class="counter">
		520
		</div>
		<div class="text">Happy users
		</div>
	</div>


	<div class="box">
	<div class="icon">
		<i class="fa-solid fa-user"></i>
	</div>
		<div class="counter">
		200
		</div>
		<div class="text">Verified Experts
		</div>
	</div>


	<div class="box">
	<div class="icon">
		<i class="fa-solid fa-layer-group"></i>
		<!--<i class="fa-regular fa-face-smile"></i>-->
	</div>
		<div class="counter">
		3
		</div>
		<div class="text">Categories
		</div>
	</div>

	
</div>
</div><br/><br/><br><br/>
</section>

<section>
<script>
$(document).ready(function(){
	$('.counter').counterUp({
		delay:10,
		time:1200
	});
})

</script>

</section>


<section>
<!--cards-->
<a name="services" ></a>
<div class="container">

	<div class="heading">
	<h1>Find Reliable Professionals

</h1>
	</div>

	<div class="row">

		<div class="card">
			
			<div class="card-body">
			<img src="plumber2.jpg" width="100%" height="100%">
			<div class="card-header">
			<h4>plumber</h4>
			</div>
			<p>Find licensed plumbers for all your plumbing needs.</p>
			
			<a href="plumber.php" class="btn">Visit</a>
			</div>
		</div>

		<div class="card">
			
			<div class="card-body">
			<img src="carp2.jpg" width="100%" height="100%">
			<div class="card-header">
			<h4>Carpenter</h4>
			</div>
			<p>Hire skilled carpenters for your woodworking projects.</p>
			
			<a href="carpenters.php" class="btn">Visit</a>
			</div>
		</div>

		<div class="card">
			
			<div class="card-body">
			<img src="electr2.jpeg" width="100%" height="100%">
			<div class="card-header">
			<h4>Electrician</h4>
			</div>
			<p>Get professional electricians to handle your electrical work.</p>
			
			<a href="electrician.php" class="btn">Visit</a>
			</div>
		</div>
	</div>

</div>
</section>
<br/><br/><br/>
<section>
<a name="about"></a>
<div class="footer">	
<center  class="b"><a href="#home" class="btn btn-transparent">Back to home</a></center>
</section>


	
	<footer class="about-us" style="color:white">
    <div class="cont">
        <h2>About Us</h2>
        
    
    <p>Welcome to our Find Assistance Webspace, your go-to destination for finding the nearest and most reliable plumbers, carpenters, and electricians in your area. We understand the importance of having skilled professionals at your fingertips when you need them the most.</p>

    <h2>Our Mission</h2>
    <p>At Your Handyman Locator, our mission is to make home maintenance hassle-free. We strive to connect you with skilled and trustworthy tradespeople who can address your plumbing, carpentry, and electrical needs promptly and efficiently. Your satisfaction and peace of mind are our top priorities.</p>

    <h2>How It Works</h2>
    <p>Using our platform is simple. Just enter your location, select the service you need, and browse through a list of qualified professionals near you. Each handyman in our network is vetted for their expertise and reliability, ensuring that you get the best service possible.</p>

    <h2>Contact Us</h2>
    <p>If you have any questions, feedback, or need assistance, feel free to reach out to our dedicated support team. We are here to help you make the most of Your Handyman Locator experience.</p>
        <div class="contact-details">
            
            <p>Email: FindAssistance@gmail.com</p>
            <p>Phone: (123) 456-7890</p>
            <p>Address: Idupulapaya, Vempalli, Kadapa District</p>
		<section>
		
	<p  class="bcd">© 2023 Copyright FindAssistance.com. All Rights Reserved.</p></section>
        </div>
    </div>
</footer>


</body>
</html>
