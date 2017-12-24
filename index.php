<?php include_once("header.php"); ?>

<div class="row">
    <table class="table table-hover table-sm table-fixed">
        <thead>
            <tr class="d-flex">
                <th class="col-1">#</th>
                <th class="col-2">First Name</th>
                <th class="col-5">Last Name</th>
                <th class="col-4">Username</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0; $i<=50; $i++) { ?>

            <tr class="d-flex">
                <td class="col-1">1</td>
                <td class="col-2">Mark</td>
                <td class="col-5">Otto</td>
                <td class="col-4">@mdo</td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
</div>

<div class="row">
    <!--user icon in two different styles-->
    <div class="col-4">
        <i class="fas fa-user"></i>
    </div>
    <div class="col-4">
        <i class="far fa-user"></i>
    </div>
    <div class="col-4">
        <!--brand icon-->
        <i class="fab fa-github-square"></i>
    </div>
</div>

<?php include_once("footer.php"); ?>
