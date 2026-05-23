@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="py-20 md:py-24 bg-background-light">
    <div class="max-w-7xl mx-auto px-4 md:px-6 flex flex-col-reverse lg:flex-row justify-between items-center gap-16">  
    <!-- Left Content --> 
            
            <div class="max-w-xl text-center lg:text-left border-t-5 border-dark">
                <!-- <p class="text-gray-500 font-medium"> Freelance Web Developer </p> -->
                <h1 class="font-arvo text-4xl md:text-5xl lg:text-7xl font-bold text-dark leading-tight mt-3 uppercase"> Hello, I'm <span class="text-dark"> Richa </span></h1>
                <p class="font-lato mt-6 text-dark leading-snug text-justify text-xl "> A web developer who creates unique, user-friendly websites, helping small businesses grow their online presence through WordPress, Laravel, and responsive web design. </p>
                <div class="mt-8 flex flex-wrap justify-center lg:justify-start gap-4">
                <a href="/portfolio" class="bg-dark text-white px-6 py-3 hover:opacity-90 transition font-lato" > View Work </a>
                <a href="/contact" class="border border-dark px-6 py-3 hover:bg-dark hover:text-white transition font-lato" > Contact Me </a>
            </div> 
        </div>
        <!-- Right Image --> 
        <div class="max-w-md lg:max-w-lg">
            <img src="{{ asset('images/profile_image.png') }}" alt="Richa Portfolio Hero Image" class="w-full max-w-md mx-auto rounded-3xl shadow-xl">
        </div>
    </div>
</section>
<!-- Services Section -->
<section class="py-20 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-14">
            <h2 class="text-4xl font-bold">
                Services
            </h2>
            <p class="text-gray-600 mt-3"> Helping businesses build fast, modern and responsive websites.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
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