@extends('layouts.ad')
@section('content')
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>

    {{-- <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('dist/font-awesome/css/font-awesome.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/adminlte/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="{{asset('dist/adminlte/css/bootstrap-rtl.min.css')}}">
    <!-- template rtl version -->
    <link rel="stylesheet" href="{{asset('dist/adminlte/css/custom-style.css')}}"> --}}

</head>
<style>
    .delete_Edit {
        display: flex;
    }
    .edit,
    .delete {
        margin-right: 5px;
    }
    img {
        width: 100px;
    }
</style>
<body class="hold-transition sidebar-mini">
    <!-- ./wrapper -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Redmi</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="/pages/add" class="btn btn-outline-secondary">Add New Mobile</a>
                </div>
        </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <table class="table table-bordered">
              <tbody>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Image</th>
                      <th width="280px">Actions</th>
                  </tr>
                  @foreach ($products as $product)
                  <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->Name}}</td>
                    <td>{{$product->Price}} $</td>
                    <td>{{$product->Quantity}}</td>
                    <td><img src='{{asset("images/$product->image")}}' alt="Image"></td>
                    <td class="delete_Edit">
                        <form action="/pages/edit/{{$product->id}}" method="POST">
                            @csrf
                            <!-- @method('edit') -->
                            <button type="submit" class="btn btn-info edit">
                                <i class="fa fa-btn fa-edit edit"></i>Edit
                            </button>
                        </form>               
                        <form action="/pages/destroy/{{$product->id}}" method="POST">
                            @csrf
                            <!-- @method('Delete') -->
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-btn fa-trash delete"></i>Delete
                            </button>
                        </form>
                    </td>
                    @endforeach
                  </tr>
              </tbody>
            </table>
        </div>
    </main>
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('dist/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('dist/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/adminlte/js/adminlte.min.js')}}"></script>
</body>
@endsection