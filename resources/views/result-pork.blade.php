@include('layouts.navbar')

  <div class="result-page">
    <div class="meat-result">
      <div class="result-content">
        <h3 class="title">Here’s your Meat Result!</h3>
        <p class="desc">MeatIDentify has successfully identified the image you uploaded with an accuracy rate as</p>
        <div class="result-detail">
          <div class="result-item meat-type">Pork</div>
          <div class="result-item accuracy">95%</div>
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
            <img src="{{ asset('img/r-input-pork.jpg') }}" alt="Gambar 1" class="gambar1">
          </div>
          <div class="container-g2">
            <img src="{{ asset('img/r-pork.jpg') }}" alt="Gambar 2" class="gambar2">
          </div>
        </div>
      </div>
    </div>
    <div class="nutrition">
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
    <div class="try-another">
      <h3 class="title">Search your food by MeatIDentify.</h3>
      <button class="btn-try-another" href="#">
        <p>Try Another</p>
        <img src="{{ asset('img/arrow.svg') }}"> 
      </button>
    </div>
  </div>

@include('layouts.footer')