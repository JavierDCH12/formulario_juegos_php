# Game Register Form


In this little project, I intend to create a simple but efficient form to register different video-games that are later included into an connected MySQL Database, linked through several PHP script.

This project contains **three main documents**:

- formulario.php
- enviar.php
- funciones.php

## Formulario.php

In this document I created the main HTML form with 9 different fields to introduce inormation about an specific videogame.

Same of the fields range from the name of the game, to th yar it was released, its developer or the score given (out of ten) by the user making the input. 

This form is linked with an css document where it is given the style.

## Enviar.php

Once, the main form is created, another document is needed where the output of the form is shown, allowing the user to see how the different fields were filled once the 'submit button' was pressed in the previous document.

In enviar.php I also include the main php scripts that allow it to work. These are:

  1. Connection made to MySQL server through PHPMyadmin, using mysqli_connect and its parameters.
  2. Create several run-throughs to show messages of error or success if the connection is successfully made and the data is correctly inputted in the form.
  3. Apply a 'filter function' to clean the input data, for security purposes, thank to an externally created *'filter function'*.


## Funciones.php

In the last PHP document I created several functions, to use one of them in the current project.

This function, called 'filter' applies several internal functions provided by php to trim the form data, like:
- trim()
- stripslashes
- htmlspecialchars()









