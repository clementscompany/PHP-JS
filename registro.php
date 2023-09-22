<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <title> Registro | </title>
</head>
<body>
    <main class="container">
        <section class="content">
            <div class="cardInformation">
               <div class="confirmDelete"></div>
                <div class="topCard">
                    <h1>Registro De Usuários</h1>
                </div>
                <div class="addNew">
                    <button class="addButton">Adicionar + </button>
                </div>
                <div class="bottomCard">
                    
                   <ul class="theList">
                      
                   </ul>

                </div>
            </div>
        </section>

        <section class="modalCadastro">
            <div class="formCadastrate">
                <div class="topCadastro">
                    <h1>Cadastrar Novo Usuario</h1>
                </div>
              <div class="center">
              <button class="VoltarBtn">Voltar</button>
              <span class="errorMessage"></span>
              </div>

                <form action="#" class="formData" method="POST">
                     <div class="inputBox">
                        <label for="">Nome:</label>
                        <input type="text" placeholder="Digite o nome..." name="user">
                     </div>

                     <div class="inputBox">
                        <label for="">Senha:</label>
                        <input type="password" placeholder="Digite a senha..." name="pass">
                     </div>
    
                 
                     <div class="inputBox">
                        <label for="">Nível:</label>
                        <input type="number" placeholder="Digite a senha..." name="nivel">
                     </div>

                     <div class="inputBox">
                        <label for="">Observação:</label>
                        <input type="password" placeholder="Digite a senha..." name="obs">
                     </div>
            
                     <div class="inputBox">
                        <label for="">Data de Validade:</label>
                        <input type="date" placeholder="Digite a senha..." name="data_validade">
                     </div>
                     <button class="SendBtn">Enviar</button>
                </form>
            </div>
        </section>
        
          <!--  -->
       <section class="sectionAlert">
             <div class="options">
                <article>
                  <span>Tem certeza que pretende excluir este usuário?</span>
                </article>
                <div class="clickButtons"></div>
             </div>
        </section>
          <!--  -->
          
          <section class="editModal">
        <div class="contentEdit">
            <div class="topEdit">
                <button onclick="closeMOdal()">Fechar</button>
                  <h1>Editar Registros</h1>
            </div>

            <!--  -->
            <div class="bottomEdit">
              <form action="#" class="FormInputUpdate" method="POST">
   
                      <span class="cardREsponse"></span>
                <div class="inputBox">
                    <input type="text" id="nomeUserInput" name="nome">
                </div>

                <div class="inputBox">
                    <input type="text" id="passUserInput" name="pass" >
                </div>

                <div class="inputBox">
                    <input type="text" id="nivelUserInput" name="nivel">
                </div>

                <div class="inputBox">
                    <input type="text" id="obsUserInput" name="obs">
                </div>

                <div class="inputBox">
                    <input type="date" id="dataUserInput" name="data_validade">
                </div>
                
                <input type="checkbox" checked id="idUserInput" name="id">
                <button class="EnviarBtnUpload" type="submit">Enviar</button>
              </form>
            </div>
            <!--  -->
        </div>
      </section>
          
    </main>
    <script src="js/scripts.js"></script>
        <script src="js/actualize.js"></script>
           <script src="js/editar.js"></script>
           <script src="js/buscarideliminar.js"></script>
                 <script src="js/update.js"></script>
           
</body>
</html>