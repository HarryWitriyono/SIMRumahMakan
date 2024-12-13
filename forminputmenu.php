<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIM Rumah Makan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form Input Menu Makanan dan Minuman</h2>
<form method="post" action="inputmenu.php">
  <div class="form-group row">
    <label for="NamaMenu" class="col-4 col-form-label">Nama Menu</label> 
    <div class="col-8">
      <input id="NamaMenu" name="NamaMenu" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="HargaJual" class="col-4 col-form-label">Harga Jual</label> 
    <div class="col-8">
      <input id="HargaJual" name="HargaJual" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>

</body>
</html>