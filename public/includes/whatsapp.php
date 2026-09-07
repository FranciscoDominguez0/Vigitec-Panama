<div class="fixed bottom-6 right-6 z-50 flex flex-col items-end space-y-4 font-sans">
  <!-- Contenedor del Chat (Oculto por defecto) -->
  <div id="wa-chat-box" class="hidden mb-4 w-[340px] bg-[#111111] rounded-2xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.8)] overflow-hidden transform transition-all origin-bottom-right border border-gray-800 flex-col">
    <!-- Cabecera del Chat -->
    <div class="bg-[#25D366] p-5 border-b border-gray-800 flex items-center justify-between">
      <div class="flex items-center space-x-3">
        <div class="relative">
          <div class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center border border-gray-700 shadow-inner">
            <span class="text-white font-display font-extrabold text-lg tracking-widest" style="text-shadow: 0 0 5px rgba(230,57,70,0.5);">V<span class="text-accent">P</span></span>
          </div>
        </div>
        <div>
          <h4 class="text-white font-bold tracking-wide text-sm">Asesor VIGITEC</h4>
        </div>
      </div>
      <button id="close-wa-chat" class="text-white hover:text-gray-200 focus:outline-none transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
      </button>
    </div>
    
    <!-- Área de Mensajes del Chat -->
    <div class="p-5 flex flex-col space-y-4 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] bg-opacity-20">
      <!-- Burbuja de Mensaje -->
      <div class="bg-[#1A1A1A] p-4 rounded-2xl rounded-tl-none shadow-md text-sm text-gray-200 self-start max-w-[90%] relative border border-gray-800">
        <p class="font-semibold text-accent mb-1.5">Soporte Técnico</p>
        <p class="leading-relaxed">¡Hola! 👋<br>¿Necesitas asesoría para proteger tu hogar o empresa? Cuéntame qué buscas y te ayudaré de inmediato.</p>
        <p class="text-[10px] text-gray-500 text-right mt-2 font-medium">Justo ahora</p>
      </div>
      
      <!-- Botón de Enviar a WhatsApp -->
      <a href="https://wa.me/50769330534?text=Hola%2C%20quiero%20más%20información%20sobre%20sus%20servicios%20de%20seguridad" target="_blank" class="mt-4 bg-[#25D366] text-[#111111] font-bold text-sm text-center py-3.5 px-4 rounded-xl hover:bg-[#20b858] transition-colors shadow-lg flex items-center justify-center space-x-2 w-full group">
        <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 3.825 0 6.938 3.112 6.938 6.938-.001 3.825-3.113 6.938-6.938 6.938z"/>
        </svg>
        <span class="tracking-wide">Abrir Chat</span>
      </a>
    </div>
  </div>

  <!-- Botón Flotante Redondo -->
  <button id="open-wa-chat" class="bg-[#25D366] text-[#111111] p-4 rounded-full shadow-[0_0_20px_rgba(37,211,102,0.4)] hover:scale-110 transition-transform flex items-center justify-center focus:outline-none">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 3.825 0 6.938 3.112 6.938 6.938-.001 3.825-3.113 6.938-6.938 6.938z"/>
    </svg>
  </button>
</div>
