<nav class="sticky top-0 z-50 bg-secondary-default backdrop-blur border-b-2 border-primary-default">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="/" class="font-arvo text-2xl font-bold text-primary-default"> Richa.dev </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="{{ request()->is('/') ? 'text-primary-default font-semibold' : 'hover:text-primary-default transition' }} font-lato"> Home </a>
                <a href="/services" class="{{ request()->is('services') ? 'text-primary-default font-semibold' : 'hover:text-primary-default transition' }} font-lato"
                > Services </a>
                <a href="/portfolio" class="{{ request()->is('portfolio') ? 'text-primary-default font-semibold' : 'hover:text-primary-default transition' }} font-lato"
                > Portfolio </a>
                <a href="/about" class="{{ request()->is('about') ? 'text-primary-default font-semibold' : 'hover:text-primary-default transition' }} font-lato"
                > About </a>
                <a href="/contact" class="{{ request()->is('contact') ? 'text-secondary-default bg-primary-default font-semibold' : 'text-primary-default transition' }} border-2 border-primary-default px-7 py-1 hover:opacity-90 hover:bg-primary-default hover:text-secondary-default font-lato transition duration-300" > Contact </a>
            </div>

            <!-- Mobile Contact -->
            <a href="/contact" class="md:hidden bg-primary-default text-secondary-default px-4 py-2 font-lato"
            > Contact </a>
            <!-- Mobile Button -->
            <!-- <button class="hidden md:flex"> ☰ </button> -->
        </div>
    </div>
</nav>