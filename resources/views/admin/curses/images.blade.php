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
    
        <div class="col-4 file-upload-wrapper">
            <div class="drag-image">
                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                <h6>Drag & Drop File Here</h6>
                <span>OR</span>
                <button>Browse File</button>
                <input type="file" id="files" hidden multiple name="photos[]">
            </div>
            <div  id="preview" class="overflow-auto border border-primary rounded row d-flex">

            </div>
        </div>
    </div>
</div>
@stop