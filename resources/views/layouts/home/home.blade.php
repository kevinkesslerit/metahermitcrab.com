@extends('layouts.app', ['title' => 'Home'])

@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron mb-0 vertical-center shadow">
    <div class="container text-light text-center align-self-center">
      <div class="px-3 pt-3 pb-2"> <!-- rounded shadow border border-dark bg-trandark">-->
        <h1 class="display-4 font-weight-bold"><em>THE</em> <span class="accent-color">SCIENTIFICALLY ACCURATE</span> COMMUNITY FOR HERMIT CRABS</h1>
        <p>MetaHermitCrab is a community made project for all hermit crab owners that is founded on an accurate vision of relaying information that is to be as close as scientifically possible. This means we do not support any sort of misinformation!
        </p>
        <p>
          <a class="btn btn-accent btn-lg" href="{{ url('/') }}" role="button">Learn more &raquo;</a>
        </p>
      </div>
    </div>
  </div>
@endsection
