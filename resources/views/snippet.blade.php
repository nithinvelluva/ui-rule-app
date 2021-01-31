@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>How to use ?<h2></div>
                <div class="card-body usage">
                    <p>To include this JS alert in your web application, just add below script in your webpage header.</p>
                    
                    <code>
                        {{$token}}
                    </code>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
