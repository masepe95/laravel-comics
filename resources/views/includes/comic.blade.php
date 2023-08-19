@extends('layouts.main')

@section('title', 'Action')

@section('main-content')
    <section id="action">
        <div class="container">
            <div class="split-section">
                <div class="long-side">
                    <h1>{{ strtoupper($actionComic['title']) }}</h1>
                    <br>
                    <br>
                    <img src="{{ $actionComic['thumb'] }}" alt="Preview">
                    <h4 class="price-tag">U.S. price: <strong>{{ $actionComic['price'] }}</strong></h4>
                    <p>
                        {{ $actionComic['description'] }}
                    </p>
                </div>
                <div class="short-side">
                    <h3 class="adv">Advertisment</h3>
                    <img src="{{ asset('images/actionComic.jpg') }}" alt="action comic">
                </div>
            </div>
        </div>
    </section>
    <section id="comic-info">
        <div class="container">
            <div class="split-section">
                <div class="long-side">
                    <h3>Talent</h3>
                    <hr>
                    <div class="split-section">
                        <div class="short-side">
                            <p>Art by:</p>
                        </div>
                        <div class="long-side">
                            @foreach ($actionComic['artists'] as $artist)
                                <a href="#">
                                    {{ $artist }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="split-section">
                        <div class="short-side">
                            <p>Written by:</p>
                        </div>
                        <div class="long-side">
                            @foreach ($actionComic['writers'] as $writer)
                                <a href="#">
                                    {{ $writer }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="short-side">
                    <h3>Specs</h3>
                    <hr>
                    <div class="split-section">
                        <div class="short-side">
                            <p>Series:</p>
                        </div>
                        <div class="long-side">
                            <a href="#">
                                {{ strtoupper($actionComic['series']) }}
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="split-section">
                        <div class="short-side">
                            <p>U.S. Price: </p>
                        </div>
                        <div class="long-side">
                            {{ $actionComic['price'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="split-section">
                        <div class="short-side">
                            <p>On sale date:</p>
                        </div>
                        <div class="long-side">
                            {{ $actionComic['sale_date'] }}
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
@endsection