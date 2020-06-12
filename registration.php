<!DOCTYPE html>
<html>

<head>
       <meta charset="utf-8">
       <title>Registration</title>
       <?php include('header.php') ?>
</head>

<body class="bg-secondary">
       <?php
       require('db.php');
       // If form submitted, insert values into the database.
       if (isset($_REQUEST['username'])) {
              // removes backslashes
              $username = stripslashes($_REQUEST['username']);
              //escapes special characters in a string
              $username = mysqli_real_escape_string($con, $username);
              $nama = stripslashes($_REQUEST['nama']);
              //escapes special characters in a string
              $nama = mysqli_real_escape_string($con, $nama);
              $pekerjaan = stripslashes($_REQUEST['pekerjaan']);
              //escapes special characters in a string
              $pekerjaan = mysqli_real_escape_string($con, $pekerjaan);
              $email = stripslashes($_REQUEST['email']);
              $email = mysqli_real_escape_string($con, $email);
              $password = stripslashes($_REQUEST['password']);
              $password = mysqli_real_escape_string($con, $password);
              $trn_date = date("Y-m-d H:i:s");
              $query = "INSERT into `users` (username, nama, pekerjaan, password, email, trn_date)
VALUES ('$username', '$nama', '$pekerjaan','" . md5($password) . "', '$email', '$trn_date')";
              $result = mysqli_query($con, $query);
              if ($result) {
                     echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
              }
       } else {
       ?>
              <div class="container">
                     <div class="row justify-content-center">

                            <div class="card shadow mt-5" style=" width: 30rem;">
                                   <div class="card-header bg-info">
                                          <h3 class="text-center text-white">Registration</h3>
                                   </div>
                                   <div class="card-body">
                                          <form name="registration" action="" method="post">
                                                 <div class="form-group">
                                                        <label>Username</label>
                                                        <input class="form-control" type="text" name="username" placeholder="Username" required />
                                                 </div>
                                                 <div class="form-group">
                                                        <label for="">Nama</label>
                                                        <input class="form-control" type="nama" name="nama" placeholder="nama" required />
                                                 </div>
                                                 <div class="form-group">
                                                        <label for="">Pekerjaan</label>
                                                        <input class="form-control" type="pekerjaan" name="pekerjaan" placeholder="pekerjaan" required />
                                                 </div>
                                                 <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input class="form-control" type="email" name="email" placeholder="Email" required />
                                                 </div>
                                                 <div class="form-group">
                                                        <label for="">Password</label>
                                                        <input class="form-control" type="password" name="password" placeholder="Password" required />
                                                 </div>
                                                 <div class="card-footer">
                                                        <div class="row justify-content-center">
                                                               <input class="btn btn-primary" type="submit" name="submit" value="Register">
                                                               <a class="btn btn-warning" href="index.php">Kembali</a>
                                                        </div>
                                                 </div>
                                          </form>
                                   </div>
                            </div>
                     </div>
              </div>
       <?php } ?>
       <br><br><br>
       <br><br><br>

       <?php include('footer.php') ?>
</body>

</html>