
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
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Packages</h1>
          </div>
        </div>
      </div>
    </div>
		
    <section class="ftco-section">
    <div class="container">
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
                                <input   type="submit" value="Book Online" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

               
</main>

@include('footer')
    
  </body>
</html>