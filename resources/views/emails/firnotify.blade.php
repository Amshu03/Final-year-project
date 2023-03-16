<x-mail::message>
    New FIR has been reported.

    <a href="{{ env('APP_URL') }}">View FIR</a>


    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
