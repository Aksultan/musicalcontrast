<?php
include 'nav_all.php';
?>
<div class="col-md-12" style="height:auto">
    <input type="text" id="search" class="form-control" style="margin: auto;width:60%;float: left;border-radius:0;" placeholder="Enter product name..">
                        <span class="input-group-btn" href="search_page.php" onclick="search()" style="width: 20%;float: left">
                            <button class="btn btn-default" type="button" style="float: left;border-radius:0;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </span>
    <ul class="search_result"></ul>
</div>
<?php
include 'footer.php';
?>
