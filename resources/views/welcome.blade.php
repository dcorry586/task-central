<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TaskCentral Welcomes You</title>
    
        {{-- Bootstrap 5 CSS CDN --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
    
    body {
        /* background-image: url({{asset('assets/public/images/pexels-miguel-á-padriñán-194094.jpg')}}); */
        background-image: url('/images/pexels-miguel-á-padriñán-194094.jpg');
        /* background-image: url({{asset('assets/public/images/pexels-miguel-á-padriñán-194094.jpg')}}); */

        background-repeat: no-repeat;
          background-size: cover; /* Resize the background image to cover the entire container */

    }
    
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->

</head>

<body>
    <main>

        <div class="px-4 py-5 my-5 text-center">
            <!--<img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
            <h1 class="display-5">TaskCentral</h1>
             <h1 class="display-5 fw-bold">Where Sh*! Gets Done.</h1>
            <div class="col-lg-6 mx-auto">
                
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

                        <a href="{{ route('login') }}">
                            <button type="button" class="btn btn-success btn-lg px-4 gap-3">Sign In</button>
                        </a>

                        <a href="{{ route('register') }}">
                            <button type="button" class="btn btn-outline-danger btn-lg px-4">Register</button>
                        </a>
                    
                </div>
            </div>
        </div>
        </main>
        
    {{-- Bootstrap 5 JavaScript CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</body>
</html>