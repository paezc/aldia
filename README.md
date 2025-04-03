# aldia
www.aldIA.com.ar es un catálogo de IA 

Será desarrollado con chatgpt para ver como fuciona.

-- -- -- -- -- --

# Plan de Trabajo - Proyecto Aldia

## 1. Definición del Proyecto
El objetivo es desarrollar un sitio web que funcione como directorio de tarjetas con información sobre herramientas de inteligencia artificial. La información será obtenida mediante un sistema automatizado de scraping y se almacenará en una base de datos para su posterior visualización en la web.

## 2. Tecnologías a Utilizar
- **Backend:** PHP (con posible futura integración con Python para scraping)
- **Frontend:** HTML, CSS, JavaScript (Bootstrap)
- **Base de datos:** MySQL
- **Scraping:** Python (BeautifulSoup, Scrapy o Selenium)
- **Infraestructura:** Ubuntu 22, Apache, Git, DBeaver, VSCode

## 3. Plan de Desarrollo

### **Fase 1: Configuración del Entorno**
- Configurar GitHub y clonar el repositorio.
- Configurar Apache, PHP y MySQL en `/var/www/html/`.
- Crear la estructura inicial del proyecto en el repo.

### **Fase 2: Estructura de Base de Datos**
- Diseño de las tablas principales:
  - `ias` (nombre, imagen, URL, descripción, tipo, tags, fecha de actualización).
  - `tags` (nombre, id).
  - `ias_tags` (relación IA - tags).
  - (Opcional para escalabilidad) `usuarios`, `comentarios`, `suscripciones`.
- Creación y pruebas de la base de datos.

### **Fase 3: Backend**
- Creación de endpoints en PHP para manejar el CRUD de IAs.
- Implementación de API para interactuar con el frontend.
- Generación de una estructura modular para facilitar futuras expansiones.

### **Fase 4: Frontend**
- Diseño minimalista con Bootstrap.
- Implementación de tarjetas con búsqueda y filtros por tipo y tags.
- Creación de un monitor de cantidad de IAs publicadas.

### **Fase 5: Scraper**
- Desarrollo de un robot en Python para buscar y scrapear información.
- Almacenamiento de los datos en la base de datos.
- Automatización del proceso con cron jobs.

### **Fase 6: Despliegue y Escalabilidad**
- Configurar hosting para subir la web.
- Implementar estrategias de escalabilidad pensando en suscripciones y contenido premium.
- Evaluación de mejoras y optimización del scraping.

## 4. Futuras Mejoras
- Incorporación de usuarios y comentarios.
- Creación de un sistema de suscripciones para acceso VIP.
- Integración con APIs de terceros para obtener más información sobre las IAs.

---
Este documento servirá como guía para el desarrollo del proyecto. Se actualizará conforme avancemos en la implementación.

