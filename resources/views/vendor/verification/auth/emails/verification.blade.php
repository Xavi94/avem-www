Click here to verify your account: <a href="{{ $link = route('verification.verify', $token).'?email='.urlencode($user->getEmailForVerification()) }}"> {{ $link }} </a>
