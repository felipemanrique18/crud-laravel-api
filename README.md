**INSTALACION**

composer install

cp .env.example .env

php artisan key:generate


**AGREGAR ESTA VARIABLE AL .ENV GENERADO**


API_ENDPOINT=https://jsonplaceholder.typicode.com


**DESCRIPCION DEL FUNCIONAMIENTO**

Utilizamos el paquete GuzzleHttp\Client; para conectarnos a la api que esta en la variable ~~API_ENDPOINT ~~

Al cargar el sistema se ejecuta un js llamado index.js el cual tiene la funcion de cargar todos los datos de la api,tambien tiene la funcion de eliminar un dato.

Al seleccioar la creacion de un nuevo dato, el sistema retorna la vista con todos los usuarios para que el cliente pueda seleccionar a que usuario le pertenece ese dato, el archivo create.js tiene una funcion que al presionar el boton de crear envia el formulario sin necesidad de cargar la pagina y devuelve el mensaje de Creacion exitosa.

Al editar un dato pasa directamente al controlador y hace la respectiva busqueda y devuelve la vista con el dato a editar, esta vista contiene un archivo js llamado update.js el cual tiene como funcion editar el  dato y dar el mensaje de Actuacion con exito.
