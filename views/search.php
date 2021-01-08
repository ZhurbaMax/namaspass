<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="h2 mt-5 mb-5" style="text-align: center" > Searching results </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <? foreach ($resultSearchProduct as $item ): ?>
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
