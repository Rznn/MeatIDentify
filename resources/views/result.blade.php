@include('layouts.navbar')

  <div class="result-page">
    <div class="meat-result">
      <div class="result-content">
        <h3 class="title">Here’s your Meat Result!</h3>
        <p class="desc">MeatIDentify has successfully identified the image you uploaded with an accuracy rate as</p>
        <div class="result-detail">
          <div class="result-item meat-type">Horse Meat</div>
          <div class="result-item accuracy">90%</div>
        </div>
        <div class="button-section">
          <button>
            <img src="{{ asset('img/search-icon.png') }}"> 
            <a href="">Nutrition</a>
          </button>
          <button>
            <img src="{{ asset('img/gallery-icon.png') }}"> 
            <a href="">Try Another</a>
          </button>
        </div>
      </div>
      <div class="result-media">
        <div class="media-image">
          <div class="container-g1">
            <img src="{{ asset('img/r-input-horse.jpg') }}" alt="Gambar 1" class="gambar1">
          </div>
          <div class="container-g2">
            <img src="{{ asset('img/r-horse.jpg') }}" alt="Gambar 2" class="gambar2">
          </div>
        </div>
      </div>
    </div>
    <div class="nutrition">
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
    <div class="try-another">
      <h3 class="title">Search your food by MeatIDentify.</h3>
      <button class="btn-try-another" href="#">
        <p>Try Another</p>
        <img src="{{ asset('img/arrow.svg') }}"> 
      </button>
    </div>

  </div>

@include('layouts.footer')