@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="min-h-screen bg-secondary-default flex items-center overflow-hidden ">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 items-center relative">

            <!-- Left Content -->
            <div class="relative z-20 lg:pr-0">

                <!-- Decorative Line -->
                <div class="w-32 h-2 bg-primary-default mb-10"></div>

                <!-- Heading -->

                <h1 class="text-5xl md:text-5xl xl:text-[70px]
                    font-semibold uppercase text-primary-default
                    leading-[0.95] tracking-widest
                    lg:w-212.5 relative z-20">
                    HELLO, I'M RICHA A <br>
                    WEB DEVELOPER
                </h1>


                <!-- Description -->
                <p class="mt-8 text-lg text-primary-default max-w-lg">
                    Who creates unique, user-friendly websites, helping businesses grow their online presence through <strong>WordPress</strong>, <strong>Laravel</strong>, and <strong>responsive web design</strong>.
                </p>

                <!-- CTA Button -->
                <a href="/contact"
                    class="mt-10 inline-block text-xl bg-primary-default text-secondary-default px-10 py-4 uppercase tracking-wide font-semibold border-2 border-primary-default transition duration-300 hover:scale-105">
                    Let's Talk
                </a>
            </div>

            <!-- Right Image -->
            <div class="relative lg:-ml-40 z-10 flex justify-end mt-12 lg:mt-0">
                <div class="w-full max-w-125 h-125 overflow-hidden">
                    <img
                        src="{{ asset('images/profile_picture.png') }}"
                        alt="Hero Image"
                        class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </div>

    <!-- Scroll Button -->
    <div class="hidden md:flex absolute bottom-8 right-8 z-50   ">
        <button class="w-28 h-28 rounded-full bg-primary-default flex items-center justify-center hover:scale-105 transition">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-10 h-10 text-secondary-default"
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
<section id="services" x-data="{ active: 1 }" class="bg-primary-default text-secondary-default py-24 lg:py-32">
    <div class="container mx-auto px-6 lg:px-12">

        <div class="grid lg:grid-cols-12 gap-16">

            <!-- LEFT SIDE -->
            <div class="lg:col-span-5">

                <!-- Decorative line -->
                <div class="w-32 h-2 bg-secondary-default mb-10"></div>

                <!-- Heading -->
                <h2 class="text-4xl lg:text-5xl font-bold uppercase leading-tight">
                    Services I <br>
                    Offer
                </h2>

                <!-- Description -->
                <p class="mt-6 text-lg text-secondary-default leading-relaxed max-w-sm">
                    I will help you with finding a solution and
                    solve your problem.
                </p>

                <!-- CTA Circle Button -->
                <div class="mt-20">
                    <a href="#contact"
                        class="w-35 h-35 rounded-full bg-secondary-default text-primary-default
                        flex items-center justify-center
                        text-2xl font-bold uppercase
                        hover:scale-105 transition duration-300">

                        <span class="text-center leading-tight">
                            Let's <br> Talk
                        </span>
                    </a>
                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="lg:col-span-7 divide-y divide-secondary-default">

                <!-- SERVICE 01 -->
                <div
                    @click="active = active === 1 ? null : 1"
                    class="py-8 cursor-pointer border-b border-primary-default">

                    <!-- TOP ROW -->
                    <div class="flex justify-between items-center gap-6">

                        <!-- Left Content -->
                        <div class="flex items-center gap-6">

                            <!-- Number -->
                            <span class="text-5xl lg:text-6xl font-bold shrink-0">
                                01
                            </span>

                            <!-- Heading -->
                            <h3 class="text-2xl lg:text-3xl font-light">
                                Web Design
                            </h3>

                        </div>

                        <!-- Fixed Arrow -->
                        <div
                            class="w-8 h-8 rounded-full bg-secondary-default text-primary-default flex items-center justify-center shrink-0 transition-transform duration-500"
                            :class="active === 1 ? 'rotate-45' : ''">

                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M7 17L17 7M17 7H8M17 7V16" />
                            </svg>
                        </div>
                    </div>

                    <!-- DESCRIPTION -->
                    <div
                        x-show="active === 1"
                        x-collapse
                        class="overflow-hidden">

                        <p class="ml-[95px] text-secondary-default text-lg leading-relaxed max-w-3xl">
                            I design beautiful and conversion-focused
                            websites that improve user experience and
                            reflect your brand identity.
                        </p>

                    </div>
                </div>

                <!-- SERVICE 02 -->
                <div
                    @click="active = active === 2 ? null : 2"
                    class="py-8 cursor-pointer transition-all duration-500">

                    <div class="flex justify-between items-center gap-6">

                        <!-- Left Content -->
                        <div class="flex items-center gap-6">

                            <!-- Number -->
                            <span class="text-5xl lg:text-6xl font-bold shrink-0">
                                02
                            </span>

                            <!-- Heading -->
                            <h3 class="text-2xl lg:text-3xl font-light">
                                WordPress Development
                            </h3>

                        </div>

                        <!-- Fixed Arrow -->
                        <div
                            class="w-8 h-8 rounded-full bg-secondary-default text-primary-default
            flex items-center justify-center
            shrink-0 transition-transform duration-500"
                            :class="active === 2 ? 'rotate-45' : ''">

                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M7 17L17 7M17 7H8M17 7V16" />
                            </svg>
                        </div>
                    </div>

                    <!-- DESCRIPTION -->
                    <div
                        x-show="active === 2"
                        x-collapse
                        class="overflow-hidden">

                        <p class="ml-[95px] text-secondary-default text-lg leading-relaxed max-w-3xl">
                            I design beautiful and conversion-focused
                            websites that improve user experience and
                            reflect your brand identity.
                        </p>

                    </div>
                </div>

                <!-- SERVICE 03 -->
                <div
                    @click="active = active === 3 ? null : 3"
                    class="py-8 cursor-pointer transition-all duration-500">

                    <div class="flex justify-between items-center gap-6">

                        <!-- Left Content -->
                        <div class="flex items-center gap-6">

                            <!-- Number -->
                            <span class="text-5xl lg:text-6xl font-bold shrink-0">
                                03
                            </span>

                            <!-- Heading -->
                            <h3 class="text-2xl lg:text-3xl font-light">
                                Laravel Development
                            </h3>

                        </div>

                        <!-- Fixed Arrow -->
                        <div
                            class="w-8 h-8 rounded-full bg-secondary-default text-primary-default
            flex items-center justify-center
            shrink-0 transition-transform duration-500"
                            :class="active === 3 ? 'rotate-45' : ''">

                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M7 17L17 7M17 7H8M17 7V16" />
                            </svg>
                        </div>
                    </div>

                    <!-- DESCRIPTION -->
                    <div
                        x-show="active === 3"
                        x-collapse
                        class="overflow-hidden">

                        <p class="ml-[95px] text-secondary-default text-lg leading-relaxed max-w-3xl">
                            I design beautiful and conversion-focused
                            websites that improve user experience and
                            reflect your brand identity.
                        </p>

                    </div>
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
                <p class="text-primary-default mt-2">A few projects showcasing my work. </p>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <x-project-card
                :project="$project" />
            @endforeach
        </div>
        <div class="flex justify-center items-center">
            <a href="/portfolio" class="mt-8 bg-primary-default text-secondary-default px-8 py-4 rounded-xl"> Browse All </a>
        </div>
    </div>
