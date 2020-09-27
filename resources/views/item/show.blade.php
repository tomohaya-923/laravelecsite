@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="/">{{ $item->name }}</a>
                </div>
                <div class="card-body">
                    {{ $item->amount }}円
                </div>
            </div>
        </div>
    </div>
</div>
@endsection