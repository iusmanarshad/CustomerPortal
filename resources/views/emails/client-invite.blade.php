<p>Hi {{$client->first_name}},</p>

<p>You have been invited to join DrummLaw portal.</p>

<a href="{{ route('signupByInvite', ['email' => $client->email]) }}">Click here</a> to begin your journey.
