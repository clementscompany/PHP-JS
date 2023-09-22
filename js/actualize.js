setInterval(()=>{

    let xhl = new XMLHttpRequest();
    xhl.open("POST", "php/actualizar.php");
    xhl.onload = ()=>{
     if(xhl.readyState == 4 && xhl.status == 200){
        let resposta = xhl.response;
        let theList = document.querySelector(".theList");
        theList.innerHTML = resposta;
     }
    }
    xhl.send()

 }, 1000);