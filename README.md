Zasoby wymagane do poprawnego działania:

Erlang 24.3.4

RabbitMQ -3.10.5

ustawiony jako domyślny 
\config\queue.php:16 ('default' => env('QUEUE_CONNECTION', 'rabbitmq'),)

port: \config\queue.php:83 ('port' => env('RABBITMQ_PORT', 15672),

RABBITMQ_HOST='127.0.0.1'
RABBITMQ_PORT=5672
RABBITMQ_USER='test'
RABBITMQ_PASSWORD='test'
RABBITMQ_VHHOST='/'

wymagane:
utworzony nowy uzytkownik test z hasłem test
z uprawneniami Can access virtual hosts: "/"

Mailtrap - https://mailtrap.io

bootstrap - included

jquery - included

composer v2.3.7

wamp 3.2.4.9

PHP v7.4.9

laravel v8.83.16
