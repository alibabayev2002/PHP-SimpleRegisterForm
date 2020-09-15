<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<pre>
        <?php
         require('back.php');
        ?>
        </pre>
        <div class="container">
        <div class="text-center h5 mb-4 ">
            Qeydiyyat / giriş formu 
        </div>
            <div class="row">
                <div class="col-md-6 col-12 py-3 px-4 border">
                <form method="post">
                <h5 class="text-primary">Giriş</h2>
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input name="singIn_login" type="text" class="form-control" id="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="password">Şifrə</label>
                        <input name="singIn_password" type="password" class="form-control" id="password" placeholder="Şifrə">
                    </div>
                    <input value="Giriş" name="submit_login" type="submit" class="btn btn-primary btn-sm">
                </form>

                <div class="text-danger float-right"> 
    <?=$msg ?>
                
                 </div>
                </div>

                <div class="col-md-6 col-12 bg-warning py-3 px-4">
                <form method="post">
                <h5 class="text-danger">Qeydiyyat</h2>
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input name="register_login" type="text" class="form-control" id="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="password_register">Şifrə</label>
                        <input name="register_password" type="password" class="form-control" id="password_register" placeholder="Şifrə">
                    </div>
                    <input value="Qeydiyyat" name="submit_register" type="submit" class="btn btn-danger btn-sm">
                </form>
                
                <span class="text-danger float-right">
    <?=$register_msg ?>
            
            </span>
                </div>
                
            </div>
           
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>