# Plataforma del Conocimiento para la Revista del Consumidor

Demostración de la Plataforma del Conocimiento para construir el sitio web de la Revista del Consumidor.

### Demostración

* [Demostración de la Revista del Consumidor](http://www.movimientolibre.com/revistadelconsumidor)
* [Repositorio en GitGub con la demostración](https://github.com/MovimientoLibre/revistadelconsumidor)

### Plataforma del Conocimiento

### Características

* Diseño web responsivo (Twitter Bootstrap) compatible con la mayoría de los navegadores que se adapta a celulares, tablets y PCs.
* Cumple con los estándares de la web semántica Schema.org para que sean eficientemente indexados por los buscadores (Google, Bing, Yahoo, etc.).
* Páginas web ligeras que dan como beneficio la carga más rápida en el navegador.
* Hospedaje gratuito en GitHub sin límite de almacenamiento al alojarse en GitHub.
* Alta seguridad, porque las páginas estáticas NO son tan vulnerables como las dinámicas (WordPress, Drupal, etc.)
* Visibilidad _off line_ ya que puede clonarse el sitio web con todas sus páginas, imágenes y archivos adjuntos.
* Altas capacidades de adecuar nuevas funcionalidades a todos los contenidos.
* Software Libre protegido por la licencia GPLv3.
* Las estadísticas de uso y visitantes se obtienen por Google Analytics.

### ¿Cuáles serán los principales beneficios de la Plataforma?

* Alto potencial de ser encontrado por los buscadores; ya que la mayoría de los visitantes llegan por búsquedas en Google, Bing, Yahoo, etc.
* Llegar a todos los usuarios de teléfonos inteligentes; los cuales son hoy la mayoría de los usuarios de internet a nivel mundial.
* La gran oportunidad de trabajar en transcribir todos los artículos pasados y presentes para liberarlos como conocimiento libre.
* Los textos e imágenes son el principal insumo para ello; porque falta para que videos y audios (vía reconocimiento de voz) sean indexados de forma exacta.

### Lo que no es

* No hay registro de usuarios. Primero en aras del conocimiento libre y de hacer muy eficiente la entrega de contenidos.


### Requerimientos

Para el mantenimiento:

* Servidor web HTTP convencional, como el Apache.
* Tener instalado y conocimiento del lenguaje PHP.
* Conocimiento de la sintaxis de Markdown.
* Ha sido desarrollado y se recomienda GNU/Linux, aunque podría funcionar en otros sistemas operativos.

Para el hospedaje:

* Conocimiento del uso de Git.
* Cuenta en GitHub.
* Conexión a Internet.

### Funcionamiento

* Cada publicación contiene por lo menos:
    * Un archivo markdown con el contenido.
    * Un archivo PHP con una clase heredera de Publicacion con los atributos.
    * Un directorio para las imágenes y archivos adjuntos correspondientes.
* A su vez, cada sección del sitio tiene un directorio dentro de /lib con las publicaciones.
* La configuración general del sitio está los archivos /lib/Configuracion
* Al ejecutar /bin/Crear.php tomará las Imprentas de cada sección y ejecutará cada publicación resultando los archivos HTML en la raiz sus respectivos directorios.
    * Creará la página inicial que es muy personalizable.
    * Creará las clasificaciones por categorías y autores.
    * Creará un mapa del sitio que sirve de insumo para que los buscadores indexen los contenidos.
    * Creará un archivo de sindicalización, también llamado RSS Feed para mantener informados a los suscriptores de las novedades del sitio.

### Futuros retos

* Desarrollar un sistema web para el mantenimineto de los contenidos
* Desarrollar la capacidad de generación de contenidos
    * Archivos PDF descargables: convirtiendo los archivos _markdown_.
    * Archivos JSON: para que sirvan se insumo a terceros programas e inteligencias artificiales.

### Equipo

* Rosa Elena Espinoza Villarreal
* [Guillermo Valdés Lozano](https://github.com/guivaloz/)
