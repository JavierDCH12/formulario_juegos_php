<!DOCTYPE html>
<html>
  <head>
    <title>Formulario Juegos</title>

    <link rel="stylesheet" type="text/css" href="./estilos_formulario.css">
    <link rel="icon" type="image/jpg" href="imges/nintendodos.png"/>
    


    <style>
      
 body {
  background: rgb(2,0,36);
  background: linear-gradient(90deg, rgba(2,0,36,1) 9%, rgba(75,75,75,1) 85%, rgba(107,107,107,1) 96%);
    color: #333;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height:1250px;
    overflow-x: hid;
  }
  


  #contenido{
    display: flex;
    flex-direction: row;
  }

  #form{
    margin: 0 auto;
    width: 536px;
  }




 




  form {
    max-width: 750px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    border-radius: 5px;
    opacity: 0.9;
    margin-top: 50px;
    margin-bottom: 50px;
    
    
  }
  
  label {
    display: block;
    margin-bottom: 10px;
    margin-left:45px;
	font-size:18px;
  }
  
  input[type="text"], input[type="email"], textarea, input[type="range"] {
    margin-top: 15px;
    display: block;
    width: 70%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #f5f5f5;
    box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
    font-size: 16px;
    color: #333;
    margin-bottom:35px;
  }

  select{
    margin-bottom:25px;
  }
  
  input{
	  cursor:pointer;
  }

  
  input[type="submit"], input[type="reset"] {
    display: inline-block;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-family: Arial, sans-serif;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  input[type="submit"] {
    background-color: #30d936;
    color: #fff;
  }
  
  input[type="reset"] {
    background-color: #383838;
    color: #fff;
  }
  
  input[type="submit"]:hover {
    background-color: #3e8e41;
    color:#1f1d1d;
  }
  
  input[type="reset"]:hover {
    background-color: #9c9c9c;
    color:#1f1d1d;
  }
  

  #botones{
    display:flex;
    flex-direction: row;
    margin: 0px auto;
    margin-left: -48px;
    
  }

  /* Estilos para el contenedor de la imagen */
  .image-container {
    position: relative;
    
  }
  /* Definición de la animación */
  @keyframes animacion {
    0% { top: 0px; } 
    50% { top: 300px; }
    100% { top: 0px; } 
  }
  

  .image-container img {
    top:0;
    left:0;
    position: sticky;
    animation-name: animacion;
    animation-duration: 4s;
    animation-timing-function: ease-in-out;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    width: 141px; 
    height: 150px; 
    position: absolute;
  top: 0;
  left: 165px; 

  animation-name: animacion;
  animation-duration: 4s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
  animation-direction: alternate;
  }
  
  .imagen_dos{
    top:0;
    right:0;
    position: sticky;
    animation-name: animacion;
    animation-duration: 4s;
    animation-timing-function: ease-in-out;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    width: 150px; /* ajustar al tamaño deseado */
    height: 150px; /* ajustar al tamaño deseado */
    position: absolute;
  top: 0;
  left: 165px; /* distancia desde la izquierda */
  width: 112px; /* ajusta el tamaño de la imagen según lo que necesites */
  animation-name: animacion;
  animation-duration: 4s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
  animation-direction: alternate;

  }
  footer{
    background-color: rgba(204, 204, 204, 0.7);
    text-align:center;
    color:#555;
    margin-bottom:10px;
    height:30px;
    padding-top:10px;
    font-weight:bold;
    
  }

  #eliminar{
    background: rgb(241, 8, 8);
  }

  #modificar{
    background: rgb(255, 140, 0);
  }

  #eliminar:hover{
    background: rgb(237, 116, 116);
    color:#1f1d1d;
  }
  #modificar:hover{
    background: rgb(232, 166, 85);
    color:#1f1d1d;
  }

  .tag{
    margin-left:100px;
  }


  .card {
  width: 275px;
  height: 250px;
  perspective: 1000px;
  margin-top: 100px;
  margin-right:100px;
  margin-left:-277px;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  border-radius: 5px;
  position: sticky;
  top:50px;


}

.explicacion{
  padding-left:12px;
  padding-right:12px;
  font-size:15px;
  text-align: justify;
  padding-top:24px;

}

.titulo_card{
  padding-top:25px;
}

.card-inner {
  width: 100%;
  height: 100%;
  position: relative;
  transform-style: preserve-3d;
  transition: transform 0.6s;
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  border-radius: 5px;
  cursor:pointer;
  
}

.front,
.back {
  width: 100%;
  height: 100%;
  position: absolute;
  backface-visibility: hidden;
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  border-radius: 5px;
  cursor:pointer;
}

.front {
  background-color: #f1f1f1;
}

.back {
  background-color: #333;
  transform: rotateY(180deg);
  color:white;
}


.card:hover .card-inner {
  transform: rotateY(180deg);
}

#titulo{
  font-size:50px;
  margin-left:53px;
  letter-spacing: 2px;

}

