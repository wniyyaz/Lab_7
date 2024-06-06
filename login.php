

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        .form-container{
            border: 1px solid #000;
            padding: 20px;
            width: 300px;
            margin: auto;
            margin-top: 50px;
            text-align: left;
        }

    </style>
</head>

<body>
  <div class= "form-container">
    <h1>Login Page</h1>
    <form action="authenticate.php" method="post">
        <label for="matric">Matric:</label>
        <input type="text" name="matric" id="matric" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" name="login" value="Login">


    </form>
    <p><a href="registration.php">Register</a> here if you have not</p>
  </div>  


</body>

</html>