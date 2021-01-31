@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">How to use ?</div>
                <div class="card-body">
                    <h3>To include this JS alert in your web application, just add below script in your webpage header.<h3>
                    <br/>
                    <code>
                        <p>{{$token}} </p>
                    </code>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
