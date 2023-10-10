@extends('admin.layouts.app')
 
@section('title', 'Page Title')
 
@section('content')
 <main>
 <div class="container mt-5">
        <h1 class="mb-4">Flights</h1>
        <a href="flights/show" class="btn btn-primary">Show All List</a>

    
        <form method="post" action="{{ route('admin.flights.store') }}" enctype="multipart/form-data">
 {{csrf_field()}}
        <div class="form-group">
                <label for="country">country:</label>
                <input type="text"   value=" "  class="form-control" id="country" name="country"   required> 
            </div>
             

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number"  value=" "  class="form-control" id="price" name="price" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" value=" "  id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Select an image to upload:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>




</main>

 
 
@push('scripts')

@endpush
@endsection
 