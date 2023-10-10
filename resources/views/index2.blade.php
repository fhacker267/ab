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
              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Flight</a>

              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a>

              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Visa</a>
              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Packages</a>
            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            
            <div class="tab-content p-4 px-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
			  <form action=" " class="search-destination" method="POST">
    
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
					                <input type="submit" value="Search" class="form-control btn btn-primary">
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
								  <input type="submit" value="Search" class="form-control btn btn-primary">
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
									  <input type="submit" value="Search" class="form-control btn btn-primary">
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

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
              	<form action="#" class="search-destination">
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
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div>
			  <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-performance-tab">
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
			  <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-performance-tab">
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
              <!-- <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-effect-tab">
              	<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Where</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control" placeholder="Where">
					              </div>
				              </div>
              			</div>
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
              			<div class="col-md align-self-end">
              				<div class="form-group">
              					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div> -->
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

    <!-- <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">See our latest vacation ideas</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="destination-entry img" style="background-image: url(images/destination-1.jpg);">
        			<div class="text text-center">
        				<h3>Beachfront Scape</h3>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="destination-entry img" style="background-image: url(images/destination-2-1.jpg);">
        			<div class="text text-center">
        				<h3>Group Holidays</h3>

        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="destination-entry img" style="background-image: url(images/destination-3.jpg);">
        			<div class="text text-center">
        				<h3>City Breaks</h3>
        			</div>
        		</a>
        	</div>
        </div>
    	</div>
    </section> -->
		
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


    <!-- <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4"><strong>Popular</strong> Hotels</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-1.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">New Orleans, Hotel</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price per-price">$40<br><small>/night</small></span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
    							<span class="ml-auto"><a href="#">Book Now</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination d-md-flex flex-column-reverse">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-2.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">New Orleans, Hotel</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price per-price">$40<br><small>/night</small></span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
    							<span class="ml-auto"><a href="#">Book Now</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-3.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">New Orleans, Hotel</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price per-price">$40<br><small>/night</small></span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
    							<span class="ml-auto"><a href="#">Book Now</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination d-md-flex flex-column-reverse">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-4.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">New Orleans, Hotel</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price per-price">$40<br><small>/night</small></span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
    							<span class="ml-auto"><a href="#">Book Now</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-5.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">New Orleans, Hotel</a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price per-price">$40<br><small>/night</small></span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
    							<span class="ml-auto"><a href="#">Book Now</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section> -->

    <!-- <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Recommended Restaurants</h2>
          </div>
        </div>    		
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-1.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<h3><a href="#">Luxury Restaurant</a></h3>
    						<p class="rate">
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star-o"></i>
    							<span>8 Rating</span>
    						</p>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="destination d-md-flex flex-column-reverse">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-2.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<h3><a href="#">Luxury Restaurant</a></h3>
    						<p class="rate">
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star-o"></i>
    							<span>8 Rating</span>
    						</p>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Book Now</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-3.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<h3><a href="#">Luxury Restaurant</a></h3>
    						<p class="rate">
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star-o"></i>
    							<span>8 Rating</span>
    						</p>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Book Now</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="destination d-md-flex flex-column-reverse">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-4.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<h3><a href="#">Luxury Restaurant</a></h3>
    						<p class="rate">
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star-o"></i>
    							<span>8 Rating</span>
    						</p>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Book Now</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section> -->

    
		
		<!-- <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    

</main>
@include('footer')
    
  </body>
</html>