@extends('layouts.app')
<?php
/**
 * @model Mail
 */
$model = $mails;
?>
@section('content')
    <div class="container">
        <div class="w-75 m-auto">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Do kogo</th>
                    <th scope="col">Tytuł maila</th>
                    <th scope="col" class="text-center">
                        <a href="mail/create" class="btn btn-primary">Dodaj</a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($model as $mail)
                    <tr>
                        <td>{{$mail->receiver}}</td>
                        <td>{{$mail->title}}</td>
                        <td class="w-25 text-center">
                            <form action="/mail/{{$mail->id}}" method="POST" >
                                <a href="mail/{{$mail->id}}" class="btn btn-primary">Pokaż</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger" onclick="return confirm('Czy chcesz usunąć rekord?')">Usuń</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
