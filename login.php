<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="signup_handler.php" method="post">
  <label for="name">Username:</label><br>
  <input type="text" id="name" name="name" placeholder= "Enter username" required><br>
  <label for="epass">Enter password:</label><br>
  <input type="password" id="epass" name="epass" placeholder="Enter password" required><br>
  <label for="repass">Re-enter password:</label><br>
  <input type="password" id="repass" name="repass" placeholder="Re-enter password" required><br><br>
  <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

