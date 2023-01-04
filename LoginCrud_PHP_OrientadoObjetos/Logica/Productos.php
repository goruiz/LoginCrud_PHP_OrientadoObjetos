<?php
	require_once("../Model/ProductosModel.php");

	header("Conten-Type: application/json");

	$data = json_decode(file_get_contents("php://input"));

	$ProductosModel = new ProductosModel();

	switch($data->op){
		case 1:
			$ProductosModel->setNombre($data->Nombre);
			$ProductosModel->setPrecio($data->Precio);
			$ProductosModel->setMarca($data->Marca);
			$ProductosModel->setFoto($data->Foto);
			echo $ProductosModel->InsertarProducto();
			$resultado = $ProductosModel->BuscarTodos();
			foreach ($resultado as $key){
				//print_r($key);
				echo "<tr><td>$key[0]</td><td>$key[1]</td><td>$key[2]</td><td>$key[3]</td><td>$key[4]</td><td><button class='btn btn-success btn-center' onclick='Actualizar($key[0]);'>Editar</button><button class='btn btn-danger btn-center' onclick='Eliminar($key[0]);'>Eliminar</button></td></tr>";
			}
			break;
		case 2:
			$ProductosModel->setID($data->ID);
			$ProductosModel->setNombre($data->Nombre);
			$ProductosModel->setPrecio($data->Precio);
			$ProductosModel->setMarca($data->Marca);
			$ProductosModel->setFoto($data->Foto);
			echo $ProductosModel->ActualizarProducto();
			$resultado = $ProductosModel->BuscarTodos();
			foreach ($resultado as $key){
				//print_r($key);
				echo "<tr><td>$key[0]</td><td>$key[1]</td><td>$key[2]</td><td>$key[3]</td><td>$key[4]</td><td><button class='btn btn-success btn-center' onclick='Actualizar($key[0]);'>Editar</button><button class='btn btn-danger btn-center' onclick='Eliminar($key[0]);'>Eliminar</button></td></tr>";
			}
			break;
		case 3:
			$ProductosModel->setId($data->id);
			echo $ProductosModel->EliminarProducto();
			$resultado = $ProductosModel->BuscarTodos();
			foreach ($resultado as $key){
				//print_r($key);
				echo "<tr><td>$key[0]</td><td>$key[1]</td><td>$key[2]</td><td>$key[3]</td><td>$key[4]</td><td><button class='btn btn-success btn-center' onclick='Actualizar($key[0]);'>Editar</button><button class='btn btn-danger btn-center' onclick='Eliminar($key[0]);'>Eliminar</button></td></tr>";
			}
			break;
		case 4:
			$resultado = $ProductosModel->BuscarTodos();
			foreach ($resultado as $key){
				//print_r($key);
				echo "<tr><td>$key[0]</td><td>$key[1]</td><td>$key[2]</td><td>$key[3]</td><td>$key[4]</td><td><button class='btn btn-success btn-center' onclick='Actualizar($key[0]);'>Editar</button><button class='btn btn-danger btn-center' onclick='Eliminar($key[0]);'>Eliminar</button></td></tr>";
			}
			break;
		case 5:
			$ProductosModel->setId($data->ID);
			$resultado = $ProductosModel->BuscarID();
			foreach ($resultado as $key){
				//print_r($key);
				echo "<tr><td>$key[0]</td><td>$key[1]</td><td>$key[2]</td><td>$key[3]</td><td>$key[4]</td><td><button class='btn btn-success btn-center' onclick='Actualizar($key[0]);'>Editar</button><button class='btn btn-danger btn-center' onclick='Eliminar($key[0]);'>Eliminar</button></td></tr>";
			}
			break;
		case 6:
			$ProductosModel->setId($data->id);
			$resultado = $ProductosModel->BuscarID();
			foreach ($resultado as $key){
				//print_r($key);
				echo '<form onsubmit="return false;" class="row g-3" id="form">
				<input type="hidden" class="form-control" id="id" value="'. $key[0] .'">
			<div class="col-md-6">
				<label for="inputNombre"class="form-label">Nombre</label>
				<input type="text" class="form-control" id="Nombre" value="'. $key[1] .'">
			  </div>
			<div class="col-md-6">
				<label for="inputPrecio" class="form-label">Precio</label>
				<input type="text" class="form-control" id="Precio" value="'. $key[2] .'">
			</div>
			<div class="col-md-6">
				<label for="inputMarca" class="form-label">Marca</label>
				<select id="Marca" class="form-select">';
					if ($key[3]=="DELL"){
						echo '<option value="DELL" selected>DELL</option>
						<option value="HP">HP</option>
						<option value="SONY">SONY</option>';
					}
					if ($key[3]=="HP"){
						echo '<option value="DELL">DELL</option>
						<option value="HP" selected>HP</option>
						<option value="SONY">SONY</option>';
					}
					if ($key[3]=="SONY"){
						echo '<option value="DELL">DELL</option>
						<option value="HP">HP</option>
						<option value="SONY" selected>SONY</option>';
					}
					
			echo '</select>
			  </div>
			  <div class="col-md-6">
					<label for="inputFoto" class="form-label">Foto</label>
					<input type="text" class="form-control" id="Foto" value="'. $key[4] .'">
			  </div>
			  <div class="d-grid gap-2 col-2 mx-auto">
					<button type="submit" class="btn btn-primary btn-center" onclick="Funcion(1);">Guardar</button>
			  </div>
			  <div class="d-grid gap-2 col-2 mx-auto">
					<button type="submit" class="btn btn-dark btn-center" onclick="Funcion(2);">Editar</button>
			 
			  
		</form>';
			}
			break;
	}