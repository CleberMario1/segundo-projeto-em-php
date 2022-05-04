function _cpf(cpf) {	
	cpf = cpf.replace(/[^\d]+/g,'');	
	if(cpf == '') return false;	
	// Elimina CPFs invalidos conhecidos	
	if (cpf.length != 11 || 
		cpf == "00000000000" || 
		cpf == "11111111111" || 
		cpf == "22222222222" || 
		cpf == "33333333333" || 
		cpf == "44444444444" || 
		cpf == "55555555555" || 
		cpf == "66666666666" || 
		cpf == "77777777777" || 
		cpf == "88888888888" || 
		cpf == "99999999999")
			return false;		
	// Valida 1o digito	
	add = 0;	
	for (i=0; i < 9; i ++)		
		add += parseInt(cpf.charAt(i)) * (10 - i);	
		rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)		
			rev = 0;	
		if (rev != parseInt(cpf.charAt(9)))		
			return false;		
	// Valida 2o digito	
	add = 0;	
	for (i = 0; i < 10; i ++)		
		add += parseInt(cpf.charAt(i)) * (11 - i);	
	rev = 11 - (add % 11);	
	if (rev == 10 || rev == 11)	
		rev = 0;	
	if (rev != parseInt(cpf.charAt(10)))
		return false;		
	return true;   
}

function validarCPF(el){
    if(!_cpf(el.value)){
        alert("CPF Inválido!"+ el.value);
        el.value="";
    }


}
document.addEventListener('keydown', function(event) { //pega o evento de pressionar uma tecla
	if(event.keyCode != 46 && event.keyCode != 8){//verifica se a tecla pressionada nao e um backspace e delete
	  var i = document.getElementById("cpf").value.length; //aqui pega o tamanho do input
	  if (i === 3 || i === 7) //aqui faz a divisoes colocando um ponto no terceiro e setimo indice
		document.getElementById("cpf").value = document.getElementById("cpf").value + ".";
	  else if (i === 11) //aqui faz a divisao colocando o tracinho no decimo primeiro indice
		document.getElementById("cpf").value = document.getElementById("cpf").value + "-";
	}
  });