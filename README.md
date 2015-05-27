Sitio oficial de [AESIA](http://aesia.org)
===================================================
Repositorio con el código fuente del website de la Asociación de Estudiantes de Ingeniería y Arquitectura de la Universidad de El Salvador, Facultad Multidisciplinaria de Occidente.

## Antes de comenzar, los prerrequisitos son:
Tener instalado lo siguiente:

* php
* [Node.js](http://nodejs.org/)
* [Bower Package Manager](http://bower.io/)
* NPM (normalmente viene con node.js)

#### Para bower
```bash
$ npm install -g bower
```

## Creación del proyecto

#### Clonar el repositorio
```bash
$ git clone https://github.com/webslinder/AesiaWeb.git
$ cd AesiaWeb
```
## Instalando dependencias
#### Back-end
```bash
$ npm install
```
Instalara las dependencias que estan en package.json

#### Front-end

Componentes bower
```bash
$ bower install
```

## Estructura del proyecto
Lista de los directorios y archivos más importantes y generales.
Nota: Hay varios archivos generales que son parte de CodeIgniter que no se detallan acá, para mas información buscar en la [documentación oficial de CodeIgniter](http://www.codeigniter.com/user_guide/)

```
├── application/             - Server-side (Lógica de negocio)
│   ├── config/              - Archivos de configuración general
│   ├── controllers/         - Controladores
│   ├── models/              - Modelos
│   ├── language/            - Lenguajes soportados
│   └── views/               - server-side views
│       └── templates/       - Plantillas server-side
│
├── public/                  - Archivos estáticos (toda la lógica del cliente)
│   ├── imgs/                - Imagenes (*.jpg, *.png, etc)
│   ├── lib/                 - Librerias y frameworks (generados por bower)
│
├── system/                  - Core de codeingiter
├── .bowerrc                 - Configuracion bower
├── .gitignore               - Lista de archivos a ignorar por git
├── .htaccess                - Configuracion de apache local
├── bower.json               - Dependencias front-end (todas las librerias front-end)
├── index.php                - Index codeigniter
└── package.json             - Componentes Back-end
```