const num1 = document.getElementById('num1');
const num2 = document.getElementById('num2');
const btnSoma = document.getElementById('btnSoma');
const resultado = document.getElementById('resultado');

function somar() {
	const n1 = parseInt(num1.value);
  const n2 = parseInt(num2.value);
  const r  = n1 + n2;
  resultado.value = r;
  if (verificaParOuImpar(r)) {
  	resultado.style.color = "white"
    resultado.style.backgroundColor = "black"
  } else {
  	resultado.style.color = "black"
    resultado.style.backgroundColor = "gray"
  }
}


function limpaCampos() {
	num1.value = '';
  num2.value = '';
  resultado.value = '';
}

function verificaParOuImpar(num) {
	if (num % 2 == 0) {
		return true;
  }
  return false;
}
