# Plan de Desarrollo — Landing Page Vigitec Panamá

## 1. Objetivo del proyecto

Migrar la página actual de Vigitec Panamá (alojada en Wix) hacia un sitio **propio, independiente y profesional**, sin perder el dominio ni depender de terceros. El nuevo sitio debe transmitir seguridad, confianza y modernidad, conservando la identidad visual actual (negro, rojo/naranja y blanco).

---

## 2. Identidad visual

| Elemento | Valor |
|---|---|
| Color primario (fondo) | Negro `#0D0D0D` |
| Color de acento | Rojo `#E63946` (basado en el logo "//") |
| Color secundario | Blanco `#FFFFFF` |
| Color de apoyo (texto suave) | Gris claro `#F4F4F4` |
| Tipografía sugerida | **Poppins** o **Montserrat** (Bold para títulos, Regular para texto) |
| Estilo | Moderno, minimalista, corporativo, con bordes suaves y buen espaciado |

---

## 3. Tecnologías recomendadas

### Stack principal (recomendado para tu caso)

| Capa | Tecnología | Motivo |
|---|---|---|
| Estructura | **HTML5** | Simplicidad y control total |
| Estilos | **Tailwind CSS** | Diseño moderno rápido, responsive nativo |
| Interactividad | **JavaScript (Vanilla)** | Ligero, sin dependencias pesadas |
| Formulario de cotización | **EmailJS** | Envío de correos sin backend ni servidor propio |
| Botón de WhatsApp | **API `wa.me`** + botón flotante en JS/CSS | No requiere backend, funciona en cualquier dispositivo |
| Hosting | **Vercel** o **Netlify** | Gratis, rápido, SSL automático, deploy con un clic |
| Dominio | Conexión directa del dominio actual (o nuevo) al hosting | No dependes de Wix nunca más |
| Control de versiones | **Git + GitHub** | Respaldo del código y despliegue automático |

### Alternativa escalable (si en el futuro quieres más funciones: blog, panel admin, catálogo)

| Capa | Tecnología |
|---|---|
| Framework | **Next.js (React)** |
| Estilos | Tailwind CSS |
| Backend ligero | **Resend** (correos) o **Next.js API Routes** |
| Base de datos (opcional) | **Supabase** (si se necesita guardar cotizaciones) |
| Hosting | Vercel |

> **Recomendación:** iniciar con el stack principal (HTML + Tailwind + JS + EmailJS). Es suficiente para una landing profesional, se implementa en días no semanas, y migrar a Next.js después es sencillo si el negocio crece.

---

## 4. Estructura de carpetas

```
vigitec-panama/
│
├── index.html                     # Landing page principal
│
├── assets/
│   ├── css/
│   │   └── styles.css             # Estilos personalizados + configuración Tailwind
│   │
│   ├── js/
│   │   ├── main.js                # Menú, scroll suave, animaciones
│   │   ├── whatsapp-widget.js     # Lógica del botón flotante de WhatsApp
│   │   └── formulario.js          # Envío de cotización vía EmailJS
│   │
│   ├── img/
│   │   ├── logo.png
│   │   ├── logo-white.png
│   │   ├── favicon.ico
│   │   ├── hero/                  # Imágenes principales (banner)
│   │   ├── servicios/             # Íconos/fotos por servicio (CCTV, alarmas, control de acceso, etc.)
│   │   └── clientes/               # Logos de clientes o certificaciones
│   │
│   └── fonts/                     # Si se usa tipografía descargada localmente
│
├── docs/
│   └── plan-vigitec-panama.md     # Este documento
│
├── .gitignore
├── README.md
└── package.json                    # Solo si se usa Tailwind vía Node
```

---

## 5. Secciones de la landing page

1. **Header / Navbar**
   - Logo Vigitec Panamá
   - Menú: Inicio, ¿Quiénes somos?, Servicios, Contacto, Cotización, Compra Online
   - Fondo negro, texto blanco, hover en rojo

2. **Hero (sección principal)**
   - Título: **"Descubre nuestros sistemas"**
   - Subtítulo: *"Protege tu hogar o negocio con los sistemas de seguridad. Nuestros expertos te brindan soluciones personalizadas para garantizar tu tranquilidad."*
   - Imagen de sistema de seguridad (como en la imagen actual)
   - Botón CTA: **"Solicita tu cotización"** (rojo, texto blanco)

