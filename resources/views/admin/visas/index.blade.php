@extends('admin.layouts.app')
 
@section('title', 'Page Title')
 
@section('content')
 <main>
 <div class="container mt-5">
        <h1 class="mb-4">Visas</h1>
        <a href="visas/show" class="btn btn-primary">Show All List</a>
    
        <form method="post" action="{{ route('visas.store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group">
                <label for="country">Country  :</label>
                <input type="text"   value=" "  class="form-control" id="country" name="country"   required> 
                    </div>
             

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number"  value=" "  class="form-control" id="price" name="price" step="0.01" required>
            </div>

            <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
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
 