@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="py-24">

    <div
        class="max-w-7xl mx-auto px-6
        flex flex-col-reverse lg:flex-row
        justify-between items-center
        gap-16"
    >

        <!-- Left Content -->
        <div class="max-w-xl text-center lg:text-left">

            <p class="text-gray-500 font-medium">
                Freelance Web Developer
            </p>

            <h1
                class="text-4xl md:text-5xl lg:text-6xl
                font-bold leading-tight mt-3"
            >
                Hello, I'm
                <span class="text-blue-600">
                    Richa
                </span>
            </h1>

            <p
                class="mt-6 text-lg text-gray-600 leading-relaxed"
            >
                A web developer who creates
                unique, user-friendly websites,
                helping small businesses grow
                their online presence through
                WordPress, Laravel, and
                responsive web design.
            </p>

            <div
                class="mt-8 flex flex-wrap
                justify-center lg:justify-start
                gap-4"
            >

                <a
                    href="/portfolio"
                    class="bg-black text-white
                    px-6 py-3 rounded-lg
                    hover:opacity-90
                    transition"
                >
                    View Work
                </a>

                <a
                    href="/contact"
                    class="border border-black
                    px-6 py-3 rounded-lg
                    hover:bg-black
                    hover:text-white
                    transition"
                >
                    Contact Me
                </a>

            </div>
        </div>

        <!-- Right Image -->
        <div class="max-w-md lg:max-w-lg">

            <img
                src="{{ asset('images/profile_image.png') }}"
                alt="Richa Portfolio Hero Image"
                class="w-full rounded-3xl shadow-xl"
            >

        </div>

    </div>

</section>

@endsection