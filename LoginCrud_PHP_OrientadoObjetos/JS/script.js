function Funcion($op){
	let res = document.querySelector("#datos");
	let id = document.querySelector("#id").value;
	let nombre = document.querySelector("#Nombre").value;
	let precio = document.querySelector("#Precio").value;
	let marca = document.querySelector("#Marca").value;
	let foto = document.querySelector("#Foto").value;
	let op = $op;

	let xhr = new XMLHttpRequest();

	xhr.open("POST","Logica/Productos.php",true);

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200){
			res.innerHTML = this.responseText;
		}
	}

	let data = JSON.stringify({"ID": id, "Nombre": nombre, "Precio": precio, "Marca": marca, "Foto": foto, "op": op});

	xhr.send(data);

}

function Eliminar(id){
	let res = document.querySelector("#datos");

	let xhr = new XMLHttpRequest();

	xhr.open("POST","Logica/Productos.php",true);

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200){
			res.innerHTML = this.responseText;
		}
	}

	let data = JSON.stringify({"id": id, "op": 3});

	xhr.send(data);
}

function Actualizar(id){
	let res = document.querySelector("#form");

	let xhr = new XMLHttpRequest();

	xhr.open("POST","Logica/Productos.php",true);

	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200){
			res.innerHTML = this.responseText;
		}
	}

	let data = JSON.stringify({"id": id, "op": 6});

	xhr.send(data);
}
function salir(){
	
	let res = document.querySelector("#form");

	let xhr = new XMLHttpRequest();

	xhr.open("POST","salir.php",true);
	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4 && xhr.status === 200){
			res.innerHTML = this.responseText;
		}
	}
	let data = JSON.stringify({"id": id, "op": 6});

	xhr.send(data);
	window.open('index.php','_self');


}

