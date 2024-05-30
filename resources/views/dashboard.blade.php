@section('title', 'Home')
@include('layouts.navbar')

<link href="{{ asset('css/dashstyle.css') }}" rel="stylesheet">
<div class="main">
    <div class="title">
        <img src="img/title.svg" alt="">
        <h2>Get detail informations by uploading meat image.</h2>
        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
            @csrf
            {{-- <input type="hidden" name="user_id" value="{{ Auth::id() }}"> --}}
            {{-- <input type="hidden" name="meat_id" value="2"> --}}
            <label for="file-upload" class="custom-file-upload">
                Upload Image
            </label>
            <input id="file-upload" type="file" name="image" onchange="uploadImage()"/>
        </form>
    </div>
</div>

@if ($has_images)
<div class="history">
    <div class="recent">
        <img src="img/recent.svg" alt="">
        <h3>Recently Search</h3>
    </div>
    <div class="grid">
        @foreach ($recent_image as $image)
        <div class="card">
            <div class="img-holder">
                <img src="{{ asset("/storage/images/" . $image->image_path) }}" alt="">
            </div>
            <div class="desc">
                <div class="left">
                    <img src="img/clock1.svg" alt="">
                    <p>{{ $image->uploaded_at->diffForHumans() }}</p>
                </div>
                <div class="right">
                    <a class="button" href="{{ route('result', $image->id) }}">
                        {{$image->meats->name}}
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif

<div class="how-to">
<h2>How MeatIDentify Works</h2>
<div class="grid"><div class="card">
<div class="img-holder"><img src="img/r-meat1.png" alt=""></div>
<div class="desc"><h3>Identify meat with an image</h3> <p>Instantly identify plants with AI: upload a photo, and get accurate results within seconds.</p>

</div>
</div>
<div class="card">
<div class="img-holder"><img src="img/r-meat3.png" alt=""></div>
<div class="desc"><h3>Recognize the meat category</h3> <p>Our AI system is trained to recognize various types of meat, from beef, pork, or horse meat.</p>

</div>
</div>
<div class="card">
<div class="img-holder"><img src="img/meats-many.webp" alt=""></div>
<div class="desc"><h3>Get the nutritions informations</h3> <p>MeatIDentify provides detailed nutritional information. From protein content to fat percentages and number of calories.</p>

</div>
</div> </div>
</div>

<script>
    function uploadImage() {
        document.getElementById('uploadForm').submit();
    }
</script>
@if ($errors->any())
<script>
    var errorMessage = @json($errors->all());
    alert(errorMessage.join('\n'));
</script>
@endif
@if (session()->has('alert'))
<script>
    alert('{{ session('alert') }}');
</script>
@endif
@include('layouts.footer')
