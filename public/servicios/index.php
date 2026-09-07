<?php
$current_page = 'servicios';
$page_title = 'Nuestros Servicios - Vigitec Panamá';
$page_description = 'Servicios de instalación de cámaras de seguridad, mantenimiento preventivo y correctivo, y reparaciones electrónicas para hogares y empresas en Panamá.';
$page_keywords = 'servicios de seguridad, instalación de cámaras, mantenimiento preventivo, reparaciones electrónicas, sistemas contra incendio';
$page_url = 'https://vigitecpanama.com/servicios/';
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth" style="background-color: #0a0a0a; color: #ffffff;">
<head>
  <?php include '../includes/head.php'; ?>
</head>
<body class="bg-light text-gray-800 font-sans antialiased selection:bg-accent selection:text-white">

  <?php include '../includes/header.php'; ?>

  <section class="py-20 relative overflow-hidden bg-[url('/assets/img/hero/servicios_bg.png')] bg-cover bg-center bg-no-repeat bg-fixed">
    <!-- Intro -->
    <div class="container mx-auto px-4 max-w-4xl text-center mb-16">
      <h1 class="text-3xl font-display font-bold text-white uppercase tracking-wider mb-4">Nuestros Servicios</h1>
      <p class="text-gray-400 text-base leading-relaxed">
        En VIGITEC PANAMA somos su aliado estratégico para garantizar la máxima seguridad y eficiencia. Ofrecemos un portafolio integral de servicios diseñado para superar los estándares de la industria y cubrir las exigencias de cada proyecto.
      </p>
    </div>

    <!-- Grid de Tarjetas Premium -->
    <div class="container mx-auto px-4 max-w-7xl">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Tarjeta 1: Supervisión -->
        <div class="relative w-full h-[320px] rounded-2xl overflow-hidden group shadow-2xl border border-gray-800">
          <img src="/assets/img/servicios/Security Surveillance.webp" alt="Supervisión 24/7" class="absolute inset-0 w-full h-full object-cover" fetchpriority="high">
          
          <div class="absolute inset-x-0 bottom-0 bg-black/60 transition-all duration-500 transform translate-y-0 md:translate-y-[calc(100%-4rem)] group-hover:translate-y-0 flex flex-col">
            
            <div class="h-16 flex items-center justify-center relative">
              <h3 class="text-xl font-display font-bold text-white uppercase tracking-wider text-center px-4 z-10">Supervisión 24/7</h3>
              <div class="absolute bottom-0 left-0 w-full h-[2px] bg-accent transform scale-x-100 md:scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-center"></div>
            </div>
            
            <div class="px-6 pb-8 pt-4 opacity-100 md:opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-75">
              <p class="text-gray-300 text-sm leading-relaxed mb-6 text-center">
                Monitoreo continuo para locales comerciales y hogares. Nuestro centro de control opera sin interrupciones para garantizar vigilancia en tiempo real.
              </p>
              <div class="text-center">
                <a href="/cotizacion/" class="inline-block bg-accent text-white font-bold py-2 px-8 rounded hover:bg-white hover:text-accent transition-colors uppercase text-sm tracking-wider shadow-lg">
                  Cotizar
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Tarjeta 2: Desarrollo de Software -->
        <div class="relative w-full h-[320px] rounded-2xl overflow-hidden group shadow-2xl border border-gray-800">
          <img src="/assets/img/servicios/desarrollo.webp" alt="Desarrollo de Software" class="absolute inset-0 w-full h-full object-cover" fetchpriority="high">
          
          <div class="absolute inset-x-0 bottom-0 bg-black/60 transition-all duration-500 transform translate-y-0 md:translate-y-[calc(100%-4rem)] group-hover:translate-y-0 flex flex-col">
            
            <div class="h-16 flex items-center justify-center relative">
              <h3 class="text-xl font-display font-bold text-white uppercase tracking-wider text-center px-4 z-10">Desarrollo de Software</h3>
              <div class="absolute bottom-0 left-0 w-full h-[2px] bg-accent transform scale-x-100 md:scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-center"></div>
            </div>
            
            <div class="px-6 pb-8 pt-4 opacity-100 md:opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-75">
              <p class="text-gray-300 text-sm leading-relaxed mb-6 text-center">
                Creamos soluciones web y aplicaciones a medida para automatizar y optimizar los procesos operativos de tu empresa.
              </p>
              <div class="text-center">
                <a href="/cotizacion/" class="inline-block bg-accent text-white font-bold py-2 px-8 rounded hover:bg-white hover:text-accent transition-colors uppercase text-sm tracking-wider shadow-lg">
                  Cotizar
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Tarjeta 3: Facturación -->
        <div class="relative w-full h-[320px] rounded-2xl overflow-hidden group shadow-2xl border border-gray-800">
          <img src="/assets/img/servicios/facturacion.webp" alt="Facturación Electrónica" class="absolute inset-0 w-full h-full object-contain bg-white p-4" fetchpriority="high">
          
          <div class="absolute inset-x-0 bottom-0 bg-black/60 transition-all duration-500 transform translate-y-0 md:translate-y-[calc(100%-4rem)] group-hover:translate-y-0 flex flex-col">
            
            <div class="h-16 flex items-center justify-center relative">
              <h3 class="text-xl font-display font-bold text-white uppercase tracking-wider text-center px-4 z-10">Facturación Electrónica</h3>
              <div class="absolute bottom-0 left-0 w-full h-[2px] bg-accent transform scale-x-100 md:scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-center"></div>
            </div>
            
            <div class="px-6 pb-8 pt-4 opacity-100 md:opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-75">
              <p class="text-gray-300 text-sm leading-relaxed mb-6 text-center">
                Sistemas de facturación avalados por la DGI. Asesoría completa e instalación de software para automatizar sus transacciones.
              </p>
              <div class="text-center">
                <a href="/cotizacion/" class="inline-block bg-accent text-white font-bold py-2 px-8 rounded hover:bg-white hover:text-accent transition-colors uppercase text-sm tracking-wider shadow-lg">
                  Cotizar
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Tarjeta 4: Paneles Solares -->
        <div class="relative w-full h-[320px] rounded-2xl overflow-hidden group shadow-2xl border border-gray-800">
          <img src="/assets/img/servicios/paneles solares.webp" alt="Paneles Solares" class="absolute inset-0 w-full h-full object-cover">
          
          <div class="absolute inset-x-0 bottom-0 bg-black/60 transition-all duration-500 transform translate-y-0 md:translate-y-[calc(100%-4rem)] group-hover:translate-y-0 flex flex-col">
            
            <div class="h-16 flex items-center justify-center relative">
              <h3 class="text-xl font-display font-bold text-white uppercase tracking-wider text-center px-4 z-10">Paneles Solares</h3>
              <div class="absolute bottom-0 left-0 w-full h-[2px] bg-accent transform scale-x-100 md:scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-center"></div>
            </div>
            
            <div class="px-6 pb-8 pt-4 opacity-100 md:opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-75">
              <p class="text-gray-300 text-sm leading-relaxed mb-6 text-center">
                Soluciones energéticas sostenibles. Instalamos sistemas de energía solar de alta eficiencia para reducir costos operativos y huella de carbono.
              </p>
              <div class="text-center">
                <a href="/cotizacion/" class="inline-block bg-accent text-white font-bold py-2 px-8 rounded hover:bg-white hover:text-accent transition-colors uppercase text-sm tracking-wider shadow-lg">
                  Cotizar
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Tarjeta 5: Alarmas -->
        <div class="relative w-full h-[320px] rounded-2xl overflow-hidden group shadow-2xl border border-gray-800">
          <img src="/assets/img/servicios/banner-alarmas-paradox.webp" alt="Sistemas de Alarmas" class="absolute inset-0 w-full h-full object-contain bg-white p-4">
          
          <div class="absolute inset-x-0 bottom-0 bg-black/60 transition-all duration-500 transform translate-y-0 md:translate-y-[calc(100%-4rem)] group-hover:translate-y-0 flex flex-col">
            
            <div class="h-16 flex items-center justify-center relative">
              <h3 class="text-xl font-display font-bold text-white uppercase tracking-wider text-center px-4 z-10">Sistemas de Alarmas</h3>
              <div class="absolute bottom-0 left-0 w-full h-[2px] bg-accent transform scale-x-100 md:scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-center"></div>
            </div>
            
            <div class="px-6 pb-8 pt-4 opacity-100 md:opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-75">
              <p class="text-gray-300 text-sm leading-relaxed mb-6 text-center">
                La primera línea de defensa. Sistemas de última generación, sensibles a movimientos e integrados a centros de monitoreo para respuestas inmediatas.
              </p>
              <div class="text-center">
                <a href="/cotizacion/" class="inline-block bg-accent text-white font-bold py-2 px-8 rounded hover:bg-white hover:text-accent transition-colors uppercase text-sm tracking-wider shadow-lg">
                  Cotizar
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Tarjeta 6: Mantenimiento Preventivo -->
        <div class="relative w-full h-[320px] rounded-2xl overflow-hidden group shadow-2xl border border-gray-800">
          <img src="/assets/img/servicios/Mantenimiento-preventivo.webp" alt="Mantenimiento Preventivo" class="absolute inset-0 w-full h-full object-cover">
          
          <div class="absolute inset-x-0 bottom-0 bg-black/60 transition-all duration-500 transform translate-y-0 md:translate-y-[calc(100%-4rem)] group-hover:translate-y-0 flex flex-col">
            
            <div class="h-16 flex items-center justify-center relative">
              <h3 class="text-xl font-display font-bold text-white uppercase tracking-wider text-center px-4 z-10">Mantenimiento Preventivo</h3>
              <div class="absolute bottom-0 left-0 w-full h-[2px] bg-accent transform scale-x-100 md:scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-center"></div>
            </div>
            
            <div class="px-6 pb-8 pt-4 opacity-100 md:opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-75">
              <p class="text-gray-300 text-sm leading-relaxed mb-6 text-center">
                Servicio especializado de mantenimiento preventivo y correctivo. Aseguramos el funcionamiento ininterrumpido de todos sus sistemas de seguridad y tecnología.
              </p>
              <div class="text-center">
                <a href="/cotizacion/" class="inline-block bg-accent text-white font-bold py-2 px-8 rounded hover:bg-white hover:text-accent transition-colors uppercase text-sm tracking-wider shadow-lg">
                  Cotizar
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  
  <?php include '../includes/footer.php'; ?>
  <?php include '../includes/whatsapp.php'; ?>

  <script src="/assets/js/main.js"></script>
</body>
</html>
