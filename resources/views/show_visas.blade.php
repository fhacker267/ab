
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Adventure - Free Bootstrap 4 Template by Colorlib</title>
    @include('header')

<!-- Include the navigation component -->
@include('navigation')
    <!-- END nav -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  




<main>



<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Places</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Visas Details</h1>
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
          			 
                   
    <img src="{{ asset('storage/' . $visas->image_path) }}" alt="" style="max-width: 600px; ">
</div>

                        </div>  
          		</div>
          		<div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
          			<span>Our Best country &amp; visas</span>
                      <h2>{{ $visas->country }}</h2>
                      <span class="price">
                        <del>AED250</del> AED{{ $visas->price }}
</span>
    						 
                      <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
    <span>Number of Person </span>
    <div class="form-group">  <input type="number" id="passengerCount" min="1" class="form-control"  style="max-width: 200px;"placeholder=" Enter Number of Person"  value="1">
	<br>
	<br>
    <span  style =" color :red"id="updatedPrice">Total Price: AED{{ $visas->price }}</span>
    <!-- Rest of your content -->
</div>
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
        <h5 class="modal-title" id="contactModalLabel"><h2 style="margin-left: 10px;">{{ $visas->country }}</h2></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/submit-visa-booking') }}" method="POST">
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
          <input type="hidden" name="passengerCount" id="hiddenPassengerCount" value="1">
          <input type="hidden" name="totalPrice" id="hiddenTotalPrice">
          <input type="hidden" value="{{ $visas->id }}" name="visaId">
          <input type="hidden" name="country" value="{{ $visas->country }}">
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
    document.addEventListener("DOMContentLoaded", function() {
        // Get references to the elements
        const bookOnlineButton = document.getElementById("bookOnlineButton");
        const contactFormSection = document.getElementById("contactFormSection");

        // Add a click event listener to the "Book Online" button
        bookOnlineButton.addEventListener("click", function() {
            // Toggle the visibility of the contact form section
            contactFormSection.style.display = "block";
        });
    });
</script>  



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
      const basePrice = {{ $visas->price }};

      const passengerCount = parseInt(document.getElementById("passengerCount").value);


        const updatedPrice = basePrice * passengerCount;
        document.getElementById("updatedPrice").textContent = `Total Price: AED${updatedPrice}`;
        $("#hiddenTotalPrice").val($("#updatedPrice").text().replace("Total Price: ", ""));

        // Update hidden inputs when passenger and transport options change
        $("#passengerCount, #updatedPrice").on("change keyup", function() {
          count = $("#passengerCount").val();
            $("#hiddenPassengerCount").val(count);
           
            $("#hiddenTotalPrice").val($("#updatedPrice").text().replace("Total Price: ", ""));
        });
    });
</script> 






<script>
    const basePrice = {{ $visas->price }};
    
    // Function to update the displayed price based on selected passenger count
    function updatePrice() {
        const passengerCount = parseInt(document.getElementById("passengerCount").value);
        const updatedPrice = basePrice * passengerCount;
        document.getElementById("updatedPrice").textContent = `Total Price: AED${updatedPrice}`;
    }
    
    // Attach event listener to passenger input element
    document.getElementById("passengerCount").addEventListener("input", updatePrice);
</script>

  </body>
</html>

















 