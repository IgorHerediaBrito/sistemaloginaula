<?php
include "config.php";
include DIR_PATH."./template/header.php";
?>
<main>
    <form action="template/conexao.php" method="POST" >
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Example label</label>
            <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Another label</label>
            <input type="password" name="password"class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</main>

<?php
require DIR_PATH."/template/conexao.php";
require DIR_PATH."/template/footer.php";
?>