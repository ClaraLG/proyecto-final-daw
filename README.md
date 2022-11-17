Registro:

15/11/2022 > Rama Main: 
Se ha generado la estructura de carpetas del proyecto:
    - Carpeta assets y sus hijas (css, images, js, plugins, scss)
    - Carpeta controladores: Archivos .php en los que haremos uso de las funciones que hemos creado en los manejadores y en los que incluiremos el código HTML
    - Carpeta entidades: Clase para cada tabla que existe en la BBDD
    - Carpeta manejadores: Clases que incluyen los métodos para manejar las entidades
    - Carpeta util: BBDD y clases que contengan métodos para evitar duplicidad de código

También se han creado los 2 archivos package JSON y se ha instalado SASS en el proyecto (esta instalación ha generado una serie de archivos y carpetas que se han almacenado dentro de la carpeta de css/plugins).

Se han creado algunos de los archivos básicos de SASS y se ha generado el archivo "style.css.map" encargado de compilar todo el código scss y pasarlo al archivo "style.css"

16/11/2022 > Rama Main: 
Se han añadido archivos de prueba en las carpetas que contendrán los archivos .sql y .php

16/11/2022 > Rama Clara: 
- Definidas variables de colores en "_custom.scss"
- Creado nuevo archivo "_formularios.scss" que contendrá todos los estilos de los formularios
- Añadidos los @use en "style.scss" para llamar a todos los archivos de scss y que se compilen a css desde aquí
- Importado las fuentes y creado variables para cada una
- Definido la tipografia de cada elemento
- Creado el esqueleto del formulario de login

17/11/2022 > Rama Clara: 
- Creados archivos php de los otros 3 formularios (registro, contraseña olvidada y cambio de contraseña)
- Creado el código de los 4 formularios (login, registro, contraseña olvidada y cambio de contraseña)