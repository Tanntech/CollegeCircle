<?php
    include '../includes/connect.php';

    $sql = "SELECT * FROM `roadmap` WHERE `type` = \"field\";";
    $roadmap_table = mysqli_query($conn, $sql);
    $rows_num = mysqli_num_rows($roadmap_table);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers</title>
    <link rel="shortcut icon" href="../../Assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="wise_career.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .sem {
            flex-wrap: wrap;
        }
    </style>

</head>
<body>
    <nav>
        <div class="logo-box">
            <img src="../../Assets/logo.png" alt="logo" class="logo">
        </div>

        <div class="title">
            <span>Careers</span>
        </div>

        <a href="career.php">
            <button class="back">
                <!-- <i class="fa-solid fa-bars bar"></i> -->
                <!-- <i class="fa-solid fa-x cross"></i> -->
                <i class="fa-solid fa-arrow-left"></i>
                <span>BACK</span>
            </button>
        </a>
    </nav>

    <div class="screen">
        <div class="info">
            <h1>Field-wise Roadmaps</h1>
            <span>
                These complete roadmaps will help you build a career, have real fun, explore opportunities, and so on. Click the button on the tabs below to explore!
            </span>
        </div>
    <div class="sem">

        <!-- <div class="syllabus sem-box">
            <div class="imgd"></div>
            <h1 class="title">Web Development</h1>
            <p>To view the roadmap click on the button below!</p>
            <a href="" target="_blank" class="syllabus-link">
                <button>VIEW</button>
            </a>
        </div>

        <div class="notes sem-box">
            <div class="imgd"></div>
            <h1 class="title">Android Development</h1>
            <p>To view the roadmap click on the button below!</p>
            <a href="" target="_blank" class="notes-link">
                <button>VIEW</button>
            </a>
        </div> -->

        <!-- <div class="notes sem-box">
            <div class="imgd"></div>
            <h1 class="title">Software Development</h1>
            <p>To view the roadmap click on the button below!</p>
            <a href="" target="_blank" class="notes-link">
                <button>VIEW</button>
            </a>
        </div> -->

        <?php
            if ($rows_num == 0) {
                echo "No data found!";
            }
            while ($table = mysqli_fetch_assoc($roadmap_table)) {
                echo "<div class=\"notes sem-box\">";
                    echo "<div class=\"imgd\"></div>";
                    echo "<h1 class=\"title\">" . $table["title"] . "</h1>";
                    echo "<p>To view the roadmap on " . $table["title"] . " click the button below!</p>";
                    echo "<a href=\"" . $table["link"] . "\" target=\"_blank\" class=\"notes-link\"><button>VIEW</button></a>";
                echo "</div>";
            }
        ?>

    </div>
    </div>
</body>
</html>

<?php
    include '../includes/disconnect.php';
?>