<?php
$whatsAppNumber = App\Models\WhatsAppNumber::get()->first();
?>
<a href="https://api.whatsapp.com/send?phone={{ $whatsAppNumber->number }}&text=Hello%20there!%20I%20want%20to%20contact%20you." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
            <circle cx="32" cy="32" r="28" fill="#4285F4"/>
            <path fill="#FFF" d="M... (rest of the SVG code) ... .96c.65-.76 1.21-1.56 1.69-2.4a13.28 13.28 0 0 0 1.8-6.09c.1-.99.05-1.98-.16-2.96z"/>
        </svg> -->
    </i>
</a>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		<a class="navbar-brand" href="index.html">
		<img src="{{asset('admin/assets/img/logo1.png')}}" class="navbar-brand-img" alt="main_logo" style="width: 220px; height: 220px !important;">

</a>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item "><a href="/" class="nav-link">Home</a></li>
	         
	          <li class="nav-item"><a href="visas" class="nav-link">Visas</a></li>

	          <li class="nav-item"><a href="packages" class="nav-link">Packages</a></li>
			  <li class="nav-item"><a href="about" class="nav-link">About</a></li>
			  <li class="nav-item"><a href="hotel" class="nav-link">Hotels</a></li>
	          <li class="nav-item"><a href="flights" class="nav-link">Flights</a></li>
	          <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>