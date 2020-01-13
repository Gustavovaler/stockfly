


function toggle(e,time = 0){
	let element = window.getComputedStyle(e);
	let elementVisibility = element.getPropertyValue('display');
	let elementStyleVisibility = e.style.visibility;
	let elementStyleDisplay = e.style.display;

	if (elementVisibility === 'none' || elementStyleVisibility === 'hidden' || elementStyleDisplay === 'none') {
		mostrar(e);
		return
	}else if (elementVisibility === 'block' || elementStyleVisibility === 'visible' || elementStyleDisplay === 'block') {
		ocultar(e);
		}
		function ocultar(elemento){

				setTimeout(function(){elemento.style.display = "none";},time);
			}
		function mostrar(elemento){
				setTimeout(function(){elemento.style.display = "block";},time);
			}	
	}

	var consultarDb = function (peticion, url,elemento){
		var conexion_ajax = new XMLHttpRequest();
		conexion_ajax.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				elemento.innerHTML = this.responseText;
			}
		}
		conexion_ajax.open(peticion,url,true);
		conexion_ajax.send();
	}