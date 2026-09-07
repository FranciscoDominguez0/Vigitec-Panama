<?php
$current_page = 'cotizacion';
$page_title = 'Solicitar Cotización - Vigitec Panamá';
$page_description = 'Solicita una cotización sin compromiso. Protege tu hogar o empresa con los mejores sistemas de seguridad y vigilancia en Panamá.';
$page_keywords = 'cotización sistemas de seguridad, precios cámaras de seguridad, presupuesto seguridad panamá, cotizar alarmas';
$page_url = 'https://vigitecpanama.com/cotizacion/';
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth" style="background-color: #0a0a0a; color: #ffffff;">
<head>
  <?php include '../includes/head.php'; ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="bg-light text-gray-800 font-sans antialiased selection:bg-accent selection:text-white">

  <?php include '../includes/header.php'; ?>

  <section class="py-10 relative overflow-hidden bg-[url('/assets/img/hero/servicios_bg.png')] bg-cover bg-center bg-no-repeat bg-fixed">
    <!-- Destello rojo decorativo sutil -->
    <div class="absolute top-1/2 right-1/4 w-96 h-96 bg-accent/20 rounded-full blur-[100px] pointer-events-none hidden lg:block"></div>

    <div class="container mx-auto px-4 max-w-6xl relative z-10">
      <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-12">
        
        <!-- Left Side: Text Content -->
        <div class="lg:w-1/2 text-center lg:text-left">
          <h2 class="text-4xl lg:text-5xl font-extrabold text-white uppercase tracking-widest font-display mb-6 leading-tight">
            Protegemos <span class="text-accent">lo que más importa</span>
          </h2>
          <p class="text-gray-300 text-xl font-medium mb-4">
            Solicita tu cotización rellenando el formulario que ves aquí.
          </p>
          <p class="text-gray-400 text-base leading-relaxed max-w-lg mx-auto lg:mx-0 mb-6">
            Nuestros servicios de monitoreo le permite vivir más tranquilo su día a día sabiendo que cuidamos de usted y su familia en todo momento. 
          </p>
          <div class="hidden lg:block w-20 h-1 bg-accent rounded-full"></div>
        </div>

        <!-- Right Side: Form -->
        <div class="lg:w-1/2 w-full">
          <div id="form-container" class="bg-[#1A1A1A]/95 backdrop-blur-md p-6 lg:p-8 shadow-[0_20px_50px_rgba(0,0,0,0.7)] rounded-lg border border-gray-700/50 relative">
            
            <!-- Custom Error Toast -->
            <div id="custom-error-toast" class="absolute top-4 left-1/2 transform -translate-x-1/2 bg-accent text-white px-5 py-3 rounded-md shadow-red-glow font-medium text-sm flex items-center z-50 transition-all duration-300 opacity-0 pointer-events-none translate-y-[-10px] w-11/12 md:w-auto md:max-w-md text-center">
              <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
              <span id="custom-error-message"></span>
            </div>

            <!-- Success Message (Hidden) -->
            <div id="success-message" class="hidden flex-col items-center justify-center p-8 text-center">
              <div class="w-20 h-20 bg-green-500/20 rounded-full flex items-center justify-center text-green-500 mb-6 animate-bounce">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <h3 class="text-3xl font-bold text-white mb-4">¡Cotización Enviada!</h3>
              <p class="text-gray-400 text-lg">Hemos recibido tu solicitud exitosamente. Un especialista de VIGITEC se pondrá en contacto contigo a la brevedad.</p>
            </div>

            <form id="cotizacion-form" class="space-y-5 transition-opacity duration-300" action="/enviar.php" method="POST">
              
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                  <input type="text" name="Nombre" class="w-full p-4 bg-[#111111] border border-gray-700 text-white focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-all shadow-inner placeholder-gray-500 font-medium rounded" placeholder="Nombre Completo*" required>
                </div>
                <div>
                  <input type="tel" name="Teléfono" class="w-full p-4 bg-[#111111] border border-gray-700 text-white focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-all shadow-inner placeholder-gray-500 font-medium rounded" placeholder="Teléfono*" required>
                </div>
              </div>
              
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                  <input type="email" name="Email" class="w-full p-4 bg-[#111111] border border-gray-700 text-white focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-all shadow-inner placeholder-gray-500 font-medium rounded" placeholder="Correo Electrónico*" required>
                </div>
                <div>
                  <select name="Servicio" class="w-full p-4 bg-[#111111] border border-gray-700 text-white focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-all shadow-inner appearance-none cursor-pointer text-gray-500 focus:text-white font-medium rounded" required onchange="this.classList.remove('text-gray-500'); this.classList.add('text-white');">
                    <option value="" disabled selected>Servicio de Interés*</option>
                    <option class="text-white">Sistemas de Alarmas</option>
                    <option class="text-white">Instalación de Cámaras</option>
                    <option class="text-white">Supervisión 24/7</option>
                    <option class="text-white">Facturación Electrónica</option>
                    <option class="text-white">Paneles Solares</option>
                    <option class="text-white">Mantenimiento y Reparaciones</option>
                    <option class="text-white">Otro</option>
                  </select>
                </div>
              </div>
              
              <div>
                <textarea rows="4" name="Detalles" class="w-full p-4 bg-[#111111] border border-gray-700 text-white focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-all shadow-inner resize-none placeholder-gray-500 font-medium rounded" placeholder="Mensaje...*" required></textarea>
              </div>
              
              <!-- reCAPTCHA Oficial de Google -->
              <div class="flex items-center justify-center pt-2">
                <div class="g-recaptcha" data-sitekey="6LdT5GstAAAAAGbH5pmU2ujs07J8p1IcKxXX_1SQ" data-theme="dark"></div>
              </div>

              <div class="pt-2">
                <button id="submit-btn" type="submit" class="w-full px-6 py-4 bg-white text-primary font-bold tracking-wider uppercase hover:bg-accent hover:text-white transition-colors duration-300 shadow-[0_0_20px_rgba(255,255,255,0.1)] hover:shadow-[0_0_30px_rgba(230,57,70,0.4)] flex items-center justify-center group relative overflow-hidden rounded">
                  <span id="btn-text">Solicitar Cotización</span>
                  <svg id="btn-icon" class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                  <!-- Spinner (Hidden by default) -->
                  <svg id="btn-spinner" class="hidden animate-spin ml-3 h-5 w-5 text-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                </button>
              </div>
              
            </form>
            
            <!-- AJAX Submission Script -->
            <script>
              function showErrorToast(message) {
                const toast = document.getElementById('custom-error-toast');
                const toastMsg = document.getElementById('custom-error-message');
                toastMsg.innerText = message;
                
                toast.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-[-10px]');
                toast.classList.add('opacity-100', 'translate-y-0');
                
                setTimeout(() => {
                  toast.classList.remove('opacity-100', 'translate-y-0');
                  toast.classList.add('opacity-0', 'pointer-events-none', 'translate-y-[-10px]');
                }, 4000);
              }

              document.getElementById('cotizacion-form').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Verificar si el captcha fue completado antes de enviar
                const recaptchaResponse = grecaptcha.getResponse();
                if (recaptchaResponse.length === 0) {
                  showErrorToast('Por favor, marque la casilla de "No soy un robot" antes de enviar la cotización.');
                  return;
                }
                
                const form = this;
                const btn = document.getElementById('submit-btn');
                const btnText = document.getElementById('btn-text');
                const btnIcon = document.getElementById('btn-icon');
                const btnSpinner = document.getElementById('btn-spinner');
                const successMessage = document.getElementById('success-message');
                
                // Estado de carga (Loading)
                btn.disabled = true;
                btnText.innerText = 'Enviando Seguro...';
                btnIcon.classList.add('hidden');
                btnSpinner.classList.remove('hidden');
                
                // Enviar datos
                fetch(form.action, {
                  method: 'POST',
                  body: new FormData(form),
                  headers: {
                    'Accept': 'application/json'
                  }
                })
                .then(response => response.json())
                .then(data => {
                  if (data.success) {
                    form.style.opacity = '0';
                    setTimeout(() => {
                      form.classList.add('hidden');
                      successMessage.classList.remove('hidden');
                    }, 300);
                  } else {
                    showErrorToast(data.message || 'Error de seguridad. Por favor intente nuevamente.');
                    grecaptcha.reset();
                    
                    btn.disabled = false;
                    btnText.innerText = 'Solicitar Cotización';
                    btnSpinner.classList.add('hidden');
                    btnIcon.classList.remove('hidden');
                  }
                })
                .catch(error => {
                  console.error('Error:', error);
                  showErrorToast('Ha ocurrido un problema al enviar la cotización. Verifique su conexión o intente más tarde.');
                  btnText.innerText = 'Error al enviar';
                  btnSpinner.classList.add('hidden');
                  setTimeout(() => {
                    btn.disabled = false;
                    btnText.innerText = 'Solicitar Cotización';
                    btnIcon.classList.remove('hidden');
                  }, 3000);
                });
              });
            </script>
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
