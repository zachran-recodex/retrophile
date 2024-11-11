@extends('layouts.main')

@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="RECODEX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#2A6F97">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>Retrophile Coffee</title>
@endsection

@section('content')
    <section class="h-screen z-10">
        <img src="{{ asset('images/bg.png') }}"
            class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="">
    </section>

    <section class="py-main">
        <div class="container-main text-retrophile-600">
            <div class="grid grid-cols-2 gap-16">
                <div class="space-y-16">
                    <h2 class="text-8xl font-bold">
                        Our Story
                    </h2>
                    <div class="grid grid-cols-2 gap-8">
                        <p>
                            We're back on the road, brewing up the past and serving up smiles! Experience the warm nostalgia
                            of
                            handcrafted coffee from our beloved retro coffee van. It's more than a drink—it's a memory.
                        </p>
                        <p>
                            We're back on the road, brewing up the past and serving up smiles! Experience the warm nostalgia
                            of
                            handcrafted coffee from our beloved retro coffee van. It's more than a drink—it's a memory.
                        </p>
                    </div>
                    <p class="font-semibold">
                        Since 2024
                    </p>
                </div>
                <div class="space-y-16">
                    <p class="text-2xl font-semibold">
                        We're back on the road, brewing up the past and serving up smiles! Experience the warm nostalgia of
                        handcrafted coffee from our beloved retro coffee van. It's more than a drink—it's a memory.
                    </p>
                    <p class="text-2xl font-semibold">
                        We're back on the road, brewing up the past and serving up smiles! Experience the warm nostalgia of
                        handcrafted coffee from our beloved retro coffee van. It's more than a drink—it's a memory.
                    </p>
                    <p class="font-semibold">
                        Retrophile Coffe Van
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-main bg-retrophile-600">
        <div class="container-main text-wheatfield-100">
            <div class="grid grid-cols-2 gap-16">
                <div class="w-1/2">
                    <p>
                        We're back on the road, brewing up the past and serving up smiles! Experience the warm nostalgia
                        of
                        handcrafted coffee from our beloved retro coffee van. It's more than a drink—it's a memory.
                    </p>
                </div>
                <p class="text-8xl font-semibold">
                    we are inspired by the spirit of the
                </p>
            </div>
            <h3 class="text-[18rem] font-bold">70-80s</h3>
            <div class="grid grid-cols-2 gap-16">
                <p class="text-6xl font-semibold">
                    Our mission is to bla bla bla blla bla bllab lba lbalb ablalab ablbal balab!
                </p>
                <div class="grid grid-cols-2 gap-8">
                    <div class="space-y-8">
                        <p>
                            We're back on the road, brewing up the past and serving up smiles! Experience the warm nostalgia
                            of
                            handcrafted coffee from our beloved retro coffee van. It's more than a drink—it's a memory.
                        </p>
                        <p>
                            We're back on the road, brewing up the past and serving up smiles! Experience the warm nostalgia
                            of
                            handcrafted coffee from our beloved retro coffee van. It's more than a drink—it's a memory.
                        </p>
                        <p>
                            We're back on the road, brewing up the past and serving up smiles! Experience the warm nostalgia
                            of
                            handcrafted coffee from our beloved retro coffee van. It's more than a drink—it's a memory.
                        </p>
                    </div>
                    <div class="space-y-8">
                        <p>
                            We're back on the road, brewing up the past and serving up smiles! Experience the warm nostalgia
                            of
                            handcrafted coffee from our beloved retro coffee van. It's more than a drink—it's a memory.
                        </p>
                        <p>
                            We're back on the road, brewing up the past and serving up smiles! Experience the warm nostalgia
                            of
                            handcrafted coffee from our beloved retro coffee van. It's more than a drink—it's a memory.
                        </p>
                        <p>
                            We're back on the road, brewing up the past and serving up smiles! Experience the warm nostalgia
                            of
                            handcrafted coffee from our beloved retro coffee van. It's more than a drink—it's a memory.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h-screen">
        <img src="{{ asset('images/bg.png') }}" class="w-full h-full object-cover" alt="">
    </section>

    <section class="py-main">
        <div class="container-main flex flex-col justify-center items-center text-retrophile-600">
            <div class="flex justify-center items-center space-x-16">
                <a href="" class="border border-retrophile-600 py-2 px-6">
                    Home
                </a>
                <a href="" class="border border-retrophile-600 py-2 px-6">
                    About
                </a>
                <a href="" class="border border-retrophile-600 py-2 px-6">
                    Journey
                </a>
            </div>
            <h3 class="text-[15rem] font-bold">
                LOCATION
            </h3>
        </div>
    </section>

    <section class="py-main bg-retrophile-3-500">
        <div class="container-main flex flex-col justify-start items-start text-retrophile-600 gap-4">
            <div class="flex justify-center items-center space-x-8">
                <a href="" class="border bg-wheatfield-100 border-retrophile-600 py-2 px-6">
                    Home
                </a>
                <a href="" class="border bg-wheatfield-100 border-retrophile-600 py-2 px-6">
                    About
                </a>
                <a href="" class="border bg-wheatfield-100 border-retrophile-600 py-2 px-6">
                    Journey
                </a>
                <a href="" class="border bg-wheatfield-100 border-retrophile-600 py-2 px-6">
                    Journey
                </a>
                <a href="" class="border bg-wheatfield-100 border-retrophile-600 py-2 px-6">
                    Journey
                </a>
            </div>
            <div class="grid grid-cols-2 gap-16">
                <p class="text-8xl font-semibold">
                    your friend of coffee van
                </p>
                <div class="">
                    <div class="">
                        mangkal
                        <p>
                            Jl. Padjajaran No 1 Cisaat Sukabumi
                        </p>
                    </div>
                    <div class="">
                        email
                        <p>
                            info@retrophile.id
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
