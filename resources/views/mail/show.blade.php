@extends('layouts.app')
<?php
/**
 * @model Mail
 */
$model = $mail;
?>
@section('content')
    <div class="container">
        <div class="w-50 m-auto">
            <div class="form-group mt-4">
                <label class="text-secondary mb-1 fw-bold" for="sendMailFormEmail">Do kogo</label>
                <input type="email" class="form-control border-primary border-2" id="sendMailFormEmail" name="sendMailFormEmail" value="{{$model->receiver}}" disabled>
            </div>
            <div class="form-group mt-4">
                <label class="text-secondary mb-1 fw-bold" for="sendMailFormTitle">Tytuł</label>
                <input type="text" class="form-control border-primary border-2" id="sendMailFormTitle" name="sendMailFormTitle" value="{{$model->title}}" disabled>
            </div>
            <div class="form-group mt-4">
                <label class="text-secondary mb-1 fw-bold" for="sendMailFormContent">Treść maila</label>
                <textarea class="form-control border-primary border-2 rounded-4" id="sendMailFormContent" name="sendMailFormContent" rows="12" disabled>{{$model->content}}</textarea>
            </div>
            <div class="text-center">
                <a href="/mail" class="btn btn-primary mt-4">Wróć</a>
            </div>
        </div>
    </div>
@endsection
