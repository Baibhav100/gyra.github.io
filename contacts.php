<!DOCTYPE html>
<html lang="en">
<head>
  <title>website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <img class="img" src="images/gyra.jpg">
  <a class="navbar-brand" href="index.php"><h1>GYRA</h1></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="about.php">introduction</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contacts.php">contacts</a>
    </li>

   
  </ul>
</nav>
<br>
  <center><p><h3><i> To connect more with us, please put your basic information in the form given below</i><h3></p></center>
  <div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
      <div class="form-group">
          <label> Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
          <label> Email</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
          <label> Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
          <label> Comment</label>
        <textarea class="form-control" name="comment">
                
       </textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<footer>
    <div class="container-fluid"style="background:grey;">
        <p><i><center> website by Baibhav Rajkumar</center></i></p>
    </div>
</footer>

</body>
</html>
