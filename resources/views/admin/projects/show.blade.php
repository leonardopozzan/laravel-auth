<?php 
use App\Models\Type;
?>
@extends('layouts.admin')
@section('content')
<div class="container mt-5">
    <div class="col-4">
        <div>
            {{-- <img src="https://picsum.photos/id/{{$project->id + 10}}/1920/1080" alt=""> --}}
            <img src="{{ asset('storage/' . $project->image) }}" alt="">
            <div>{{$project->name}}</div>
            <div>{{Type::findType($project->type_id)}}</div>
            <div>{{$project->diff_lvl}}</div>
            <div>{{$project->dev_lang}}</div>
            <div>{{$project->framework}}</div>
            <div>{{$project->team}}</div>
            <div>{{$project->git_link}}</div>
            <div>{{$project->description}}</div>
        </div>
    </div>
</div>
@endsection