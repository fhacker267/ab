<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('images/back.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
  <img src="{{asset('admin/assets/img/logo1.png')}}" class="navbar-brand-img" alt="main_logo" style="width: 220px; height: 220px !important;">
  </div>
  <div class="middle">
    <h1>THIS SERVICE IS CURRENTLY UNAVAILABLE WILL BE BACK SOON</h1>
    <hr>
    <!-- <p>35 days left</p> -->
  </div>
  <div class="bottomleft">
    <!-- <p>Some text</p> -->
  </div>
</div>

</body>
</html>
