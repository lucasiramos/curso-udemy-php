<!-- 

*Para crear un proyecto de Git, hacer click derecho en la carpeta (en este caso Proyecto), y darle Git Bash here. Te abre un bash de Git para ejecutar los comandos en esa carpeta.

*El comando para crear un proyecto es git init.

*Con el comando git status vemos el estado de nuestros archivos. Por defecto, si aún no agregue nada, me aparecen como que no los toma en cuenta, se muestran en rojo.

*Con git add [nombre archivo] me agrega ese archivo al staging area. Luego, en git status me pone que ya los está siguiendo. Ya estoy trabajando con esos archivos. Si agrego un archivo más en la compu, me va a aparecer en rojo (sin agregar al staging area).

*Luego, tengo que configurar el usuario y el mail, para poder hacer un commit, una versión.
	git config --global user.email "[Dirección de mail]"
	git config --global user.name "[Nombre de usuario]"

*Para crear una foto de esos archivos, una versión para que la congele, tengo que hacer git commit. Me abre una nueva instancia de la consola, en la parte de arriba tengo para escribir el comentario, luego si hago ":wq" y Enter, me hace el commit.

*Luego de hacer esto, si hago un git status, me dice que no hay nada para hacer un commit, trabajando con árbol limpio. Si realizo un cambio en un archivo (html, por ejemplo) y hago un git status, vuelvo al paso previo, tengo cambios para commitear.

*Esta la opción de volver al paso anterior de ese archivo modificado, haciendo git checkout -- [Nombre y extensión del archivo]. Luego, hago git status y veo que todo vuelve a estar limpio.

*Si vuelvo a realizarle cambios puedo ver la diferencia entre las dos versiones de los archivos, la que hice el commit y la modificada en el editor html. Para esto tengo que usar el comando git diff [Nombre de archivo].

*Cuando modifico un archivo lo tengo que volver a agregar al staging area con git add [nombre]

*Si quiero que me ignore determinados archivos, tengo que ir al raiz y crear un archivo de nombre ".gitignore", ahi puedo agregar la carpeta/archivo que quiero ignorar.

[nombre carpeta 1]
[nombre carpeta 2]
[nombre archivo.extension]

*Con git log muestro el log de los commits.

*Con git commit -m "[texto del mensaje]" podes hacer el commit sin que te abra la siguiente pantalla, y escribis el mensaje ahí directamente.

*git branch te muestra todas los branchs que tenes (ramas, creo...)

*git branch [nombre] te crea un nuevo branch (rama) desde donde estas (creo).

*Una vez creado el branch, puedo cambiarme hacia esa rama haciendo git checkout [nombre branch]

*Si tengo muchos archivos para hacer un git add, puedo agregarlos a todos con un "git add ."


/////////////////////////////////////////////////////////////

Subir a GitHub

*git remote add origin https://github.com/lucasiramos/pruebas-git.git // Esto es para indicarle a que proyecto de GitHub tiene que subir, es decir, al repositorio creado

*Para efectivamente terminar de subir todo a la nube hay que hacer
	git push -u origin master

-->