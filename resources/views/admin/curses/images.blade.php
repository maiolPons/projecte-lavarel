@extends('layouts.app')

@section('titol','Crear Curses')
@section('content')
<div class="container">
    <div class="row">
    @if (!file_exists($path)) 
            <div class="col-8 border border-primary rounded">
                <h2>No han imatges</h2>
            </div>
    @else

            <div class="col-8 border  border-primary rounded">
                
            </div>
    @endif
        <div class="col-4 file-drop-area">
            <span class="choose-file-button">Choose files</span>
            <span class="file-message">or drag and drop files here</span>
            <input class="file-input" type="file" multiple>
        </div>
    </div>
</div>
@stop