.card_dos{
  width: 275px;
  height: 250px;
  perspective: 1000px;
  margin-top: 400px;
  margin-right:100px;
  margin-left: -375px;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0,0,0,0.2);
  border-radius: 5px;
  position: sticky;
  top:350px;
  background-color: white;
}

.card_dos:hover{
  background-color: whitesmoke;

}

#input_busq{
  margin-top: 15px;
    display: block;
    width: 90%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #f5f5f5;
    box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
    font-size: 16px;
    color: #333;
    margin-bottom:35px;
    margin-right: 40px;
    width: 180px;
    padding-top: 15px;

}

#enviar_busq{
  margin-right: 30px;
  width: 150px;
}

.titulo_busq_card{
  padding-bottom: 15px;
  font-size: 17px;


}

a{
  
    text-align:center;
    color:#555;
    margin-bottom:15px;
    height:30px;
    padding-top:10px;
    font-weight:bold;

}




  



    </style>


  </head>

  <body>

    
<div id="contenido">

  <div class="image-container">
    <img src="imges/nintendodos.png" alt="Imagen animada">
  </div>


  <div id="form">

  <!--Iniciamos el formulario de registro del juego-->
    

  <form name="formulario_juego" action="varios.php" method="GET">
    <h1 id="titulo">Mejores juegos</h1>
    
    <label for="nombre_juego" class="tag">Nombre del juego:
      <input type="text" name="nombre_juego" id="nombre_juego" >
    </label>
  
  
    <label for="año_publicacion" class="tag">
      Año de Publicación: <input type="text" name="año_publicacion" id="año_publicacion" minlength="4" maxlength="4"  pattern="[0-9]+">
    </label>
  
    <label for="desarrollador" class="tag">
      Compañia desarrolladora:<input type="text" name="desarrollador" id="desarrollador"  pattern="[a-zA-Z ]+">
    </label>
  
    <label for="director" class="tag">
      Director/Creador: <input type="text" name="director" id="director"  pattern="[a-zA-Z ]+">
    </label>
  
    <label for="distribuidora" class="tag">
      Compañia distribuidora: <input type="text" name="distribuidora" id="distribuidora"  pattern="[a-zA-Z ]+">
    </label>
  
  
    <label for="pais" class="tag"> País de origen
      <select name="pais" >
  
        <option value="" disabled>--</option>
        <option value="Japón">Japón</option>
        <option value="Estsdos Unidos">Estados Unidos</option>
        <option value="Reino Unido">Reino Unido</option>
        <option value="Corea del Sur">Corea del Sur</option>
        <option value="China">China</option>
      </select>
    </label>
  
    
     <label for="nota" class="tag">
      Nota: <input type="range" id="nota" name="nota" min="0" max="10" step="1" >
     </label>
  
     <label for="area" class="tag">
      Comentarios:
      <textarea id="area" name="area" rows="7" cols="40" placeholder="Algo interesante..."></textarea>
    </label>
    
  
  
    <div id="botones">
      
      <label for="enviar">
        <input type="submit" value="Enviar" name="submit" id="enviar">
      </label>

      <label for="eliminar">
      <input type="submit" value="Eliminar" name="submit" id="eliminar">
    </label>

      <label for="modificar">
      <input type="submit" value="Modificar" name="submit" id="modificar">
    </label>
    
        <label for="reset">
        <input type="reset" value="Reset" name="reset" id="reset">
      </label>
  
    </div>

  </div>


  <div class="card">
  <div class="card-inner">
    <div class="front">
      <h3 class="titulo_card">Registro de Juegos</h3>
      <p class="explicacion">Este proyecto es un formulario realizado con HTML5 y CSS, conectando a una Base de Datos mediante PHP.</p>
      
    </div>
    <div class="back">
      <h3 class="titulo_card">Registro de Juegos</h3>
      <p class="explicacion">El objetivo es, conectado con esa BdD en PhpMyAdmin, registrar, modificar 
        y eliminar, en este caso, videojuegos, al ser esa la temática del proyecto.</p>
    </div>
  </div>
</div>



<div class="card_dos">
  <form action="busqueda.php" method="POST">
    <h3 class="titulo_busq_card">Búsqueda</h3>
    <label for="busqueda">
      <input type="text" name="busqueda" placeholder="Nombre del juego..." id="input_busq" >
    </label>
    <label for="enviar_busq">
      <input type="submit" value="Buscar" name="enviar_busq" id="enviar_busq">
    </label>
  </form>
</div>

  


  



 
</div>



	
	
	
      
      
	  


    </form>
    <footer><a title="Github Page" href="https://github.com/JavierDCH12" target="_blank">Javier Delgado Chacón</a> &copy; <a title="Github repository" target="_blank"  href="https://github.com/JavierDCH12/formulario_juegos_php/tree/master" >Game Register 2023</a></footer>
  </body>
</html>
