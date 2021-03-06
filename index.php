

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8" >
	<title>fountaindesign</title>
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="#">Fountain Design</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#service">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      
    <!--  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php">logout</a>
          <a class="dropdown-item" href="#contact">contact</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#dataview">VIEW DATA</a>
        </div>
      </li>
     
    </ul>-->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/front1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>PROJECT 2</h5>
        <p>ST DA GAMBIAN DREAM</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/front2.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>PROJECT 1</h5>
        <p>ST Gambian Dream</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/siika.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>CEO</h5>
        <p>Fountain Design.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>


			

<div class="container-fluid">	
	<div class="row">
		<div class="col-lg-6 col-12">
			<img src="images/sidepic.jpg" alt="pointersStudio" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-12">
			<h2 class="display-4" style="font-family: sans-serif;">Fountain Design</h2>
			<p class="py-4">We are a graphic design body that provides you the best of designs with great ideas and creativities combined.. Try us and you won’t regret it.</p>
			<a href="https://www.instagram.com/fountain_designs/" class="btn btn-success">SEE MORE</a>
		</div>
	</div>
</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center" id="service">Our Services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
                   <img src="images/WhatsApp Image 2020-05-14 at 02.55.35.jpeg" style="height: 50vh"  class="card-img-top" alt="..." >
                   <div class="card-body">
                        <h5 class="card-title">Design</h5>
                         <p class="card-text">We design all types of posters and flayers</p>
                         <a href="https://images.search.yahoo.com/search/images;_ylt=AwrExo8Uo7xe7Z8AbguJzbkF;_ylu=X3oDMTBsZ29xY3ZzBHNlYwNzZWFyY2gEc2xrA2J1dHRvbg--;_ylc=X1MDOTYwNjI4NTcEX3IDMgRhY3RuA2NsawRjc3JjcHZpZANSNUlJb3pFd0xqS3FOWVZOWHBpN25BWFNORFl1TWdBQUFBRGZZZXN0BGZyA21jYWZlZQRmcjIDc2EtZ3AEZ3ByaWQDUTJTYlhpZklTOWVoMWZrMVFwWTJxQQRuX3N1Z2cDMTAEb3JpZ2luA2ltYWdlcy5zZWFyY2gueWFob28uY29tBHBvcwMwBHBxc3RyAwRwcXN0cmwDBHFzdHJsAzYEcXVlcnkDcG9zdGVyBHRfc3RtcAMxNTg5NDIwODM5?p=poster&fr=mcafee&fr2=sb-top-images.search&ei=UTF-8&n=60&x=wrt" class="btn btn-primary">See More</a>
                    </div>
                </div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
                   <img src="https://tse3.mm.bing.net/th?id=OIP.fwuM8zFEXKfCmDj60O5xKgHaHv&pid=Api&P=0&w=300&h=300" style="height: 50vh" class="card-img-top" alt="...">
                   <div class="card-body">
                        <h5 class="card-title">Hair Cut</h5>
                         <p class="card-text">We do heir cut for all styles</p>
                         <a href="https://images.search.yahoo.com/search/images;_ylt=AwrExlQDmrxegSMAoI2JzbkF;_ylu=X3oDMTBsZ29xY3ZzBHNlYwNzZWFyY2gEc2xrA2J1dHRvbg--;_ylc=X1MDOTYwNjI4NTcEX3IDMgRhY3RuA2NsawRjc3JjcHZpZANLYTVDRmpFd0xqS3FOWVZOWHBpN25BTGxORFl1TWdBQUFBQlZDV1NGBGZyA21jYWZlZQRmcjIDc2EtZ3AEZ3ByaWQDdjZjcDFGTVdRSTZpM2E2ZDRZbE9JQQRuX3N1Z2cDMARvcmlnaW4DaW1hZ2VzLnNlYXJjaC55YWhvby5jb20EcG9zAzAEcHFzdHIDBHBxc3RybAMEcXN0cmwDMzgEcXVlcnkDYmxhY2slMjBtZW4lMjBhbmQlMjB3b21lbiUyMGhhaXIlMjBjdXQEdF9zdG1wAzE1ODk0MTg1MTI-?p=black+men+and+women+hair+cut&fr=mcafee&fr2=sb-top-images.search&ei=UTF-8&n=60&x=wrt" class="btn btn-success">See More</a>
                    </div>
                </div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
                   <img src="https://i.pinimg.com/originals/50/c2/6c/50c26cca38c5f58feb6057660ec1e7d4.jpg" style="height: 50vh"  class="card-img-top" alt="...">
                   <div class="card-body">
                        <h5 class="card-title">Tailoring</h5>
                         <p class="card-text">We design and sew cloths</p>
                         <a href="https://images.search.yahoo.com/search/images;_ylt=AwrExdwymLxeOEwAoSCJzbkF;_ylu=X3oDMTBsZ29xY3ZzBHNlYwNzZWFyY2gEc2xrA2J1dHRvbg--;_ylc=X1MDOTYwNjI4NTcEX3IDMgRhY3RuA2NsawRjc3JjcHZpZANsd0NDOWpFd0xqS3FOWVZOWHBpN25BVmhORFl1TWdBQUFBQTVVbm80BGZyA21jYWZlZQRmcjIDc2EtZ3AEZ3ByaWQDcC5GNnptSDhTMFdlbFBqbmlmeDRvQQRuX3N1Z2cDMARvcmlnaW4DaW1hZ2VzLnNlYXJjaC55YWhvby5jb20EcG9zAzAEcHFzdHIDBHBxc3RybAMEcXN0cmwDNDEEcXVlcnkDYWZyaWNhbiUyMGRyZXNzJTIwZm9yJTIwbWVuJTIwYW5kJTIwd29tZW4EdF9zdG1wAzE1ODk0MTgyNTY-?p=african+dress+for+men+and+women&fr=mcafee&fr2=sb-top-images.search&ei=UTF-8&n=60&x=wrt" class="btn btn-danger">See More</a>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center" id="gallary">Our Gallary</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 ih-item square effects4">
				<img src="images/WhatsApp Image 2020-05-14 at 02.53.50 (1).jpeg" alt="images" class="img-fluid pb-4" style="height: 70vh; width: 66vh">
				<div class="ova-txt">
					<h3 class="title">design</h3>
					<span>project</span>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/front 3.jpeg" alt="images" class="img-fluid pb-4" style="height: 70vh; width: 66vh">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/WhatsApp Image 2020-05-14 at 02.53.50.jpeg" alt="images" class="img-fluid pb-4" style="height: 70vh; width: 66vh">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/front 3.jpeg" alt="images" class="img-fluid pb-4" style="height: 70vh; width: 66vh">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/pointerslaneicon.jpg" alt="images" class="img-fluid pb-4" style="height: 70vh; width: 66vh">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/WhatsApp Image 2020-05-14 at 02.54.30.jpeg" alt="images" class="img-fluid pb-4" style="height: 70vh; width: 66vh">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/siika.jpeg" alt="images" class="img-fluid pb-4" style="height: 70vh; width: 66vh">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/WhatsApp Image 2020-05-14 at 02.53.50.jpeg" alt="images" class="img-fluid pb-4" style="height: 70vh; width: 66vh">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/pointers lane.jpg" alt="images" class="img-fluid pb-4" style="height: 70vh; width: 66vh">
			</div>
			
		</div>
	</div>