</section>
<!-- Why Work With Me Section -->
<section class="py-20 md:py-24 bg-secondary-default text-primary-default">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="text-center mb-14">
            <h2 class="text-4xl font-bold">Why Work With Me</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div>
                <h3 class="font-semibold text-xl"> Responsive Design </h3>
                <p class="text-primary-default mt-2"> Websites optimized for all devices. </p>
            </div>
            <div>
                <h3 class="font-semibold text-xl"> Clean Code </h3>
                <p class="text-primary-default mt-2"> Structured and maintainable development. </p>
            </div>
            <div>
                <h3 class="font-semibold text-xl"> Fast Communication </h3>
                <p class="text-primary-default mt-2"> Clear updates during projects </p>
            </div>
            <div>
                <h3 class="font-semibold text-xl"> Business Focused </h3>
                <p class="text-primary-default mt-2"> Solutions that support business growth. </p>
            </div>
        </div>
    </div>
</section>
<!-- CTA section -->
<section class="py-20 md:py-24">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-5xl font-bold">Let’s Build Your Website</h2>
        <p class="text-primary-default mt-5 text-lg">Need a website for your business? Let’s discuss your project.</p>
        <a href="/contact" class="inline-block mt-8 bg-primary-default text-secondary-default px-8 py-4 rounded-xl">Contact Me</a>
    </div>
</section>
@endsection