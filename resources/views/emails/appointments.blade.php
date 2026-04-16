@component('mail::message')
    # {{$name}}

    تم حجز موعدك بتاريخ :{{$appointment}}

    Thanks,
    {{ config('app.name') }}
@endcomponent
