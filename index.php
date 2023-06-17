<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <title>stkpush</title>
</head>

<style>
.card-img-top{
	width:200px;
	height:200px;
}
</style>

<body>
<!-- Package Showcase -->
<section id="product" class="bg-dark p-5">
    <div class="conainer">
        <h1 class="text-center text-light">Support Our Work</h1>
    </div>
	
	<div class="bg-primary  text-light text-center"><?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    </div>
	
<div class="container">
<div class="row">
<!-- Silver Package -->
    <div class="col">
		<div class="card bg-light">
		  <div class="card-body text-center">
			<div class="h1 mb-3">
			<form class="form" action="action.php" method="POST">
				<img class="card-img-top border-round" src="image/bronze.jpg" alt="Product image">
			</div>
			<h3 class="card-title mb-3 text-primary">Ksh. 100</h3>
			<h4 class="card-title mb-3 text-primary">Bronze Package</h4>
                <pclass="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eveniet, magnam modi dolorem omnis sunt quibusdam dolores at aperiam dicta?
                </p>
			    <input type="hidden" class="form-control" name="amount" value="100" required>
				<input type="number" class="form-control" name="phone" value="" placeholder="Mpesa Phone Number" required>
				<button type="submit " name="submit" class="btn btn-info mt-6">Donate</button>
			</form>
		  </div>
		</div>
    </div>
	
	<!-- Silver Package -->
    <div class="col">
		<div class="card bg-light">
		  <div class="card-body text-center">
			<div class="h1 mb-3">
			<form class="form" action="action.php" method="POST">
				<img class="card-img-top border-round" src="image/silver.jpg" alt="Product image">
			</div>
			<h3 class="card-title mb-3 text-primary">Ksh. 500</h3>
			<h4 class="card-title mb-3 text-primary">Silver Package</h4>
                <pclass="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eveniet, magnam modi dolorem omnis sunt quibusdam dolores at aperiam dicta?
                </p>
			    <input type="hidden" class="form-control" name="amount" value="500" required>
				<input type="number" class="form-control" name="phone" value="" placeholder="Mpesa Phone Number" required>
				<button type="submit " name="submit" class="btn btn-info mt-6">Donate</button>
			</form>
		  </div>
		</div>
    </div>
	
	<!-- Gold Package -->
    <div class="col">
		<div class="card bg-light">
		  <div class="card-body text-center">
			<div class="h1 mb-3">
			<form class="form" action="action.php" method="POST">
				<img class="card-img-top border-round" src="image/gold.jpg" alt="Product image">
			</div>
			<h3 class="card-title mb-3 text-primary">Ksh. 1000</h3>
			<h4 class="card-title mb-3 text-primary">Gold Package</h4>
                <pclass="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eveniet, magnam modi dolorem omnis sunt quibusdam dolores at aperiam dicta?
                </p>
			    <input type="hidden" class="form-control" name="amount" value="1000" required>
				<input type="number" class="form-control" name="phone" value="" placeholder="Mpesa Phone Number" required>
				<button type="submit " name="submit" class="btn btn-info mt-6">Donate</button>
			</form>
		  </div>
		</div>
    </div>
</div>
	  
</div>
</section>

</body>

<script
	  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
	  integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
	  crossorigin="anonymous">
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6260541b7b967b11798badb7/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>