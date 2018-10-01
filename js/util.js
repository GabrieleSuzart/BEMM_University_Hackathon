// JavaScript Document

function exibeConteudo(op){
	if(op=="trans"){
		document.getElementById('coleta').setAttribute('style', 'display:none');
		document.getElementById('trans').setAttribute('style', 'display:block');
	}else if(op=="coleta"){
		document.getElementById('trans').setAttribute('style', 'display:none');
		document.getElementById('coleta').setAttribute('style', 'display:block');
	}else if(op=="reci"){
		document.getElementById('trans').setAttribute('style', 'display:none');
		document.getElementById('coleta').setAttribute('style', 'display:none');
	}
}