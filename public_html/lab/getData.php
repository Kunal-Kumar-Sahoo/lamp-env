<?php
$data = [
    'name' => 'Kunal Kumar Sahoo',
    'age' => 20,
    'city' => 'Gandhinagar',
    'email' => 'Kunal.sce21@sot.pdpu.ac.in'
];

$html = "
    <p><strong>Name:</strong> {$data['name']}</p>
    <p><strong>Age:</strong> {$data['age']}</p>
    <p><strong>City:</strong> {$data['city']}</p>
    <p><strong>Email:</strong> {$data['email']}</p>
";

echo $html;
?>