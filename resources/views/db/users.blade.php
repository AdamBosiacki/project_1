<h3>Użytkownicy</h3>
@foreach($username as $user)
  Imię i nazwisko: {{$user->name}} {{$user->surname}},
  miasto: {{$user->city}}
  <br>
@endforeach

<h3>Wzrost powyżej 200cm</h3>
@foreach($username_height_above_200 as $user)
  Imię i nazwisko: {{$user->name}} {{$user->surname}}, wzrost: {{$user->height}}
  <br>
@endforeach