3. **¿Quiénes somos?**
   > VIGITEC PANAMA es una empresa de servicios de sistemas de seguridad altamente reconocida por nuestro compromiso con la rapidez, la eficiencia y la honestidad en todo lo que hacemos. Contamos con un equipo altamente cualificado y experto en todo tipo de trabajos de seguridad, y nos esforzamos por administrar todos nuestros proyectos de manera eficiente y efectiva para asegurarnos de que nuestros clientes queden completamente satisfechos. Durante todo el proceso, mantenemos canales abiertos de comunicación para asegurarnos de que nuestros clientes estén informados y al tanto de cómo avanza su proyecto.

4. **Servicio de** *(subsección dentro de Quiénes somos / Servicios)*
   > Instalación de cámaras y mantenimiento en todo el sistema de seguridad, trámites y entrenamiento para facturación electrónica en Panamá, orientación sobre paneles solares. Como también sistemas de incendios con certificación.

   - **Mantenimiento** — Nuestro servicio de mantenimiento preventivo y correctivo asegura el óptimo funcionamiento de su sistema de seguridad, brindándole tranquilidad y confianza en su protección.
   - **Cámaras** — Ofrecemos instalación profesional de cámaras de seguridad con asesoramiento personalizado y soporte técnico continuo para garantizar la protección de su hogar o negocio.
   - **Reparaciones** — Contamos con un equipo especializado en reparaciones de equipos electrónicos, incluyendo computadoras, laptops y sistemas de seguridad, para resolver cualquier inconveniente de manera eficiente.

5. **Nuestros servicios** *(sección principal de servicios, con tarjetas)*
   > Si necesita una empresa confiable para satisfacer todas sus necesidades, VIGITEC PANAMA es la opción perfecta para usted. Ofrecemos una amplia gama de servicios para cubrir todas sus necesidades y superar sus expectativas. Si desea conocer más sobre los servicios que ofrecemos, no dude en ponerse en contacto con nosotros. Estaremos encantados de proporcionarle más información y ayudarle a encontrar la solución perfecta para sus necesidades.

   | Servicio | Descripción |
   |---|---|
   | **Supervisión 24/7** | Monitoreo para locales y hogares |
   | **Servicios de instalación** | Instalación y cotización de equipos |
   | **Facturación electrónica** | Asesoría e instalación |
   | **Paneles solares** | Asesoría de expertos |
   | **Sistemas de alarmas** | Sistemas de alarmas de última generación |

6. **¿Por qué comprar con nosotros?** *(sección de la página de Compras)*
   > Somos una empresa de seguridad con más de 20 años de experiencia en el mercado. Contamos con un equipo de profesionales altamente capacitados y un sistema de seguridad de última generación que le brindará la tranquilidad que necesita.

   Ofrecemos una amplia gama de servicios de seguridad, incluyendo:
   - Alarmas
   - Vigilancia
   - Protección contra incendios
   - Protección contra robo
   - Protección contra intrusión

   > Nuestros servicios están diseñados para satisfacer las necesidades de cada cliente, independientemente del tamaño o presupuesto. Contáctenos hoy mismo para obtener más información sobre nuestros servicios y cómo podemos ayudarle a proteger su hogar o negocio.

   - Botón: **"Compra Online"** → enlaza a: `https://eshop.premium-soft.com/vigitecpanama`

7. **Formulario de cotización**
   - Título: **"Reciba una cotización"**
   - Texto: *"Puede proporcionar su información para obtener una cotización de nuestros servicios de seguridad."*
   - Campos: Nombre, Teléfono, Correo, Tipo de servicio, Mensaje
   - Envío automático por correo (EmailJS) a: `edwin.p@vigitecpanama.com` e `info@vigitecpanama.com`
   - Confirmación visual al enviar ("¡Gracias! Te contactaremos pronto")

8. **Contacto**
   - **Teléfono:** +507 6933-0534 / +507 6977-4190
   - **Email:** edwin.p@vigitecpanama.com · info@vigitecpanama.com
   - **Horario:** Lun - Vier: 8:00 a.m. a 5:00 p.m.
   - **Dirección:** Calle Los Pinos, Aguadulce, Panamá
   - Mapa embebido de Google Maps con la ubicación

9. **Footer**
   - Logo Vigitec Panamá
   - Enlaces rápidos (Inicio, Quiénes somos, Servicios, Contacto)
   - Redes sociales
   - Texto legal: *"VIGITEC PANAMA © Todos los derechos reservados."*

10. **Botón flotante de WhatsApp** *(ver detalle en sección 6 de tecnología)*

---

## 6. Botón flotante de WhatsApp (widget estilo burbuja)

