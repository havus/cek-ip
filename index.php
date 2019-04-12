<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <title>Cek IP</title>
</head>
<body>

<div class="main">
  <div class="form-group row">
    <label for="my-ip" class="col-sm-5 col-form-label">My Ip is : </label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="my-ip" value="<?= $_SERVER['REMOTE_ADDR']; ?>" disabled>
    </div>
  </div>
</div>





  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/script.js"></script>
  
</body>
</html>