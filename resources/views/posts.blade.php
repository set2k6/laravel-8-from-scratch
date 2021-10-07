{{--@extends('components.layout')--}}

{{--@section('content')--}}

<x-layout>

    @include('_post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        <x-article-card-featured />

{{--        <div class="lg:grid lg:grid-cols-2">--}}

{{--            <x-article-card-post/>--}}
{{--            <x-article-card-post/>--}}

{{--        </div>--}}

{{--        <div class="lg:grid lg:grid-cols-3">--}}

{{--            <x-article-card-post/>--}}
{{--            <x-article-card-post/>--}}
{{--            <x-article-card-post/>--}}

{{--        </div>--}}
    </main>


    {{--        @foreach($posts as $post)--}}

{{--            <article>--}}

{{--                <h1>--}}
{{--                    <a href="/posts/{{ $post->slug }}">--}}
{{--                        {!! $post->title !!}--}}
{{--                    </a>--}}
{{--                </h1>--}}

{{--                <p>--}}
{{--                    By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{--}}
{{--    $post->category->name }}</a>--}}
{{--                </p>--}}

{{--                <div>{{ $post->excerpt }}</div>--}}

{{--            </article>--}}
{{--        @endforeach--}}

</x-layout>
{{--@endsection--}}