Basado en el ejemplo visual proporcionado, pero adaptado a los colores de Vigitec Panamá:

- **Burbuja circular flotante** en la esquina inferior derecha, visible en todo momento (posición `fixed`)
- Color de la burbuja: **negro** con ícono de WhatsApp en **blanco**, borde/detalle en **rojo**
- Al hacer clic, se despliega una **tarjeta de chat simulada**:
  - Encabezado rojo/negro con ícono de WhatsApp y botón de cerrar (X)
  - Mensaje de bienvenida: *"Hola, bienvenido a Vigitec Panamá 👋"*
  - Segundo mensaje: *"¿En qué podemos ayudarte hoy?"*
  - Botón inferior: **"Abrir chat"** (fondo rojo, texto blanco, ícono de enviar)
- Al presionar **"Abrir chat"**, se redirige automáticamente a:
  ```
  https://wa.me/50769330534?text=Hola%2C%20quiero%20más%20información%20sobre%20sus%20servicios%20de%20seguridad
  ```
  *(número principal: +507 6933-0534; el segundo número +507 6977-4190 puede mostrarse como alternativo en la sección de Contacto)*
- Efecto de "pulso" sutil en la burbuja para llamar la atención sin ser invasivo
- Totalmente responsive (en móvil ocupa menos espacio y se ajusta al borde de la pantalla)

**Paleta del widget:**
| Elemento | Color |
|---|---|
| Fondo burbuja | Negro `#0D0D0D` |
| Ícono WhatsApp | Blanco |
| Encabezado tarjeta | Negro con línea roja inferior |
| Botón "Abrir chat" | Rojo `#E63946`, texto blanco |
| Fondo tarjeta de chat | Blanco `#FFFFFF` |

---

## 7. Plan de trabajo (fases)

### Fase 1 — Preparación (1 día)
- ✅ Textos finales definidos (misión, servicios, contacto) — ver sección 5
- ✅ Número de WhatsApp confirmado: +507 6933-0534
- ✅ Correos de destino para cotizaciones confirmados: edwin.p@vigitecpanama.com, info@vigitecpanama.com
- Recopilar imágenes/logo en alta calidad (fotos de instalaciones, cámaras, equipo de trabajo)

### Fase 2 — Diseño y maquetado (2-3 días)
- Configurar Tailwind CSS
- Maquetar estructura HTML de todas las secciones
- Aplicar paleta de colores y tipografía

### Fase 3 — Funcionalidad (2 días)
- Implementar botón flotante de WhatsApp con tarjeta desplegable
- Configurar formulario de cotización con EmailJS
- Agregar animaciones y scroll suave

### Fase 4 — Optimización (1 día)
- Optimizar imágenes (WebP, compresión)
- Revisar velocidad de carga (PageSpeed Insights)
- Ajustar SEO básico (meta tags, títulos, descripciones)

### Fase 5 — Despliegue (1 día)
- Subir proyecto a GitHub
- Desplegar en Vercel o Netlify
- Conectar dominio propio (dejando de depender de Wix)
- Configurar SSL (automático en Vercel/Netlify)

### Fase 6 — Pruebas finales
- Verificar responsive en móvil, tablet y escritorio
- Probar formulario de cotización (envío real de correo)
- Probar botón de WhatsApp en distintos dispositivos
- Revisión final de textos e imágenes

---

## 8. Checklist de lanzamiento

- [ ] Dominio apuntando al nuevo hosting
- [ ] SSL activo (candado verde en el navegador)
- [ ] Formulario de cotización probado y funcional
- [ ] Botón de WhatsApp con número correcto
- [ ] Sitio 100% responsive
- [ ] Velocidad de carga optimizada
- [ ] Meta títulos y descripciones para SEO
- [ ] Favicon configurado
- [ ] Backup del sitio anterior de Wix (capturas/textos) por si acaso

---

## 9. Próximo paso

Con este plan aprobado y con el contenido real ya incorporado (servicios, quiénes somos, contacto, compras), el siguiente paso es construir el `index.html` completo con:
1. Estructura completa (Header, Hero, Quiénes somos, Servicios, Compra Online, Contacto, Footer) con los textos oficiales
2. Botón flotante de WhatsApp funcional hacia +507 6933-0534 (negro/rojo/blanco)
3. Formulario de cotización conectado a EmailJS, enviando a edwin.p@vigitecpanama.com e info@vigitecpanama.com

Solo falta que me compartas las imágenes/fotos que quieres usar (logo en alta resolución, fotos de instalaciones, cámaras, equipo) y podemos generar el código completo listo para desplegar.
