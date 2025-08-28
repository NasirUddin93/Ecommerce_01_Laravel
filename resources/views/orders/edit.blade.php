@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Edit Order #{{ $order->id }}</h2>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Total Amount --}}
        <div class="mb-4">
            <label class="block text-sm font-medium">Total Amount</label>
            <input type="number" name="total_amount" step="0.01" class="border rounded w-full p-2"
                   value="{{ $order->total_amount }}" required>
        </div>

        {{-- Status --}}
        <div class="mb-4">
            <label class="block text-sm font-medium">Status</label>
            <select name="status" class="border rounded w-full p-2">
                <option value="pending" {{ $order->status=='pending'?'selected':'' }}>Pending</option>
                <option value="paid" {{ $order->status=='paid'?'selected':'' }}>Paid</option>
                <option value="shipped" {{ $order->status=='shipped'?'selected':'' }}>Shipped</option>
            </select>
        </div>

        {{-- Order Items --}}
        <div class="mb-4">
            <label class="block text-sm font-medium">Products</label>
            @foreach ($order->items as $index => $item)
                <div class="flex gap-2 mb-2">
                    <input type="number" name="items[{{ $index }}][product_id]" value="{{ $item->product_id }}" class="border rounded p-2 w-1/3" required>
                    <input type="number" name="items[{{ $index }}][quantity]" value="{{ $item->quantity }}" class="border rounded p-2 w-1/3" required>
                    <input type="number" name="items[{{ $index }}][price]" value="{{ $item->price }}" step="0.01" class="border rounded p-2 w-1/3" required>
                </div>
            @endforeach
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Update Order</button>
    </form>
</div>
@endsection
