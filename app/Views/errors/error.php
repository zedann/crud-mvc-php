<div class="container">
<a class="btn btn-warning my-3" href="<?php route('/home')?>">Back To Home</a>
<?php if(isset($error)):?>
        <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
        </div>
    <?php endif; ?>
</div>