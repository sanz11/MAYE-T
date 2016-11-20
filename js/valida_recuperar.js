with(document.recuperar){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir su nueva contraseña");
			password.focus();
		}
		if(ok && password1.value==""){
			ok=false;
			alert("Debe repetir su nueva contraseña");
			password1.focus();
		}
		if (ok && password.value != password1.value) {
			ok = false;
			alert("Las contraseña no deben ser diferentes");
			password1.focus();
			password.focus();	
		}
		if(ok && password.value == password1.value){ 
			submit(); 
		}
	}
}
