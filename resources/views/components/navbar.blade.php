<nav class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold"> Richa.dev </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="{{ request()->is('/') ? 'text-blue-600 font-semibold' : 'hover:text-blue-600 transition' }}"> Home </a>
                <a href="/services" class="{{ request()->is('services') ? 'text-blue-600 font-semibold' : 'hover:text-blue-600 transition' }}"
                > Services </a>
                <a href="/portfolio" class="{{ request()->is('portfolio') ? 'text-blue-600 font-semibold' : 'hover:text-blue-600 transition' }}"
                > Portfolio </a>
                <a href="/about" class="{{ request()->is('about') ? 'text-blue-600 font-semibold' : 'hover:text-blue-600 transition' }}"
                > About </a>
                <a href="/contact" class="bg-black text-white px-5 py-2 rounded-lg hover:opacity-90 transition" > Contact </a>
            </div>

            <!-- Mobile Button -->
            <button class="md:hidden"> ☰ </button>
        </div>
    </div>
</nav>