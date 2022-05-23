<h3>Użytkownicy</h3>
<ul>
  @foreach($data as $user)
    <li>
      {{$user['name']}} {{$user['surname']}}
    </li>
  @endforeach
</ul>
