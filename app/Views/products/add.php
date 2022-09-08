<h2 class="text-center my-5">Add New Product </h2>
<div class="container">
    <div class=" p-3 text-dark border">
        <?php if(isset($success)):?>
            <div class="alert alert-success" role="alert">
            Product Has Been Added Successfuly
            </div>
            <?php endif; ?>
            <?php if(isset($error)): ?>
            <div class="alert alert-danger" role="alert">
                Error!! Try Again..
            </div>
        <?php endif; ?>
        <form method="POST" action="<?php route('/product/store')?>">
            <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="Name">
            </div>
            <div class="mb-3">
            <label for="Price" class="form-label">Price</label>
            <input type="Number" class="form-control" name="price" id="Price">
            </div>
            <div class="mb-3">
            <label for="Description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="Description">
            </div>
            <div class="mb-3">
            <label for="Quantity" class="form-label">Quantity</label>
            <input type="Number" class="form-control" name="qty" id="Quantity">
            </div>
            <button type="submit" name="submit" class="btn btn-dark w-100">Add</button>
        </form>
    </div>
    
</div>
