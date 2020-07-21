
<html>
    <head>
        <title>Result</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/test.css">
    </head>
    <body>
        <center><table>

  <tr>
    <th style="width:25%">First Name</th>
    <td><?php echo($_POST['firstname']); ?></td>
  </tr>
  <tr>
    <th>Last Name</th>
    <td><?php echo($_POST['lastname']); ?></td>
  </tr>
  <tr>
    <th>E-Mail</th>
    <td><?php echo($_POST['email']); ?></td>
  </tr>
  <tr>
    <th>Contact No</th>
    <td><?php echo($_POST['phone']); ?></td>
  </tr>
            </table></center>
    </body>
</html>