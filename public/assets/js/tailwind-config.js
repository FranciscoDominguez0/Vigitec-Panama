tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: '#111111',   // Deep Corporate Black
        secondary: '#1A1A1A', // Charcoal for sections
        accent: '#E63946',    // Vibrant Red
        accentHover: '#D90429',
        light: '#F8F9FA',     // Very soft grey for backgrounds
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        display: ['Plus Jakarta Sans', 'sans-serif'],
      },
      boxShadow: {
        'premium': '0 20px 40px -15px rgba(0,0,0,0.05)',
        'red-glow': '0 10px 25px -5px rgba(230, 57, 70, 0.4)',
      }
    }
  }
}
