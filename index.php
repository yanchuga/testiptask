<?php 
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$groups = [
	["logo"=>"logo1.jpeg",
	"paragraph"=>"Lorem ipsum111 dolor sit amet consectetur adipisicing elit. Vero veniam ducimus aspernatur rem vel sunt, pariatur omnis corporis deleniti necessitatibus molestias adipisci esse aut quidem, aperiam repellendus! Molestias, eveniet corporis.",
	"footer"=>"footer1 copyright1"],
	["logo"=>"logo2.jpeg",
	"paragraph"=>"Lorem ipsum222 dolor sit amet consectetur adipisicing elit. Vero veniam ducimus aspernatur rem vel sunt, pariatur omnis corporis deleniti necessitatibus molestias adipisci esse aut quidem, aperiam repellendus! Molestias, eveniet corporis.",
	"footer"=>"footer2 copyright2"],
	["logo"=>"logo3.jpeg",
	"paragraph"=>"Lorem ipsum333 dolor sit amet consectetur adipisicing elit. Vero veniam ducimus aspernatur rem vel sunt, pariatur omnis corporis deleniti necessitatibus molestias adipisci esse aut quidem, aperiam repellendus! Molestias, eveniet corporis.",
	"footer"=>"footer3 copyright3"]
];
$rand_group = array_rand($groups);

   foreach($groups[$rand_group] as $key => $value ) {
	  $logo = $groups[$rand_group]["logo"];
	  $paragraph = $groups[$rand_group]["paragraph"];
	  $footer = $groups[$rand_group]["footer"];
		break;
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<link rel="icon" href="favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="favicon.png" type="image/x-icon">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="scripts/bootstrap.min.css" media="none" onload="if(media!='all')media='all'">
	<link rel="stylesheet" href="style.css?v1675583219" media="none" onload="if(media!='all')media='all'">

	<meta name="msapplication-TileColor" content="#ffffff">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<script src="https://learnwithyan.com/wp-content/themes/blog/scripts/jquery.min.js"></script>
	<meta name="theme-color" content="#F59E4C">

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TEST task</title>
</head>

<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
					<img src="src/<?php echo $logo; ?>" style="display: inline-block;">
				</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Block 1</a></li>
				<li><a href="#">Block 2</a></li>
				<li><a href="#">Block 3</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 image-form">
				<div><a href="#"><img src="src/flowers.jpg" alt="flowers"></a>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae illo a quas blanditiis accusamus quibusdam
						qui omnis recusandae, illum voluptatem nihil nobis saepe, dolorum molestias, rerum optio doloribus
						voluptatum quod.</p>
				</div>
				<div>
					<!-- 111111111111111111111111111111 -->
				</div>
			</div>
		</div>
		<div class="row paragraphs">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 paragraphs">
				<p><?php echo $paragraph ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 video-form">
				<div>
					<video controls autoplay>
						<source src="src/nature.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae illo a quas blanditiis accusamus quibusdam
						qui omnis recusandae, illum voluptatem nihil nobis saepe, dolorum molestias, rerum optio doloribus
						voluptatum quod.</p>
				</div>
				<div>
					<form>
						<div class="success"></div>
						<div class="form-group">
							<label for="exampleInputFname">Firstname</label>
							<input type="text" class="form-control" id="fname" placeholder="Enter Firstname">
							<small class="form-text text-muted">any letter + numbers</small>
						</div>
						<div class="form-group">
							<label for="exampleInputLname">Lastname</label>
							<input type="text" class="form-control" id="lname" placeholder="Enter Lastname">
							<small class="form-text text-muted">any letter + numbers</small>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="text" class="form-control" id="email" placeholder="Enter email">
							<small class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPhone">Phone</label>
							<input type="text" class="form-control" id="phone" placeholder="Enter phone">
							<small class="form-text text-muted">numbers only</small>
						</div>

						<button type="submit" class="btn btn-primary submit">Submit</button>
					</form>

				</div>
			</div>
		</div>
		<div class="row footer-row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<footer>
					<div class="copyright">
						<p>
							<a href="http://www.copyright.com/">© 2023 <p><?php echo $footer ?></p>

							</a>
						</p>
					</div>
				</footer>
			</div>
		</div>
	</div>
</body>
<script>
$(document).ready(function() {

	$('.submit').on("click", function() {

		var form = $(this).closest('form');

		$.post("src.php", form.serialize(), function(response) {
			// console.log(response)
			if (response == 'You are registered') {
				form.replaceWith(response);
			}
		});

		return false;

	});
});
// 	var datastring = $("#preview_form").serialize();
// 	$.ajax({  
//     type: 'POST',  
//     url: 'src.php', 
//     data: { fname: this.title },
//     success: function(response) {
//         content.html(response);
//     }
// });
</script>

</html>