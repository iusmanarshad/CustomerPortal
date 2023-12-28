<p>Hi,</p>

<p>Someone has invited you to be their associate.</p>

<a href="{{ route('signup', ['token' => $invite->token, 'email' => $invite->email, 'invited_by' => $invite->invited_by]) }}">Click here</a> to activate!
