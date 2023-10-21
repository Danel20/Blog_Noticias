# Blog_Noticias
Blog de Noticias en PHP y MySQL

#

- index.php
- noticias.php
- /php
  - models.php
  - view.php
- README.md

#

Mete este proyecto en la ruta "C:\xampp\htdocs\" (cambia la letra de la unidad "C" por la unidad donde tengas instalado "xampp") y abre el archivo "Blog_Noticias/index.php" o ejecútalo directamente en el navegador con esta dirección: "localhost:80/Blog_Noticias/index.php"

Este proyecto muestra el título y contenido de cada noticia guardada en una BD en MySQL.
La tabla de la BD contiene 2 columnas: "title" y "body" respectivamente.

Al abrir "noticias.php" verás el mismo contenido pero en formato JSON. Edita las variables que aparecen en este php para poner los datos de tu Base de Datos y si usas el "index.php" edita las variables en "php/view.php".

- **$NombreBD** - *Nombre de la Base de Datos*
- **$NombreTabla** - *Nombre de la Tabla*
- **$ConexionSQL = mysqli_connect('localhost','root','');** - *Esta es una operación*

Si hosteas este proyecto, asegúrate de poner el nombre del host y el nombre de tu usuario y contraseña.

#### **Danel20** •{ *ProgramadorXS* }•
