@extends('layouts.admin')
@section('content')
    <section class="my-5">
        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST" class="my-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <h1 class="text-center fs-1">Modifica un Progetto</h1>
            <div>
                <label for="name">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required maxlength="45" value="{{old('name',$project->name)}}">
                @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="dev_lang">Linguaggi di programmazione usati</label>
                <input type="text" class="form-control @error('dev_lang') is-invalid @enderror" name="dev_lang" id="dev_lang" required maxlength="240" value="{{old('dev_lang',$project->dev_lang)}}">
                @error('dev_lang')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{old('name',$project->name)}}"</textarea>
                @error('description')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="framework">Framework</label>
                <input type="text" class="form-control @error('framework') is-invalid @enderror" name="framework" id="framework" value="{{old('dev_lang',$project->dev_lang)}}">
                @error('framework')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="team">Membri del Team</label>
                <input type="text" class="form-control @error('team') is-invalid @enderror" name="team" id="team" value="{{old('dev_lang',$project->dev_lang)}}"> 
                @error('team')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="git_link">Link alla repo di GitHub</label>
                <input type="text" class="form-control @error('git_link') is-invalid @enderror" name="git_link" id="git_link" value="{{old('dev_lang',$project->dev_lang)}}">
                @error('git_link')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="diff_lvl">Livello di difficoltà (da 1 a 10)</label>
                <select name="diff_lvl" class="form-control @error('diff_lvl') is-invalid @enderror">
                    <option value="0" {{old('diff_lvl',$project->diff_lvl) == '0' ? 'selected': ''}}>0</option>
                    <option value="1" {{old('diff_lvl',$project->diff_lvl) == '1' ? 'selected': ''}}>1</option>
                    <option value="2" {{old('diff_lvl',$project->diff_lvl) == '2' ? 'selected': ''}}>2</option>
                    <option value="3" {{old('diff_lvl',$project->diff_lvl) == '3' ? 'selected': ''}}>3</option>
                    <option value="4" {{old('diff_lvl',$project->diff_lvl) == '4' ? 'selected': ''}}>4</option>
                    <option value="5" {{old('diff_lvl',$project->diff_lvl) == '5' ? 'selected': ''}}>5</option>
                    <option value="6" {{old('diff_lvl',$project->diff_lvl) == '6' ? 'selected': ''}}>6</option>
                    <option value="7" {{old('diff_lvl',$project->diff_lvl) == '7' ? 'selected': ''}}>7</option>
                    <option value="8" {{old('diff_lvl',$project->diff_lvl) == '8' ? 'selected': ''}}>8</option>
                    <option value="9" {{old('diff_lvl',$project->diff_lvl) == '9' ? 'selected': ''}}>9</option>
                    <option value="10" {{old('diff_lvl',$project->diff_lvl) == '10' ? 'selected': ''}}>10</option>
                </select>
                {{-- <input type="number" step="1" class="form-control @error('diff_lvl') is-invalid @enderror" name="diff_lvl" id="diff_lvl" min="0" max="10"> --}}
                @error('diff_lvl')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="image" class="form-label">Immagine</label>
                <input type="file" name="image" id="image" class="form-control  @error('image') is-invalid @enderror" >
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="d-flex">
                <button type="submit" class="my-btn rounded-pill" id="btn-submit">Invia</button>
                <button type="reset" class="my-btn  rounded-pill" id="btn-reset">Resetta</button>
            </div>

        </form>

    </section>
@endsection