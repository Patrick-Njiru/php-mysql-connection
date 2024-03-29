<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <style type="text/css">
    body {
      background-color: #FBB917;
    }

    fieldset {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      width: 300px;
      height: 50px;
      border: 0;
      margin: 10px 0;
    }

    input {
      outline: none;
      border: 0;
      height: 20px;
    }

    #submit {
      display: block;
      margin: 0 auto;
      width: fit-content;
      text-align: center;
    }
  </style>
</head>

<body>
  <h1>Blood Donation Camp</h1>
  <div>
    <h2>Registration form</h2>
    <form action="connect.php" method="POST">
      <fieldset>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required>
      </fieldset>
      <fieldset>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
      </fieldset>
      <fieldset>
        <label for="phone">Phone: </label>
        <input type="text" name="phone" id="phone">
      </fieldset>
      <fieldset>
        <label for="bgroup">Blood Group: </label>
        <input type="text" name="bgroup" id="bgroup">
      </fieldset>
      <fieldset>
        <input type="submit" name="submit" id="submit">
      </fieldset>
    </form>
  </div>

</body>

</html>