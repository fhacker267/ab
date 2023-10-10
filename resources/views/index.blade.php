<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Azeem Travels & Tours</title>
    @include('header')
	 
<!-- Include the navigation component -->
@include('navigation')
    <!-- END nav -->
    <main>
	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discover <br>A new Place</h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
                </div>
        </div>
      </div>
    </div>

	<section class="ftco-section justify-content-end ftco-search">
        <div class="container-wrap ml-auto">
            <div class="row no-gutters">
                <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <!-- Reordered tabs -->
                        <a class="nav-link active" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="true">Visa</a>
                        <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Packages</a>
                        <a class="nav-link " id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="false">Flight</a>
                        <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a>
                    </div>
                </div>
                <div class="col-md-12 tab-wrap">
                    <div class="tab-content p-4 px-5" id="v-pills-tabContent">
                        <!-- Tab content for Visa -->
                        <div class="tab-pane fade show active" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
						<div class="row justify-content-center">
				  <div class="radio-inline p-3">
					<input class="form-check-input" type="radio" name="trip" id="visa-simple" onclick="showVisaForm('visaForm');" value="Visa"  checked>
					<label class="form-check-label" for="visa-simple">Visa</label>
				  </div>
				  <div class="radio-inline p-3">
					<input class="form-check-input" type="radio" name="trip" id="argent-visa" onclick="showVisaForm('argentVisaForm');" value="Argent">
					<label class="form-check-label" for="argent-visa">Urgent Visa</label>
				  </div>
				</div>
			  
				<div id="visaForm" class="form1"  >
				  <!-- Your "Visa" form elements go here -->
				  <form action="#" class="search-destination">
					<div class="row">
						<div class="col-md align-items-end">
							<div class="form-group">
								<label for="#">Country</label>
								<div class="form-field">
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">America</option>
												<option value="">UK</option>
												<option value="">Germany</option>
												<option value="">Japan</option>
												<option value="">China</option>
											</select>
										</div>
								</div>
							</div>
						</div>
					  <div class="col-md align-items-end">
						<div class="form-group">
						  <label for="#">Date To</label>
						  <div class="form-field">
							<div class="icon"><span class="icon-map-marker"></span></div>
							<input type="text" class="form-control checkin_date" placeholder="Date To">
						  </div>
						</div>
					  </div>
					  <div class="col-md align-items-end">
						<div class="form-group">
						  <label for="#">Date Till</label>
						  <div class="form-field">
							<div class="icon"><span class="icon-map-marker"></span></div>
							<input type="text" class="form-control checkin_date" placeholder="Date Till">
						  </div>
						</div>
					  </div>
					   
					  <div class="col-md align-self-end">
						<div class="form-group">
						  <div class="form-field">
							<input type="submit" value="Search" class="form-control btn btn-primary">
						  </div>
						</div>
					  </div>
					</div>
				  </form>
				</div>
			  
				<div id="argentVisaForm" class="form1" style="display:none;">
				  <!-- Your "Argent Visa Booking" form elements go here -->
				  <form action="#" class="search-destination">
					<div class="row">
						<div class="col-md align-items-end">
							<div class="form-group">
								<label for="#">Country</label>
								<div class="form-field">
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">America</option>
												<option value="">UK</option>
												<option value="">Germany</option>
												<option value="">Japan</option>
												<option value="">China</option>
											</select>
										</div>
								</div>
							</div>
						</div>
					  <div class="col-md align-items-end">
						<div class="form-group">
						  <label for="#">Date To</label>
						  <div class="form-field">
							<div class="icon"><span class="icon-map-marker"></span></div>
							<input type="text" class="form-control checkin_date" placeholder="Date To">
						  </div>
						</div>
					  </div>
					  <div class="col-md align-self-end">
						<div class="form-group">
						  <div class="form-field">
							<input type="submit" value="Search" class="form-control btn btn-primary">
						  </div>
						</div>
					  </div>
					</div>
				  </form>
				</div>
			  </div>
                        <!-- Tab content for Packages -->
                        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
						<form action="#" class="search-destination">
				  <div class="row">
					<div class="col-md-8 align-items-end">
					  <div class="form-group">
						<label for="#">Search</label>
						<div class="form-field">
						  <div class="icon"><span class="icon-search"></span></div>
						  <input type="text" class="form-control" placeholder="Enter your search query">
						</div>
					  </div>
					</div>
					<div class="col-md-4 align-self-end">
					  <div class="form-group">
						<div class="form-field">
						  <input type="submit" value="Search" class="form-control btn btn-primary">
						</div>
					  </div>
					</div>
				  </div>
				</form>
			  </div>
                        <!-- Tab content for Flight (remains unchanged) -->
                        <div class="tab-pane fade " id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
						<form action=" " class="search-destination" method="#">
    
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<label class="radio-inline p-3">
				<input type="radio" name="optradio" onclick="showForm('onewayForm');" checked> One Way
			  </label>
			  <label class="radio-inline p-3">
				<input type="radio" name="optradio" onclick="showForm('roundtripForm');"> Round Trip
			  </label>
			  <label class="radio-inline p-3">
				<input type="radio" name="optradio" onclick="showForm('multiwayForm');"> Multi Way
			  </label>
		</div>
		<div class="col-md-4">
				
		</div>
	</div>
	  <div class="row one-way form" id="onewayForm">
		  <div class="col-md align-items-end">
			  <div class="form-group">
				  <label for="#">Flying From</label>
				  <div class="form-field">
					  <div class="icon"><span class="icon-my_location"></span></div>
					<input type="text" class="form-control" placeholder="From">
				  </div>
			  </div>
		  </div>
		  <div class="col-md align-items-end">
			  <div class="form-group">
				  <label for="#">To Destination</label>
				  <div class="form-field">
					  <div class="icon"><span class="icon-map-marker"></span></div>
					<input type="text" class="form-control" placeholder="Where">
				  </div>
			  </div>
		  </div>
		  <div class="col-md align-items-end">
			  <div class="form-group">
				  <label for="#">Departure Date</label>
				  <div class="form-field">
					  <div class="icon"><span class="icon-map-marker"></span></div>
					<input type="text" class="form-control checkin_date" placeholder="Check In">
				  </div>
			  </div>
		  </div>
		   
		  <div class="col-md align-items-end">
			  <div class="form-group">
				  <label for="#">Passengers</label>
				  <div class="form-field">
					  <div class="select-wrap">
				  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
				  <select name="" id="" class="form-control">
					  <option value="">1</option>
					<option value="">2</option>
					<option value="">3</option>
					<option value="">4</option>
					<option value="">5</option>
				  </select>
				</div>
				  </div>
			  </div>
		  </div>
		  <div class="col-md align-self-end">
			  <div class="form-group">
				  <div class="form-field">
					<!-- <input type="submit" value="Search" class="form-control btn btn-primary"> -->
					<input type="submit" value="Search" class="form-control btn btn-primary" id="searchBtn">
					 
				  </div>
			  </div>
		  </div>
	  </div>
	<div class="row round-trip form " id="roundtripForm" style="display: none;">
		<div class="col-md align-items-end">
			<div class="form-group">
				<label for="#">Flying From</label>
				<div class="form-field">
					<div class="icon"><span class="icon-my_location"></span></div>
				  <input type="text" class="form-control" placeholder="From">
				</div>
			</div>
		</div>
		<div class="col-md align-items-end">
			<div class="form-group">
				<label for="#">To Destination</label>
				<div class="form-field">
					<div class="icon"><span class="icon-map-marker"></span></div>
				  <input type="text" class="form-control" placeholder="Where">
				</div>
			</div>
		</div>
		<div class="col-md align-items-end">
			<div class="form-group">
				<label for="#">Departure Date</label>
				<div class="form-field">
					<div class="icon"><span class="icon-map-marker"></span></div>
				  <input type="text" class="form-control checkin_date" placeholder="Check In">
				</div>
			</div>
		</div>
		<div class="col-md align-items-end">
			<div class="form-group">
				<label for="#">Return Date</label>
				<div class="form-field">
					<div class="icon"><span class="icon-map-marker"></span></div>
				  <input type="text" class="form-control checkout_date" placeholder="From">
				</div>
			</div>
		</div>
		<div class="col-md align-items-end">
			<div class="form-group">
				<label for="#">Passengers</label>
				<div class="form-field">
					<div class="select-wrap">
				<div class="icon"><span class="ion-ios-arrow-down"></span></div>
				<select name="" id="" class="form-control">
					<option value="">1</option>
				  <option value="">2</option>
				  <option value="">3</option>
				  <option value="">4</option>
				  <option value="">5</option>
				</select>
			  </div>
				</div>
			</div>
		</div>
		<div class="col-md align-self-end">
			<div class="form-group">
				<div class="form-field">
				<input type="button" value="Search" class="form-control btn btn-primary" id="searchBtn3">
				</div>
			</div>
		</div>
	</div>
	<div class="form multi-way form" id="multiwayForm"  style="display: none;">
		<div class="row" >
			<div class="col-md align-items-end">
				<div class="form-group">
					<label for="#">Flying From</label>
					<div class="form-field">
						<div class="icon"><span class="icon-my_location"></span></div>
					  <input type="text" class="form-control" placeholder="Flying From">
					</div>
				</div>
			</div>
			<div class="col-md align-items-end">
				<div class="form-group">
					<label for="#">To Destination</label>
					<div class="form-field">
						<div class="icon"><span class="icon-map-marker"></span></div>
					  <input type="text" class="form-control" placeholder="To Destination">
					</div>
				</div>
			</div>
			<div class="col-md align-items-end">
				<div class="form-group">
					<label for="#">Departure Date</label>
					<div class="form-field">
						<div class="icon"><span class="icon-map-marker"></span></div>
					  <input type="text" class="form-control checkin_date" placeholder="Departure Date">
					</div>
				</div>
			</div>
			<div class="col-md align-items-end">
				<div class="form-group">
					<label for="#">Check Out</label>
					<div class="form-field">
						<div class="icon"><span class="icon-map-marker"></span></div>
					  <input type="text" class="form-control checkout_date" placeholder="From">
					</div>
				</div>
			</div>
			<div class="col-md align-items-end">
				<div class="form-group">
					<label for="#">Travelers</label>
					<div class="form-field">
						<div class="select-wrap">
					<div class="icon"><span class="ion-ios-arrow-down"></span></div>
					<select name="" id="" class="form-control">
						<option value="">1</option>
					  <option value="">2</option>
					  <option value="">3</option>
					  <option value="">4</option>
					  <option value="">5</option>
					</select>
				  </div>
					</div>
				</div>
			</div>
			<div class="col-md align-self-end">
				<div class="form-group">
					<div class="form-field">
					<input type="button" value="Search" class="form-control btn btn-primary" id="searchBtn4">
					</div>
				</div>
			</div>
		</div>
		<div class="row" >
			<div class="col-md-2 align-items-end">
				<div class="form-group">
					<label for="#">Flying From</label>
					<div class="form-field">
						<div class="icon"><span class="icon-my_location"></span></div>
					  <input type="text" class="form-control" placeholder="Flying From">
					</div>
				</div>
			</div>
			<div class="col-md-2 align-items-end">
				<div class="form-group">
					<label for="#">To Destination</label>
					<div class="form-field">
						<div class="icon"><span class="icon-map-marker"></span></div>
					  <input type="text" class="form-control" placeholder="To Destination">
					</div>
				</div>
			</div>
			<div class="col-md-2 align-items-end">
				<div class="form-group">
					<label for="#">Departure Date</label>
					<div class="form-field">
						<div class="icon"><span class="icon-map-marker"></span></div>
					  <input type="text" class="form-control checkin_date" placeholder="Departure Date">
					</div>
				</div>
			</div>
		</div>
		 
	</div>

  </form>
