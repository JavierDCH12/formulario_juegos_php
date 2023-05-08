<!DOCTYPE html>
<html>
  <head>
    <title>Formulario Juegos</title>

    <link rel="stylesheet" type="text/css" href="./estilos_formulario.css">
    <link rel="icon" type="image/jpg" href="imges/nintendodos.png"/>
    


    <style>
      
body {
    background: linear-gradient(90deg, rgba(2,0,36,1) 3%, rgba(0,212,255,1) 49%, rgba(9,9,121,1) 88%);
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




  h1{
    font-size:50px;
    margin-left:53px;
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
    background-color: #4CAF50;
    color: #fff;
  }
  
  input[type="reset"] {
    background-color: #e94742;
    color: #fff;
  }
  
  input[type="submit"]:hover {
    background-color: #3e8e41;
  }
  
  input[type="reset"]:hover {
    background-color: #d46f64;
  }
  

  #botones{
    display:flex;
    flex-direction: row;
    margin: 0px auto;
    margin-left: 75px;
    
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

    </style>




  </head>


  <body>

    
<div id="contenido">

  <div class="image-container">
    <img src="imges/nintendodos.png" alt="Imagen animada">
  </div>


  <div id="form">

  <!--Iniciamos el formulario de registro del juego-->
    

  <form name="formulario_juego" action="enviar.php" method="GET">
    <h1>Mejores juegos</h1>
    
    <label for="nombre_juego">Nombre del juego:
      <input type="text" name="nombre_juego" id="nombre_juego" required>
    </label>
  
  
    <label for="año_publicacion">
      Año de Publicación: <input type="text" name="año_publicacion" id="año_publicacion" minlength="4" maxlength="4" required pattern="[0-9]+">
    </label>
  
    <label for="desarrollador">
      Compañia desarrolladora:<input type="text" name="desarrollador" id="desarrollador" required pattern="[a-zA-Z ]+">
    </label>
  
    <label for="director">
      Director/Creador: <input type="text" name="director" id="director" required pattern="[a-zA-Z ]+">
    </label>
  
    <label for="distribuidora">
      Distribuidora: <input type="text" name="distribuidora" id="distribuidora" required pattern="[a-zA-Z ]+">
    </label>
  
    <label for="guionista">
      Guionista: <input type="text" name="guionista" id="guionista" required pattern="[a-zA-Z ]+">
    </label>
  
    <label for="pais"> País de origen
      <select name="pais" required>
  
        <option value="" disabled>--</option>
        <option value="Japón">Japón</option>
        <option value="Estsdos Unidos">Estados Unidos</option>
        <option value="Reino Unido">Reino Unido</option>
        <option value="Corea del Sur">Corea del Sur</option>
        <option value="China">China</option>
      </select>
    </label>
  
    
     <label for="nota">
      Nota: <input type="range" id="nota" name="nota" min="0" max="10" step="1" required>
     </label>
  
     <label for="area">
      Comentarios:
      <textarea id="area" name="area" rows="7" cols="40" placeholder="Algo interesante..."></textarea>
    </label>
    
  
  
    <div id="botones">
      <label for="enviar">
        <input type="submit" value="Enviar" name="enviar" id="enviar">
      </label>
    
        <label for="reset">
        <input type="reset" value="Reset" name="reset" id="reset">
      </label>
  
    </div>

  </div>


 
</div>



	
	
	
      
      
	  


    </form>
    <footer>Javier Delgado Chacón &copy; Game Register 2023</footer>
  </body>
</html>
