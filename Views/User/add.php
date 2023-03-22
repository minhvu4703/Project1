<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <form method="post" action="?controller=<?= $controller ?>&action=store">
          <?php if(isset($error)){
              echo $error;
          } ?>
          <h1 align="center">Add new user</h1>
      <div class="mb-3">
        <label for="username" class="form-label">User Name</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="User Name....."required>
      </div>
      <div class="mb-3">
        <label for="fullname" class="form-label">Full name</label>
        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full name....."required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password....."required>
      </div>
      <div class="mb-3">
        <label for="re_password" class="form-label">Re-Password</label>
        <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Re-Password....."required>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      <button type="reset" name="reset" class="btn btn-danger">Reset</button>
      </form>
    </div>
  </body>
</html>