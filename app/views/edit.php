<form action="" method="post" enctype="multipart/form-data">
    <?php foreach ($products as $product):
//        var_dump($product->image);
//    die();
        ?>
        <table style="margin-left: 500px">
            <tr>
                <td>Sua thong tin</td>
            </tr>
            <tr>
                <td>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Product</span>
                        </div>

                        <input type="text" name="name" class="form-control" value="<?php echo $product->name ?>"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Cost</span>
                        </div>
                        <input type="text" name="cost" class="form-control" value="<?php echo $product->cost ?>"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Vendor</span>
                        </div>
                        <input type="text" name="vendor" class="form-control" value="<?php echo $product->vendor ?>"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Image</span>
                        </div>
                        <input type="text" name="image" class="form-control" value="<?php echo $product->image ?>"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload"
                                   aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose photo</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit now</button>
                    <a href="index.php?page=products&action=list&pg=1" type="button"
                       class="btn btn-secondary btn-lg">Back</a>
                </td>
            </tr>
            <tr>
                <td><img src="<?php echo $product->image ?>" alt=""></td>
            </tr>
        </table>
    <?php endforeach; ?>
</form>
