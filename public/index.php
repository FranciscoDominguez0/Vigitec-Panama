<?php
$current_page = 'inicio';
$page_title = 'Vigitec Panamá - Sistemas de Seguridad Premium';
$page_description = 'Vigitec Panamá - Especialistas en sistemas de seguridad premium. Instalación de cámaras, alarmas, control de acceso y mantenimiento con soporte 24/7.';
$page_keywords = 'sistemas de seguridad panamá, cámaras de seguridad, instalación de cámaras, alarmas panamá, control de acceso, mantenimiento de seguridad';
$page_url = 'https://vigitecpanama.com/';
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth" style="background-color: #0a0a0a; color: #ffffff;">
<head>
  <?php include 'includes/head.php'; ?>
</head>
<body class="bg-white text-gray-800 font-sans antialiased selection:bg-accent selection:text-white">

  <?php include 'includes/header.php'; ?>

  <!-- ==================== SECCIÓN PRINCIPAL (HERO) ==================== -->
  <section class="relative overflow-hidden pt-16 pb-24 lg:pt-24 lg:pb-32 bg-[url('/assets/img/hero/servicios_bg.png')] bg-cover bg-center bg-no-repeat bg-fixed">
    <!-- Fondo Decorativo Abstracto -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-primary rounded-l-[100px] opacity-50 hidden lg:block"></div>
    
    <div class="container mx-auto px-4 max-w-7xl relative z-10 flex flex-col lg:flex-row items-center">
      
      <!-- Contenido Izquierdo (Texto y Botones) -->
      <div class="w-full lg:w-1/2 lg:pr-12 text-center lg:text-left mb-16 lg:mb-0">
        <h1 class="text-5xl lg:text-6xl xl:text-7xl font-display font-extrabold text-white leading-[1.1] mb-6 tracking-tight mt-10">
          Protegemos Lo <br>
          <span class="text-accent">Que Más Importa.</span>
        </h1>
        
        <p class="text-gray-400 text-lg lg:text-xl font-light max-w-lg mx-auto lg:mx-0 mb-10 leading-relaxed">
          Sistemas de seguridad de vanguardia diseñados para brindar tranquilidad. Confiabilidad, rapidez y eficiencia en cada instalación.
        </p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
          <a href="/cotizacion/" class="w-full sm:w-auto bg-accent text-white px-8 py-4 rounded-full font-semibold hover:bg-accentHover hover:shadow-red-glow transition-all duration-300 flex items-center justify-center">
            Comenzar Ahora
          </a>
          <a href="/servicios/" class="w-full sm:w-auto bg-transparent text-white border border-gray-600 px-8 py-4 rounded-full font-semibold hover:border-white hover:bg-white/5 transition-all duration-300 flex items-center justify-center">
            Nuestros Servicios
          </a>
        </div>
      </div>
      
      <!-- Contenido Derecho (Imagen Decorativa) -->
      <div class="w-full lg:w-1/2 relative">
        <div class="relative w-full max-w-md mx-auto">
          <!-- Cuadro Decorativo Superior -->
          <div class="absolute -top-6 -left-6 w-24 h-24 border-4 border-accent rounded-3xl opacity-50"></div>
          <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-primary rounded-full z-0"></div>
          
          <!-- Imagen Principal del Técnico -->
          <div class="relative z-10 w-full aspect-[4/5] overflow-hidden rounded-[2rem] rounded-tr-none shadow-2xl border-4 border-secondary">
            <img src="/assets/img/hero/tecnico_instalador_v2.webp" alt="Técnico Instalando Sistema de Seguridad" class="w-full h-full object-cover">
          </div>
          
          <!-- Etiqueta Flotante de Soporte 24/7 -->
          <div class="absolute bottom-10 -left-12 lg:-left-20 bg-white p-4 rounded-2xl shadow-premium z-20 flex items-center space-x-4">
            <div class="bg-green-100 p-3 rounded-full text-green-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
            </div>
            <div>
              <p class="text-sm font-bold text-gray-900">Soporte 24/7</p>
              <p class="text-xs text-gray-500">Garantizado</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- ==================== RESUMEN DE SERVICIOS ==================== -->
  <section class="py-24 bg-[#111111]">
    <div class="container mx-auto px-4 max-w-5xl">
      
      <div class="text-center mb-20">
        <h4 class="text-accent font-bold tracking-widest uppercase text-sm mb-4">Nuestras Soluciones</h4>
        <h2 class="text-3xl lg:text-4xl font-display font-bold text-white mb-6 tracking-tight">Expertos en Seguridad y Tecnología</h2>
        <div class="w-16 h-1 bg-gray-800 mx-auto rounded-full relative overflow-hidden">
          <div class="absolute top-0 left-0 w-8 h-full bg-accent"></div>
        </div>
      </div>

      <!-- Cuadrícula de Servicios (2x2) -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-16">
        
        <!-- Item 1 -->
        <div class="border-l-2 border-gray-800 hover:border-accent pl-8 py-2 transition-colors duration-500 group">
          <div class="flex items-center space-x-5 mb-5">
            <div class="text-gray-500 group-hover:text-accent transition-colors duration-500">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h3 class="text-2xl font-bold text-white font-display tracking-wide">Servicio de</h3>
          </div>
          <p class="text-gray-400 font-light leading-relaxed text-sm">
            Instalación de cámaras y mantenimiento en todo el sistema de seguridad, trámites y entrenamiento para facturación electrónica en Panamá, orientación sobre paneles solares. Como también sistemas de incendios con certificación.
          </p>
        </div>

        <!-- Item 2 -->
        <div class="border-l-2 border-gray-800 hover:border-accent pl-8 py-2 transition-colors duration-500 group">
          <div class="flex items-center space-x-5 mb-5">
            <div class="text-gray-500 group-hover:text-accent transition-colors duration-500">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
            </div>
            <h3 class="text-2xl font-bold text-white font-display tracking-wide">Mantenimiento</h3>
          </div>
          <p class="text-gray-400 font-light leading-relaxed text-sm">
            Nuestro servicio de mantenimiento preventivo y correctivo asegura el óptimo funcionamiento de su sistema de seguridad, brindándole tranquilidad y confianza en su protección.
          </p>
        </div>

        <!-- Item 3 -->
        <div class="border-l-2 border-gray-800 hover:border-accent pl-8 py-2 transition-colors duration-500 group">
          <div class="flex items-center space-x-5 mb-5">
            <div class="text-gray-500 group-hover:text-accent transition-colors duration-500">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
            </div>
            <h3 class="text-2xl font-bold text-white font-display tracking-wide">Cámaras</h3>
          </div>
          <p class="text-gray-400 font-light leading-relaxed text-sm">
            Ofrecemos instalación profesional de cámaras de seguridad con asesoramiento personalizado y soporte técnico continuo para garantizar la protección de su hogar o negocio.
          </p>
        </div>

        <!-- Item 4 -->
        <div class="border-l-2 border-gray-800 hover:border-accent pl-8 py-2 transition-colors duration-500 group">
          <div class="flex items-center space-x-5 mb-5">
            <div class="text-gray-500 group-hover:text-accent transition-colors duration-500">
              <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <h3 class="text-2xl font-bold text-white font-display tracking-wide">Reparaciones</h3>
          </div>
          <p class="text-gray-400 font-light leading-relaxed text-sm">
            Contamos con un equipo especializado en reparaciones de equipos electrónicos, incluyendo computadoras, laptops y sistemas de seguridad, para resolver cualquier inconveniente de manera eficiente.
          </p>
        </div>

      </div>

    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/whatsapp.php'; ?>

  <script src="/assets/js/main.js"></script>
</body>
</html>
