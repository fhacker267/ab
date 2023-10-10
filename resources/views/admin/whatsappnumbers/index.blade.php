@extends('admin.layouts.app')
 
@section('title', 'Page Title')
 
@section('content')
<main>
    <div class="container mt-5">
        <h1>WhatsApp Numbers</h1>
        
        <form action="{{ route('admin.whatsappnumbers.store') }}" method="post">
            @csrf
            <!-- <label for="number">Enter WhatsApp Number:</label>
            <input type="number" name="number" id="number" required>
            <button type="submit">Add Number</button> -->
        </form>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Number</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($whatsAppNumbers as $whatsAppNumber)
                <tr>
                    <td class="mb-0 text-sm">{{ $whatsAppNumber->id }}</td>
                    <td class="mb-0 text-sm">{{ $whatsAppNumber->number }}</td>
                    <td class="mb-0 text-sm">
                        <form style="display: inline-block;" action="{{ route('admin.whatsappnumbers.edit', $whatsAppNumber->id) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-link">
                                <i class="fa fa-pencil fa-fw"></i> Edit
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
 
@push('scripts')
@endpush
@endsection
