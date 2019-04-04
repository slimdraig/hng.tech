<!DOCTYPE html>
<html>
	<!-- <head>
		<meta charset="UTF-8">
		<title>The HNG Internship</title>
		<link rel="stylesheet" href="app/css/app.css?version=1'" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="shortcut icon" type="image/png" href="app/img/favicon.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head> -->

  <?php

  $request = $_SERVER['REQUEST_URI'];

  if (strlen($request) > 1) {
    $request = rtrim($request, '/');
  }

  switch ($request) {
      case '/' :
          require __DIR__ . '/views/index.php';
          break;
      case '/support' :
          require __DIR__ . '/views/support.php';
          break;
      case '/about' :
          require __DIR__ . '/views/about.php';
          break;
      case '/interns' :
          require __DIR__ . '/views/interns.php';
          break;
      case '/interns/richard' :
          require __DIR__ . '/views/interns/richard.php';
          break;
      case '/interns/current' :
          require __DIR__ . '/views/current.php';
          break;
          case '/become-intern' :
          require __DIR__ . '/views/become-intern.php';
          break;
        case '/intern/Akin' :
          require __DIR__ . '/views/Akin.php';
      case '/interns/template' :
          require __DIR__ . '/views/interns/template.php';
          break;
      case '/interns/iamserver' :
          require __DIR__ . '/views/interns/iamserver.php';
          break;
        case '/interns/dammy' :
          require __DIR__ . '/views/interns/dammy.php';
          break;
      case '/interns/test' :
          require __DIR__ . '/views/interns/test.php';
          break;
      case "/interns/somtozech":
          require __DIR__ . '/views/somtozech.php';
      case '/interns/mayflower' :
          require __DIR__ . '/views/interns/mayflower.php';
          break;
      case '/interns/chiaju' :
          require __DIR__ . '/views/interns/chiaju.php';
      break;
     case '/interns/hackthievist' :
          require __DIR__ . '/views/hackthievist.php';
          break;
      case '/interns/mercyikpe' :
          require __DIR__ . '/views/interns/mercyikpe.php';
      case '/interns/aniebiet' :
          require __DIR__ . '/views/interns/aniebiet.php';
          break;
	  case '/interns/slim' :
          require __DIR__ . '/views/interns/slim.php';
          break;
      default:
          require __DIR__ . '/views/404.php';
          break;
  }
?>

</html>
