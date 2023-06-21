<?php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';
$connect = mysqli_connect("localhost", "root", "root", "shortlink");
connect = mysqli_connect("localhost", "root", "root", "shortlink");
$filtered = [
  "request",
  "porn",
  "sexy",
  "vrporn"
];
// Create Router instance
$router = new \Bramus\Router\Router();

$router->get("/(.*)", function ($query) {
  if (!$query) {
    include_once "./home.php";
  } else {
    include_once "./redirect.php";
  }
});
$router->post("/create", function () use ($connect) {
  if (!isset($_POST["url"]) || !isset($_POST["toUrl"])) {
    echo json_encode(array("status" => false, "message" => "Missing params"));
    die();
  }
  // Check exists
  $request = htmlspecialchars($_POST['url']);
  $toUrl = htmlspecialchars($_POST['toUrl']);
  // check url is empty
  if (empty($request) || empty($toUrl)) {
    echo json_encode(array("status" => false, "message" => "Missing params"));
    die();
  }


  if (isset($filtered[$request])) {
    echo json_encode(array("status" => false, "message" => "Not allowed"));
    die();
  }
  $stmt = $connect->prepare("SELECT * FROM `links` WHERE `url` = ?");
  $stmt->bind_param("s", $request);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    echo json_encode(array("status" => false, "message" => "Link already exists"));
    die();
  }
  $stmt = $connect->prepare("INSERT INTO `links` (`url`,`ip`,`result`) VALUES (?,?,?)");
  $stmt->bind_param("sss", $request, $_SERVER['REMOTE_ADDR'], $toUrl);
  $stmt->execute();
  echo json_encode(array("status" => true, "message" => "Success"));
});

$router->post("/lookup", function () use ($connect) {
  if (!isset($_GET["id"])) {
    echo json_encode(array("status" => false, "message" => "Missing params"));
    die();


  }
  $id = htmlspecialchars($_GET['id']);
  $stmt = $connect->prepare("SELECT * FROM `links` WHERE `url` = ?");
  $stmt->bind_param("s", $id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    // get first item
    $row = $result->fetch_assoc();
    echo json_encode(array("status" => true, "message" => "Success", "url" => $row["result"]));
    die();
  } else {
    echo json_encode(array("status" => false, "message" => "Not found", "length" => $result->num_rows));
    die();
  }
});

$router->run();
