<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KayondoBodaLoans.ltd</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="row align-items-md-stretch m-5">
            <div class="col-md-6 border-end">
              <div class="p-3 text-center">
                <div>
                    <img src="{{asset('images/logo.png')}}" width="50%" alt="">
                    <p class="slate-light small">kayondobodaloans.limited</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-8">
                @isset($header)
                    {{$header}}
                @endisset
                {{$slot}}
                </div>
            </div>
          </div>
    </div>
</body>
</html>
