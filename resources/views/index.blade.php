<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    {{-- Referência CDN aos icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <title>Teste prático</title>
</head>

<body>
    {{-- navbar --}}
    <header>
        <i class="bi bi-house-door"></i>
        <nav>
            <ul id="navbar-list">
                <li><a href="">Contact us</a></li>
                <li><a href="">Call: 1234567890</a></li>
                <li><a href="">Email: demo@gmail.com</a></li>
            </ul>
        </nav>
    </header>
    <main>

        {{-- Banner --}}
        <div id="banner-background">
            <h1>LANDING PAGE FOR REAL ESTATE</h1>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem ipsum is that it has a more-or-less normal distribution
                of letters,</p>
            <button>Read More</button>
        </div>

        {{-- Faixa central com infos --}}
        <section id="card-info">
            <div>
                <ul id="info-list">
                    <li>Explore community</li>
                    <li>40 lifestyle Awards</li>
                    <li>Happy Family</li>
                    <li>20 Years</li>
                </ul>
            </div>
        </section>

    </main>

    {{-- Carrosel --}}
    <section id="card-carrosel">
        <div>
            <h1>OUR HOME AND FLATS</h1>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters,</p>
            @for ($i = 1; $i <= 8; $i++)
                <img src="{{ URL::asset("img/$i.jpg") }}" alt="Casa {{ $i }}">
            @endfor
        </div>
    </section>

    {{-- terceiro card --}}
    <section id="card-builds">
        <div>
            <div id="center-content">
                <h1>FIND YOUR HOUSE WITHOUT ANY DIFFICULTIES</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters,</p>
                <button>Read More</button>
            </div>
        </div>
    </section>

    {{-- quarto card --}}
    <section id="card-home">
        <div>
            <div>
                <h1>A UNIQUE BALANCE OF LUXURY LIFE</h1>
                <div id="note">
                    <h1>1</h1>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when lookin at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                    <button>See More</button>
                </div>
                <div id="img-home">
                    <img src="{{ URL::asset('img/8.jpg') }}" alt="Casa 8">
                </div>
            </div>
        </div>
    </section>

    {{-- card de contato --}}
    <section id="card-contact">
        <div>
            <h1>Free Multipurpose</h1>
            <h1>Responsive Landing Page 2019</h1>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look</p>
            <label for="subscribe">Subscribe our Newsletter</label>
            <input type="text" id="subscribe" name="subscribe" placeholder="Enter You Email">
            <form action="#" method="POST">
                @csrf
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    {{-- footer --}}
    <footer>
        <div>
            <p>Copyright 2022 - Developed by Vinícius Pecci</p>
        </div>
    </footer>

</body>

</html>
