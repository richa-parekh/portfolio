<nav class="sticky top-0 z-50 bg-background-light backdrop-blur border-b-2 border-border-dark">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="/" class="font-arvo text-2xl font-bold text-dark"> Richa.dev </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="{{ request()->is('/') ? 'text-dark font-semibold' : 'hover:text-dark transition' }} font-lato"> Home </a>
                <a href="/services" class="{{ request()->is('services') ? 'text-dark font-semibold' : 'hover:text-dark transition' }} font-lato"
                > Services </a>
                <a href="/portfolio" class="{{ request()->is('portfolio') ? 'text-dark font-semibold' : 'hover:text-dark transition' }} font-lato"
                > Portfolio </a>
                <a href="/about" class="{{ request()->is('about') ? 'text-dark font-semibold' : 'hover:text-dark transition' }} font-lato"
                > About </a>
                <a href="/contact" class="{{ request()->is('contact') ? 'text-light bg-background-dark font-semibold' : 'text-dark transition' }} border-2 border-border-dark px-7 py-1 hover:opacity-90 hover:bg-background-dark hover:text-light font-lato" > Contact </a>
            </div>

            <!-- Mobile Contact -->
            <a href="/contact" class="md:hidden bg-black text-white px-4 py-2 font-lato"
            > Contact </a>
            <!-- Mobile Button -->
            <!-- <button class="hidden md:flex"> ☰ </button> -->
        </div>
    </div>
</nav>