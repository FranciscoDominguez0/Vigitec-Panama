document.addEventListener("DOMContentLoaded", () => {
    // Lógica del Menú Móvil
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('mobile-menu-icon');
    
    if(btn && menu && icon) {
      btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        if (menu.classList.contains('hidden')) {
          icon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
        } else {
          icon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
        }
      });
    }

    // Lógica del Widget de WhatsApp
    const openBtn = document.getElementById('open-wa-chat');
    const closeBtn = document.getElementById('close-wa-chat');
    const chatBox = document.getElementById('wa-chat-box');

    if(openBtn && chatBox) {
        openBtn.addEventListener('click', function() {
            if (chatBox.classList.contains('hidden')) {
                chatBox.classList.remove('hidden');
            } else {
                chatBox.classList.add('hidden');
            }
        });
    }

    if(closeBtn && chatBox) {
        closeBtn.addEventListener('click', function() {
            chatBox.classList.add('hidden');
        });
    }
});
