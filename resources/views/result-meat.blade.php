@include('layouts.navbar')

  <div class="result-page">
    <div class="meat-result">
      <div class="result-content">
        <h3 class="title">Here’s your Meat Result!</h3>
        <p class="desc">MeatIDentify has successfully identified the image you uploaded with an accuracy rate as</p>
        <div class="result-detail">
          <div class="result-item meat-type">Meat</div>
          <div class="result-item accuracy">92%</div>
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
            <img src="{{ asset('img/r-input-meat.jpg') }}" alt="Gambar 1" class="gambar1">
          </div>
          <div class="container-g2">
            <img src="{{ asset('img/r-meat.jpg') }}" alt="Gambar 2" class="gambar2">
          </div>
        </div>
      </div>
    </div>
    <div class="nutrition">
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
    <div class="try-another">
      <h3 class="title">Search your food by MeatIDentify.</h3>
      <button class="btn-try-another" href="#">
        <p>Try Another</p>
        <img src="{{ asset('img/arrow.svg') }}"> 
      </button>
    </div>

  </div>

@include('layouts.footer')