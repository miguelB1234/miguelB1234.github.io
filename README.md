# Portal Web Institución Educativa Promoción Social

## Descripción
Portal web educativo para la Institución Educativa Promoción Social, desarrollado con PHP, MySQL, y Bootstrap. Incluye un sistema de autenticación para estudiantes y administradores, con una interfaz moderna y responsiva.

## Características
- 🔐 Sistema de login dual (estudiantes/administradores)
- 📱 Diseño responsivo
- 🎨 Interfaz moderna con efectos visuales
- 📊 Panel de administración con efecto Matrix
- 📚 Sección de materias y profesores
- 📰 Sección de noticias institucionales
- 📍 Información de contacto y ubicación

## Requisitos
- PHP 7.4+
- MySQL 5.7+
- Apache/XAMPP
- Navegador web moderno

## Instalación
1. Clonar el repositorio en la carpeta htdocs de XAMPP
2. Importar la base de datos `institucion.sql`
3. Configurar la conexión en `conexion.php`
4. Acceder vía `http://localhost/PROMOCION SOCIAL ONE PAGE`

## Credenciales
- **Estudiante**: Solo requiere nombre
- **Administrador**: 
  - Usuario: cualquier nombre
  - Contraseña: 1234

## Estructura de Archivos
```
PROMOCION SOCIAL ONE PAGE/
├── index.php          # Página principal (estudiantes)
├── admin.php         # Panel de administración
├── login.php         # Sistema de autenticación
├── logout.php        # Cierre de sesión
├── conexion.php      # Configuración de base de datos
├── styles.css        # Estilos generales
├── matrix.css        # Estilos para efecto Matrix
├── matrix.js         # JavaScript para efecto Matrix
└── README.md         # Documentación
```

## Contribución
Para contribuir al proyecto:
1. Fork del repositorio
2. Crear rama para nuevas características
3. Commit de cambios
4. Push a la rama
5. Crear Pull Request

## Licencia
Este proyecto está bajo la Licencia MIT.

## Contacto
Institución Educativa Promoción Social
- 📍 Dirección: Cra. 6 #No. 11-24, Palermo, Huila
- 🌐 Website: [URL del sitio]
