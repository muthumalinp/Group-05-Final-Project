@component('mail::message')
    # Leave Request Status

    Your leave request has been {{ $status }}.

    @if ($status === 'accepted')
        Enjoy your time off!
    @else
        Unfortunately, your leave request has been rejected.
    @endif

    Thanks,
    Your Company
@endcomponent