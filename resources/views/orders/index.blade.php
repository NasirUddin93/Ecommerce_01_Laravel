@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Orders</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-4">
        <a href="{{ route('orders.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
           + Create Order
        </a>
    </div>

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">Customer Name</th>
                    <th class="px-4 py-2 text-left">Order Date</th>
                    <th class="px-4 py-2 text-left">Total</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $order->customer_name }}</td>
                        <td class="px-4 py-2">{{ $order->order_date->format('d M Y') }}</td>
                        <td class="px-4 py-2">{{ number_format($order->total, 2) }}</td>
                        <td class="px-4 py-2">
                            <span class="px-2 py-1 rounded text-white
                            {{ $order->status === 'Completed' ? 'bg-green-500' : ($order->status === 'Pending' ? 'bg-yellow-500' : 'bg-red-500') }}">
                                {{ $order->status }}
                            </span>
                        </td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('orders.show', $order->id) }}"
                               class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700 text-sm">
                                View
                            </a>
                            <a href="{{ route('orders.edit', $order->id) }}"
                               class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm">
                                Edit
                            </a>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Delete this order?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center px-4 py-4">No orders found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
