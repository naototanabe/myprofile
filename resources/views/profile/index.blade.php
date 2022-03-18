@extends('layouts.app')

@section('content')
  <main>
    <div id="about">
      <h1>About</h1>
      <img src="" alt="自分の写真">
      <p>宮城県仙台市出身。大学まで声楽を学習する。
        <br>2021年度まで中学校の学校現場で音楽を教える。
        <br>2022年より川崎市の制作会社にてLaravel、Reactでの業務を行う。
      </p>
    </div>
    <div id="works">
      <h1>Works</h1>
      <div class="col-4">
      @foreach ($items as $item)
        <a href="{{$item->url}}"><img src="{{ asset('/storage/Good-Habit1.png')}}"></a>
        <a href="{{$item->url}}">{{$item->url}}</a>
      @endforeach
      </div>
    </div>
    <div id="blog">
      <h1>Blog</h1>

    </div>
  </main>
@endsection