</section>
<p id="displaydata"></p>
<h2 id="messagedisplay"></h2>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center" id="contact">Contact</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="index.php" method="post">
			<div class="form-group">
				<label for="">Full Name</label>
				<input type="text" name="user" autocomplete="off" class="form-control" required="">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" autocomplete="off" class="form-control" required="">
			</div>
			<div class="form-group">
				<label for="">Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control" required="">
			</div>
			<div class="form-group">
				<label for="">Comments</label>
				<textarea name="comment" class="form-control" required=""></textarea> 
			</div>
			<button type="submit" class="btn btn-primary" name="entcontact">Submit</button>
			<br><br><br><br><hr>
		</form>
	</div>

</section>
<section>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15526.421403533957!2d-16.6653586379883!3d13.374798049474506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec298656b1b52a5%3A0xf8a5feb5f5375cda!2sBanjulinding%2C%20The%20Gambia!5e0!3m2!1sen!2s!4v1589568141228!5m2!1sen!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-sx-12 segment-one md-mb-30 sm-mb-30">
					<h2>fountain</h2>
					<p>Access thousands of<br>nice posters, flyers <br> hair cuts african dress <br> with fountain design</p>
					
			    </div>
				<div class="col-md-3 col-sm-6 col-sx-12 segment-two md-mb-30 sm-mb-30">
					<h2>Our Services</h2>
					    <ul>
						    <li><a href="#">Poster Design</a></li>
						    <li><a href="#">Flyer Design</a></li>
						    <li><a href="#">Hair Cut</a></li>
						    <li><a href="#">Tailoring</a></li>
						    <li><a href="#">T-shirt Printing</a></li>
					    </ul>
				</div>
				    <div class="col-md-3 col-sm-6 col-sx-12 segment-three md-mb-30 sm-mb-30">
					<h2>Follow us on</h2>
					<p>please follow us on our social media platforms to be updated about our activities</p>
						<ul>
			                <li><a href="https://www.facebook.com/Fountain-Designs-112788530428241/?__tn__=%2Cd%2CP-R&eid=ARB5YJXf6P2X45I9JNySf-OeLhpTZz7G5jcpgVYg-4c19iWs9tUJ5WPc6ADneOEuN0iocczLp3DBG68f" target="blank"><i class="fa fa-facebook"></i></a></li>
			                <li><a href="https://www.instagram.com/fountain_designs/" target="blank"><i class="fa fa-instagram"></i></a></li>
			                <li><a href="#" target="blank"><i class="fa fa-whatsapp"></i></a></li>
			                <li><a href="#" target="blank"><i class="fa fa-google-plus"></i></a></li>
			                <li><a href="#" target="blank"><i class="fa fa-youtube"></i></a></li>


		                </ul>
					</div>
					<div class="col-md-3 col-sm-6 col-sx-12 segment-four md-mb-30 sm-mb-30">
						<h2>Our Newletter</h2>
						<p>fksdfdfn,dmfnjdsnf,sdmfnds,mf <br> njrnfenfjwefeefjhjfefhweuehfdbfhdbhd</p>
						<form action="">
							<input type="email">
							<input type="submit" value="subscribe">
						</form>
					</div>
					
						
			</div>
		</div>
	</div>
	<p class="footer-bottom-text">All Rights reserved by &copy; PointersLane2020</p>
</footer>

<!--<footer id="footer">
	<div class="social-menu">
		<ul>
			<li><a href="#" target="blank"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#" target="blank"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#" target="blank"><i class="fa fa-whatsapp"></i></a></li>
			<li><a href="#" target="blank"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="#" target="blank"><i class="fa fa-youtube"></i></a></li>
		</ul>
	</div>	
</footer>
-->
</body>
</html>
<?php 

$con = mysqli_connect('localhost:8080','root');

if($con){
	//echo "connection successful";
}else{
	echo "No connection";
}
if (isset($_POST['entcontact'])){
	mysqli_select_db($con, 'intprogram');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into contact (user, email, mobile, comment) values ('$user', '$email', '$mobile', '$comment')";

mysqli_query($con, $query);
echo "$query";
header('location:index.php');

}
