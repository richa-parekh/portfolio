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
                    <li>✔ Business websites</li>
                    <li>✔ Landing pages</li>
                    <li>✔ Elementor customization</li>
                    <li>✔ WooCommerce setup</li>
                    <li>✔ Speed optimization</li>
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
                    <li>✔ Custom web applications</li>
                    <li>✔ Admin dashboards</li>
                    <li>✔ APIs</li>
                    <li>✔ Authentication systems</li>
                    <li>✔ Bug fixing</li>
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
                    <li>✔ Responsive design</li>
                    <li>✔ UI redesign</li>
                    <li>✔ Mobile optimization</li>
                    <li>✔ UX improvements</li>
                    <li>✔ Landing page design</li>
                </ul>
            </div>
        </div>
        <!-- CTA Button -->
            <a href="/portfolio"
                class="mt-10 block mx-auto text-xl text-center bg-secondary-default text-primary-default px-10 py-4 uppercase tracking-wide font-semibold border-2 border-secondary-default transition duration-300 hover:scale-105 w-fit mx-auto">
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
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="">
                <h3 class="text-xl font-semibold">
                    01. Discussion
                </h3>
                <p class="mt-3 text-primary-400">
                    Understanding your business
                    goals and project requirements.
                </p>
            </div>
            <div>
                <h3 class="text-xl font-semibold">
                    02. Development
                </h3>
                <p class="mt-3 text-primary-400">
                    Building a clean, responsive,
                    and fast website.
                </p>
            </div>
            <div>
                <h3 class="text-xl font-semibold">
                    03. Launch
                </h3>
                <p class="mt-3 text-primary-400">
                    Testing and deploying your
                    website smoothly.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection