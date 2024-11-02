<?php
$servername = "localhost";
$username = "g115685_turan_us";
$password = "1KqiC&th_1D6fh:O";
$dbname = "g115685_turan";

$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");


if (!$conn) {                                                           // Удаление сессионных cookie
    die("Connection failed: " . mysqli_connect_error());
}


session_start();                                                        // запуск сессии

if (!isset($_SESSION["user_id"])) {                                     // SESSION
    header("Location: auth.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {                             // POST
    $name = $_POST["name"];
}


if (isset($_GET["logout"])) {                                           // GET
    $logout = $_GET['logout'];

    if ($logout == 1) {
        $_SESSION = array();                                            // Удаление сессионных cookie

        if (ini_get("session.use_cookies")) {                           // Удаление сессионных cookie
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        session_destroy();                                              // уничтожение сессии

        header("Location: auth.php");                                   // Перенаправление на страницу авторизации
        exit();
    }
}


$sql = "SELECT * FROM names";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["name"];
    }
}
