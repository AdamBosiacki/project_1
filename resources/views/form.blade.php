@php
      echo "<pre>";
        dump($response);
        echo 'Imię: ', $response['imie'],
        '<br>Adres @: ', $response['email'],
        '<br>Hasło: ', $response['password'],
        '<br>Płeć: ', $response['plec'],
        '<br>Miasto: ', $response['city'],
        '<br>Czy zgoda wyrażona?', $response['dane_osobowe'];
       echo "</pre>";
    @endphp
