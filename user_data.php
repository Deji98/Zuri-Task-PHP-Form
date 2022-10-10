<?php if (isset($_POST['submit'])) {
    $name = $_POST['name'] . '<br>';
    $email = $_POST['email'] . '<br>';
    $date = $_POST['date'] . '<br>';
    $gender = $_POST['gender'] . '<br>';
    $country = $_POST['country'] . '<br>';

    $data = [$name, $email, $date, $gender, $country];

    $file = fopen('userdata.csv', 'a');

    fputcsv($file, $data);

    echo 'file written...' . '<br>';
    print_r($data);

    fclose($file);
} else {
    echo 'no data';
} ?>




