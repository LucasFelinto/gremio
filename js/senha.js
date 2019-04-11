const senha = document.querySelector('.senha');
const senhaCF = document.querySelector('.senhaCF');
const btnSubmit = document.querySelector('.btnSubmit');
const check = document.querySelector('.botao-check');

senhaCF.addEventListener('blur', (event) => {
	if(senhaCF.value != senha.value) {
		senhaCF.style.background = 'tomato';
	} else {
		senhaCF.style.background = 'white';
	}

});


btnSubmit.addEventListener('click', (event) => {
	if(senha.value != senhaCF.value) {
		event.preventDefault();
		alert('senhas são diferentes');
	}

});