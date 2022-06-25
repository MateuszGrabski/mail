@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="container">
                <div class="row">
                    <div class="col-sm p-4">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">Treść zadania</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <ul>
                                    <li>Zadanie polega na napisaniu prostego interfejsu do wysyłki maili</li>
                                    <li>Wymagania:</li>
                                    <li>Konfiguracja SMTP musi odbyć się w pliku .env</li>
                                    <li>Interfejs powinien zostać zrobiony zgodnie z podanymi mockupami, proszę użyć bootstrapa</li>
                                    <li>Aplikacja musi zostać napisana w Laravelu w wersji 8 lub 9</li>
                                    <li>Baza danych: MySQL</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm p-4">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                Nieobowiązkowe
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <ul>
                                    <li>Wystawienie Api wraz z dokumentacją (swagger) do obslugi:</li>
                                    <li>Listingu</li>
                                    <li>Wysyłki maila</li>
                                    <li>Podglądu wysłanego maila (show)</li>
                                    <li>Usuwania rekordu z bazy</li>
                                    <li>Wysyłanie maila powinno odbyć się na kolejkach (Rabbit lub kolejki
                                        Laravelowe)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-center mt-4 sm:items-center sm:justify-between">
            <div class="ml-4 text-center text-sm text-gray-500 sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) Kolejki: RabbitMQ
            </div>

        </div>
    </div>
@endsection
