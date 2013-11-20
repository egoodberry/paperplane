<?php
  if (count($_POST) > 0) {
    $response = "";

    function generate_reservation_response($type, $message){
      global $response;

      if ($type == "success") {
        $response = "<div class='success-message'>{$message}</div>";
      }
      else {
        $response = "<div class='error-message'>{$message}</div>";
      }
    }

    $email_invalid   = "Email Address is invalid.";
    $missing_content = "Please check your entry and try again.";
    $message_unsent  = "Message was not sent. Try again.";
    $message_sent    = "Your reservation request has been submitted.<br/><p>Please note that requests are not confirmed until you have received a confirmation by phone or email.</p>";

    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $notes = strip_tags($_POST['notes']);
    $dateRaw = $_POST['date'];
    $date = date("l, F j", strtotime($dateRaw));
    $time = $_POST['time'];
    $partysize = $_POST['partysize'];

    $to = "reservations@vicbrands.com";
    $subject = "PP Reservation Request / {$fullname}";
    $headers = 'From: '. $email . "\r\n" .
      'Reply-To: ' . $email . "\r\n";
    $body =
      "Name: {$fullname}" . "\r\n" .
      "Phone: {$phone}" . "\r\n" .
      "Email: {$email}" . "\r\n" .
      "Date/Time: {$date}, {$time}" . "\r\n" .
      "Party Size: {$partysize}" . "\r\n" .
      "Notes: {$notes}";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      generate_reservation_response("error", $email_invalid);
    }
    else if (empty($fullname) || empty($phone) || empty($email)) {
      generate_reservation_response("error", $missing_content);
    }
    else {
      $sent = wp_mail($to, $subject, $body, $headers);
      if ($sent) {
        generate_reservation_response("success", $message_sent);
      }
      else {
        generate_reservation_response("error", $message_unsent);
      }
    }
  }

  function select($value) {
    if ($_POST['time'] == $value) {
      return "selected";
    }
  }

  function select_party($value) {
    if ($_POST['partysize'] == $value) {
      return "selected";
    }
  }

?>

<?php get_header(); ?>

<?php echo $response; ?>

<div id="reservations">
  <p><img src="<?php bloginfo('template_directory'); ?>/images/logo-big.png" alt="Paper Plane" /></p>

  <div class="container">
    <div class="reserve-header">
      <h1>
        Reserve
      </h1>
      <div class="vr">&nbsp;</div>

      <p>
        Reservation requests are available to groups of 4 or more, and must be placed at least 3 days in advance.
        Parties of 3 or less are welcome to join us on a first come first serve basis. Fill out all fields and we
        will respond shortly with a confirmation, or the closest alternative available.
      </p>
      <hr class="large" />
    </div>

    <form action="<?php the_permalink(); ?>" method="post" class="reservations-form">

      <div class="form-row">
        <label>
          <span>
            *Name
          </span>
          <input type="text" name="fullname" value="<?php echo esc_attr($_POST['fullname']); ?>" required />
        </label>
      </div>

      <div class="form-row">
        <label>
          <span>
            *Phone
          </span>
          <input type="text" name="phone" value="<?php echo esc_attr($_POST['phone']); ?>" required />
        </label>
      </div>

      <div class="form-row">
        <label>
          <span>
            *Email
          </span>
          <input type="email" name="email" value="<?php echo esc_attr($_POST['email']); ?>" required />
        </label>
      </div>

      <div class="form-row datetime">
        <div class="date">
          <label>
            <span>
              *Date
            </span>
            <div class="datepicker"></div>
          </label>
        </div>

        <div class="time">
          <label>
            <span>
              *Time
            </span>
            <select name="time">
              <option value="5:00 p" <?php echo select("5:00 p"); ?>>5:00 pm</option>
              <option value="6:00 p" <?php echo select("6:00 p"); ?>>6:00 pm</option>
              <option value="7:00 p" <?php echo select("7:00 p"); ?>>7:00 pm</option>
              <option value="8:00 p" <?php echo select("8:00 p"); ?>>8:00 pm</option>
              <option value="9:00 p" <?php echo select("9:00 p"); ?>>9:00 pm</option>
              <option value="10:00 p" <?php echo select("10:00 p"); ?>>10:00 pm</option>
            </select>
          </label>
        </div>

        <div class="party-size">
          <label>
            <span>
              *Party Size
            </span>
            <select name="partysize">
              <option value="4" <?php echo select_party("4"); ?>>4</option>
              <option value="5" <?php echo select_party("5"); ?>>5</option>
              <option value="6" <?php echo select_party("6"); ?>>6</option>
              <option value="7" <?php echo select_party("7"); ?>>7</option>
              <option value="8+" <?php echo select_party("8+"); ?>>8+</option>
            </select>
          </label>
        </div>
      </div>

      <div class="form-row">
        <label>
          <span>
            Notes
          </span>
          <textarea name="notes" rows="4"><?php echo esc_textarea($_POST['notes']); ?></textarea>
        </label>
      </div>

      <input type="hidden" name="date" id="reservation_date" data-saved="<?php echo $dateRaw; ?>" />

      <p>
        Please note that requests are not confirmed until you have received a confirmation by phone or email. Thank you.
      </p>

      <div class="form-row">
        <input type="submit" value="Submit Request" />
      </div>

    </form>
  </div>

  <p class="reservations-back">
    <a href="/">Back to Main Site</a>
  </p>
</div>
