<?php
      require 'config.php';
      $i=0;
      $sql = "SELECT * FROM file  A INNER JOIN users B ON A.id = B.id";
       $tampil=mysql_query($sql);
       while($data=mysql_fetch_array($tampil)){
        $i++;
       ?>
       <tr>
        <?php 
          $name = explode('/', $data['file']);
        ?>
        <td align="center"><?php echo $i ?></td>
        <td align="center"><?php echo $data['username']?></td> 
        <td align="center"><?php echo $data['name']?></td>
        <td align="center"><a href="../download.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a></td>

      </tr>
      <?php
    }
    ?>
