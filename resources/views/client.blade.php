<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style/client.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css')}}">
    <title>Document</title>
</head>
  <body>
  <nav>
    <div style="top:20%;">
      <h1 style="color:white; font-family:Arial;">Inscription ou Connexion</h1>
    </div>
  </nav>
  <div class="togg">
    <button id="togg2" class="togg2">Inscription</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button id="togg1" class="togg1">connexion</button>
  </div>
  <div id="d2" class="formulaire2">
    <form>
        <h1>Identifiant</h1>
      <table>
        <tr>
          <td><input id="m" name="identifiant"></input></td>
          <td><p style="font-family: Arial; color:black;">Identifiant</p></td>
        </tr>
      </table>
      <h1>Adresse Mail</h1>
      <table>
        <tr>

          <td><input class="" type="email" name="email" type="checkbox" onClick="voir()"></input></td></br>
          <td><p style="color: black; font-family:Arial;"><strong> Email</strong></p></td>
        </tr>
      </table>

      <br><br>

      <h1>Mot de passe</h1>
      <table>
        <tr>
          <td><input type="password"></input></td>
          <td><input class="mdpshow" name="password" type="checkbox" type="password" onClick="changer()"></input></td></br>
          <td><p style="color: black; font-family:Arial;"><strong> Mot de passe</strong></p></td>
        </tr>
      </table>
      <br><br>
      <input class="btnco" type="submit"></input>
    </form>
  </div>
  <div id="d1" class="formulaire">
    <form action="{{ route('connexion.store') }}" method="post">
      <h1>Identifiants</h1>
      <input id="a" name="identifiant"></input>
      <br><br>
      <h1>Mot de passe</h1>
      <table>
        <tr>
          <td><input type="password"></input></td>
          <td><input class="mdpshow" name="password" type="checkbox" onClick="changer()"></input></td></br>
          <td><p style="color: black; font-family:Arial;"><strong> Mot de passe</strong></p></td>
        </tr>
      </table>
      <br><br>
      <input class="btnco" type="submit"></input>
    </form>
  </div>
  <script src="{{asset('script/client.js')}}" defer></script>
</body>
</html>


