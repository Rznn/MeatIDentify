@section('title', 'Result')
@include('layouts.navbar')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <div class="result-page">
    <div class="meat-result">
      <div class="result-content">
        <h3 class="title">Here’s your Meat Result!</h3>
        <p class="desc">MeatIDentify has successfully identified the image you uploaded with an accuracy rate as</p>
        <div class="result-detail">
          <div class="result-item meat-type">{{$image->meats->name}}</div>
          <div class="result-item accuracy">{{$image->probability}} %</div>
        </div>
        <div class="button-section">
          <button>
            <img src="{{ asset('img/search-icon.png') }}">
            <a href="#nutrition">Nutrition</a>
          </button>
          <button>
            <img src="{{ asset('img/gallery-icon.png') }}">
            <a href="/dashboard">Try Another</a>
          </button>
        </div>
      </div>
      <div class="result-media">
        <div class="media-image">
          <div class="container-g1">
            <img src="{{ asset('storage/images/' . $image->image_path) }}" alt="Gambar 1" class="gambar1">
          </div>
          <div class="container-g2">
            @if ($image->meat_id == 1)
                <img src="{{ asset('img/r-horse.jpg') }}" alt="Gambar 2" class="gambar2">
            @elseif ($image->meat_id == 2)
                <img src="{{ asset('img/r-meat.jpg') }}" alt="Gambar 2" class="gambar2">
            @else
                <img src="{{ asset('img/r-pork.jpg') }}" alt="Gambar 2" class="gambar2">
            @endif
          </div>
        </div>
      </div>
    </div>
    @if($image->meat_id == 1)
    <div class="nutrition" id="nutrition">
      <div class="nutri-detail">
        <h6 class="sub-title"> MEATIDENTIFY </h6>
        <h3 class="title">Horse Meat</h3>
        <div class="garis-horizontal"></div>
        <p class="desc">In a 3-ounce (85 grams) serving of horse meat provides 149 calories and 5.1 grams of total fat (7% DV), including 1.6 grams of saturated fat (8% DV). It contains 58 milligrams of cholesterol (19% DV) and 24 grams of protein. Sodium content is low at 47 milligrams (2% DV). Horse meat is carb and fiber-free, with minimal calcium (6.8 milligrams or 1% DV) but significant iron (4.3 milligrams or 24% DV) and potassium (322.2 milligrams or 7% DV) content.</p>
      </div>
      <div class="nutri-image">
        <div class="grid-container">
          <div class="grid-item"><img src="{{ asset('img/r-horse1.png') }}" alt="Horse1"></div>
          <div class="grid-item"><img src="{{ asset('img/r-horse2.png') }}" alt="Horse2"></div>
          <div class="grid-item"><img src="{{ asset('img/r-horse3.png') }}" alt="Horse3"></div>
          <div class="grid-item"><img src="{{ asset('img/r-horse4.png') }}" alt="Horse4"></div>
        </div>
      </div>
    </div>
    @elseif($image->meat_id == 2)
    <div class="nutrition" id="nutrition">
        <div class="nutri-image-meat">
          <div class="grid-container">
            <div class="grid-item"><img src="{{ asset('img/r-meat1.png') }}" alt="Meat1"></div>
            <div class="grid-item"><img src="{{ asset('img/r-meat2.png') }}" alt="Meat2"></div>
            <div class="grid-item"><img src="{{ asset('img/r-meat3.png') }}" alt="Meat3"></div>
            <div class="grid-item"><img src="{{ asset('img/r-meat4.png') }}" alt="Meat4"></div>
          </div>
        </div>
        <div class="nutri-detail">
          <h6 class="sub-title"> MEATIDENTIFY </h6>
          <h3 class="title">Meat</h3>
          <div class="garis-horizontal"></div>
          <p class="desc">In a 4-ounce (113 grams) serving of cooked meat, you'll find 256 calories, with 14g of total fat (18% DV), including 4.9g of saturated fat (25% DV), and no trans fat. It also provides 104mg of cholesterol (35% DV), 31g of protein, and minimal amounts of carbohydrates and dietary fiber. Sodium content is 80mg (3% DV). Additionally, the meat contains 1.5g of polyunsaturated fat and 5.6g of monounsaturated fat, with no sugars. Regarding vitamins and minerals, it offers 0.3mcg of Vitamin D (2% DV), 16mg of calcium (1% DV), 1.8mg of iron (10% DV), and 328.9mg of potassium (7% DV).</p>
        </div>
      </div>
    @else
    <div class="nutrition" id="nutrition">
        <div class="nutri-detail">
          <h6 class="sub-title"> MEATIDENTIFY </h6>
          <h3 class="title">Pork</h3>
          <div class="garis-horizontal"></div>
          <p class="desc">In a 3-ounce (85 grams) serving of pork, there are 202 calories, with 12g of total fat (15% DV), including 4.2g of saturated fat (21% DV) and 0.1g of trans fat. It also contains 75mg of cholesterol (25% DV), 22g of protein, and minimal carbohydrates, dietary fiber, and sugars. Sodium content is 48mg (2% DV). Additionally, pork provides 1.3g of polyunsaturated fat and 5.1g of monounsaturated fat. In terms of vitamins and minerals, it offers 0.8mcg of Vitamin D (4% DV), 17mg of calcium (1% DV), 0.9mg of iron (5% DV), and 289.9mg of potassium (6% DV).</p>
        </div>
        <div class="nutri-image">
          <div class="grid-container">
            <div class="grid-item"><img src="{{ asset('img/r-pork1.png') }}" alt="Pork1"></div>
            <div class="grid-item"><img src="{{ asset('img/r-pork2.png') }}" alt="Pork2"></div>
            <div class="grid-item"><img src="{{ asset('img/r-pork3.png') }}" alt="Pork3"></div>
            <div class="grid-item"><img src="{{ asset('img/r-pork4.png') }}" alt="Pork4"></div>
          </div>
        </div>
      </div>
    @endif

    <div class="rating">
        <div class="content">
            @if($review)
                <div class="review">
                    <h3>Your Review</h3>
                    <div class="star-rating">
                        @for($i = 5; $i >= 1; $i--)
                            @if($i <= $review->rate)
                                <i class="bi bi-star-fill" style="color: gold;"></i>
                            @else
                                <i class="bi bi-star-fill" style="color: #ccc;"></i>
                            @endif
                        @endfor
                    </div>
                    <div class="commented">
                        <p>{{ $review->comment }}</p>
                    </div>
                </div>
            @else
                <form action="{{ route('review', ['id' => $image->id]) }}" method="POST">
                    @csrf
                    <h3>How was your experience about this result?</h3>
                    <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5"><i class="bi bi-star-fill"></i></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4"><i class="bi bi-star-fill"></i></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3"><i class="bi bi-star-fill"></i></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2"><i class="bi bi-star-fill"></i></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1"><i class="bi bi-star-fill"></i></label>
                    </div>
                    <div class="comment">
                        <textarea name="comment" id="comment" placeholder="Describe your experience here"></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Submit</button>
                </form>
            @endif
        </div>
    </div>

    <div class="try-another">
      <h3 class="title">Search your food by MeatIDentify.</h3>
      <a class="btn-try-another" href="/dashboard">
        <p>Try Another</p>
        <img src="{{ asset('img/arrow.svg') }}">
      </a>
    </div>
  </div>

@include('layouts.footer')
