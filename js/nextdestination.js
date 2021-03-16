
/* FORMULARIO DE ENVIO DE MENSAGEM */

let formMsg = document.getElementById('form-msg');
let btnMsg = document.getElementById('form-btn');

/* Click no botão do chat */
btnMsg.onclick = function(){
	formMsg.classList.toggle('d-none');
	
	btnMsg.querySelector('i').classList.toggle('fa-comment-dots');
	btnMsg.querySelector('i').classList.toggle('fa-times');
}

/* Submeter formulário */
document.getElementById('form-send-msg').onsubmit = function(){
	
	name 	= document.getElementById('txt-name').value;
	email 	= document.getElementById('txt-email').value;
	msg 	= document.getElementById('txt-msg').value;
	rgpd 	= document.getElementById('chk-rgpd').checked;

	if(!rgpd){return false;}
	console.log('no submit', name, rgpd);
	return false;
}

/* Receber atualizações submissão do mail */
document.getElementById('form-send-mail').onsubmit = function(){
	
	mail 	= document.getElementById('mail').value;
}

// Botão para subir para o topo da página 
	
	//Botão pra subir
	var mybutton = document.getElementById("myBtn");

	// Mostrar o botão a partir de 400px
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
  		if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    	mybutton.style.display = "block";
  	} else {
    	mybutton.style.display = "none";
  	}
	}

	// Ao clicar subir para o topo
	function topFunction() {
  		document.body.scrollTop = 0;
  		document.documentElement.scrollTop = 0;
	}

//-------------------------------------------------------------

var backdrop;
var modal;
var elem = document.getElementById('inicio');

function createModal(id,action){    
    backdrop = document.createElement('div');
    backdrop.classList.add('backdrop'); 
    document.body.insertBefore(backdrop,elem);
    
    modal = document.createElement('div');
    modal.classList.add('modal','fade','show', 'd-block');
    
    var modalDialog = document.createElement('div');    
    modalDialog.classList.add('modal-dialog','modal-dialog-centered');
    modal.appendChild(modalDialog);

    var modalContent = document.createElement('div');
    modalContent.classList.add('modal-content','mx-auto');
    modalDialog.appendChild(modalContent)    

    var modalForm = document.createElement('form');
    modalForm.setAttribute('action',action);
    modalForm.setAttribute('method','post');
    modalForm.setAttribute('enctype','multipart/form-data');
    modalForm.setAttribute('onsubmit','btnSubmit.disabled = true; return true;');
    modalContent.appendChild(modalForm)

    var inputForm = document.createElement('input');
    inputForm.setAttribute('type','hidden');
    inputForm.setAttribute('name','id');
    inputForm.setAttribute('value',id);
    modalForm.appendChild(inputForm);

    var modalHeader = document.createElement('div');
    modalHeader.classList.add('modal-header','bg-secondary');
    modalForm.appendChild(modalHeader);

    var modalTitle= document.createElement('h5');
    modalTitle.classList.add('modal-title','text-white');
    modalHeader.appendChild(modalTitle);        
    modalTitle.innerHTML = 'Escolher Nova Foto';

    var modalClose = document.createElement('button')
    modalClose.classList.add('btn-close','btn-close-white');
    modalClose.setAttribute('onclick','closeModal();');
    modalHeader.appendChild(modalClose);    

    var modalBody = document.createElement('div');
    modalBody.classList.add('modal-body');
    modalForm.appendChild(modalBody);    

    var formGroup = document.createElement('div');
    formGroup.classList.add('form-group','form-control-sm');
    modalBody.appendChild(formGroup)

    var inputFormGroup = document.createElement('input');
    inputFormGroup.setAttribute('type','file');
    inputFormGroup.setAttribute('name','formFile');
    inputFormGroup.setAttribute('accept','image/png, image/jpeg');
    formGroup.appendChild(inputFormGroup);    

    var modalFooter = document.createElement('div');
    modalFooter.classList.add('modal-footer');
    modalForm.appendChild(modalFooter);

    var btnClose = document.createElement('button');
    btnClose.classList.add('btn','btn-secondary');    
    btnClose.textContent = 'Cancelar';
    btnClose.setAttribute('onclick','closeModal();return false;');
    modalFooter.appendChild(btnClose);    
 
    var btnSubmit = document.createElement('button');
    btnSubmit.setAttribute('type','submit');    
    btnSubmit.classList.add('btn','btn-success');
    btnSubmit.setAttribute('id','btnSubmit;');
    btnSubmit.textContent = 'Guardar';    
    modalFooter.appendChild(btnSubmit);     
    
    document.body.insertBefore(modal,elem);
}

function closeModal(){
    if(backdrop) {
        backdrop.remove();
    }
    if(modal) {
        modal.remove();
    }
}
