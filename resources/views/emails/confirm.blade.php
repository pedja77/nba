Dear {{$user->name}}, please confirm your email by clicking on 
this <a href="{{ 'localhost:8000/login?token=' . $user->verification_token . "&id=" . $user->id }}">link</a>