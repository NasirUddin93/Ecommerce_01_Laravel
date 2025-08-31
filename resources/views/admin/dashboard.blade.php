{{-- <x-app-layout>
    <h1 class="text-2xl font-bold">Admin Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}</p>
</x-app-layout> --}}

@extends('layouts.admin')

@section('title', 'Products')

@section('content')
<div class="container mx-auto p-4">
    <h2>Admin Dashboar</h2>
    <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
    <div class="grid grid-cols-3 gap-6">
        <div class="p-4 bg-white shadow rounded">
            <h2 class="text-lg font-semibold">Products</h2>
            {{-- <p class="text-xl">{{ $totalProducts }}</p> --}}
            <a href="{{ route('products.index') }}" class="text-blue-600">Manage</a>
        </div>
        <div class="p-4 bg-white shadow rounded">
            <h2 class="text-lg font-semibold">Categories</h2>
            {{-- <p class="text-xl">{{ $totalCategories }}</p> --}}
            <a href="{{ route('categories.index') }}" class="text-blue-600">Manage</a>
        </div>
        <div class="p-4 bg-white shadow rounded">
            <h2 class="text-lg font-semibold">Customers</h2>
            {{-- <p class="text-xl">{{ $totalCustomers }}</p> --}}
            <a href="{{ route('customers.index') }}" class="text-blue-600">Manage</a>
        </div>
    </div>
</div>
@endsection
