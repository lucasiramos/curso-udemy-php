<!-- 

//Instalación 
	Para instalar un proyecto de Symfony tengo dos opciones: Crearlo como una web tradicional, o bien crearlo como una Api Restful. 

	Si quiero instalarlo como una web tradicional tengo que poner:
		composer create-project symfony/website-skeleton [nombre-proyecto]
	Si quiero un proyecto con formato Api Restful
		composer create-project symfony/skeleton [nombre-proyecto]

	OJO!
	Una vez que se instala tengo que descargar un paquete muy importante! Es para configurar el Framework para que pueda trabajar con Apache (lo tengo que hacer tanto en Desarrollo como en Producción). Tengo que poner:
		composer require symfony/apache-pack

Siguiente paso es crear un host virtual (si queremos):
	Abrir httpd-vhosts.conf en C:\wamp64\bin\apache\apache2.4.37\conf\extra

	Copiar una regla entera:
	/*<VirtualHost *:80>   
	    DocumentRoot "c:/wamp/www/symfony3"
	    ServerName symfony3.com.devel
	    ServerAlias www.symfony3.com.devel
	    <Directory "c:/wamp/www/symfony3/web">
	        Options Indexes FollowSymLinks     
	        AllowOverride All
	        Order Deny,Allow
	        Allow from all     
	    </Directory> 
	</VirtualHost>
	*/
	Realizar los cambios necesarios

	Siguiente paso, modificar fichero de hosts en C:\Windows\System32\drivers\etc (¿En Linux?)
	// 	IMPORTANTE! Si estas corriendo un IIS también a la url final ".com.devel" hay que agregarle un :8080
	//	Reiniciar el servidor!

Crear un controlador
	Entrar al raíz del proyecto en cmd y escribir
		php bin/console make:controller [nombre-controlador]

		























































-->