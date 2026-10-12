# 🍔 WowFood - Restaurant Food Order System

WowFood es un proyecto educativo extracurricular diseñado para enseñar los fundamentos del desarrollo web dinámico utilizando **PHP puro (Vanilla)** y **MariaDB**, prescindiendo del uso de frameworks. 

El objetivo principal es demostrar la interacción entre el cliente (HTML/CSS), el servidor (PHP) y la persistencia de datos (PDO) mediante la construcción de un catálogo interactivo de comida y un sistema básico de recepción de pedidos.

## ⚙️ Stack Tecnológico

*   **Backend:** PHP (Procedural con introducción a POO).
*   **Base de Datos:** MariaDB / MySQL (Extensión PDO).
*   **Frontend:** HTML5, CSS3 nativo (Responsive design manual).

## 🗂️ Arquitectura y Estructura del Proyecto

El sistema utiliza una arquitectura modular básica para separar responsabilidades:

*   `/`: Archivos de enrutamiento y presentación principal (`index.php`, `categories.php`, `foods.php`, `order.php`).
*   `css/`: Hojas de estilo puras (`style.css`).
*   `images/`: Recursos gráficos del catálogo y UI.
*   `layout/`: Fragmentos de UI reutilizables (`header.php`, `footer.php`, `socialmedia.php`, `explore-foods.php`).
*   `lib/entity/`: Capa de acceso a datos utilizando Clases y PDO (`Product.php`, `Category.php`, `ProductModel.php`, `CategoryModel.php`).
*   `wowfood.sql`: Dump de la base de datos MariaDB inicial con datos de prueba.

## 🚀 Guía de Instalación y Despliegue

Sigue estos pasos para levantar el entorno de desarrollo local:

### 1. Preparar la Base de Datos
1. Inicia tu servidor de base de datos (MariaDB/MySQL).
2. Crea una base de datos llamada `wowfood`.
3. Importa el archivo `wowfood.sql` proporcionado en la raíz del proyecto para crear las tablas (`category`, `employees`, `order`, `order_details`, `product`) y poblar los datos de prueba.

### 2. Configurar la Conexión PDO
Asegúrate de que las credenciales de conexión coincidan con tu entorno local. Debes verificar y modificar los siguientes archivos si tu usuario o contraseña son diferentes:
*   `lib/entity/CategoryModel.php` (Línea 10)
*   `lib/entity/ProductModel.php` (Línea 11)

```php
// Ejemplo de configuración actual:
$this->pdo = new PDO('mysql:host=localhost;dbname=wowfood', 'samdeb', 'admin');