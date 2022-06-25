@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="w-50 m-auto">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if($errors->any())
                <div class="m-auto text-center">
                    @foreach($errors->all() as $error)
                        <li class="text-danger">
                            {{$error}}
                        </li>
                    @endforeach
                </div>
            @endif
            <form action="/mail" method="post">
                @csrf
                <div class="form-group mt-4">
                    <label class="text-secondary mb-1 fw-bold" for="receiver">Do kogo</label>
                    <input type="email" class="form-control border-primary border-2" id="receiver" name="receiver" placeholder="email">
                </div>
                <div class="form-group mt-4">
                    <label class="text-secondary mb-1 fw-bold" for="title">Tytuł</label>
                    <input type="text" class="form-control border-primary border-2" id="title" name="title" placeholder="Tytuł maila">
                </div>
                <div class="form-group mt-4">
                    <label class="text-secondary mb-1 fw-bold" for="content">Treść maila</label>
                    <textarea class="form-control border-primary border-2 rounded-4" id="content" name="content" rows="12"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Wyślij</button>
                </div>
            </form>
        </div>
    </div>
@endsection
