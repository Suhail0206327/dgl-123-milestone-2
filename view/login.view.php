<?php 



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href ="style.css" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <title>Login Page</title>
</head>
<body class = "login">
  <main class = "login-container">

<div class = "login-image" ></div>
<div class="login-form">
  <button>
  <i class="fa-solid fa-chevron-left"></i>
  <div></div>
  <p>Back to website</p>
  </button>
  <h1>Welcome!</h1>
  <a>Create a free account</a>

<form  method = "POST" class="login-form-1 ">
  
  <label for="email">Email</label><br>
  <input type="text" id="email" name="email" require value="<?= $_POST['email']?? '' ?>"><br>
  <label for="password">password</label><br>
  <input type="password" id="password" name="password" require value = "<?= $_POST['password'] ?? ''?>"><br>
  <a>Forgot password?</a> 
  <input href="controllers/index.php" class = " primary-button" type="submit" value="Log in">
  <button alt class="secondary-button">
  <img width="20" height="20" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/>
 <p>Login in with Facebook</p>
 </button>
 <button  class="secondary-button">
 <img width="20" height="20" src="https://img.icons8.com/color/48/google-logo.png" alt="google-logo"/>
 <p>Login in with Google</p>
 
 </button>
</form>
<p><?= $errors['body'] ?? '' ?></p>
</div>




  </main>
</body>
</html>