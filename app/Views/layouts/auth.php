<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="/public/img/logo.svg" color="#8D46E7">
  <title>
    <?= $title ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    section{
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }


  .login-container {
    background-color: #fff;
    border-radius: 5px;
    padding: 2rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    height: 100vh;
    width: 100%;
  }

  h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
  }

  .input-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    color: #666;
  }

  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    transition: border-color 0.3s;
  }

  input[type="text"]:focus,
  input[type="password"]:focus {
    border-color: #007bff;
    outline: none;
  }

  .btn {
    width: 100%;
    margin-top: .4rem;
  }

  .alert-text {
    color: #eb0101;
  }

  @media screen and (min-width: 600px) and (max-width: 768px) and (orientation: portrait) {}

  @media screen and (min-width: 600px) {
    .login-container{
      width: 450px;
      height: 750px;
    }
    body{
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100vh;
    }
  }



  @media screen and (min-width: 600px) and (orientation: landscape) {}

  @media screen and (min-width: 906px) {
   
  }

  @media screen and (min-width: 1200px) {}

  @media screen and (min-resolution: 2dppx) {}
</style>
<body>
  <?= $child ?>
</body>



</html>