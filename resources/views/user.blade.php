<form action="UserController1" method="post">

  @csrf

  <!--
  @if($errors->any())

  <ul>
    @foreach($errors -> all() as $error)


      <li>{{$error}}</li>


    @endforeach
  </ul>

  @endif
-->

  <input type="text" name="address" placeholder="Podaj adres" autofocus>

  @error('address')
    {{$message}}
  @enderror

  <br><br>
  <input type="email" name="email" placeholder="Podaj email">

  @error('email')
    {{$message}}
  @enderror

  <br><br>
  <input type="submit" value="Zatwierdź">


</form>
