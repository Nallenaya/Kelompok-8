<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | Sistem Informasi Desa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">

  <style>
    * {
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      margin: 0;
      min-height: 100vh;
      position: relative;
      overflow: hidden;
    }

    /* BACKGROUND BLUR */
    body::before {
      content: "";
      position: absolute;
      inset: 0;
      background:
        linear-gradient(
          rgba(30, 58, 138, 0.6),
          rgba(37, 99, 235, 0.6)
        ),
        url("/image/auth-login.jpg") center / cover no-repeat;
      filter: blur(12px);
      transform: scale(1.1);
      z-index: -1;
    }

    .auth-wrapper {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      z-index: 1;
    }

    .auth-container {
      width: 1100px;
      height: 600px;
      background: #f8fafc;
      border-radius: 28px;
      display: flex;
      overflow: hidden;
      box-shadow: 0 40px 80px rgba(0,0,0,.35);
    }

    /* LEFT */
    .auth-left {
      width: 50%;
      padding: 80px 70px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .auth-left h1 {
      font-size: 36px;
      font-weight: 700;
      margin-bottom: 10px;
      color: #1e3a8a;
    }

    .auth-left p {
      color: #64748b;
      margin-bottom: 35px;
    }

    .form-group {
      margin-bottom: 18px;
    }

    .form-group input {
      width: 100%;
      padding: 14px 16px;
      border-radius: 12px;
      border: 1px solid #e5e7eb;
      font-size: 14px;
      outline: none;
    }

    .form-group input:focus {
      border-color: #2563eb;
    }

    .password-wrapper {
      position: relative;
    }

    .password-wrapper i {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #94a3b8;
    }

    .forgot {
      text-align: right;
      font-size: 13px;
      margin-bottom: 22px;
    }

    .forgot a {
      color: #2563eb;
      text-decoration: none;
    }

    .btn-login {
      padding: 15px;
      border: none;
      border-radius: 14px;
      background: #2563eb;
      color: white;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
    }

    .btn-login:hover {
      background: #1e40af;
    }

    /* RIGHT */
    .auth-right {
      width: 50%;
      background: #e0edff;
    }

    .auth-right img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* MOBILE */
    @media (max-width: 900px) {
      .auth-container {
        width: 95%;
        height: auto;
      }

      .auth-right {
        display: none;
      }

      .auth-left {
        width: 100%;
        padding: 50px 35px;
      }
    }
  </style>
</head>

<body>

<div class="auth-wrapper">
  <div class="auth-container">

    <!-- LEFT LOGIN -->
    <div class="auth-left">
      <h1>Log in</h1>
      <p>Silakan masuk ke Sistem Informasi Desa</p>

      <form method="post">
        <?php echo csrf_field(); ?>

        <div class="form-group">
          <input type="email" name="email" placeholder="Email">
        </div>

        <div class="form-group password-wrapper">
          <input type="password" id="password" name="password" placeholder="Password">
          <i class="fas fa-eye" id="eyeIcon" onclick="togglePassword()"></i>
        </div>

        <div class="forgot">
          <a href="#">Lupa password?</a>
        </div>

        <button type="submit" class="btn-login">
          <i class="fas fa-sign-in-alt mr-1"></i> Login
        </button>
      </form>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="auth-right">
      <img src="<?php echo e(asset('image/auth-login.jpg')); ?>" alt="Login Image">
    </div>

  </div>
</div>

<script>
  function togglePassword() {
    const pass = document.getElementById('password');
    const icon = document.getElementById('eyeIcon');

    if (pass.type === 'password') {
      pass.type = 'text';
      icon.classList.remove('fa-eye');
      icon.classList.add('fa-eye-slash');
    } else {
      pass.type = 'password';
      icon.classList.remove('fa-eye-slash');
      icon.classList.add('fa-eye');
    }
  }
</script>

</body>
</html>
<?php /**PATH D:\Kelompok 8 Web Desa\resources\views/auth/login.blade.php ENDPATH**/ ?>