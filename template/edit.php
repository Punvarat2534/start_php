
<?php 
require_once("./../action/books/edit.php");
require_once(dirname(__FILE__)."\layouts\header.php"); 
?>

<div class="container">
<div class="row" style="background-color:white;padding:1em;min-height:500px;">
  <h2>Responsive Topnav Example</h2>
  <p>Resize the browser window to see how it works.</p>
<form class="form-horizontal" method="post" action="./create.php" style="margin:0 auto;width:90%;">

<div class="form-group">
    <label class="control-label col-sm-2 col-md-12" for="isbn">isbn:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="isbn" name="isbn" placeholder="isbn" value="<?=$para["isbn"];?>" required>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="title">title:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="title" placeholder="title" required>
    </div>
</div>
  
<div class="form-group">
    <label class="control-label col-sm-2" for="author">author:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="author" name="author" placeholder="author" required>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="author">publisher:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="publisher" name="publisher" placeholder="publisher" required>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="author">year:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="year" name="year" placeholder="year" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="image">image:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="image" name="image" placeholder="publisher" required>
    </div>
</div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">

      <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
</div>

<?php require_once(dirname(__FILE__)."\layouts\bottom.php") ?>
