<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="h2 mt-5 mb-5" style="text-align: center" > Shop </div>
        </div>
    </div>
    <div class="row">
        <? foreach ($wiewsProduct as $item ): ?>
            <div class="col-3">
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