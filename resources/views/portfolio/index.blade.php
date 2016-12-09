@extends('layouts.master')


@section('portfolio')
<ul id="myList">
    <div class="mansory tiles">
        <div class="grid">
            @foreach($projet as $projet)
            <div class="h1"></div>

            <div class="h3 pp grid-item grid-item--height2">
                <a class="tile" href="{{ URL::route('articles', $projet) }}"><img src="{{ asset('uploads/imgcouv/' . $projet->imgcouv ) }}" alt="" />
                    <div class="details">
                        <span class="title">{{ $projet->titre }}</span>
                        <span class="info">{{ $projet->type }}</span>

                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</ul>

<div id="loadMore">Load more</div>

    @stop
