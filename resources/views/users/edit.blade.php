@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Edit User</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
            <ul class="list-disc ml-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Name</label>
            <input type="text" name="name" id="name"
                   value="{{ old('name', $user->name) }}"
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
                   required>
        </div>

        <div class="mb-4">
            <label for="email" class="block font-medium mb-1">Email</label>
            <input type="email" name="email" id="email"
                   value="{{ old('email', $user->email) }}"
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
                   required>
        </div>

        <div class="mb-4">
            <label for="phone" class="block font-medium mb-1">Phone</label>
            <input type="text" name="phone" id="phone"
                   value="{{ old('phone', $user->phone) }}"
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring">
        </div>

        <div class="mb-4">
            <label for="address" class="block font-medium mb-1">Address</label>
            <textarea name="address" id="address"
                      class="w-full border rounded px-3 py-2 focus:outline-none focus:ring">{{ old('address', $user->address) }}</textarea>
        </div>

        <div class="flex gap-4">
            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Update
            </button>
            <a href="{{ route('users.index') }}"
               class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
