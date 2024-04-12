<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="../css/register.css">
</head>

<body>
  <div class="container">
    <h1 class="title">Welcome to eCommerce!</h1>
    <div class="area">
      <form action="../actions/register_user.php" method="POST" data-parsley-validate>
        <h2>Create an Account</h2>
        <div class="field">
          <input type="text" id="name" name="fname" placeholder=" First Name" required>
        </div>
        <div class="field">
          <input type="text" id="name" name="lname" placeholder=" Last Name" required>
        </div>
        <div class="field">
          <input type="text" id="tel" name="tel" placeholder=" Phone Number" required>
        </div>

        <div class="field">
          <input type="email" id="email" name="email" placeholder="Email" required style="height: 20;">
        </div>
        <div class="field">
          <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="field">
          <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm password" required>
        </div>
        <div class="checkbox">
          <input type="checkbox" id="terms" name="terms" required>
          <label for="terms" style="text-align: center;">I agree to the terms and conditions.</label>
        </div>
        <button type="submit" name="register" method=POST>Sign Up</button>
      </form>
    </div>


  

    
  </div>

  
  <script src="script.js"></script>
</body>
</html>