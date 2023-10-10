 

@extends('admin.layouts.app')
 
 @section('title', 'Page Title')
  
 @section('content')
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Package Booking</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
              
                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Package Id </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Passenger Count</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Transport Option</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Transport Passenger</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total Price</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Number</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions </th>
                  </tr>
              </thead>

              <tbody>
              <tr > @foreach ($packageBookings as $PackageBooking)
              <td class="mb-0 text-sm">{{ $PackageBooking->id }}</td>
                          <td class="mb-0 text-sm">{{ $PackageBooking->package_id }}</td>
                          <td class="mb-0 text-sm">{{ $PackageBooking->passenger_count }}</td>
                          @if($PackageBooking->transport_option == 1)
                        <td class="mb-0 text-sm ">Yes</td>
                          @else
                          <td class="mb-0 text-sm  " >No</td>
                          @endif

                          <td class="mb-0 text-sm">{{ $PackageBooking->transport_passengers }}</td>
                          <td class="mb-0 text-sm">{{ $PackageBooking->total_price }}</td>
                          <td class="mb-0 text-sm">{{ $PackageBooking->contact_name }}</td>
                          
                          <td class="mb-0 text-sm">{{ $PackageBooking->contact_phone_number }}</td>
                          <td class="mb-0 text-sm">{{ $PackageBooking->contact_email }}</td>
                          <td class="mb-0 text-sm">{{ $PackageBooking->contact_address }}</td>
                           
                          <td class="align-middle">
                          <form style="display: inline-block;" action="{{ url('admin/packagebookings', $PackageBooking->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-link" onclick="return confirm('Are you sure you want to delete this package detail?')">
        <i class="fa fa-trash"></i> Delete
    </button>
</form>


   
    </td></td>
  </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
 
 @push('scripts')
 
 @endpush
 @endsection
  