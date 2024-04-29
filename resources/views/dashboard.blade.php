{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>
        Welcome to Dashboard
    </h1>

    <p>Upload Image</p>

    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <input type="hidden" name="meat_id" value="1">
            <input type="file" name="image" id="image">
        </div>
        <button type="submit">Detect</button>
    </form>

    <a href="{{route('logout')}}"> Sign out </a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#image').on('change', function() {
                $('#uploadForm').submit();
            });
        });
    </script>
</body>
</html> --}}

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashstyle.css" />
  </head>
  <body>
    <div class="pagewrapper">
      <nav>
        <div class="right">
          <div class="logo"><img src="img/logo.png" alt="" /></div>
          <div class="navigation">
            <a href="">Home</a><a href="">History</a>
          </div>
        </div>

        <div class="login"><img src="img/profile.svg" alt=""><a href="{{ route('logout') }}">Username</a></div>
      </nav>
      <div class="main">
        <div class="title">
         <img src="img/title.svg" alt="">
          <h2>Get detail informations by uploading meat image.</h2>
          <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data" id="uploadForm">
          @csrf
          <input type="hidden" name="user_id" value="{{ Auth::id() }}">
          <input type="hidden" name="meat_id" value="1">
          {{-- <div class="upload">
            <button onclick="document.getElementById('getFile').click()">
              <h3>Upload Image</h3>
              <img src="upload-icon.svg" alt="" />
            </button>
            <input type="file" id="getFile" name="image" style="display: none"/>
          </div> --}}
          {{-- <div class="upload"> --}}
            {{-- <h3>Upload Image</h3>
            <input type="file" id="image" name="image" onchange="uploadImage()"/> --}}

            <label for="file-upload" class="custom-file-upload">
                Upload Image
            </label>
            <input id="file-upload" type="file" name="image" onchange="uploadImage()"/>
          {{-- </div> --}}
          </form>

        </div>

        </div>

      </div>
      <div class="history">
        <div class="recent"><img src="img/recent.svg" alt=""><h3>Recently Search</h3></div>
        <div class="grid">
        <div class="card">
            <div class="img-holder"><img src="img/pork1.png" alt=""></div>
            <div class="desc"><div class="left"><p>2 hours ago</p></div>
      <div class="right"><div class="button">Meat</div></div>
    </div>
    </div>
    <div class="card"><div class="img-holder"><img src="img/pork1.png" alt=""></div>
      <div class="desc"><div class="left"><p>2 hours ago</p> </div>
      <div class="right"><div class="button">Meat</div></div>
    </div>
    </div>
    <div class="card"><div class="img-holder"><img src="img/pork1.png" alt=""></div>
      <div class="desc"><div class="left"><p>2 hours ago</p> </div>
      <div class="right"><div class="button">Meat</div></div>
    </div>
    </div>
    </div>
</div>
<div class="how-to">
  <h2>How MeatIDentify Works</h2>
  <div class="grid"><div class="card">
            <div class="img-holder"><img src="img/pork1.png" alt=""></div>
            <div class="desc"><h3>Pork Blabla</h3> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  at debitis ex rem cumque deleniti dicta sed sint.</p>

    </div>
    </div>
    <div class="card">
            <div class="img-holder"><img src="img/pork1.png" alt=""></div>
            <div class="desc"><h3>Pork Blabla</h3> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  at debitis ex rem cumque deleniti dicta sed sint.</p>

    </div>
    </div>
    <div class="card">
            <div class="img-holder"><img src="img/pork1.png" alt=""></div>
            <div class="desc"><h3>Pork Blabla</h3> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  at debitis ex rem cumque deleniti dicta sed sint.</p>

    </div>
    </div> </div>

</div>
<footer>
  <div class="left"><div class="logo"><img src="img/logo.png" alt="">
  <p>MeatIDentify was dedicated to the classification of meat, where we aim to provide comprehensive information about various types of meat. We are committed to providing accurate and valuable knowledge to our visitors to help them make informed decisions about meat selection and consumption</p></div></div>
  <div class="right"><div class="sect-1"><h3>Connect</h3>
    <div class="icon"><img src="img/fb.svg" alt=""><img src="img/linkedin.svg" alt=""><img src="img/ig.svg" alt=""><img src="img/twit.svg " alt=""></div>
  </div><div class="sect-2"><h3>Download</h3> <p>Andorid</p> <p>IPhone</p></div></div>

</footer>
    </div>

    <script>
        function uploadImage() {
            document.getElementById('uploadForm').submit();
        }
    </script>

  </body>
</html>
