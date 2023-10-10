 

@extends('admin.layouts.app')
 
 @section('title', 'Page Title')
  
 @section('content')
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Visas Booking details</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Visa Id </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Passenger Count</th>
                      
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Country</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total Price</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Number</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
                       
                       
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                  </tr>
              </thead>
              <tbody>
              <tr> @foreach ($visaBookings as $VisaBooking)
              <td class="mb-0 text-sm">{{ $VisaBooking->id }}</td>
                          <td class="mb-0 text-sm">{{ $VisaBooking->visa_id }}</td>
                          <td class="mb-0 text-sm">{{ $VisaBooking->passenger_count }}</td>
                           
                          <td class="mb-0 text-sm">{{ $VisaBooking->country }}</td>
                          <td class="mb-0 text-sm">{{ $VisaBooking->total_price }}</td>
                          <td class="mb-0 text-sm">{{ $VisaBooking->contact_name }}</td>
                          
                          <td class="mb-0 text-sm">{{ $VisaBooking->contact_phone_number }}</td>
                          <td class="mb-0 text-sm">{{ $VisaBooking->contact_email }}</td>
                          <td class="mb-0 text-sm">{{ $VisaBooking->contact_address }}</td>
                           
                          <td class="mb-0 text-sm">
                          <form style="display: inline-block;" action="{{ url('admin/visabookings', $VisaBooking->id) }}" method="POST">
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
  