

@extends('admin.layouts.app')
 
@section('title', 'Page Title')
 
@section('content')
   
<div class="container">
<h1>Edit WhatsApp Number</h1>

<form action="{{ route('admin.whatsappnumbers.update', $whatsAppNumber->id) }}" method="post">
    @csrf
    @method('PUT')

    <label for="number">Edit WhatsApp Number:</label>
    <input type="number" name="number" id="number" value="{{ $whatsAppNumber->number }}" required>
    <button type="submit">Save Changes</button>
</form>
</div>


    @push('scripts')

@endpush
@endsection
 