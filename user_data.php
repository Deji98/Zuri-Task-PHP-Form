<?php if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $data = [$name, $email, $date, $gender, $country];

    $file = fopen('userdata.csv', 'a');

    fputcsv($file, $data);

    echo 'file written...' . '<br>';
    print_r($data);

    fclose($file);
} else {
    echo 'no data';
} ?>