</div>
                        <!-- Tab content for Hotel (remains unchanged) -->
                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
    <form action="" class="search-destination" method="#" id="searchForm">
        <div class="row">
            <div class="col-md align-items-end">
                <div class="form-group">
                    <label for="#">Check In</label>
                    <div class="form-field">
                        <div class="icon"><span class="icon-map-marker"></span></div>
                        <input type="text" class="form-control checkin_date" placeholder="Check In">
                    </div>
                </div>
            </div>
            <div class="col-md align-items-end">
                <div class="form-group">
                    <label for="#">Check Out</label>
                    <div class="form-field">
                        <div class="icon"><span class="icon-map-marker"></span></div>
                        <input type="text" class="form-control checkout_date" placeholder="From">
                    </div>
                </div>
            </div>
            <div class="col-md align-items-end">
                <div class="form-group">
                    <label for="#">Guest</label>
                    <div class="form-field">
                        <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="" id="" class="form-control">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md align-self-end">
                <div class="form-group">
                    <div class="form-field">
                        <input type="button" value="Search" class="form-control btn btn-primary" id="searchBtn2">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>01</span> Travel</h3>
    					<p>In the heart of Dubai, a charming river named Duden flows gracefully, weaving its way through the cityscape. This waterway is a source of life and vitality, supplying the city with the necessary regelialia, sustaining its natural beauty and providing a serene touch to the bustling metropolis.</p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>02</span> Experience</h3>
    					<p>Dubai, a paradisematic country, is a land of dreams and wonders. Its skyline boasts architectural marvels that reach for the heavens, a testament to human ingenuity and ambition. Amidst the modernity, the river Duden adds a touch of tranquility and harmony to the urban landscape, creating a unique balance of nature and innovation.</p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>03</span> Relax</h3>
    					<p>The river Duden symbolizes the flow of life in Dubai, where people from all walks of life come together, contributing to the city's vibrancy and prosperity. Whether you're admiring the futuristic architecture, indulging in mouthwatering dishes, or simply basking in the city's ambiance, Dubai offers a truly unique and unforgettable experience for every visitor.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
 
	<section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">The Best Travel Agency</h2>
        </div>
        <div>
  				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
  			</div>
    	</div>
    </section>

	<section class="ftco-section services-section bg-light">
		<div class="container">
		  <div class="row d-flex">
			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
			  <div class="media block-6 services d-block">
				<div class="icon"><span class="flaticon-yatch"></span></div>
				<div class="media-body">
				  <h3 class="heading mb-3">Special Activities</h3>
				  <p>A small river named Duden flows by their place and supplies.</p>
				</div>
			  </div>      
			</div>
			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
			  <div class="media block-6 services d-block">
				<div class="icon"><span class="flaticon-around"></span></div>
				<div class="media-body">
				  <h3 class="heading mb-3">Travel Arrangements</h3>
				  <p>A small river named Duden flows by their place and supplies.</p>
				</div>
			  </div>    
			</div>
			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
			  <div class="media block-6 services d-block">
				<div class="icon"><span class="flaticon-compass"></span></div>
				<div class="media-body">
				  <h3 class="heading mb-3">Private Guide</h3>
				  <p>A small river named Duden flows by their place and supplies.</p>
				</div>
			  </div>      
			</div>
			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
			  <div class="media block-6 services d-block">
				<div class="icon"><span class="flaticon-map-of-roads"></span></div>
				<div class="media-body">
				  <h3 class="heading mb-3">Location Manager</h3>
				  <p>A small river named Duden flows by their place and supplies.</p>
				</div>
			  </div>      
			</div>
		  </div>
		</div>
	</section>
    
	<section class="ftco-section">
    <div class="container">
		<center>
	<strong> <h2 class="col-md-4"> Popular Packages</h2> </center></strong>
	<br>
        <div class="row">
            @foreach ($packages as $package)
            <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                <div class="destination">
                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url('{{ asset('storage/' . $package->image_path) }}');">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-link"></span>
                        </div>
                    </a>
					
                    <div class="text p-3 d-flex flex-column">
                        <div class="one">
                            <h3 style="max-width: 300px; overflow-wrap: break-word;">
                                <a href="#">{{ $package->name }}</a>
                            </h3>
                            <h6 style="max-width: 300px; overflow-wrap: break-word;">
                                <a href="#">{{ $package->description }}</a>
                            </h6>
                        </div>
                        <div class="form-group mt-auto">
                            <form action="{{ route('show_packages', ['id' => $package->id]) }}" method="get">
                                @csrf
                                <span class="price">
                                    <del>AED250</del> AED{{ $package->price }}
                                </span>
                                <input type="hidden" name="record_id" value="{{ $package->id }}">
                                <input type="submit" value="Book Online" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="40000">0</strong>
		                <span>Destination Places</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="87000">0</strong>
		                <span>Hotels</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="56400">0</strong>
		                <span>Restaurant</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


    

    

</main>
@include('footer')
<script> 
// Get the search button element
const searchBtn = document.getElementById('searchBtn');

// Add click event listener to the search button
searchBtn.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission
    alert('This Service Is Currently Unavailable Will Back Soon!'); // Display an alert
});

</script>
<script>

// Get the search button element
const searchBtn2 = document.getElementById('searchBtn2');

// Add click event listener to the search button
searchBtn2.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission
    alert('This Service Is Currently Unavailable Will Back Soon!'); // Display an alert
});
</script>
<script>

// Get the search button element
const searchBtn3 = document.getElementById('searchBtn3');

// Add click event listener to the search button
searchBtn3.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission
    alert('This Service Is Currently Unavailable Will Back Soon!'); // Display an alert
});
</script>
<script>

// Get the search button element
const searchBtn4 = document.getElementById('searchBtn4');

// Add click event listener to the search button
searchBtn4.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission
    alert('This Service Is Currently Unavailable Will Back Soon!'); // Display an alert
});
</script>

  </body>
</html>