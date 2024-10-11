@extends('layout')

@section('title', 'Quicklly')
@section('description', 'Quicklly search page')
@section('keywords', 'lorem ipsum lorem ipsum')

@section('content')  

<div class="container mt-4">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h1 class="h4">Our Online Services</h1>
        </div>
        <div class="col-md-6">
            <form action="#" class="d-flex">
                <input class="form-control me-2 search-input" id="searchinput" type="text" placeholder="Search for pujas..." />
                <button class="btn search-btn" id="searchbtn" type="button"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-3 col-6 mb-3">
            <div class="d-flex align-items-center active">
                <img src="{{asset('images/icons/puja-icon.jpeg')}}" alt="Online Puja" class="service-icon rounded-2 me-2">
                <span class="fw-bold">Online Puja</span>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="d-flex align-items-center">
                <img src="{{asset('images/icons/astro-icon.jpeg')}}" alt="Astrology" class="service-icon rounded-2 me-2">
                <span class="fw-bold">Astrology</span>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-12">
            <h2 class="h5 mb-3">Explore Pujas By Category</h2>
            <div class="d-flex flex-wrap"> 
                <div class="category-item clickable active" id="" >
                    <img src="{{asset('images/icons.jpeg')}}" alt="All" class="category-icon rounded-circle">
                    <span>All</span>
                </div>

                @foreach ($allCategories as $item)
                <div class="category-item clickable" id="{{$item->id}}">
                    <img src="{{asset('images/icons.jpeg')}}" alt="{{$item->name}}" class="category-icon rounded-circle">
                    <span>{{ucwords($item->name)}}</span>
                </div>
                @endforeach 
                <!-- Add more category icons here -->
            </div>
            <a href="#" class="text-decoration-none text-danger">View All <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
    
    <div class="row" id="ins-search-data">
        @foreach ($pujas as $item)
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card puja-card">
                <img src="{{asset($item->image)}}" class="card-img-top" alt="{{ucwords($item->name)}}">
                <div class="card-body">
                    <h5 class="card-title">{{ucwords($item->name)}}</h5>
                    <p class="card-text">${{$item->price_range_start}} - ${{$item->price_range_end}}</p>
                    <a href="#" class="btn btn-book-now w-100">Book Now</a>
                </div>
            </div>
        </div>
        @endforeach 
    </div>
</div>

@endsection 

@section('scripts') 
<script src="{{asset('js/jquery.min.js')}}"></script> 
<script src="{{asset('js/dashboard.js')}}"></script> 
@endsection 