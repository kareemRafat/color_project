
<a class="btn btn-primary" href="?action=add">Add user</a>
  <br><br>
  <table class="table table-hover table-bordered table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>username</th>
        <th>email</th>
        <th>Address</th>
        <th>gender</th>
        <th>priv</th>
        <th>controlls</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      include "functions/connect.php";
      $select = "SELECT * FROM users";
      $query  = $conn -> query($select);
      foreach($query as $user) { 
    ?>
      <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['username'] ?></td>
        <td><?= $user['email'] ?></td>
        <td><?= $user['address'] ?></td>
        <td><?php 
        
          if ($user['gender'] == 0 ) { 
            echo "Male";
          } else {
            echo "Female";
          }
        
        ?></td>
        <td><?= $user['priv'] == 0 ? 'Admin' : 'User' ?></td>
        <td>
          <a class="btn btn-primary" href="">Edit</a>  
          <a class="btn btn-danger" href="">Delete</a>  
        
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
