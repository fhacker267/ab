@extends('admin.layouts.app')
 
 @section('title', 'Page Title')
  
 @section('sidebar')
 
@section('content')
 <main>
 <div class="container mt-5">
        <h1 class="mb-4">Hotels</h1>
        <a href="hotels/show" class="btn btn-primary">Show All List</a>
    
        <form method="post" action="{{ route('hotels.store') }}" enctype="multipart/form-data">
 {{csrf_field()}}
        <div class="form-group">
                <label for="name">name:</label>
                <input type="text"   value=" "  class="form-control" id="name" name="name"   required> 
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

 
@section('footer')
    @endsection
@push('scripts')

@endpush
@endsection
 