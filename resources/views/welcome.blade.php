@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">Shop Name</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
            <a href="#" class="list-group-item">Category 4</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset('images/la.jpg') }}" alt="Los Angeles" style="width:100%;">
                    </div>

                      <div class="item">
                        <img src="{{ asset('images/chicago.jpg') }}" alt="Chicago" style="width:100%;">
                      </div>
            
                      <div class="item">
                        <img src="{{ asset('images/ny.jpg') }}" alt="New york" style="width:100%;">
                      </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
