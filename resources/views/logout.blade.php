<!DOCTYPE html>
<html>

<head>
  <title>Registration Success</title>
  <style>
    body {
      height: 100vh;
      padding: 0;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    h1 {
      font-size: 4rem;
      color: #28242c;
      font-weight: 600;
    }

    button {
      background-color: #ffc003;
      height: 4rem;
      width: 15rem;
      border-radius: 5px;
      color: white;
      font-size: 2rem;
      font-weight: 600;
      margin-top: 2rem;
      transition: 0.3s ease-in-out;
      cursor: pointer;
    }

    button:hover {
      background-color: #0275d8;
      scale: 1.2;
    }
  </style>
</head>

<body>
  <div>
    <h1>
     LOGGED OUT<span style="color: #044556;">SUCCESS</span>
    </h1>
    <div style="display: flex; justify-content: center">
      <button onclick="redirectToLogin()">Want to login?</button>
    </div>
  </div>

  <script>
    function redirectToLogin() {
      window.location.href = 'login';
    }
  </script>
</body>

</html>
