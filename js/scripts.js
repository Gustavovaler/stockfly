


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