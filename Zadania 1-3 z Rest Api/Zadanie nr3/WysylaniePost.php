<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    if (preg_match('/\d/', $name) || preg_match('/\d/', $surname)) {
        echo 'Imię lub nazwisko zawiera cyfry :).';
    } else {
        $postData = array(
            'Imię' => $name,
            'Nazwisko' => $surname,
            'Wiek' => $age,
            'Plec' => $gender,
        );
        $postDataString = http_build_query($postData);

        $contextOptions = array(
            'http' => array(
                'method'  => 'POST',
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $postDataString
            )
        );

        $context = stream_context_create($contextOptions);

        $url = 'https://jsonplaceholder.typicode.com/posts'; 
        $response = file_get_contents($url, false, $context);

        echo $response;
    }
}
?>
