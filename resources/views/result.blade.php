{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
</head>
<body>
    <img src="{{ asset('storage/images/' . $image->image_path) }}" alt="Uploaded Image">
</body>
</html> --}}

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <div class="resultpage-horse">
      <div class="div">
        <div class="div-2">
          <div class="div-2">
            <div class="overlap">
              <img class="div-cuheaderblob" src="img/resultpage_bg1.png" />
              <header class="header">
                <div class="div-cuheader">
                  <div class="overlap-group">
                    <div class="link"></div>
                    <div class="nav">
                      <div class="list">
                        <div class="group">
                          <div class="overlap-2">
                            <div class="item"><div class="link-enterprise"><a href="dashboard">Home</a></div></div>
                            <div class="overlap-group-wrapper">
                              <div class="link-enterprise-wrapper"><div class="link-enterprise"><a href="history">History</a></div></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="div-cunavigation">
                        <a href="{{route('logout')}}">
                        <div class="button-username">
                          <div class="before"></div>
                          <div class="text-wrapper">Username</div>
                          <img class="cu-login-form-form" src="img/home_ikon1.png" />
                        </div>
                        </a>
                      </div>
                    </div>
                    <img class="frame" src="img/namalogo.png" />
                  </div>
                </div>
              </header>
            </div>
          </div>
          <div class="main">
            <div class="div-cuhero">
              <div class="heading-get-more">Here's your Meat Result!</div>
              <p class="p">MeatIDentify has successfully identified the image you uploaded with an accuracy rate as</p>
              <div class="form-button">
                <div class="div-wrapper"><div class="text-wrapper-2">Horse Meat</div></div>
              </div>
              <div class="overlap-wrapper">
                <div class="overlap-3"><div class="text-wrapper-3">90%</div></div>
              </div>
              <div class="frame-2">
                <div class="group-2">
                  <div class="text-wrapper-4"><a href="home.html">Try Another</a></div>
                  <img class="img" src="img/resultpage_ikon1.png" />
                </div>
                <div class="group-3">
                  <div class="text-wrapper-5">Nutrition</div>
                  <img class="img" src="img/resultpage_ikon2.png" />
                </div>
              </div>
            </div>
            <div class="overlap-4">
              <div class="div-cuhero-heromedia">
                <img class="daging-kuda" src="img/resultpage_gmb2.png" />
              </div>
              <img class="helena-lopes" src="img/resultpage_gmb1.png" />
            </div>
          </div>
        </div>
        <div class="frame-3"></div>
        <p class="main-heading">Search your food by MeatIDentify.</p>
        <div class="main-button">
          <div class="overlap-5">
            <img class="SVG" src="img/resultpage_ikon3.png" />
            <div class="before-2"></div>
            <div class="text-wrapper-6">Try Another</div>
            <div class="after"></div>
          </div>
        </div>
        <div class="about">
          <div class="group-4">
            <div class="overlap-6">
              <div class="main-2">
                <div class="footer"></div>
                <div class="overlap-7">
                  <div class="overlap-group-2">
                    <img class="frame-4" src="img/namalogo.png" />
                    <img class="group-5" src="img/landing_connect.png" />
                    <div class="frame-5">
                      <p class="text-wrapper-7"><br />
                        MeatIDentify was dedicated to the classification of meat, where we aim to provide comprehensive
                        information about various types of meat. We are committed to providing accurate and valuable
                        knowledge to our visitors to help them make informed decisions about meat selection and
                        consumption
                      </p>
                      <div class="text-wrapper-8">Android</div>
                      <div class="text-wrapper-9">iPhone</div>
                    </div>
                  </div>
                  <div class="text-wrapper-10">Connect</div>
                  <div class="text-wrapper-11">Download</div>
                </div>
              </div>
              <div class="footer-wrapper">
                <footer class="footer-2">
                  <div class="div-row">
                    <div class="span"><div class="text-wrapper-12">© 2024 MeatIDentify</div></div>
                    <div class="link-2"><div class="text-wrapper-13">Security</div></div>
                    <div class="link-3"><div class="text-wrapper-14">Privacy</div></div>
                    <div class="link-4"></div>
                  </div>
                  <div class="text-wrapper-15">Terms</div>
                </footer>
              </div>
            </div>
          </div>
        </div>
        <div class="nutrition">
          <div class="overlap-8">
            <div class="heading">Horse Meat</div>
            <div class="before-3"></div>
            <div class="m-eatidentify">MEATIDENTIFY</div>
          </div>
          <p class="text-wrapper-16">
            In a 3-ounce (85 grams) serving of horse meat provides 149 calories and 5.1 grams of total fat (7% DV),
            including 1.6 grams of saturated fat (8% DV). It contains 58 milligrams of cholesterol (19% DV) and 24 grams
            of protein. Sodium content is low at 47 milligrams (2% DV). Horse meat is carb and fiber-free, with minimal
            calcium (6.8 milligrams or 1% DV) but significant iron (4.3 milligrams or 24% DV) and potassium (322.2
            milligrams or 7% DV) content.
          </p>
          <div class="overlap-9">
            <div class="after-2"></div>
            <img class="daging-kuda-2" src="img/resultpage_dagingkuda1.png" />
            <img class="daging-kuda-3" src="img/resultpage_dagingkuda3.png" />
            <img class="daging-kuda-4" src="img/resultpage_dagingkuda2.png" />
            <img class="daging-kuda-5" src="img/resultpage_dagingkuda4.png" />
            <div class="daging-kuda-6"></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
