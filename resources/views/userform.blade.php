<h3>Informacje o użytkowniku</h3>
<div>

  <form action="Form" method="post">

    @csrf

    <input type="text" name="imie" placeholder="Podaj swoje imię"><br>
    @error('imie')
      {{$message}}
    @enderror
    <br>
    <input type="text" name="email" placeholder="Podaj swój adres @"><br>
    @error('email')
      {{$message}}
    @enderror
    <br>
    <input type="password" name="password" placeholder="Podaj hasło"><br>
    @error('password')
      {{$message}}
    @enderror
    <br>
    <input type="radio" name="plec" value="Mężczyzna">Mężczyzna
    <input type="radio" name="plec" value="Kobieta">Kobieta<br>
    @error('plec')
      {{$message}}
    @enderror
    <br>
        <select name="city">
      <option value="">Select...</option>
      <option value="Poznań">Poznań</option>
      <option value="Gdańsk">Gdańsk</option>
      <option value="Paryż">Paryż</option>
      <option value="Berlin">Berlin</option>
    </select>
    @error('city')
      {{$message}}
    @enderror
    <br><br>
    Wyraź zgodę na przetwarzanie danych osobowych
    <input type="checkbox" name="dane_osobowe" value="Yes" />
    <br><br>
    <input type="submit" value="Zatwierdź">

  </form>

</div>
