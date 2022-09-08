<h2 class="text-center my-5">View All Products </h2>
<div class="container">
    <?php if(isset($deleted)):?>
        <div class="alert alert-success" role="alert">
        <?php echo $deleted; ?>
        </div>
    <?php endif; ?>
           
    <table class="table border">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Process</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($products as $prod ):?>
    <tr>
        <td ><?php echo $prod['id']?></td>
        <td><?php echo $prod['name']?></td>
        <td><?php echo $prod['price']?></td>
        <td><?php echo $prod['description']?></td>
        <td><?php echo $prod['qty']?></td>
        <td>
            <a class="btn btn-info" href="<?php route('/product/edit',$prod['id'])?>">Edit</a>
            <a class="btn btn-danger" href="<?php route('/product/delete',$prod['id'])?>">Delete</a>
        </td>
    </tr>
    <?php endforeach;?>
    
  </tbody>
</table>
</div>
