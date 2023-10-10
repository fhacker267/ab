
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Adventure - Free Bootstrap 4 Template by Colorlib</title>
    @include('header')

<!-- Include the navigation component -->
@include('navigation')
    <!-- END nav -->




<main>


<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Places</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">packages</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
         
          <div class="col-lg-12">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			 
                   
    <img src="{{ asset('storage/' . $packages->image_path) }}" alt="" style="max-width: 600px; ">
</div>

                        </div>  
          		</div>
          		<div class="container">
    <div class="row">
        <!-- Package Details -->
        <div class="col-md-6 hotel-single mt-4 mb-5 ftco-animate">
            <span>Our Best packages  &amp; and places</span>
            <h2>{{ $packages->name }}</h2>
            <p>{{ $packages->description }}</p>
            <span class="price">
                <del>AED250</del> AED{{ $packages->price }} /passenger 
            </span>

            <!-- Passenger and Transport Form -->
            <div class="form-group">
                <span>Number of Passengers</span>
                <input type="number" id="passengerCount" min="1" class="form-control" style="max-width: 200px;" placeholder="Enter Number of Passengers" value="1">
                <span style="color: red;" id="passengerPrice">Package Price: AED{{ $packages->price }}</span>
            </div>
            <div class="form-group">
                <span>With Transport or Without Transport Select Options</span>
                <select id="transportOption" class="form-control" style="max-width: 200px;">
                    <option value="0">Select Options</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div id="transportInput" style="display: none;">
                <label for="transportPassengers">Number of Passengers for Transport:</label>
                <input type="number" id="transportPassengers" min="1" class="form-control" style="max-width: 200px;">
                <br>
                <label for="pricePerPassenger">Price per Transport Passenger :  => {{ $packages->transportprice }}</label>
            </div>
            <span style="color: red;" id="updatedPrice">Total Price: AED{{ $packages->price }}</span>
            <input type="hidden" id="basePrice" value="{{ $packages->price }}">
            <input type="hidden" id="transportPrice" value="{{ $packages->transportprice }}">
            <br>
         
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactModal">
              Book Online
            </button>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
             
<!-- Modal for Contact Us Form -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel"><h2 style="margin-left: 10px;">{{ $packages->name }}</h2></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/submit-package-booking') }}" method="POST">
          @csrf <!-- CSRF protection token -->
          <div class="form-group">
            <label for="contactName">Name:</label>
            <input type="text" id="contactName" name="contactName" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="contactEmail">Email:</label>
            <input type="email" id="contactEmail" name="contactEmail" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="contactPhoneNumber">Phone Number:</label>
            <input type="tel" id="contactPhoneNumber" name="contactPhoneNumber" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="contactAddress">Address:</label>
            <textarea id="contactAddress" name="contactAddress" class="form-control" rows="3" required></textarea>
          </div>
          <input type="hidden" name="passengerCount" id="hiddenPassengerCount">
                    <input type="hidden" name="transportOption" id="hiddenTransportOption">
                    <input type="hidden" name="transportPassengers" id="hiddenTransportPassengers">
                    <input type="hidden" name="totalPrice" id="hiddenTotalPrice">
                    <input type="hidden" value="{{$id}}" name="packageId">
          <input type="submit" class="btn btn-primary" value="Submit">
        </form>
                   </div>
               </div>
           </div>
       </div>
   </section>
             

</main>

@include('footer')
   

 


<script>
    $(document).ready(function() {
        $('#transportOption').change(function() {
            var transportOption = $(this).val();
            var basePrice = parseFloat($('#basePrice').val());
            var transportPrice = parseFloat($('#transportPrice').val());
            var passengerPrice = parseFloat($('#passengerPrice').text().split('AED')[1]); // Retrieve passenger price
            var updatedPrice = basePrice;

            if (transportOption === '1') { // Yes option selected
                $('#transportInput').show(); // Show the transport input fields
                updatedPrice = passengerPrice + (parseFloat($('#transportPassengers').val()) * transportPrice);
            } else {
                $('#transportInput').hide(); // Hide the transport input fields
            }

            $('#updatedPrice').html('Updated Price: AED' + updatedPrice.toFixed(2));
        });

        $('#passengerCount').on('input', function() {
            var passengerCount = parseInt($(this).val());
            var basePrice = parseFloat($('#basePrice').val());
            var passengerPrice = basePrice * passengerCount;

            $('#passengerPrice').html('Passenger Price: AED' + passengerPrice.toFixed(2));

            // Recalculate the updated price based on passenger and transport price
            var transportOption = $('#transportOption').val();
            var transportPrice = parseFloat($('#transportPrice').val());
            var updatedPrice = passengerPrice;

            if (transportOption === '1') { // Yes option selected
                updatedPrice = passengerPrice + (parseFloat($('#transportPassengers').val()) * transportPrice);
            }

            $('#updatedPrice').html('Total Price: AED' + updatedPrice.toFixed(2));
        });

        $('#transportPassengers').on('input', function() {
            var transportOption = $('#transportOption').val();
            var transportPrice = parseFloat($('#transportPrice').val());
            var passengerPrice = parseFloat($('#passengerPrice').text().split('AED')[1]); // Retrieve passenger price
            var updatedPrice = passengerPrice;

            if (transportOption === '1') { // Yes option selected
                updatedPrice = passengerPrice + (parseFloat($(this).val()) * transportPrice);
            }

            $('#updatedPrice').html('Total Price: AED' + updatedPrice.toFixed(2));
        });
    });
</script>

   
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Update hidden inputs when passenger and transport options change
        $("#passengerCount, #transportOption, #transportPassengers, #updatedPrice").on("change keyup", function() {
            $("#hiddenPassengerCount").val($("#passengerCount").val());
            $("#hiddenTransportOption").val($("#transportOption").val());
            $("#hiddenTransportPassengers").val($("#transportPassengers").val());
            $("#hiddenTotalPrice").val($("#updatedPrice").text().replace("Total Price: ", ""));
        });
    });
</script>
  

  </body>
</html>

















 