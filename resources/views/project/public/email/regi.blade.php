@component('mail::message')
    <p>Hello {{ $customer->customer_fname }} {{ $customer->customer_lname }}</p>

    @if ($customer->remember_token)
        @component('mail::button', ['url' => route('verification.verify', ['token' => $customer->remember_token])])
            Verify
        @endcomponent
    @else
        <p>Token missing for email verification.</p>
    @endif

    <p>In case you have issues, please contact us.</p>

    Thanks,<br/>
    {{ config('app.name') }}

@endcomponent
