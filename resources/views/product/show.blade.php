@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://dlcdnwebimgs.asus.com/gain/C79A1EC4-4196-435D-96DA-8A855EA5E817/w250" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           {{ $viewData["product"]["name"] }}
        </h5>
        <p class="card-text">{{ $viewData["product"]["price"] }}</p>
        @foreach($viewData["product"]->getComments() as $comment)

          - {{ $comment->getDescription() }}<br />

        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
