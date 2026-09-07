<?php
$current_page = 'contacto';
$page_title = 'Contacto - Vigitec Panamá';
$page_description = 'Contáctanos para resolver tus dudas o agendar un servicio. En Vigitec Panamá estamos listos para atender tus necesidades de seguridad.';
$page_keywords = 'contacto vigitec, soporte técnico seguridad, teléfono vigitec panamá, atención al cliente seguridad';
$page_url = 'https://vigitecpanama.com/contacto/';
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth" style="background-color: #0a0a0a; color: #ffffff;">
<head>
  <?php include '../includes/head.php'; ?>
</head>
<body class="bg-light text-gray-800 font-sans antialiased selection:bg-accent selection:text-white">

  <?php include '../includes/header.php'; ?>

  <section class="py-12 relative overflow-hidden bg-[url('/assets/img/hero/servicios_bg.png')] bg-cover bg-center bg-no-repeat bg-fixed">
    <!-- Destello rojo decorativo sutil -->
    <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-accent/20 rounded-full blur-[100px] pointer-events-none hidden lg:block"></div>

    <div class="container mx-auto px-4 max-w-5xl relative z-10">
      
      <div class="text-center mb-10">
        <h2 class="text-4xl lg:text-5xl font-extrabold text-white uppercase tracking-widest font-display mb-4 leading-tight">CONTÁCTANOS</h2>
        <div class="w-16 h-1 bg-accent mx-auto mb-6 rounded-full"></div>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto font-medium">
          Nuestro equipo de expertos está dispuesto a brindarle la mejor asesoría técnica y comercial.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-10 bg-[#1A1A1A]/95 backdrop-blur-md p-8 md:p-10 rounded-2xl border border-gray-700/50 shadow-[0_20px_50px_rgba(0,0,0,0.7)]">
        
        <!-- Contact Details -->
        <div class="space-y-8 flex flex-col justify-center">
          
          <div class="flex items-start space-x-4">
            <div class="text-accent mt-1">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-white text-sm uppercase tracking-wide mb-1">Teléfono</h4>
              <p class="text-gray-400">+507 6933-0534</p>
            </div>
          </div>

          <div class="flex items-start space-x-4">
            <div class="text-accent mt-1">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-white text-sm uppercase tracking-wide mb-1">Correo Electrónico</h4>
              <p class="text-gray-400">info@vigitecpanama.com</p>
            </div>
          </div>

          <div class="flex items-start space-x-4">
            <div class="text-accent mt-1">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-white text-sm uppercase tracking-wide mb-1">Horario</h4>
              <p class="text-gray-400">Lunes - Viernes<br>8:00 a.m. a 4:00 p.m.</p>
            </div>
          </div>

          <div class="flex items-start space-x-4">
            <div class="text-accent mt-1">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            </div>
            <div>
              <h4 class="font-bold text-white text-sm uppercase tracking-wide mb-1">Ubicación</h4>
              <p class="text-gray-400">CALLE LOS PINOS<br>Aguadulce, Panamá</p>
            </div>
          </div>

        </div>

        <!-- Google Maps (Optimized Delayed Load) -->
        <div class="w-full aspect-square md:aspect-[4/3] rounded-xl overflow-hidden border border-gray-700 shadow-inner relative bg-[#1A1A1A]">
          <iframe 
            id="delayed-map"
            width="100%" 
            height="100%" 
            frameborder="0" 
            scrolling="no" 
            marginheight="0" 
            marginwidth="0" 
            src="about:blank"
            data-src="https://maps.google.com/maps?q=8.247867235663374,-80.5427422981597&t=&z=16&ie=UTF8&iwloc=&output=embed"
            class="w-full h-full absolute inset-0 z-10 transition-opacity duration-1000 opacity-0"
          ></iframe>
          <!-- Spinner de carga temporal -->
          <div class="absolute inset-0 flex flex-col items-center justify-center bg-[#1A1A1A] z-0">
             <svg class="w-8 h-8 text-accent animate-spin mb-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
          </div>
        </div>

        <script>
          // Cargar el mapa solo DESPUÉS de que el resto de la página web principal ya esté visible
          window.addEventListener('load', function() {
            setTimeout(function() {
              var map = document.getElementById('delayed-map');
              map.onload = function() { map.classList.remove('opacity-0'); }; // Efecto de aparición suave
              map.src = map.getAttribute('data-src');
            }, 800); // 800 milisegundos de retraso
          });
        </script>

      </div>

    </div>
  </section>
  
  <?php include '../includes/footer.php'; ?>
  <?php include '../includes/whatsapp.php'; ?>

  <script src="/assets/js/main.js"></script>
</body>
</html>
