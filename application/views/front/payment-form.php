<html>
  <head>
    <title>PhonePe Payment Form</title>
  </head>
  <body>
    <h2>PhonePe Payment Form</h2>
    <form action="<?php echo base_url() ?>payment/checkout" method="POST">
      <label for="amount">Amount:</label>
      <input type="text" id="amount" name="amount" value="10">
      <br><br>
      <input type="submit" value="Pay with PhonePe">
    </form>
  </body>
</html>