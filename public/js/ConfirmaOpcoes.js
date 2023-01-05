function confDelete(id) {
    var resposta = confirm("");
    if (resposta == false){
        window.location.href = "/painel-edit-usuario/"+id;
    }
  }
