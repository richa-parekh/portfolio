@extends('layouts.app')
@section('title', 'About')
@section('content')

<section class="py-20 md:py-20 md:py-24 bg-primary-default">
    <div class="max-w-7xl mx-auto px-4 md:px-6 grid lg:grid-cols-2 gap-16 items-center">

        <!-- Image -->
        <div>
            <img
                src="{{ asset('images/profile_picture.png') }}"
                alt="About Richa"
                class=""
            >
        </div>

        <!-- Content -->
        <div>
            <p class="text-secondary-default font-medium text-xl md:text-lg lg:text-4xl">
                Let me introduce myself
            </p>
            <!-- <h1 class="text-5xl font-bold mt-3 text-secondary-default">
                Helping Businesses Build Better Websites
            </h1> -->
            <p class="mt-6 text-secondary-default leading-relaxed">
                Hello, I’m Richa — a freelance
                web developer specializing in
                WordPress development, Laravel
                applications and modern web design.
            </p>
            <p class="mt-4 text-secondary-default leading-relaxed">
                I focus on creating clean,
                responsive, and user-friendly
                websites that help businesses
                strengthen their online presence.
            </p>
            <div class="mt-10">
                <h3 class="font-semibold text-xl text-secondary-default">
                    Skills
                </h3>
                <div class="flex flex-wrap gap-3 mt-5">
                    <span class="px-4 py-2 text-primary-default bg-secondary-default rounded-full">
                        HTML
                    </span>
                    <span class="px-4 py-2 text-primary-default bg-secondary-default rounded-full">
                        CSS
                    </span>
                    <span class="px-4 py-2 text-primary-default bg-secondary-default rounded-full">
                        JavaScript
                    </span>
                    <span class="px-4 py-2 text-primary-default bg-secondary-default rounded-full">
                        PHP
                    </span>
                    <span class="px-4 py-2 text-primary-default bg-secondary-default rounded-full">
                        Laravel
                    </span>
                    <span class="px-4 py-2 text-primary-default bg-secondary-default rounded-full">
                        WordPress
                    </span>
                    <span class="px-4 py-2 text-primary-default bg-secondary-default rounded-full">
                        Tailwind
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection