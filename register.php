<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<script>

function focus(){
let msg = document.getElementById('msg').innerHtml ='Minimum eight characters, at least one letter and one number'
}
</script>
<body>
<form action="class/upload.php" method='post' onsubmit=''>
  <div class="container">

    <h2 class="title">Sign Up Form</h2>

    <input type="text" class="form-control" placeholder="Fullname" name='fullname' required />

    <input type="text" class="form-control" pattern='^[A-Za-z]+$'  placeholder="Username" name='username' required />

    <input type="email" class="form-control" placeholder="Email" name='email' required />

    <input type="password" class="form-control" placeholder="Password" maxlength='8' name='password' required pattern="(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"  />
    <span style="font-size:10px;" id='msg'></span>

    <input type="password" class="form-control" placeholder="Repeat password" name='repeat_password' required pattern="(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" maxlength='8' />


    <button type="submit" name='submit' class="btn-login">Sign Up</button>
    <label for="" class="label">Already have an account? <a href="login.html">Login</a></label>
  </div>
</form>
</body>
</html>