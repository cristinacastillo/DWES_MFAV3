

## Mi Fiel Amigo

# Descripción general:

Mi Fiel Amigo es una aplicación web basada en una protectora de animales, perros en este caso. En ella se podrá ver incformación sobre la protectora y adoptar perros. Según el usuario que sea tendrá distintas funcionalidades

Link a la aplicación desplegada: https://www.mifielamigo.online/ <br>
Link al video: https://www.youtube.com/playlist?list=PL7E2OScLSMfZrwOvoq-NJydWaNzdeh4Zn

# Como usar la aplicación desde local:

- Descargar el la ultima versión del proyecto
- Importar el script de la base de datos
- Ejecutar los siguientes comandos:

    ```sh
    $ composer install
    $ npm install 
    $ php artisan db:seed
    ```
Después instalar composer, las dependencias de node y poblar la base de datos, la aplicación estará lista para usar.

# Descripción de usuarios:

- Usuarios no registrados:
    * Página principal en la que encontrará información, videos e imagenes sobre la protectora.
    * Formulario de login en la página principal.
    * Registro en la aplicación, mediante un formulario.

- Usuarios registrados:
    * Página principal en la que encontrará información, videos e imagenes sobre la protectora.
    * Vista de todos los perros almacenados.
    * Hacer comentarios sobre los perros: así como editar o eliminar su propio comentario.
    * Solicitar la adopción de cualquiera de los perros.
    * Una vez solicitada la adopción puede cancelarla y volver a hacerla.
    * Editar la información de usuario.

- Usuario administrador:
    * Todo lo que puede hacer un usuario registrado.
    * Modificar cualquier información sobre los perros.
    * Ver información sobre un perro ya adoptado que no aparece para los usuarios normales.
    * Ver toda la información de los usuarios normales.
    * Eliminar perros.
    * Eliminar usuarios.
    * Búsqueda de usuarios.
    * Añadir nuevos perros.
    * Aceptar y cancelar las solicitudes de adopción de los usuarios.
