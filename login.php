<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="/template/login_styles.css">
	</head>
	<body>
		<section>
		<div class="form-bos">
			<div class="form-value">
				<form action="/application/login__application.php" method="post">
					<h2>Login</h2>
					<?php if(isset($_GET['error'])) { ?>
<div class="alert alert-danger" role="alert">
                <?php echo $_GET['error'];?>
                        </div>

     <?php } ?>
					<div class="input-box">
						<ion-icon name="mail-outline"></ion-icon>
						<input name="username" type="text" required>
						<label for="username">Username</label>
					</div>

					<div class="input-box">
						<span onclick="togglePassword()"><ion-icon name="eye-outline"  id="visble"></ion-icon></span>
						<input type="password" id="pass" name="user_password" required>
						<label for="pwd">Password</label>
					</div>

					<div class="forget">
						<label for="">
							<input type="checkbox"> Remember Me.
							<a href="?error=contact Mohammed Alnahdi">Forget Password</a>
						</label>
					</div>

					<button class="button-17"> Login </button>

					<div class="regester">
						<label for="">
							Don't have an account?
							<a href="application/register.php">Regester</a>
						</label>
					</div>

				</form>

			</div>

		</div>

		</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
  function togglePassword() {
    var passwordInput = document.getElementById("pass");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }
</script>
	</body>
</html>
