@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="py-20 md:py-24 bg-background-light">
    <div class="max-w-7xl mx-auto px-4 md:px-6 flex flex-col-reverse lg:flex-row justify-between items-center gap-16">  
    <!-- Left Content --> 
            
            <div class="max-w-xl text-center lg:text-left">
                <hr class="border-dark border-4 w-40 mb-6 mx-auto lg:mx-0">
                <!-- <p class="text-gray-500 font-medium"> Freelance Web Developer </p> -->
                <h1 class="font-arvo text-4xl md:text-5xl lg:text-5xl font-sem6bold text-dark leading-tight mt-3 uppercase tracking-widest"> Hello, I'm <span class="text-dark"> Richa </span></h1>
                <p class="font-lato mt-6 text-dark text-xl "> A web developer who creates unique, user-friendly websites, helping small businesses grow their online presence through WordPress, Laravel, and responsive web design. </p>
                <div class="mt-8 flex flex-wrap justify-center lg:justify-start gap-4">
                <a href="/portfolio" class="bg-dark text-white uppercase px-6 py-3 hover:opacity-90 transition font-lato" > View Work </a>
                <a href="/contact" class="border border-dark px-6 py-3 uppercase hover:bg-dark hover:text-white transition font-lato" > Contact Me </a>
            </div> 
        </div>
        <!-- Right Image --> 
        <div class="max-w-md lg:max-w-lg">
            <img src="{{ asset('images/profile_picture.png') }}" alt="Richa Portfolio Hero Image" class="w-full">
        </div>
    </div>
</section>

<section class="min-h-screen bg-light flex items-center relative overflow-hidden">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 items-center gap-10">

            <!-- Left Content -->
            <div class="space-y-8">

                <!-- Decorative Line -->
                <div class="w-32 h-1 bg-dark"></div>

                <!-- Heading -->
                <div>
                    <h1 class="text-5xl md:text-5xl xl:text-6xl font-extrabold uppercase text-dark leading-tight">
                        I'M RICHA A <br>
                        WEB DEVELOPER
                    </h1>
                </div>

                <!-- Description -->
                <p class="text-lg md:text-xl text-gray-700 max-w-xl leading-relaxed">
                    A web developer who creates unique, user-friendly websites, helping businesses grow their online presence through WordPress, Laravel, and responsive web design.
                </p>

                <!-- CTA Button -->
                <a href="#contact"
                    class="inline-block bg-dark text-light px-10 py-4 uppercase tracking-wide font-semibold hover:bg-dark-700 transition duration-300">
                    Let's Talk
                </a>
            </div>

            <!-- Right Image -->
            <div class="relative flex justify-center lg:justify-end">
                <div class="w-full max-w-[700px] h-[700px] overflow-hidden">
                    <img
                        src="{{ asset('images/profile_picture.png') }}"
                        alt="Hero Image"
                        class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </div>

    <!-- Scroll Button -->
    <div class="hidden md:flex absolute bottom-8 right-8">
        <button class="w-28 h-28 rounded-full bg-slate-800 flex items-center justify-center hover:scale-105 transition">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-10 h-10 text-white"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>
</section>
<!-- Services Section -->
<section class="py-20 md:py-24 bg-dark text-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6 flex flex-col-reverse lg:flex-row justify-between items-center gap-16">
        <div class="max-w-xl text-center lg:text-left">
            <h2 class="text-4xl font-bold uppercase">
                Services <br> Offer
            </h2>
            <p class="text-light mt-3 pb-3"> Helping businesses build fast, modern and responsive websites.
            </p>
            <a href="/contact" class="border border-dark  uppercase hover:bg-light hover:text-dark transition font-lato rounded-full px-3 py-5 text-2xl" > Contact Me </a>
        </div>
        <div class="max-w-md lg:max-w-lg grid md:grid-rows-3 gap-8">
            <div class="bg-gray-50 p-8 rounded-3xl">
                <h3 class="text-2xl font-semibold"> WordPress Development </h3>
                <p class="text-gray-600 mt-4"> Custom business websites, landing pages, speed optimization and theme customization.
                </p>
            </div>
            <div class="bg-gray-50 p-8 rounded-3xl">
                <h3 class="text-2xl font-semibold"> Laravel Development </h3>
                <p class="text-gray-600 mt-4"> Web applications, admin panels, APIs and custom PHP solutions. </p>
            </div>
            <div class="bg-gray-50 p-8 rounded-3xl">
                <h3 class="text-2xl font-semibold"> Website Design </h3>
                <p class="text-gray-600 mt-4"> Modern responsive designs focused on user experience. </p>
            </div>
        </div>
    </div>
</section>
<!-- Featured section -->
 <section class="py-20 md:py-24">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class=" mb-14">
            <div>
                <h2 class="text-4xl font-bold"> Featured Work </h2>
                <p class="text-gray-600 mt-2">A few projects showcasing my work. </p>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <x-project-card
                    :project="$project"
                />
            @endforeach
        </div>
        <div class="flex justify-center items-center">
            <a href="/portfolio" class="mt-8 bg-black text-white px-8 py-4 rounded-xl"> Browse All </a>
        </div>
    </div>
</section>
<!-- Why Work With Me Section -->
<section class="py-20 md:py-24 bg-gray-100"> 
    <div class="max-w-7xl mx-auto px-4 md:px-6">     
        <div class="text-center mb-14">     
            <h2 class="text-4xl font-bold">Why Work With Me</h2>     
        </div>     
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8"> 
            <div>
                <h3 class="font-semibold text-xl"> Responsive Design </h3>        
                <p class="text-gray-600 mt-2"> Websites optimized for all devices. </p>
            </div>   
            <div>
                <h3 class="font-semibold text-xl"> Clean Code </h3>
                <p class="text-gray-600 mt-2"> Structured and maintainable development. </p>
            </div> 
            <div>
                <h3 class="font-semibold text-xl"> Fast Communication </h3>
                <p class="text-gray-600 mt-2"> Clear updates during projects </p>
            </div>  
            <div>
                <h3 class="font-semibold text-xl"> Business Focused </h3>
                <p class="text-gray-600 mt-2"> Solutions that support business growth. </p>
            </div>  
        </div> 
    </div>
</section>
<!-- CTA section -->
<section class="py-20 md:py-24">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-5xl font-bold">Let’s Build Your Website</h2>
        <p class="text-gray-600 mt-5 text-lg">Need a website for your business? Let’s discuss your project.</p>
        <a href="/contact" class="inline-block mt-8 bg-black text-white px-8 py-4 rounded-xl">Contact Me</a>
    </div>
</section>
@endsection