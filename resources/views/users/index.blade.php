@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold mb-4">Users List</h1>

        <a href="{{ route('users.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-700">
            + Add New User
        </a>

    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 bg-white rounded">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Created At</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->created_at->format('Y-m-d') }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('users.show', $user->id) }}" class="text-blue-600 hover:underline">View</a> |
                            <a href="{{ route('users.edit', $user->id) }}" class="text-green-600 hover:underline">Edit</a> |
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
