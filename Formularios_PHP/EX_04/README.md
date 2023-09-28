# EX_04

Este es un poco más largo, pero tampoco es complicado, tienes que hacer un formulario con los siguentes datos:

- Nombre
- Apellidos
- Contraseña
- Alumno o profesor (checkbox)
- Foto (nombre del fichero)
- Edad
- Comentarios
- Campo oculto con el nombre test y el texto "myPrueba"

Voy a comentar cada campo por encima y explicar, los que són un poco más complejos.
Nombre y apellidos son iguales, simplemente se añade texto y ya está, lo  muestras. La contraseña cuando la estas escribiendo esta oculta con asteriscos, y lo muestras también. Alumno o profesor, simplemente es una checkbox y haces que se muestre el seleccionado. Foto tampoco es nada del otro mundo, lo único que tienes que enseñar es el nombre del archivo seleccionado. Edad, és una entrada de número. Comentarios, puedes escribir libremente lo que quieras y se muestra. Y el que és el más exótico és el Campo oculto, el cual haces un "input", le pones el type="hidden", y de valor pones value="myPrueba", que és el que se pide, ahí lo que debes hacer es con el $_POST, recoger el valor del input y lo muestras y ya estaría el ejercicio.