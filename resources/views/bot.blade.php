<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitChat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylex.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
		<div class="banner">
			<div class="intro">
				<h2>Be Strong and Healthy!</h2>
				
				
			</div>
		</div>
	</header>
	<div class="row">
		<div class="card" style="color: white;background: var(--secondary-color);">
			<h2 style="color: black;">ABOUT FITCHAT</h2>
			<p>FitChat, your personal health and lifestlye bot. You can ask anything about health and lifestyle, from effective workout plan to healthy dietary stratagem.</p>
			
		</div>
		<div class="card" style="background: white;">
			<h2 style="color: var(--primary-color);">FitChat Developers</h2>
			<p style="color: var(--secondary-color);">1.John Rey Tolosa</p>
			<p style="color: var(--secondary-color);">2.John Matthew Lirio</p>
			<p style="color: var(--secondary-color);">3.JM Fuentes</p>
			
		</div>
		<div class="card" style="color: white;background: var(--primary-color);">
			<h2>Contact Info</h2>
			<p>1.xxx</p>
			<p>2.xxx</p>
			<p>3.xxx</p>
			
		</div>
	</div>

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

    
<div class="wrapper">
        <div class="title">Talk to chamate</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>








<script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>














</body>
</html>