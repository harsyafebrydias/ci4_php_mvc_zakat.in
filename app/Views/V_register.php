<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <title>Zakat-in | Register</title>
  </head>
  <body>
    <!-- Background image -->
<div class="position-relative">
  <div class="svg-wrapper bg-image shadow-1-strong rounded-lg"
    style="
      background-image: url('https://images.unsplash.com/photo-1593117579800-806d62306514?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fG1vc3F1ZXxlbnwwfHwwfHw%3D&w=1000&q=80p');
      height: 100vh;">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
  <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-6">
            <br></br>
            <center><font face="Spongeboy"><h1 style="color: #84FFFF;">Zakat-in</h1></font></center>    
            <center><h2 style="color: #84FFFF;">Aplikasi Web Zakat Modern</h2></center>
            
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form class="bg-white rounded shadow-5-strong p-5" action="/register/save" method="post">
                <p>Silahkan Register Akun Terlebih Dahulu</p>
                <div class="row mb-4">
                    <div class="col">
                        <label for="InputForName" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('name') ?>">
                    </div>
                    <div class="col">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                    </div>
                    <button type="submit" class="btn btn-success btn-rounded">Register</button>
                    <button type="reset" class="btn btn-danger btn-rounded">Reset</button>
                    <a href='/login' button type="button" class="btn btn-link" data-mdb-ripple-color="dark">Sudah Punya Akun? Login</a>
                </form>
            </div>
                </div>
        </div>
    </div>
</div>
</div>
    
<style>
   #my-text {
      position: absolute;
      bottom: 0;
      left: 0;
   }
</style>

<div id="my-text" style="color: #84FFFF;">
   Owner Information : Zakat-in by Harsya Febrydias
</div>    
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
  
</html>