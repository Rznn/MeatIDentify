@extends('admin.layout.sidebar')
@section('title', 'Admin Dashboard')
@section('content')

    <div class="dashboard">
        <div class="grid1">
            <div class="detail">
                <h3>Total Uploaded</h3>
                <p>{{ $totalImages }}</p>
            </div>
            <div class="detail">
                <h3>Average Rating</h3>
                <p>{{ $averageRating }}</p>
            </div>
        </div>

        <div class="history">
            <div class="recent"><img src="{{asset('img/recent.svg')}}" alt=""><h5>Recently Uploaded</h5></div>
            <div class="grid">
                @foreach ($recentImages as $image)
                <div class="card">
                    <div class="img-holder"><img src="{{ asset('storage/images/' . $image->image_path) }}" alt="Image"></div>
                    <div class="desc"><div class="left"><img src="{{asset('img/clock1.svg')}}" alt=""><p>{{ $image->uploaded_at->diffForHumans() }}</p></div>
                        <div class="right"><a href="#" class="button">{{ $image->meats->name }}</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
