const addButton = document.querySelector(".addButton");
const VoltarBtn = document.querySelector(".VoltarBtn");
const SendBtn = document.querySelector(".SendBtn");
const formData = document.querySelector(".formData");


addButton.onclick = ()=>{
    let modalCadastro =  document.querySelector(".modalCadastro");
    modalCadastro.classList.add('active');
}
VoltarBtn.onclick = ()=>{
    let modal =  document.querySelector(".modalCadastro");
    modal.classList.remove('active');
}

// ajax para o back end 
formData.onsubmit = (e)=>{
e.preventDefault();
}
SendBtn.onclick = ()=>{
   let xml = new XMLHttpRequest();
   xml.open("POST", "php/registro.php", true);
   xml.onload =()=>{
    if(xml.readyState == 4){
        if(xml.status == 200){
            let data = xml.response;
            let errorMessage = document.querySelector(".errorMessage");
            if(data == 0){
                errorMessage.innerHTML = "Preencha todos os Campos!"
                errorMessage.style = "background-color: rgba(243, 101, 101, 0.397); color:red";
            }
            else if(data == 4001){
                errorMessage.innerHTML = "Erro ao realizar o cadastro!"
                errorMessage.style = "background-color: rgba(243, 101, 101, 0.397); color:red";
            }
            else if(data == 4881){
                errorMessage.innerHTML = "Cadastrado com sucesso!";
                errorMessage.style = " background-color: rgba(23, 119, 23, 0.329);   color: green";
            }
        }
    }
   }
   let formDataD = new FormData(formData);
   xml.send(formDataD);
}

setInterval(()=>{
    let xxl = new XMLHttpRequest();
    xxl.open("GET", "php/actualizar.php", true);
    xxl.onload =()=>{
     if(xxl.readyState == 4){
         if(xml.status == 200){
             let dados = xxl.response;
             aler(dados);
         }
     }
    }
    xxl.send();
}, 5000);