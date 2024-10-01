<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hi i am client</p>
    </div>
  <div class="delete">
    <form action="delete.php">  
      <input type="submit" value="Delete Account" onclick="confirmDelete()">
    </form>
    <form action="account.php">
      <input type="submit" value="Edit">
    </form>
    <form action="logout.php" method="post"> 
        <input name="logoff" type="submit" value="Logout" onclick="logoff()" > 
    </form>
  </div>
</body>
</html>