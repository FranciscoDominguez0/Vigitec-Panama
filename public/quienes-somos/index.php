<?php
$current_page = 'quienes-somos';
$page_title = 'Quiénes Somos - Vigitec Panamá';
$page_description = 'Conoce a Vigitec Panamá. Somos expertos en seguridad tecnológica, brindando confianza, rapidez y eficiencia en instalaciones y mantenimiento.';
$page_keywords = 'quiénes somos vigitec, empresa de seguridad panamá, expertos en seguridad, confianza, tecnología en seguridad';
$page_url = 'https://vigitecpanama.com/quienes-somos/';
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth" style="background-color: #0a0a0a; color: #ffffff;">
<head>
  <?php include '../includes/head.php'; ?>
</head>
<body class="bg-white text-gray-800 font-sans antialiased selection:bg-accent selection:text-white">

  <?php include '../includes/header.php'; ?>

  <!-- ==================== MAIN CONTENT ==================== -->
  <section class="relative min-h-screen flex items-center justify-center pt-24 pb-20">
    <!-- Imagen de fondo -->
    <div class="absolute inset-0 z-0">
      <img src="/assets/img/hero/servicios_bg.png" alt="Vigitec Background" class="w-full h-full object-cover" />
    </div>
    
    <!-- Contenido -->
    <div class="relative z-10 container mx-auto px-4 max-w-4xl text-center flex flex-col items-center">
      <h1 class="text-4xl lg:text-6xl font-extrabold text-white uppercase tracking-widest font-display mb-8 drop-shadow-lg">
        ¿Quiénes somos?
      </h1>
      
      <div class="space-y-6 mb-12 text-white text-base lg:text-lg leading-relaxed font-light drop-shadow-md">
        <p>
          <strong class="font-bold text-white">VIGITEC PANAMA</strong> es una empresa de servicios de sistemas de seguridad altamente reconocida por nuestro compromiso con la rapidez, la eficiencia y la honestidad en todo lo que hacemos. Contamos con un equipo altamente cualificado y experto en todo tipo de trabajos de seguridad, y nos esforzamos por administrar todos nuestros proyectos de manera eficiente y efectiva para asegurarnos de que nuestros clientes queden completamente satisfechos.
        </p>
        <p>
          Durante todo el proceso, mantenemos canales abiertos de comunicación para asegurarnos de que nuestros clientes estén informados y al tanto de cómo avanza su proyecto.
        </p>
      </div>
      
      <a href="/contacto/" class="inline-flex items-center bg-accent text-white px-10 py-4 rounded-full font-semibold hover:bg-accentHover transition-colors shadow-red-glow hover:-translate-y-1 transform duration-300">
        Contactar Ahora
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
      </a>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
  <?php include '../includes/whatsapp.php'; ?>

  <script src="/assets/js/main.js"></script>
</body>
</html>
