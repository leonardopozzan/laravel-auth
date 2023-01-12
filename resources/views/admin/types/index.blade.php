@extends('layouts.admin')
@section('content')

    <div class="projects-list">
        @if(session()->has('message'))
    <div class="alert alert-success mb-3 mt-3">
        {{ session()->get('message') }}
    </div>
    @endif
        <table class="w-100">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Difficulty</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <th scope="row">{{$type->id}}</th>
                        <td><a href="{{route('admin.types.show', $type->slug)}}" title="View type">{{$type->name}}</a></td>
                        <td>{{Str::limit($type->description,50)}}</td>
                        <td>{{$type->diff_lvl}}</td>
                        <td><a class="link-secondary" href="{{route('admin.types.edit', $type->slug)}}" title="Edit type"><i class="fa-solid fa-pen"></i></a></td>
                        <td>
                            <form action="{{route('admin.types.destroy', $type->slug)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$type->title}}"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection