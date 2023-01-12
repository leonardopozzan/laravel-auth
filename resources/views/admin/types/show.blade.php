@extends('layouts.admin')
@section('content')
<div class="container mt-5">
    <div class="col-4">
        <div>
            <div>{{$type->id}}</div>
            <div>{{$type->workflow}}</div>
        </div>
    </div>
</div>
@endsection