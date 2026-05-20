@extends('layouts.app')

@section('title', 'Services')

@section('content')

<!-- Hero -->
<section class="py-24 bg-gray-50">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-bold"> My Services </h1>
        <p class="mt-6 text-lg text-gray-600">
            I help businesses build fast,
            modern and responsive websites
            that improve their online presence.
        </p>
    </div>
</section>

<!-- Services -->
<section class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <x-section-heading
            title="What I Offer"
            subtitle="Professional web development services tailored for businesses."
        />
        <div class="grid md:grid-cols-3 gap-8">
            <!-- WordPress -->
            <div class="bg-white p-8 rounded-3xl shadow-sm">
                <h3 class="text-2xl font-semibold">
                    WordPress Development
                </h3>
                <ul class="mt-6 space-y-3 text-gray-600">
                    <li>✔ Business websites</li>
                    <li>✔ Landing pages</li>
                    <li>✔ Elementor customization</li>
                    <li>✔ WooCommerce setup</li>
                    <li>✔ Speed optimization</li>
                </ul>
            </div>

            <!-- Laravel -->
            <div class="bg-white p-8 rounded-3xl shadow-sm">
                <h3 class="text-2xl font-semibold">
                    Laravel Development
                </h3>
                <ul class="mt-6 space-y-3 text-gray-600">
                    <li>✔ Custom web applications</li>
                    <li>✔ Admin dashboards</li>
                    <li>✔ APIs</li>
                    <li>✔ Authentication systems</li>
                    <li>✔ Bug fixing</li>
                </ul>
            </div>

            <!-- Design -->
            <div class="bg-white p-8 rounded-3xl shadow-sm">
                <h3 class="text-2xl font-semibold">
                    Website Design
                </h3>
                <ul class="mt-6 space-y-3 text-gray-600">
                    <li>✔ Responsive design</li>
                    <li>✔ UI redesign</li>
                    <li>✔ Mobile optimization</li>
                    <li>✔ UX improvements</li>
                    <li>✔ Landing page design</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="py-24 bg-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <x-section-heading
            title="How I Work"
            subtitle="A simple process focused on clarity and results."
        />
        <div class="grid md:grid-cols-3 gap-10">
            <div>
                <h3 class="text-xl font-semibold">
                    01. Discussion
                </h3>
                <p class="mt-3 text-gray-600">
                    Understanding your business
                    goals and project requirements.
                </p>
            </div>
            <div>
                <h3 class="text-xl font-semibold">
                    02. Development
                </h3>
                <p class="mt-3 text-gray-600">
                    Building a clean, responsive,
                    and fast website.
                </p>
            </div>
            <div>
                <h3 class="text-xl font-semibold">
                    03. Launch
                </h3>
                <p class="mt-3 text-gray-600">
                    Testing and deploying your
                    website smoothly.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection