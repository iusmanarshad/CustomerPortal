<p>Hi, {{ $data['name'] }}</p>

<p><strong>{{ $data['invited_by_name'] }}</strong> has invited you to be their associate.</p>

<a href="{{ route('signup', ['token' => $data['token'], 'email' => $data['email'], 'invited_by' => $data['invited_by_email']]) }}">Click here</a> to activate your account.
