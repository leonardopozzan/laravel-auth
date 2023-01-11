@extends('layouts.admin')
@section('content')
    <section class="container my-5">
        <form action="{{ route('admin.projects.store') }}" method="POST" class="my-form">
        @csrf
            <h1 class="text-center fs-1">Aggiungi un Progetto</h1>
            <div>
                <label for="name">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required minlength="5" maxlength="50">
                @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="surname">Description</label>
                <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror"></textarea>
                @error('surname')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="present">Linguaggi usati</label>
                <input type="text" class="form-control @error('dev_lang') is-invalid @enderror" name="dev_lang" id="present" required maxlength="100">
                @error('present')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            
            <div class="d-flex">
                <button type="submit" class="my-btn rounded-pill" id="btn-submit">Invia</button>
                <button type="reset" class="my-btn  rounded-pill" id="btn-reset">Resetta</button>
            </div>

        </form>

    </section>
@endsection