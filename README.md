No Se Me Escapa - CRM Minimalista & Humano (B2B SaaS)
No Se Me Escapa es una plataforma SaaS diseñada específicamente para profesionales independientes y pequeñas empresas de servicios que necesitan un sistema de seguimiento de clientes sin complicaciones. El enfoque principal es la empatía y la privacidad, permitiendo que el profesional se centre en la relación humana mientras el sistema gestiona los datos de forma segura.

🚀 Arquitectura "Secret Sauce"
A diferencia de los CRM tradicionales que usan una base de datos centralizada y masiva, este proyecto implementa una arquitectura de Multitenancy Altamente Escalable con SQLite:

Bases de Datos Individualizadas: Cada profesional que se registra obtiene su propio archivo 
.sqlite
 privado. Esto garantiza un aislamiento total de los datos y facilita las copias de seguridad individuales y la portabilidad.
Conexión Dinámica: El sistema utiliza un middleware personalizado para detectar al usuario autenticado y conmutar la conexión de base de datos en tiempo real hacia su archivo específico.
Escalabilidad Horizontal: Al no depender de un único servidor de base de datos gigante, el sistema es ligero, rápido y consume mínimos recursos del servidor.
🛠 Características Principales
Gestión de Clientes (CRUD Humano): Diseñado para capturar la esencia de la relación. Incluye campos específicos para detalles humanos que otros CRMs olvidan.
Conexión WhatsApp con un Click: Integración directa que permite abrir conversaciones con clientes sin necesidad de copiar y pegar números ni agregarlos a la agenda del teléfono.
Panel de Control de Proximidad: Pantalla de inicio inteligente que muestra quién cumple años hoy y a quién le toca un seguimiento basado en la fecha de último contacto.
Funcionalidad PWA (Progressive Web App): Instalable en dispositivos móviles para una experiencia nativa, acceso rápido desde la pantalla de inicio y fluidez total.
Interfaz Premium: Panel de administración moderno impulsado por Filament 3, optimizado para la velocidad y la facilidad de uso.
🔒 Seguridad y Privacidad "Militar"
La privacidad es el pilar central de este CRM. Hemos implementado múltiples capas de protección:

Aislamiento de Datos: Un profesional jamás comparte espacio de base de datos con otro. Los datos están físicamente separados en archivos distintos.
Encriptación Automática (At-Rest): Los datos más sensibles se encriptan antes de guardarse en el disco mediante el algoritmo AES-256 de Laravel. Esto incluye:
Teléfonos de clientes.
Detalles Humanos (información personal sensible).
Notas y Bitácoras de seguimiento.
Seguridad por Diseño: Los archivos de bases de datos de los profesionales están alojados en rutas no accesibles de forma pública desde el navegador.
💻 Stack Tecnológico
Backend: Laravel 12 (PHP 8.4+)
Admin Panel: Filament 3
Frontend: Livewire, Alpine.js y Tailwind CSS
Base de Datos: Sistema híbrido (System DB para usuarios + Tenant DBs en SQLite)
Build Tool: Vite
