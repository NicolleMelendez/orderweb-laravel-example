@extends('templates.base')
@section('title', 'Test')
@section('content')
    <h1>Test</h1>
    <q>No soy hombre de plegarias, pero si estás en el cielo ayúdame Superman!</q><br>
    <small>Homero J. Simpson</small><br>
    <button onclick="show_alert()">Click!</button>

@endsection

@section('scripts')
    <script src="{{ 'js/test.js' }}"></script>
@endsection

