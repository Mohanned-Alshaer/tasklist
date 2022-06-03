@extends('layouts.ad')
@section('content')
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Socials And Address</h1>
          {{-- <div class="btn-group mr-2">
                <a href="/" class="btn btn-outline-secondary">All Mobiles</a>
            </div> --}}
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        
        <div class="card-body">
            <form method = "POST" action="/pages/SocialsAndAddress" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Email:</label>
                  <input type="text" class="form-control" name="email_input" />
                </div>
                <div class="form-group">
                  <label for="name">Phone:</label>
                  <input type="text" class="form-control" name="phone_input" />
                </div>
                <div class="form-group">
                  <label for="name">Country:</label>
                  <input type="text" class="form-control" name="country_input" />
                </div>
                <div class="form-group">
                    <label for="price">City:</label>
                    <input type="text" class="form-control" name="city_input" />
                </div>
                <div class="form-group">
                    <label for="quantity">Street:</label>
                    <input type="text" class="form-control" name="street_input" />
                </div>
                <div class="form-group">
                    <label for="quantity">Area:</label>
                    <input type="text" class="form-control" name="area_input" />
                </div>
                <div class="form-group">
                    <label for="quantity">Facebook Link:</label>
                    <input type="text" class="form-control" name="facebook_input" />
                </div>
                <div class="form-group">
                    <label for="quantity">Instagram Link:</label>
                    <input type="text" class="form-control" name="instagram_input" />
                </div>
                <div class="form-group">
                    <label for="quantity">Twiter Link:</label>
                    <input type="text" class="form-control" name="twiter_input" />
                </div>
                <div class="form-group">
                    <label for="quantity">Whatsapp Link:</label>
                    <input type="text" class="form-control" name="whatsapp_input" />
                </div>
                <button type="submit" class="btn btn-primary">Add Information</button>
            </form>
        </div>
    </div>
</main>
@endsection