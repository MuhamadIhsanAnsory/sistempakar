<!DOCTYPE html>
<html>


<head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <title>Selamat Datang di Siskar</title>


       <?php require('header.php') ?>

</head>

<body class="bg-secondary">
       <div class="container">
              <?php
              require('db.php');
              session_start();
              // If form submitted, insert values into the database.
              if (isset($_POST['username'])) {
                     // removes backslashes
                     $username = stripslashes($_REQUEST['username']);
                     //escapes special characters in a string
                     $username = mysqli_real_escape_string($con, $username);
                     $password = stripslashes($_REQUEST['password']);
                     $password = mysqli_real_escape_string($con, $password);
                     //Checking is user existing in the database or not
                     $query = "SELECT * FROM `users` WHERE username='$username' and password='" . md5($password) . "'";
                     $result = mysqli_query($con, $query) or die(mysql_error());
                     $rows = mysqli_num_rows($result);
                     if ($rows == 1) {
                            $_SESSION['username'] = $username;
                            unset($_SESSION['error']);
                            // Redirect user to index.php
                            header("Location: home.php");
                     } else {
                            $error = "<div class='alert alert-danger' role='alert'>
                     Username/password is incorrect
                     </div>";
                            $_SESSION['error'] = $error;
                            header("Location: index.php");
                     }
              } else {
              ?>

                     <div class="container pt-lg-7">
                            <?php
                            if (isset($_SESSION['error'])) {
                                   echo $_SESSION['error'];
                            }
                            ?>
                            <div class="row justify-content-center">
                                   <div class="col-lg-5">
                                          <div class="card bg-secondary shadow border-0">
                                                 <div class="card-header bg-primary">
                                                        <div class="text-muted text-center mb-3">
                                                               <h5 class="text-white">To use this website, plase login first. </h5>
                                                        </div>

                                                 </div>
                                                 <div class="card-body">
                                                        <div class="text-center text-muted mb-4">
                                                               LOGIN
                                                        </div>
                                                        <form accept="" method="POST" name="login">
                                                               <div class="form-group mb-3">
                                                                      <label for="username">Username</label>
                                                                      <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                                                               </div>
                                                               <div class="form-group mb-3">
                                                                      <label for="password">Password</label>
                                                                      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                                               </div>
                                                               <div class="text-center">
                                                                      <input name="submit" type="submit" value="Login" class="btn btn-primary">
                                                               </div>
                                                        </form>
                                                        <div class="text-center my-4">
                                                               <p><i>Not registered yet?</i></p>
                                                               <a href='registration.php' class="btn btn-success">Register</a>
                                                        </div>
                                                 </div>
                                          </div>
                                          <br><br><br><br>
                                   </div>
                            </div>
                     </div>

              <?php } ?>
       </div>


       <?php require('footer.php') ?>


</body>

</html>