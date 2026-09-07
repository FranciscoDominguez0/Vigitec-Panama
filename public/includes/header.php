<?php
$current_page = $current_page ?? 'inicio';
?>
<header class="bg-primary/95 backdrop-blur-md py-4 sticky top-0 z-50 shadow-2xl border-b border-gray-800">
  <div class="container mx-auto px-4 max-w-7xl flex items-center justify-between">
    
    <!-- Logo -->
    <a href="/" class="flex items-center">
      <img src="/assets/img/hero/vigitec-logo.webp" alt="Vigitec Panama" class="h-10 w-auto">
    </a>
    
    <!-- Menú para Computadoras -->
    <nav class="hidden md:flex items-center space-x-8 text-[15px] font-medium text-gray-300">
      <a href="/" class="hover:text-white transition-colors <?= $current_page == 'inicio' ? 'text-accent font-semibold' : '' ?>">Inicio</a>
      <a href="/quienes-somos/" class="hover:text-white transition-colors <?= $current_page == 'quienes-somos' ? 'text-accent font-semibold' : '' ?>">¿Quiénes somos?</a>
      <a href="/servicios/" class="hover:text-white transition-colors <?= $current_page == 'servicios' ? 'text-accent font-semibold' : '' ?>">Servicios</a>
      <a href="/contacto/" class="hover:text-white transition-colors <?= $current_page == 'contacto' ? 'text-accent font-semibold' : '' ?>">Contacto</a>
      <a href="https://soporte.vigitecpanama.com/" target="_blank" class="hover:text-white transition-colors">Soporte</a>
      <a href="https://eshop.premium-soft.com/VIGITECSECURITY" target="_blank" class="hover:text-accent font-semibold transition-colors flex items-center gap-1">Compra-Online <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg></a>
    </nav>

    <!-- Botón de Llamada a la Acción -->
    <div class="hidden md:block">
      <a href="/cotizacion/" class="bg-accent text-white px-6 py-2.5 rounded-full font-semibold text-sm hover:bg-accentHover hover:shadow-red-glow transition-all duration-300">
        Cotizar Ahora
      </a>
    </div>

    <!-- Botón del Menú Móvil -->
    <button id="mobile-menu-btn" class="md:hidden text-gray-300 hover:text-white focus:outline-none p-2">
      <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path id="mobile-menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </button>
  </div>

  <!-- Menú Desplegable Móvil -->
  <div id="mobile-menu" class="hidden md:hidden bg-[#111111] absolute top-full left-0 w-full border-b border-gray-800 shadow-2xl">
    <div class="flex flex-col px-6 py-6 space-y-4">
      <a href="/" class="text-gray-300 hover:text-accent font-medium text-lg <?= $current_page == 'inicio' ? 'text-accent font-semibold' : '' ?>">Inicio</a>
      <a href="/quienes-somos/" class="text-gray-300 hover:text-accent font-medium text-lg <?= $current_page == 'quienes-somos' ? 'text-accent font-semibold' : '' ?>">¿Quiénes somos?</a>
      <a href="/servicios/" class="text-gray-300 hover:text-accent font-medium text-lg <?= $current_page == 'servicios' ? 'text-accent font-semibold' : '' ?>">Servicios</a>
      <a href="/contacto/" class="text-gray-300 hover:text-accent font-medium text-lg <?= $current_page == 'contacto' ? 'text-accent font-semibold' : '' ?>">Contacto</a>
      <a href="https://soporte.vigitecpanama.com/" target="_blank" class="text-gray-300 hover:text-accent font-medium text-lg">Soporte</a>
      <a href="https://eshop.premium-soft.com/VIGITECSECURITY" target="_blank" class="hover:text-accent font-medium text-lg flex items-center gap-1">Compra-Online <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg></a>
      <div class="pt-4 mt-2 border-t border-gray-800">
        <a href="/cotizacion/" class="block text-center bg-accent text-white px-6 py-3 rounded-full font-semibold hover:bg-accentHover transition-colors w-full">Cotizar Ahora</a>
      </div>
    </div>
  </div>
</header>
