@section('title', 'History')
@include('layouts.navbar')

    <div class="history">
        <div class="recent"><img src="img/recent.svg" alt=""><h5>Recently Search</h5></div>
        <div class="grid">
            @foreach ($recent_image as $image)
            <div class="card">
                <div class="img-holder"><img src="{{ asset("/storage/images/" . $image->image_path) }}" alt=""></div>
                <div class="desc"><div class="left"><img src="img/clock1.svg" alt=""><p>{{ $image->uploaded_at->diffForHumans() }}</p></div>
                    <div class="right"><a href="{{ route('result', $image->id) }}" class="button">{{$image->meats->name}}</a></div>
                </div>
            </div>
            @endforeach

            {{-- <div class="card">
                <div class="img-holder"><img src="img/pork1.png" alt=""></div>
                <div class="desc"><div class="left"><p>2 hours ago</p> </div>
                    <div class="right"><div class="button">Meat</div></div>
                </div>
            </div>

            <div class="card">
                <div class="img-holder"><img src="img/pork1.png" alt=""></div>
                <div class="desc"><div class="left"><p>2 hours ago</p> </div>
                    <div class="right"><div class="button">Meat</div></div>
                </div>
            </div>
            <div class="card">
                <div class="img-holder"><img src="img/pork1.png" alt=""></div>
                <div class="desc"><div class="left"><p>2 hours ago</p></div>
                    <div class="right"><div class="button">Meat</div></div>
                </div>
            </div>

            <div class="card">
                <div class="img-holder"><img src="img/pork1.png" alt=""></div>
                <div class="desc"><div class="left"><p>2 hours ago</p> </div>
                    <div class="right"><div class="button">Meat</div></div>
                </div>
            </div>

            <div class="card">
                <div class="img-holder"><img src="img/pork1.png" alt=""></div>
                <div class="desc"><div class="left"><p>2 hours ago</p> </div>
                    <div class="right"><div class="button">Meat</div></div>
                </div>
            </div> --}}
        </div>
    </div>

@include('layouts.footer')
