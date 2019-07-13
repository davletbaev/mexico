<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = strip_tags(trim($_POST["name"]));
  $name = str_replace(array("\r","\n"),array(" "," "),$name);
  $phone = trim($_POST["phone"]);
  $phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
  $contact = strip_tags(trim($_POST['contact']));
  $contact = str_replace(array("\r","\n"),array(" "," "),$contact);
  $city = strip_tags(trim($_POST['city']));

  $has_tour_info = isset($_POST['date']);

  if ($has_tour_info) {
    $date = strip_tags(trim($_POST['date']));
    $seats_reserved = strip_tags(trim($_POST['seatsReserved']));
    $seats_available = strip_tags(trim($_POST['seatsAvailable']));
    $seats_total = strip_tags(trim($_POST['seatsTotal']));
    $duration = strip_tags(trim($_POST['duration']));
    $price_current = strip_tags(trim($_POST['priceCurrent']));
    $price_prev = strip_tags(trim($_POST['pricePrev']));
  }

  if ( !$name ) {
    http_response_code(400);
    echo "Поле «Имя» обязательно для заполнения: " . $_POST["name"];
    exit;
  }
  
  if ( !$phone ) {
    http_response_code(400);
    echo "Поле «Телефон/WhatsApp» обязательно для заполнения: " . $phone;
    exit;
  } 
  
  if ( !$contact ) {
    http_response_code(400);
    echo "Поле «E-mail или ID в соц. сетях» обязательно для заполнения: " . $contact;
    exit;
  }
  
  if ( !$city ) {
    http_response_code(400);
    echo "Поле «Город» обязательно для заполнения: " . $city;
    exit;
  }

  $recipient = "inferion00@gmail.com";

  $emailsubject = "Новая заявка: от " . $name;

  $email_content = "<h2>Новая заявка с сайта «Energy Travel»</h2>";
  $email_content .= "<p>Имя: $name</p>\r\n";
  $email_content .= "<p>Телефон/WhatsApp: $phone</p>\r\n";
  $email_content .= "<p>E-mail или ID в соц. сетях: $contact</p>\r\n";
  $email_content .= "<p>Город: " . $city . "</p>\r\n";

  if ($has_tour_info) {
    $email_content .= "<p>Количество мест: " . $seats_reserved . "</p>\r\n";
    $email_content .= "<hr/>\r\n";
    $email_content .= "<p>Даты: " . $date . "</p>\r\n";
    $email_content .= "<p>Мест доступно: " . $seats_available . "</p>\r\n";
    $email_content .= "<p>Всего мест: " . $seats_total . "</p>\r\n";
    $email_content .= "<p>Длительность: " . $duration . "</p>\r\n";
    $email_content .= "<p>Текущая цена: " . $price_current . "</p>\r\n";
    $email_content .= "<p>Предыдущая цена: " . $price_prev . "</p>\r\n";

  }

  $email_headers = 
    "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n".
    "От: $name <Energy Travel>\r\n";

  if (mail($recipient, $emailsubject, $email_content, $email_headers)) {
      http_response_code(200);
      echo 'Сообщение успешно отправлено';
  } else {
      http_response_code(500);
      echo "Произошла ошибка. Сообщение не было отправлено.\n Email Content: " . $email_content . "\n Email Subject: " . $emailsubject . "\n Recipient: " . $recipient;
  }

} else {
  http_response_code(403);
  echo "Произошла ошибка. Повторите попытку позднее.";
}
?>