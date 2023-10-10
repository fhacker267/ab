
@extends('admin.layouts.app')
 
@section('title', 'Page Title')
 
@section('content')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Contact Us</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Subject</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Message</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                    </tr>
            </thead>
            <tbody>
            @foreach ($contactForms as $contactForm)
                <tr>
                    <td class="mb-0 text-sm">{{ $contactForm->name }}</td>
                    <td class="mb-0 text-sm">{{ $contactForm->email }}</td>
                    <td class="mb-0 text-sm">{{ $contactForm->subject }}</td>
                    <td class="mb-0 text-sm">{{ $contactForm->message }}</td>
                 
                

                <td class="mb-0 text-sm">  <form action="{{ url('admin/contact', ['contactForm' => $contactForm->id]) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <input type="hidden" value="{{ $contactForm->id }}" name="id">
                                  <button type="submit" class="btn btn-link" onclick="return confirm('Are you sure you want to delete this flight?')">
        <i class="fa fa-trash"></i>
    </button>
                              </form></td>  </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
    
@push('scripts')

@endpush
@endsection
 