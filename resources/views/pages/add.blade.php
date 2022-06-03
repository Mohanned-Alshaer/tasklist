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
        <h1 class="h2">Add Mobile</h1>
          <div class="btn-group mr-2">
                <a href="/" class="btn btn-outline-secondary">All Mobiles</a>
            </div>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        
        <div class="card-body">
            <form method = "POST" action="/" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name">Mobile Name:</label>
                  <input type="text" class="form-control" name="product_name" />
                </div>
                <div class="form-group">
                  <label for="price">Mobile Type :</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="category">
                    @foreach($catagories as $catag)
                    <option value="{{$catag->Catagory}}">{{$catag->Catagory}}</option>
                    @endforeach
                  </select>                    
                </div>
                <div class="form-group">
                    <label for="price">Mobile Price :</label>
                    <input type="text" class="form-control" name="product_price" />
                </div>
                <div class="form-group">
                    <label for="quantity">Mobile Quantity:</label>
                    <input type="text" class="form-control" name="product_qty" />
                </div>
                <div class="form-group">
                  <label for="quantity">Image: </label>
                  <input type="file" class="form-control" name="product_img" />
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</main>
@endsection