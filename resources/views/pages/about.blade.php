@extends('layouts.app')
@section('title', 'About')
@section('content')

<section class="py-24">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

        <!-- Image -->
        <div>
            <img
                src="{{ asset('images/profile_image.png') }}"
                alt="About Richa"
                class="rounded-3xl shadow-lg"
            >
        </div>

        <!-- Content -->
        <div>
            <p class="text-blue-600 font-medium">
                About Me
            </p>
            <h1 class="text-5xl font-bold mt-3">
                Helping Businesses Build Better Websites
            </h1>
            <p class="mt-6 text-gray-600 leading-relaxed">
                Hello, I’m Richa — a freelance
                web developer specializing in
                WordPress development, Laravel
                applications and modern web design.
            </p>
            <p class="mt-4 text-gray-600 leading-relaxed">
                I focus on creating clean,
                responsive, and user-friendly
                websites that help businesses
                strengthen their online presence.
            </p>
            <div class="mt-10">
                <h3 class="font-semibold text-xl">
                    Skills
                </h3>
                <div class="flex flex-wrap gap-3 mt-5">
                    <span class="px-4 py-2 bg-gray-100 rounded-full">
                        HTML
                    </span>
                    <span class="px-4 py-2 bg-gray-100 rounded-full">
                        CSS
                    </span>
                    <span class="px-4 py-2 bg-gray-100 rounded-full">
                        JavaScript
                    </span>
                    <span class="px-4 py-2 bg-gray-100 rounded-full">
                        PHP
                    </span>
                    <span class="px-4 py-2 bg-gray-100 rounded-full">
                        Laravel
                    </span>
                    <span class="px-4 py-2 bg-gray-100 rounded-full">
                        WordPress
                    </span>
                    <span class="px-4 py-2 bg-gray-100 rounded-full">
                        Tailwind
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection