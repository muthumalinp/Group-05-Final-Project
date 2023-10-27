@component('mail::message')
# Email Verification

Hello {{ $customer->customer_fname }} {{ $customer->customer_lname }},

Please click the "Verify" button to verify your email address:

@component('mail::button', ['url' => route('verification.verify', ['token' => $customer->remember_token])])
Verify
@endcomponent

If you're unable to click the "Verify" button, you can copy and paste the following URL into your browser's address bar: [{{ route('verification.verify', ['token' => $customer->remember_token]) }}]({{ route('verification.verify', ['token' => $customer->remember_token]) }})

If you didn't request this verification, please ignore this email.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
