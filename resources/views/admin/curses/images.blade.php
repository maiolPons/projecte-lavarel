@extends('layouts.app')

@section('titol','Crear Curses')
@section('content')
        <div class="container">
            <p>
                <h1>Puja imatges</h1>
            </p>
            <form method="post" action="{{route('storeImage')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                @csrf
                <input type="hidden" name="raceid" value="{{$_GET['id']}}">
            </form>
            <component :is="'script'">
            Dropzone.options.dropzone = {
                maxFilesize: 12,
                renameFile: function(file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time + file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 5000,
                success: function(file, response) {
                    console.log(response);
                },
                error: function(file, response) {
                    return false;
                }
            };
            </component>
    @stop