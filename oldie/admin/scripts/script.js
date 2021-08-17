window.onload=function() {
		function $(id,respuesta){ 
		
				if (respuesta==false) {
					document.getElementById(id).style.background="#d63a2a";
				} else {
					document.getElementById(id).style.background="white";
				}
			
		}
		
		
		document.getElementById("listar").onclick=function () {
			var a=document.getElementById("exitosamente");
			a.style.display="none";
			//b.parentNode.removeChild(a);
		
		}
		
		function pregunta() {
					if (!confirm("Seguro desea borrar el producto?")) {
						return false;
					}

			}	
			
		
		
	
}