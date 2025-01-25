@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-gradient-to-r from-purple-100 to-purple-200">
    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-sm text-purple-600 font-semibold">HIGHLY PROFESSIONAL BILLING</h2>
                <h1 class="text-4xl font-bold mt-2 text-purple-800">Flexible and Reliable</h1>
                <h1 class="text-3xl font-bold text-gray-700">Financing Solutions For Your Needs</h1>
                <p class="mt-4 text-gray-600">
                    Established in 2015, PT. Amboina Jasa Prima has been a trusted partner in providing vehicle and property financing solutions tailored to your goals
                </p>
            </div>
            <div class="flex justify-center">
                <img src="https://affordabledefence.com/wp-content/uploads/2023/11/Recanting-a-Statement-of-Domestic-Violence-in-Ontario-800x534.jpg" style="width: 350; height: auto; border: 20;">
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-gradient-to-r from-purple-500 to-pink-500 py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-3 gap-4 text-white text-center">
                <div>
                    <h3 class="text-3xl font-bold">{{ $stats['happy_customers'] }}+</h3>
                    <p>Happy Customers</p>
                </div>
                <div>
                    <h3 class="text-3xl font-bold">{{ $stats['awards'] }}</h3>
                    <p>Award Winning</p>
                </div>
                <div>
                    <h3 class="text-3xl font-bold">{{ $stats['projects'] }}+</h3>
                    <p>Projects Complete</p>
                </div>
            </div>
        </div>
    </div>
</div>


