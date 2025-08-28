@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">User Details</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded-lg p-6">
        <div class="mb-4">
            <span class="font-medium">Name:</span>
            <span class="ml-2">{{ $user->name }}</span>
        </div>
        <div class="mb-4">
            <span class="font-medium">Email:</span>
            <span class="ml-2">{{ $user->email }}</span>
        </div>
        <div class="mb-4">
            <span class="font-medium">Phone:</span>
            <span class="ml-2">{{ $user->phone ?? 'N/A' }}</span>
        </div>
        <div class="mb-4">
            <span class="font-medium">Address:</span>
            <span class="ml-2">{{ $user->address ?? 'N/A' }}</span>
        </div>
        <div class="mb-4">
            <span class="font-medium">Created At:</span>
            <span class="ml-2">{{ $user->created_at->format('d M, Y h:i A') }}</span>
        </div>
        <div class="mb-4">
            <span class="font-medium">Updated At:</span>
            <span class="ml-2">{{ $user->updated_at->format('d M, Y h:i A') }}</span>
        </div>
    </div>

    <div class="mt-6 flex gap-4">
        <a href="{{ route('users.edit', $user->id) }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Edit
        </a>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
              onsubmit="return confirm('Are you sure you want to delete this user?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                Delete
            </button>
        </form>
        <a href="{{ route('users.index') }}"
           class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
            Back to List
        </a>
    </div>
</div>
@endsection
