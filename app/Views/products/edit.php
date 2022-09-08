<h2 class="text-center my-5">Update Product</h2>
<div class="container">
    <div class=" p-3 text-dark border">
        <?php if(isset($success)):?>
            <div class="alert alert-success" role="alert">
            Product Has Been Updated Successfuly
            </div>
            <?php endif; ?>
            <?php if(isset($error)): ?>
            <div class="alert alert-danger" role="alert">
                Error!! Try Again...
            </div>
        <?php endif; ?>
        <form method="POST" action="<?php route('/product/update',$product['id'])?>">
            <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" value="<?=$product['name'] ?>" name="name" id="Name">
            </div>
            <div class="mb-3">
            <label for="Price" class="form-label">Price</label>
            <input type="Number" class="form-control" value="<?=$product['price'] ?>" name="price" id="Price">
            </div>
            <div class="mb-3">
            <label for="Description" class="form-label">Description</label>
            <input type="text" class="form-control" value="<?=$product['description'] ?>" name="description" id="Description">
            </div>
            <div class="mb-3">
            <label for="Quantity" class="form-label">Quantity</label>
            <input type="Number" class="form-control" value="<?=$product['qty'] ?>" name="qty" id="Quantity">
            </div>
            <button type="submit" name="submit" class="btn btn-dark w-100">Add</button>
        </form>
    </div>
    
</div>
