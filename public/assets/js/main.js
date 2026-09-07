document.addEventListener("DOMContentLoaded", () => {
    // Lógica del Menú Móvil
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuIcon = document.getElementById('mobile-menu-icon');
    
    mobileMenuBtn?.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.toggle('hidden');
        mobileMenuIcon?.setAttribute('d', isHidden ? 'M4 6h16M4 12h16M4 18h16' : 'M6 18L18 6M6 6l12 12');
    });

    // Lógica del Widget de WhatsApp
    const waOpenBtn = document.getElementById('open-wa-chat');
    const waCloseBtn = document.getElementById('close-wa-chat');
    const waChatBox = document.getElementById('wa-chat-box');

    waOpenBtn?.addEventListener('click', () => waChatBox?.classList.toggle('hidden'));
    waCloseBtn?.addEventListener('click', () => waChatBox?.classList.add('hidden'));
});
