function editar(id){
    let xml = new XMLHttpRequest();
    xml.open("POST", "php/update.php", true);
    xml.onload = () =>{
    if(xml.readyState == 4 && xml.status == 200 ){
        let data = xml.response;
        let editModal = document.querySelector(".editModal");
        editModal.classList.add("active");
        let jsonData = JSON.parse(data);
        let nomeUser = jsonData['nome'];
        let passUser = jsonData['pass'];
        let nivelUser = jsonData['nivel'];
        let obsUser = jsonData['obs'];
        let dataUser = jsonData['data_validade'];
        let idUser = jsonData['id'];
                            
        let nomeUserInput =  document.querySelector("#nomeUserInput");
        nomeUserInput.value = nomeUser;
        
        let passUserInput =  document.querySelector("#passUserInput");
        passUserInput.value =  passUser;
        
        let nivelUserInput =  document.querySelector("#nivelUserInput");
        nivelUserInput.value = nivelUser;
        
        
        let obsUserInput =  document.querySelector("#obsUserInput");
        obsUserInput.value = obsUser;
        
        let dataUserInput =  document.querySelector("#dataUserInput");
        dataUserInput.value = dataUser;
        
        let idUserInput =  document.querySelector("#idUserInput");
        idUserInput.value = idUser;
    }
    }
    xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    let nome = "id=" + id;
    xml.send(nome);
}


function closeMOdal(){
      let editModal = document.querySelector(".editModal");
      editModal.classList.remove("active"); 
}