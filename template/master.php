
<?php require_once("template/layouts/header.php") ?>
<script>

$(document).ready(function() {
  $('.btn-delete').on('click', function() {
    var id = $(this).data('id'); // Gets '#myModal'
    $("#hdnid").val(id);
  });
});

</script>
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
            <a class="btn btn-danger btn-delete" data-id="<?=$book["id"];?>" data-toggle="modal" data-target="#exampleModalCenter" style=""><i class="fa fa-trash"></i></a>
        </td>
      </tr>
  <?php } ?>
</table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <form method="post" action="<?=$base_url;?>action/books/delete.php">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input id="hdnid" name="hdnid" type="text">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

<?php require_once("template/layouts/bottom.php") ?>
