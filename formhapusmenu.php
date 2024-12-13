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
  <h2>Form Hapus Menu Makanan dan Minuman</h2>
<form method="post" action="hapusmenu.php">
  <div class="form-group row">
    <label for="KodeMenu" class="col-4 col-form-label">Kode Menu yang dihapus :</label> 
    <div class="col-8">
      <input id="KodeMenu" name="KodeMenu" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary" onclick="return confirm('Yakin dihapus !');">Hapus</button>
    </div>
  </div>
</form>
</div>

</body>
</html>