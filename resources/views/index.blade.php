<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styleMobile.css') }}">

    {{-- Referência CDN aos icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <title>Teste prático</title>
</head>

<body>
    {{-- navbar --}}
    <main id="main-background">
    <header id="navbar">
        @php
            $not = 'Sem informação';
        @endphp

        @if ($pages)
            @if ($pages->icon_nav)
                <i class="{{ $pages->icon_nav }}"></i>
            @else
                <i class="">{{ $not }}</i>
            @endif
        @else
            <i class="">{{ $not }}</i>
        @endif
        <nav>
            <ul id="navbar-list">
                @if ($pages)
                    <li><a href="">{{ $pages->link_nav_1 ? $pages->link_nav_1 : $not }}</a></li>
                    <li><a href="">{{ $pages->link_nav_2 ? $pages->link_nav_2 : $not }}</a></li>
                    <li><a href="">{{ $pages->link_nav_3 ? $pages->link_nav_3 : $not }}</a></li>
                @else
                    @for ($i=1;$i<=3;$i++)
                        <li><a href="">{{ $not }}</a></li>
                    @endfor
                @endif

                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">Registrar</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
            </ul>
        </nav>
    </header>

        {{-- Primeiro card --}}
        <div id="card-init">
            @if ($pages)
                <h1>{{ $pages->title_banner ? $pages->title_banner : $not }}</h1>
                <div>
                    <p>{{ $pages->article_banner ? $pages->article_banner : $not }}</p>
                    <button class="btn-read">{{ $pages->btn_banner ? $pages->btn_banner : $not }}</button>
                </div>
            @else
                <h1>{{ $not }}</h1>
                <div>
                    <p>{{ $not }}</p>
                    <button class="btn-read">{{ $not }}</button>
                </div>
            @endif
        </div>

        {{-- Faixa central com infos --}}
        <section id="card-info">
            <div class="info-list">
                <ul>
                    @if ($pages)
                        <li class="explore">{{ $pages->center_title ? $pages->center_title : $not }}</li>
                        <li><i class="bi bi-1-circle"></i>{{ $pages->center_item_1 ? $pages->center_item_1 : $not }}</li>
                        <li><i class="bi bi-2-circle"></i>{{ $pages->center_item_2 ? $pages->center_item_2 : $not }}</li>
                        <li><i class="bi bi-3-circle"></i>{{ $pages->center_item_3 ? $pages->center_item_3 : $not }}</li>
                    @else
                        <li class="explore">{{ $not }}</li>
                        @for ($i=1;$i<=3;$i++)
                            <li><i class="bi bi-{{$i}}-circle"></i>{{ $not }}</li>
                        @endfor
                    @endif
                </ul>
            </div>
        </section>

    </main>

    {{-- Carrosel --}}
    <section id="card-carrosel">
        <div class="carrosel-div">
            @if ($pages)
                <h2>{{ $pages->title_first_card ? $pages->title_first_card : $not }}</h2>
                <div class="p">
                    <p>{{ $pages->article_first_card ? $pages->article_first_card : $not }}</p>
                </div>
            @else
                <h2>{{ $not }}</h2>
                <div class="p">
                    <p>{{ $not }}</p>
                </div>
            @endif
            <ul class="slider">
                @if (count($images_firstcard) > 0)
                    @foreach ($images_firstcard as $index => $image)
                        <li>
                            <input type="radio" id="slide{{ $index+1 }}" name="slide" checked>
                            <label for="slide{{$index+1}}"></label>
                            <img src="{{ URL::asset("storage/images/".$image->image) }}" />
                        </li>
                    @endforeach
                @else
                    @for ($i=1;$i<=5;$i++)
                        <li>
                            <input type="radio" id="slide{{ $i }}" name="slide" checked>
                            <label for="slide{{ $i }}"></label>
                            <img src="{{ URL::asset("img/".$i.".jpg") }}" />
                        </li>
                    @endfor
                @endif
            </ul>
        </div>
    </section>

    {{-- segundo card --}}
    @if ($images_secondcard)
        <section id="card-builds" style="background-image: url('../storage/images/{{ $images_secondcard->image }}');">
    @else
        <section id="card-builds" style="background-image: url('../img/8.jpg');">
    @endif
        <div>
            <div id="center-content">
                @if ($pages)
                    <h2>{{ $pages->title_second_card ? $pages->title_second_card : $not }}</h2>
                    <p>{{ $pages->article_second_card ? $pages->article_second_card : $not }}</p>
                    <button class="btn-read">
                        {{ $pages->btn_second_card ? $pages->btn_second_card : $not }}
                    </button>
                @else
                    <h2>{{ $not }}</h2>
                    <p>{{ $not }}</p>
                    <button class="btn-read">{{ $not }}</button>
                @endif
            </div>
        </div>
    </section>

    {{-- quarto card --}}
    <section id="card-home">
        <div class="home-internal">
            <div class="info-home">
                @if ($pages)
                    <h2>{{ $pages->title_info_card ? $pages->title_info_card : $not }}</h2>
                @else
                    <h2>{{ $not }}</h2>
                @endif
                <div id="note">
                    <div class="number">
                    <h3>01</h3>
                    </div>
                    @if ($pages)
                        <p>{{ $pages->article_info_card ? $pages->article_info_card : $not }}</p>
                        <div class="number">
                            <button class="btn-read alt">{{ $pages->btn_info_card ? $pages->btn_info_card : $not }}</button>
                        </div>
                    @else
                        <p>{{ $not }}</p>
                        <div class="number">
                            <button class="btn-read alt">{{ $not }}</button>
                        </div>
                    @endif
                </div>
                <div id="img-home">
                    @if ($image_info)
                        <img src="{{ URL::asset("storage/images/".$image_info->image) }}" />
                    @else
                        <img src="{{ URL::asset('img/8.jpg') }}" alt="Casa 8">
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- card de contato --}}
    <section id="card-contact">
        <div class="contact-info">
            @if ($pages)
                <h2>{{ $pages->title_contact_card ? $pages->title_contact_card : $not }}</h2>
                <p>{{ $pages->article_contact_card ? $pages->article_contact_card : $not }}</p>
            @else
                <h2>{{ $not }}</h2>
                <p>{{ $not }}</p>
            @endif
        </div>
        <div class="contact-form">
            <form action="#" method="POST">
                @csrf
                @if ($pages)
                    <label for="subscribe">{{ $pages->label_contact_card ? $pages->label_contact_card : $not }}</label><br><br>
                    <input type="text" id="subscribe" name="subscribe" placeholder="{{ $pages->placeholder_contact_card ? $pages->placeholder_contact_card : $not }}">
                    <button type="submit" class="btn-submit">{{ $pages->btn_contact_card ? $pages->btn_contact_card : $not }}</button>
                @else
                    <label for="subscribe">{{ $not }}</label><br><br>
                    <input type="text" id="subscribe" name="subscribe" placeholder="{{ $not }}">
                    <button type="submit" class="btn-submit">{{ $not }}</button>
                @endif
            </form>
        </div>
    </section>

    {{-- footer --}}
    <footer>
        <div>
            @if ($pages)
                <p>{{ $pages->footer_contact_card ? $pages->footer_contact_card : $not }}</p>
            @else
                <p>{{ $not }}</p>
            @endif
        </div>
    </footer>

</body>

</html>
