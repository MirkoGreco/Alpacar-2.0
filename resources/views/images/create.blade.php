@extends('layouts.template')
@section('content')
    <div class="container" style="padding-top:60px">
        <h1 class="text-center my-3">Aggiungi dettagli al tuo Annuncio</h1>
        <div id="form2" class="d-none">

            <form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="post" value="{{ $id }}"></input>
                <div class="row">
                    <div class="col">
                        <label for="images">Inserisci le tue Immagini</label>
                        <input type="file" name="images" id="images">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Concludi Annuncio</button>
            </form>
