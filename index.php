<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie.edge" />
  <title>Login Hill Chipper</title>

  <style>
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(45deg, #007bff, #00ff7f); /* Ganti dengan warna gradasi sesuai kebutuhan */
      color: #fff;
      height: 100vh;
    }

    #intro {
      position: relative;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    form {
      background: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      padding: 50px;
      width: 100%;
      max-width: 400px;
    }

    form h2 {
      text-align: center;
      color: #000;
    }

    .form-outline {
      position: relative;
      margin-bottom: 20px;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    label {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 15px;
      color: #999;
      font-size: 16px;
      transition: all 0.3s ease-out;
      pointer-events: none;
    }

    input:focus+label,
    input:not(:placeholder-shown)+label {
      top: 5px;
      font-size: 14px;
      color: #333;
    }

    .position-relative {
      position: relative;
    }

    .row {
      margin-bottom: 20px;
    }

    .btn {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
    }

    .text-center {
      text-align: center;
      color: black;
    }

    .p-3 {
      background-color: rgba(0, 0, 0, 0.2);
      color: #333;
    }

    .align-items-center {
      display: flex;
      align-items: center;
    }

    .copyright {
      position: fixed;
      bottom: 0;
      width: 100%;
      text-align: center;
      background-color: rgba(0, 0, 0, 0.2);
      color: #333;
      padding: 10px 0;
    }
  </style>
</head>

<body>
  <!-- Background color -->
  <div id="intro">
    <form method="post" action="login_function.php" class="rounded shadow-5-strong p-5">
      <h2 style="color: black;">Login</h2>
      <!-- Username input -->
      <div class="form-outline mb-4">
        <input type="text" name="username" id="username" required class="form-control" />
        <label for="username">Username</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4 position-relative">
        <input type="password" name="password" id="password" required class="form-control pr-5" />
        <label for="password">Password</label>
        <i id="password-toggle-icon" class="fas fa-eye-slash position-absolute end-0 top-50 translate-middle-y" style="cursor: pointer;"></i>
      </div>

      <!-- Submit button -->
      <button type="submit" name="login" value="Login" class="btn btn-primary btn-block">Sign in</button>
      <p class="text-center">Belum punya akun? <a href="register.php">Registrasi</a></p>
    </form>
  </div>

  <!-- Copyright -->
  <div class="copyright">
    <p>Bynzz. © 2023 Copyright</p>
  </div>
  <!-- Copyright -->
</body>

</html>
