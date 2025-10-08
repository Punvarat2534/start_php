
<?php require_once("template/layouts/header.php") ?>
<div class="container">
  
<div class="row" style="background-color:white;padding:1em;min-height:500px;">
  <h2>Responsive Topnav Example</h2>
  <p>Resize the browser window to see how it works.</p>
  
<br> <a href="<?=$base_url;?>template/create.php" class="btn btn-primary" style="color:white;width:50px;height:35px;right:0;">เพิ่ม</a>

<table class="temps" style="margin-top:50px;">
  <tr>
    <th>isbn</th>
    <th>title</th>
    <th>publisher</th>
    <th>author</th>
    <th>year</th>
    <th></th>
  </tr>

  <?php   
  $books= $DB->query("SELECT * FROM books");
  foreach($books as $book){ ?>
      <tr>
        <td><?=$book["isbn"];?></td>
        <td><?=$book["title"];?></td>
        <td><?=$book["publisher"];?></td>
        <td><?=$book["author"];?></td>
        <td><?=$book["year"];?></td>
        <td style="text-align:center;">
            <a class="btn btn-primary" href="<?=$base_url;?>template/edit.php?id=<?=$book["id"];?>"><i class="fa fa-pencil"></i></a>
             <a class="btn btn-danger" style=""><i class="fa fa-trash"></i></a>
        </td>
      </tr>
  <?php } ?>
</table>
</div>
</div>

<?php require_once("template/layouts/bottom.php") ?>
