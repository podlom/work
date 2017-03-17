@extends('layouts.site')

@section('content')

<div id="wrapper">
  <div class="row">

    @foreach($articles as $article)

    <div class="content col-md-12" style="border: solid 1px black">
      <h4>{{ $article->header }}</h4>
      <h5>{{ $article->preview }}</h5>
      <h6>{{ $article->article }}</h6>
      <button type="submit"><a href="{{ route('articleShow', ['id'=>$article->id]) }}">Читать>></a></button>
    </div>

    @endforeach

  </div>
</div>

@endsection
