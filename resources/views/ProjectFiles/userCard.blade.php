<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>{{ $lang['Titles']['userCard'] }}</title>
    <script src="https://kit.fontawesome.com/2c685a62ec.js" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <style>
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
</head>

<body style="background: rgb(26, 25, 25);">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
        <div class="container">
            <a class="navbar-brand" href="#">{{ $lang['Navbar']['title']  }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
                aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <x-Idea
                            lang="{{ $lang['Navbar']['Idea'] }}"
                            headerThree="{{ $lang['Components']['idea']['h3'] }}"
                            headerFive="{{ $lang['Components']['idea']['h5'] }}"
                            paragraph="{{ $lang['Components']['idea']['p'] }}"></x-Idea>
                    </li>
                    <li class="nav-item">
                        <x-NoteOne
                                lang="{{ $lang['Navbar']['N2'] }}"
                                headerThree="{{ $lang['Components']['N1']['h3'] }}"
                                headerFive="{{ $lang['Components']['N1']['h5'] }}"
                                paragraphOne="{{ $lang['Components']['N1']['p1'] }}"
                                paragraphTwo="{{ $lang['Components']['N1']['p2'] }}"
                                link="{{ $lang['Components']['N1']['a'] }}"
                                liOne="{{ $lang['Components']['N1']['ol']['1'] }}"
                                liTwo="{{ $lang['Components']['N1']['ol']['2'] }}"
                                liThree="{{ $lang['Components']['N1']['ol']['3'] }}"
                                liFour="{{ $lang['Components']['N1']['ol']['4'] }}"
                                ></x-NoteOne>
                    </li>

                    <li class="nav-item">
                        <x-NoteTwo
                            lang="{{ $lang['Navbar']['N3'] }}"
                            headerThree="{{ $lang['Components']['N2']['h3'] }}"
                            headerFive="{{ $lang['Components']['N2']['h5'] }}"
                            paragraphOne="{{ $lang['Components']['N2']['p1'] }}"
                            paragraphTwo="{{ $lang['Components']['N2']['p2'] }}"
                            link="{{ $lang['Components']['N2']['a'] }}"
                            ></x-NoteTwo>
                    </li>
                    <li class="nav-item">
                        <x-NoteThree
                            lang="{{ $lang['Navbar']['N4'] }}"
                            headerThree="{{ $lang['Components']['N3']['h']['h3']['1'] }}"
                            headerFiveOne="{{ $lang['Components']['N3']['h']['h5']['1'] }}"
                            headerFiveTwo="{{ $lang['Components']['N3']['h']['h5']['2'] }}"
                            headerFiveThree="{{ $lang['Components']['N3']['h']['h5']['3'] }}"
                            paragraphOne="{{ $lang['Components']['N3']['p']['1'] }}"
                            paragraphTwo="{{ $lang['Components']['N3']['p']['2'] }}"
                            link="{{ $lang['Components']['N3']['a'] }}"
                            olOnefOne="{{ $lang['Components']['N3']['ol1']['f']['1'] }}"
                            olOnefTwo="{{ $lang['Components']['N3']['ol1']['f']['2'] }}"

                            olOnepOne="{{ $lang['Components']['N3']['ol1']['p']['1'] }}"
                            olOnepTwo="{{ $lang['Components']['N3']['ol1']['p']['2'] }}"

                            olTwofOne="{{ $lang['Components']['N3']['ol2']['f']['1'] }}"
                            olTwofTwo="{{ $lang['Components']['N3']['ol2']['f']['2'] }}"

                            olTwopOne="{{ $lang['Components']['N3']['ol2']['p']['1'] }}"
                            olTwopTwo="{{ $lang['Components']['N3']['ol2']['p']['2'] }}"
                            ></x-NoteThree>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownXxl" data-bs-toggle="dropdown"
                            aria-expanded="false">{{ $lang['Navbar']['lang']['title'] }}</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownXxl">
                            <li><a class="dropdown-item" href="{{ route('lang', 'ar') }}">{{ $lang['Navbar']['lang']['one'] }}</a></li>
                            <li><a class="dropdown-item" href="{{ route('lang', 'en') }}">{{ $lang['Navbar']['lang']['two'] }}</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if (Session::has('number'))
        <div class="alert alert-warning text-black">
            {{ Session::get('number') }}
        </div>
    @endif
    @if (Session::has('status'))
        <div class="alert alert-warning text-black">
            {{ Session::get('status') }}
        </div>
    @endif
    <div class="card" style="width: 22rem; margin:0 auto; margin-top: 150px;">

        <div class="card-header text-success text-center">
            <h3>{{ $lang['Titles']['Uh3'] }}</h3>
        </div>
        <form action="{{ route('getClient') }}" method="POST">
            <div class="card-body text-center">
                <h4 class="card-title ">{{ $lang['Titles']['Uh4'] }} </h4>

                <p class="card-text fs-4">
                    {{ session()->pull('ClientNumber', 'default') }}
                </p>


                @csrf
                <button class="btn btn-primary" type="submit">{{ $lang['Titles']['Ubutton'] }}</button>


            </div>
            {{-- <div class="card-footer text-center">

                <button class="btn btn-theme float-left bg-dark text-white" type="submit"
                    formaction="{{ route('previousNumber', $number) }}">

                    < </button>

                        <button class="btn btn-theme bg-dark text-white " type="button">+
                        </button>
                        <button class="btn btn-theme float-right bg-dark text-white" type="submit"
                            formaction="{{ route('nextNumber', $number) }}"> >
                        </button>

            </div> --}}
        </form>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="/js/dashboard.js"></script>
</body>

</html>
