<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="JS/script.js"></script>
</head>

<body onload="Funcion(4);">
	<div class="container">
		<div class="row">

			<form onsubmit="return false;" class="row g-3" id="form">
				<input type="hidden" class="form-control" id="id">
				<div class="col-md-6">
					<label for="inputNombre" class="form-label">Nombre</label>
					<input type="text" class="form-control" id="Nombre">
				</div>
				<div class="col-md-6">
					<label for="inputPrecio" class="form-label">Precio</label>
					<input type="text" class="form-control" id="Precio">
				</div>
				<div class="col-md-6">
					<label for="inputMarca" class="form-label">Marca</label>
					<select id="Marca" class="form-select">
						<option selected>Selecciona...</option>
						<option value="DELL">DELL</option>
						<option value="HP">HP</option>
						<option value="SONY">SONNY</option>
					</select>
				</div>
				<div class="col-md-6">
					<label for="inputFoto" class="form-label">Foto</label>
					<input type="text" class="form-control" id="Foto">
				</div>
				<div class="d-grid gap-2 col-2 mx-auto">
					<button type="submit" class="btn btn-info btn-center" onclick="Funcion(1);">Guardar</button>
				</div>


			</form>
			<div class="alert alert-warning" role="alert">
				<label for="mensaje" id="res"></label>
			</div>
		</div>
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">NOMBRE</th>
						<th scope="col">PRECIO</th>
						<th scope="col">MARCA</th>
						<th scope="col">FOTO</th>

					</tr>
				</thead>
				<tbody id="datos">

				</tbody>
			</table>
		</div>
		<div><button type="button" class="btn btn-warning" onclick="salir();">Salir</button></div>

	</div>

</body>

</html>