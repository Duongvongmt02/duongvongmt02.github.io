
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Auto talk</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
	<?php include 'data.php'; ?>
	<div class="container">
  
   		<div class="col-sm-6 offset-sm-3 chat-border" >
   			<!-- <div class="row"> -->
	   			<div class="mess-content" style="">
	   				<div class="mess-bot">
	   					<div id="mess-bot--content" style="">
	   						<?php echo "<span>" . $repDefault . "</span>";?>	
	   					</div>
	   				</div>
	   				
	   				<div class="mess-cust">
	   					<div id="mess-cust--content" style="">
	   						<?php echo "<span>" . $mess . "</span>" ?>
	   					</div>
	   				</div>
	   				<div class="mess-bot">
	   					<div id="mess-bot--content">
	   						<?php echo "<span>" . $rep . "</span>"; ?>
	   					</div>
	   				</div>
	   			</div>
	   		<!-- </div> -->
   				
   			<div class="mess-input">
   				<form name="form" method="post"  id="formAction" 	 style="margin-top: 15px; width: 100%;">
    				<input type="text" class="form-control" id="inputMess" name="inputMess" placeholder="write something" style="">
    				<button type="submit" class="btn btn-primary" style="">send</button>
   				</form>
   			</div>
   		</div>
	</div>
</body>
</html>