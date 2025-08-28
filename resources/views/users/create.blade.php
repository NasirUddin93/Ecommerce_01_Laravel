@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 max-w-lg">
    <h1 class="text-2xl font-bold mb-4">Add New User</h1>

    <div class="bg-white shadow rounded-lg p-6">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            {{-- Name --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name') }}"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring" required>
            </div>

            {{-- Email --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring" required>
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Password</label>
                <input type="password" name="password"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring" required>
            </div>

            {{-- Phone --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Phone</label>
                <input type="text" name="phone" value="{{ old('phone') }}"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring">
            </div>

            {{-- Address --}}
            <div class="mb-4">
                <label class="block font-medium mb-1">Address</label>
                <textarea name="address" rows="3"
                          class="w-full border rounded px-3 py-2 focus:outline-none focus:ring">{{ old('address') }}</textarea>
            </div>

            {{-- Buttons --}}
            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Save
                </button>
                <a href="{{ route('users.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
