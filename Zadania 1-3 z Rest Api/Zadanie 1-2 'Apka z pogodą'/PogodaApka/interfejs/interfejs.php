<?php
error_reporting(E_ERROR | E_PARSE);
$weather = "";
$error = "";
if(isset($_GET['city'])){
    $city = urlencode($_GET['city']);
    $urlContent = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=' . $_GET['city'] . '&units=metric&appid=dcd19bf3ff4d7ad39cd884de6d0f3f00');
    $forecastArray = json_decode($urlContent, true);

    if($forecastArray['cod'] == 200){
        $weather = 'Pogoda w ' . $_GET['city'] . ': ' . $forecastArray['weather'][0]['description'];
        $weather = $weather. '<br>Predkosc powietrza:  ' .  $forecastArray['wind']['speed'] . 'm/s';
        $weather = $weather. '<br>Temperatura:  ' .  $forecastArray['main']['temp'] . '&#8451';
    } else {
        $error = "Nie prawidlowa nazwa Miasta";
    }
}

?>
<!doctype html>
<html lang="PL">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/style.css"

</head>
<body>
<title>PogodaApka</title>

<div class="container" id="MainDiv">
    <h1>Pogoda w Miastach</h1>
    <form>
        <div class="form-group">
            <label for="city">Wybierz swoje Miasto</label>
            <input class="form-control" id="city" name="city" aria-describedby="Wybierz" placeholder="Miasto">
        </div>
        <button type="submit" class="btn btn-primary">Sprawdz</button>
    </form>
    <div>
        <?php
        if($weather){
            echo '<div class="alert alert-secondary" role="alert">'. $weather  . '</div>';
        } else if ($error) {
            echo '<div class="alert alert-danger" role="alert">'. $error . '</div>';
        }
        ?>

    </div>

</body>
</html>
