function buscarID(id){
    let xhl = new XMLHttpRequest();
    xhl.open("POST", "php/buscarideliminar.php",true);
    xhl.onload = ()=>{
     if(xhl.readyState == 4 && xhl.status == 200){
         let resposta = xhl.response;
         let sectionAlert = document.querySelector(".sectionAlert");
         sectionAlert.classList.add('active');
        let clickButtons = document.querySelector(".clickButtons");
        clickButtons.innerHTML = resposta;
     }
    }
    xhl.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    let data = "id=" + id;
    xhl.send(data);
}




function eliminar(id){
    let xhl = new XMLHttpRequest();
    xhl.open("POST", "php/eliminar.php",true);
    xhl.onload = ()=>{
     if(xhl.readyState == 4 && xhl.status == 200){
         let resposta = xhl.response;
         let section = document.querySelector(".confirmDelete");
         section.innerHTML = resposta;
           cancelar();
        
     }
    }
    xhl.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    let data = "id=" + id;
    xhl.send(data);
}

function cancelar(){
         let sectionAlert = document.querySelector(".sectionAlert");
         sectionAlert.classList.remove('active');
}

setInterval(()=>{
    let selecton = document.querySelector(".confirmDelete");
    selecton.innerHTML = " ";

}, 5000);