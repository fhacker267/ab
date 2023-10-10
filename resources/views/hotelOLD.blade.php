<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adventure - Free Bootstrap 4 Template by Colorlib</title>
    @include('header')

    <!-- Include the navigation component -->
    @include('navigation')
    <!-- END nav -->
</head>
<body>

<main>
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Hotel</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach ($hotels as $hotel)
                    <div class="col-sm-12 col-md-6 col-lg-4 ftco-animate">
                        <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('storage/' . $hotel->image_path) }}');">
    <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-link"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3>{{ $hotel->name }}</h3>
                                    </div>
                                    <div class="two">
                                        <span class="price per-price">AED{{ $hotel->price }}<br><small>/night</small></span>
                                    </div>
                                </div>
                                <p>{{ $hotel->description }}</p>
                                <hr>
                                <form action="{{ route('show_hotels', ['id' => $hotel->id]) }}" method="get">
    @csrf
    <input type="hidden" name="record_id" value="{{ $hotel->id }}">
    <input type="submit" value="Book Online" class="btn btn-primary">
</form>
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
