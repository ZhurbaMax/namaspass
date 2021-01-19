<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="h2 mt-5 mb-5 text-align" > Shop </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <form method="post" action="searchtitle">
                <div class="form-group">
                    <label for="exampleInputEmail1">Search for title</label>
                    <input type="title" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <form method="post" action="filterprice">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Filter price</label>
                    <select class="form-control"  name="filter_price" id="exampleFormControlSelect1">
                        <option>cheap at first</option>
                        <option>dear first</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Go</button>
            </form>
            <form method="post" action="brandfilter">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Filter brand</label></br>
                        <? foreach ($variableBrand as $item): ?>
                            <input type="checkbox" name="brand[]" value="<?=$item?>"> <?=$item?> </br>
                        <? endforeach; ?>
                </div>
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
        <div class="col-9">
            <div class="row">
                <? foreach ($variableView as $item ): ?>
                    <div class="col-4">
                        <div class="card" style="width: 16rem;">
                            <img class="card-img-top" src=" <?php echo $item['image']; ?> " alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item['title']; ?> </h5>
                                <p class="card-text brand"><?php echo $item['brand']; ?></p>
                                <p class="card-text"><?php echo $item['description']; ?></p>
                                <a  class="btn btn-primary">Price <?php echo $item['price']; ?> $</a>
                                <form method="post" class="item-form" action="">
                                    <input type="hidden" name="id_card"  value="<?php echo $item['id_product']; ?>" class="form-control" >
                                    <button type="submit" class="btn btn-success">Add card</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>
