<form action="" method="post" enctype="multipart/form-data">
    <table style="margin-left: 500px">
        <tr>
            <td>Them moi</td>
        </tr>
        <tr>
            <td>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Product</span>
                    </div>
                    <input type="text" name="name" class="form-control" placeholder="Product name"
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
                    <input type="text" name="cost" class="form-control" placeholder="Product cost"
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
                    <input type="text" name="vendor" class="form-control" placeholder="Product vendor"
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
                <a href="index.php?page=products&action=list&pg=1" type="button" class="btn btn-secondary btn-lg">Cancel
                    here</a>
            </td>
        </tr>
    </table>
</form>
