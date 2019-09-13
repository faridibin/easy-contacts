@component('mail::message')
# Hello Administrator

You have a new mssage from {{ $mail['name'] }} <{{ $mail['email'] }}>

@if (1)

@endif


@component('mail::button', ['url' => ''])
View Message
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
