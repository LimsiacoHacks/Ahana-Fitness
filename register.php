<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
  <!-- Modal for create members account-->
  <div class="reg-box" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
          
        </div> 
        <div class="modal-body">
          <form action="process.php" method="POST" enctype="multipart/form-data">
          

          <label>FIRST NAME</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input type="text" class="form-control" required name="firstname" placeholder=" Enter First Name...">
          </div></p>

          <label>LAST NAME</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input type="text" class="form-control" required name="lastname" placeholder=" Enter Last Name...">
          </div></p>

      <label>AGE</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input type="text" class="form-control" required name="age" placeholder=" Enter Age...">
          </div></p>

          <label>EMAIL</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
            <input type="email" class="form-control" required name="email" placeholder=" Enter Email...">
          </div></p>

          <label>PASSWORD</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
            <input type="password" class="form-control" required name="password" placeholder=" Enter Password...">
          </div></p>
          
        </div>
        <div class="modal-footer">
          <a href="login.php" class="btn btn-primary">Back</a>
          <input type="submit" class="btn btn-success" name="create_account" value="CREATE"> 
      
        </div>
          </form>
      </div>
    </div>
  </div>

  <script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>