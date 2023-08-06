<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <style>
    body {
      background-color: #044556;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      background-color: #28242c;
      width: 40%;
      height: 60%;
      border-radius: 10px;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .header {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      font-weight: 600;
      height: 15%;
      border-bottom: 1px solid gray;
      width: 90%;
    }

    form {
      width: 90%;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 70%;
      flex-direction: column;
      gap: 1rem;
    }

    input {
      width: 100%;
      height: 3rem;
      padding: 0 1rem 0 1rem;
      border-radius: 5px;
      font-size: 1.5rem;
      color: black;
    }

    button {
      background-color: #0d6efd;
      color: white;
      height: 3rem;
      width: 30%;
      border-radius: 10px;
      margin-top: 2rem;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">LOGIN</div>
    <form onsubmit="loginAccount(event)">
      <div class="mb-3 w-full">
        <input type="email" placeholder="Email" name="email" />
      </div>
      <div class="mb-3 w-full">
        <input type="text" placeholder="Password" name="Password" />
      </div>
      <button id="button-addon2" type="submit">Login</button>
    </form>
    <div class="cursor-pointer">forgot password</div>
  </div>

</body>

</html>
