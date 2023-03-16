<x-mail::message>
    New crime has been reported.

    <a href="{{ env('APP_URL') }}">View Crime</a>


    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
