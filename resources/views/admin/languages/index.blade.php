@extends('layouts.admin')
@section('content')

    <div class="projects-list">
        
        <div class="table-container">
            @if(session()->has('message'))
            <div class="alert alert-success mb-3 mt-3 w-75 m-auto">
                {{ session()->get('message') }}
            </div>
            @endif
            <form action="{{ route('admin.languages.store') }}" method="POST" class="d-flex align-items-center mb-4">
                @csrf
                    <h1 class="text-center fs-2 mb-3">Aggiungi un Linguaggio</h1>
                    <div class="mx-5 px-5">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required>
                        @error('name')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary" id="btn-submit">Invia</button>
                        <button type="reset" class="btn btn-danger" id="btn-reset">Resetta</button>
                    </div>
        
                </form>
            
            <table>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($languages as $type)
                        <tr>
                            <th scope="row">{{$type->id}}</th>
                            <td>{{$type->name}}</td>
                            <td><a class="link-secondary" href="{{route('admin.languages.index', $type->slug)}}" title="Edit type"><i class="fa-solid fa-pen"></i></a></td>
                            <td>
                                <form action="{{route('admin.languages.destroy', $type->slug)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$type->name}}"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection