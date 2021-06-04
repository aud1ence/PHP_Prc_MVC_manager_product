<table class="table">
    <div class="img-thumbnail">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name Product</th>
            <th scope="col">Cost</th>
            <th scope="col">Vendor</th>
            <th scope="col">Image</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($products as $key => $product): ?>
            <tr>
                <th scope="row"><?php echo $key + 1; ?></th>
                <td><?php echo $product->name; ?></td>
                <td><?php echo $product->cost; ?></td>
                <td><?php echo $product->vendor; ?></td>

                <td><img src="<?php echo $product->image; ?>" class="rounded" alt="img"></td>

<!--                <td><a href="./index.php?page=products&action=delete&id=--><?php //echo $product->id; ?><!--"-->
<!--                       class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a></td>-->
                <!--        <td><button type="submit" class="btn btn-danger" value="--><?php //echo $product->id ?><!--"><a href="./index.php?page=delete&id=--><?php //echo $customer->id; ?><!--"-->
                <!--                                                                                               class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a></button></td>-->
<!--                <td><a href="./index.php?page=products&action=edit&id=--><?php //echo $product->id; ?><!--"-->
<!--                       class="btn btn-info btn-sm" >Edit</a></td>-->
<!--                </td>-->
            </tr>

        <?php endforeach; ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="5">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-secondary" disabled>Previous</button>
                        <a href="index.php?page=products&action=list" type="button" class="btn btn-secondary">1</a>
                        <!--                    <a href="index.php?page=products&action=list&page=2" type="button" class="btn btn-secondary">2</a>-->
                        <button type="button" class="btn btn-secondary" >Next</button>
                    </div>
            </td>
        </tr>
    </div>
    </tbody>
</table>
