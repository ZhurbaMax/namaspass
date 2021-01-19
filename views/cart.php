<div class="container">
    <table class="table">
        <tbody>
        <? foreach ($cart as $item): ?>
            <tr>
                <th scope="row"><?php echo $countView ;?></th>
                <td><?php echo $item['title']; ?></td>
                <td><?php echo $item['price']; ?></td>
                <td><img class="card-img-top cart-img" src="<?php echo $item['image']; ?>"></td>
                <td> 1 </td>
                <td>
                    <form method="post" class="item-form">
                        <input type="hidden" name="id_delete"  value="<?php echo $item['id_product']; ?>" class="form-control" >
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>
</div>
