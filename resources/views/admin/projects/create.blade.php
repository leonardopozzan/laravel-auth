@extends('layouts.admin')
@section('content')
    <section class="my-5">
        <form action="{{ route('admin.projects.store') }}" method="POST" class="my-form">
        @csrf
            <h1 class="text-center fs-1">Aggiungi un Progetto</h1>
            <div>
                <label for="name">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required minlength="5" maxlength="45">
                @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="dev_lang">Linguaggi di programmazione usati</label>
                <input type="text" class="form-control @error('dev_lang') is-invalid @enderror" name="dev_lang" id="dev_lang" required maxlength="240">
                @error('dev_lang')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror"></textarea>
                @error('description')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="framework">Framework</label>
                <input type="text" class="form-control @error('framework') is-invalid @enderror" name="framework" id="framework">
                @error('framework')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="team">Membri del Team</label>
                <input type="text" class="form-control @error('team') is-invalid @enderror" name="team" id="team">
                @error('team')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="git_link">Link alla repo di GitHub</label>
                <input type="text" class="form-control @error('git_link') is-invalid @enderror" name="git_link" id="git_link">
                @error('git_link')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="diff_lvl">Livello di difficoltà (da 1 a 10)</label>
                <select name="diff_lvl" class="form-control @error('diff_lvl') is-invalid @enderror">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                {{-- <input type="number" step="1" class="form-control @error('diff_lvl') is-invalid @enderror" name="diff_lvl" id="diff_lvl" min="0" max="10"> --}}
                @error('diff_lvl')
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