<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FitChat</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="stylex.css">

</head>
 
<body>
	<header>
		<nav>
			<h2 class="logo"></h2>
			<div class="links">
				<a href="bot"><li>FitHome</li></a>
				<a href="fitchat"><li>Talk to FitChat</li></a>
			</div>
		</nav>
		<div class="one">
			<div class="introx">
				<h2>Be Strong and Healthy!</h2>
				
				
			</div>
		</div>
	</header>
	
	<div class="loader"></div>

	<script>
		window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});

	</script>



  


</body>
</html>