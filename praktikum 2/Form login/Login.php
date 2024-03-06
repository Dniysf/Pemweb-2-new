<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>

<h2>Form login Mahasiswa</h2>


<form class="ml-5 ml-5" action="proses_login.php" method="GET">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="name" name="name" placeholder="Username or Email" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa fa-user-circle"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="password" name="password" placeholder="Password" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa fa-lock"></i>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>

</body>
</html>