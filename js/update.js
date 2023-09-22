


    const FormInputUpdate = document.querySelector(".FormInputUpdate");
    const EnviarBtnUpload = FormInputUpdate.querySelector(".EnviarBtnUpload");
    
    FormInputUpdate.onsubmit = (e)=>{
    e.preventDefault();
    }
    
    EnviarBtnUpload.onclick = ()=>{
    let xhl = new XMLHttpRequest();
    xhl.open("POST", "php/finalizar.php",true);
    xhl.onload = ()=>{
     if(xhl.readyState == 4 && xhl.status == 200){
         let resposta = xhl.response;
         let cardREsponse = document.querySelector(".cardREsponse");
         cardREsponse.innerHTML = resposta;
         cardREsponse.style = "color:green";
     }
    }
    
    let formdata = new FormData(FormInputUpdate)
    xhl.send(formdata);
  }



// function closeMOdal(){
//       let editModal = document.querySelector(".editModal");
//       editModal.classList.remove("active"); 
// }
