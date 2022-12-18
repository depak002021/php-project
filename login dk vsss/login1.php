<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet/scss" type="text/css" href="login1.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css'>
    <title>Document</title>
    <script>
        var button = document.getElementById('mainButton');
    
    var openForm = function() {
    button.className = 'active';
    };
    
    var checkInput = function(input) {
    if (input.value.length > 0) {
        input.className = 'active';
    } else {
        input.className = '';
    }
    };
    
    var closeForm = function() {
    button.className = '';
    };
    
    document.addEventListener("keyup", function(e) {
    if (e.keyCode == 27 || e.keyCode == 13) {
        closeForm();
    }
    });
    </script>
</head>
<body>

 <section class=" container mb-6 lg-2>   
<div id="mainButton">
   
	<div class="btn-text" onclick="openForm()">Sign In</div>
	<div class="modal">
		<div class="close-button" onclick="closeForm()">x</div>
		<div class="form-title">Sign In</div>
		<div class="input-group">
			<input type="text" id="name" onblur="checkInput(this)" />
			<label for="name">Username</label>
		</div>
		<div class="input-group">
			<input type="password" id="password" onblur="checkInput(this)" />
			<label for="password">Password</label>
		</div>
		<div class="form-button" onclick="closeForm()">Go</div>
		<div class="codepen-by">CodePen by Cole Waldrip</div>
	</div>
</div>
<div class="codepen-by">CodePen by Cole Waldrip</div>
</section>

    
</body>
</html>