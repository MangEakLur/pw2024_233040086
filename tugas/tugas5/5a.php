<?php
$students = [
    [
        "name" => "Iqbal Nurfikri",
        "npm" => "233040086",
        "major" => "Teknik Informatika",
        "email" => "iqbal.233040086@unpas.ac.id",
        "profile_picture" => "https://picsum.photos/id/233/100/100"
    ],
    [
        "name" => "Aksa",
        "npm" => "233040087",
        "major" => "Teknik Informatika",
        "email" => "aksa33@gmail.com",
        "profile_picture" => "https://picsum.photos/id/236/100/100"
    ],
    [
        "name" => "Arion",
        "npm" => "233040088",
        "major" => "Teknik Informatika",
        "email" => "arion22@gmail.com",
        "profile_picture" => "https://picsum.photos/id/292/100/100"
    ],
    [
        "name" => "Arvin",
        "npm" => "233040089",
        "major" => "Teknik Informatika",
        "email" => "arvin55@gmail.com",
        "profile_picture" => "https://picsum.photos/id/932/100/100"
    ],
    [
        "name" => "Alex",
        "npm" => "233040090",
        "major" => "Teknik Informatika",
        "email" => "alex11@gmail.com",
        "profile_picture" => "https://picsum.photos/id/122/100/100"
    ],
    [
        "name" => "Azura",
        "npm" => "233040091",
        "major" => "Teknik Informatika",
        "email" => "azura66@gmail.com",
        "profile_picture" => "https://picsum.photos/id/222/100/100"
    ],
    [
        "name" => "Bahran",
        "npm" => "233040092",
        "major" => "Teknik Informatika",
        "email" => "bahran77@gmail.com",
        "profile_picture" => "https://picsum.photos/id/134/100/100"
    ],
    [
        "name" => "Bariq",
        "npm" => "233040093",
        "major" => "Teknik Informatika",
        "email" => "bariq88@gmail.com",
        "profile_picture" => "https://picsum.photos/id/631/100/100"
    ],
    [
        "name" => "Dylan",
        "npm" => "233040094",
        "major" => "Teknik Informatika",
        "email" => "dylan99@gmail.com",
        "profile_picture" => "https://picsum.photos/id/261/100/100"
    ],
    [
        "name" => "Dawud",
        "npm" => "233040095",
        "major" => "Teknik Informatika",
        "email" => "dawud101@gmail.com",
        "profile_picture" => "https://picsum.photos/id/132/100/100"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa Unpas 2023</title>
</head>

<body>
    <h1>MAHASISWA BERPRESTASI 2024</h1>

    <ol>
        <?php
        foreach ($students as $student) {
            echo "<li> <br>
            <img src='$student[profile_picture]'> <br>
            Nama : $student[name] <br>
            NPM : $student[npm] <br>
            Jurusan : $student[major] <br>
            Email : $student[email] <br>
            </li> <br>";
        }
        ?>
    </ol>
</body>

</html>