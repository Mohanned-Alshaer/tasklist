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
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Catagory</h1>
            <div class="btn-group mr-2">
                <a href="/home" class="btn btn-outline-secondary">All Catagories</a>
            </div>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="card-body">
            <form method="POST" action="/pages/allCatagories/{{$product->id}}" enctype="multipart/form-data">
                @csrf
                @method("put")
                <div class="form-group">
                    <label for="name">Catagory:</label>
                    <input type="text" class="form-control" name="catagory_input" value="{{$product->Catagory}}" />
                </div>
                <button type="submit" class="btn btn-info">Edit</button>
            </form>
        </div>
    </div>
</main>
@endsection