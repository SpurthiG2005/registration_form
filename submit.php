<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];

    echo "
    <html>
    <head>
        <title>Application Submitted</title>
        <style>
            body { font-family: Arial; background:#eef2f3; }
            .box {
                width: 50%;
                margin: 50px auto;
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px gray;
            }
            h2 { text-align:center; }
            p { font-size:18px; }
        </style>
    </head>

    <body>
        <div class='box'>
            <h2>Application Submitted Successfully</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Gender:</strong> $gender</p>
            <p><strong>Course:</strong> $course</p>
        </div>
    </body>
    </html>
    ";
}
?>
