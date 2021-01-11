<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="h2 mt-5 mb-5" style="text-align: center" > Shop </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Search for title</label>
                    <input type="title" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <div class="filter-price">
                <h6>Filter price</h6>
                <button type="button" class="btn btn-danger"> <a href="?a=max">Max price</a></button>
                <button type="button" class="btn btn-warning"><a href="?b=min">Min price</a></button>
            </div>
        </div>
        <div class="col-9">
            <div class="row">
                <? foreach ($wiewsProduct as $item ): ?>
                    <div class="col-4">
                        <div class="card" style="width: 16rem;">
                            <img class="card-img-top" src=" <?php echo $item['image']; ?> " alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item['title']; ?> </h5>
                                <p class="card-text"><?php echo $item['description']; ?></p>
                                <a  class="btn btn-primary">Price <?php echo $item['price']; ?> $</a>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>

    </div>
</div>

