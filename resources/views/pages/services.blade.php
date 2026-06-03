@extends('layouts.app')

@section('title', 'Services')

@section('content')

<!-- Hero -->
<section class="py-20 md:py-24 bg-secondary-default">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-bold text-primary-default">Services </h1>
        <p class="mt-6 text-lg text-primary-default">
            I help businesses build fast,
            modern and responsive websites
            that improve their online presence.
        </p>
    </div>
</section>

<!-- Services -->
<section class="py-20 md:py-24 bg-primary-default">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <x-section-heading
            title="What I Offer"
            subtitle="Professional web development services tailored for businesses."
            variant="secondary" />
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- WordPress -->
            <div class="bg-secondary-default shadow-sm">
                <div>
                    <img src="{{ asset('images\services\wordpress_service.png') }}" alt="WordPress Development service image">
                </div>
                <h3 class="text-2xl font-semibold text-primary-default px-8 pt-8 pb-4">
                    WordPress Development
                </h3>
                <ul class="px-8 pb-8 space-y-3 text-gray-600">
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">Business websites</p>
                    </li>
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">Landing pages</p>
                    </li>
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">Elementor customization</p>
                    </li>
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">WooCommerce setup</p>
                    </li>
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">Speed optimization</p>
                    </li>
                </ul>
            </div>

            <!-- Laravel -->
            <div class="bg-secondary-default shadow-sm">
                <div>
                    <img src="{{ asset('images\services\laravel_service.png') }}" alt="Laravel Development service image">
                </div>
                <h3 class="text-2xl font-semibold text-primary-default px-8 pt-8 pb-4">
                    Laravel Development
                </h3>
                <ul class="px-8 pb-8 space-y-3 text-gray-600">
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">Custom web applications</p>
                    </li>
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">Admin dashboards</p>
                    </li>
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">APIs and integrations</p>
                    </li>
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">Authentication systems</p>
                    </li>
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">Bug fixing </p>
                    </li>
                </ul>
            </div>

            <!-- Design -->
            <div class="bg-secondary-default shadow-sm">
                <div>
                    <img src="{{ asset('images\services\website_design_service.png') }}" alt="Website Design service image">
                </div>
                <h3 class="text-2xl font-semibold text-primary-default px-8 pt-8 pb-4">
                    Website Design
                </h3>
                <ul class="px-8 pb-8 space-y-3 text-primary-400">
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">Responsive design</p>
                    </li>
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">UI redesign</p>
                    </li>

                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">Mobile optimization</p>
                    </li>
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">UX improvements</p>
                    </li>
                    <li class="flex flex-wrap items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4"> <!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path fill="#565c65" d="M434.8 70.1c14.3 10.4 17.5 30.4 7.1 44.7l-256 352c-5.5 7.6-14 12.3-23.4 13.1s-18.5-2.7-25.1-9.3l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l101.5 101.5 234-321.7c10.4-14.3 30.4-17.5 44.7-7.1z"/></svg>
                        <p class="text-primary-400 pl-2">Landing page design</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- CTA Button -->
        <a href="/portfolio"
            class="mt-10 block text-xl text-center bg-secondary-default text-primary-default px-10 py-4 uppercase tracking-wide font-semibold transition duration-300 hover:scale-105 w-fit mx-auto">
            View Portfolio
        </a>
    </div>
</section>

<!-- Process -->
<section class="py-20 md:py-24 bg-secondary-default">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <x-section-heading
            title="How I Work"
            subtitle="A simple process focused on clarity and results."
            variant="primary" />
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="bg-secondary-default p-0 border-2 border-primary-default">
                <h3 class="text-xl font-semibold bg-primary-default text-secondary-default px-4 py-2 block">
                    01. Discussion
                </h3>
                <p class="p-3 text-md text-primary-default">
                    Understanding your business
                    goals and project requirements.
                </p>
            </div>
            <div class="bg-secondary-default p-0 border-2 border-primary-default">
                <h3 class="text-xl font-semibold bg-primary-default text-secondary-default px-4 py-2 block">
                    02. Development
                </h3>
                <p class="p-3 text-md text-primary-default">
                    Building a clean, responsive,
                    and fast website.
                </p>
            </div>
            <div class="bg-secondary-default p-0 border-2 border-primary-default">
                <h3 class="text-xl font-semibold bg-primary-default text-secondary-default px-4 py-2 block">
                    03. Testing
                </h3>
                <p class="p-3 text-md text-primary-default">
                    Ensuring your website functions correctly
                    and meets all requirements.
                </p>
            </div>
            <div class="bg-secondary-default p-0 border-2 border-primary-default">
                <h3 class="text-xl font-semibold bg-primary-default text-secondary-default px-4 py-2 block">
                    04. Launch & Support
                </h3>
                <p class="p-3 text-md text-primary-default">
                    Deploying your website and providing
                    ongoing support as needed.
                </p>
            </div>
        </div>
        <a href="/contact"
            class="mt-10 block text-xl text-center bg-primary-default text-secondary-default px-10 py-4 uppercase tracking-wide font-semibold transition duration-300 hover:scale-105 w-fit mx-auto">
            Let's Talk
        </a>
    </div>
</section>

@endsection