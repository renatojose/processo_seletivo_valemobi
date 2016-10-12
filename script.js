window.onload = function(){
    $("#codigo").focus();
};

function verificar(){			
	if($("#codigo").val() == "" || $("#tipo").val() == "" || $("#nome").val() == "" || $("#quantidade").val() == "" || $("#preco").val() == ""){
		alert("Há campos vazios ou não selecionados!");
	}else{
		alert("Formulário enviado com sucesso!");
	}					
};

function apenasChar(e){
	var tecla = new Number();
	
	if(window.event) {
		tecla = e.keyCode;
	}else if(e.which) {
		tecla = e.which;
	}else {
		return true;
	}
	
	if((tecla >= "48") && (tecla <= "57")){
		return false;
	}
}