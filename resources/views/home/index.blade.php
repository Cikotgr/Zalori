@extends('layouts.app')

@section('title', 'Home Page | Shop Beta')

@section('content')
    <div class="row">
        @for ($i = 1; $i < 5; $i++)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul kartu {{ $i }}</h5>
                        <p class="card-text">Some quick example text to build o </p>
                        @if ($i % 2 == 0)
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        @else
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                        @endif

                    </div>
                </div>
            </div>
        @endfor
        <a href="{{ route('post.index') }}" class="btn btn-info"> List </a>
    </div>
@endsection
