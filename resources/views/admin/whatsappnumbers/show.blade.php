 

@extends('admin.layouts.app')
 
@section('title', 'Page Title')
 
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Whatsapp Number Detail</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Number</th>
                      
                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                 </tr>
             </thead>
             <tbody>
             <tr>
                         <td class="mb-0 text-sm">{{ $whatsAppNumber->id }}</td>
                         <td class="mb-0 text-sm">{{ $whatsAppNumber->number }}</td>

 
<!-- <a href="{{ route('admin.whatsappnumbers.edit', $whatsAppNumber->id) }}" class="btn btn-primary">Edit</a>
    </div> -->
    <form  class="mb-0 text-sm" style="display: inline-block;" action="{{ route('admin.whatsappnumbers.edit', $whatsAppNumber->id) }}" method="GET">
        @csrf
        <button type="submit" class="btn btn-link">
            <i class="fa fa-pencil fa-fw"></i> Edit
        </button>
    </form>
</td>
  </tr>
  

@push('scripts')

@endpush
@endsection
 