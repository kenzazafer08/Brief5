<?php require APPROOT . "/views/inc/header.php"; ?>
<?php require APPROOT . "/views/admin/navbar.php"; ?>
<div style="display: flex; justify-content:space-around">
<h1 style="color: white;">SinMkt Administration</h1>
<a class="discover" href="<?php echo URLROOT ?>/dashboard/addproduct">Add product</a>
</div>
<div style="min-height: 300px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;"><table class="table" style="width: 80%; color:black">
  <thead>
    <tr>
	  <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Discription</th>
	  <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($data['products'] as $product) : ?>
    <tr>
      <th><img src="<?= $product->image ?>" style="width:100px ; height:100px"></th>
      <td><?= $product->name ?></td>
      <td>$<?=number_format($product->price , 2)?></td>
      <td><?= $product->name_cat ?></td>
	  <td><?= $product->description ?></td>
      <td style="display: flex; justify-content:space-around"><a href="<?php echo URLROOT ?>/dashboard/edit/<?php echo $product->id_prod ?>"><i class="fa fa-edit"></i></a>
      <a href="<?php echo URLROOT ?>/dashboard/delete/<?php echo $product->id_prod ?>"><i class="fa fa-trash"></i></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
<?php require APPROOT . "/views/inc/footer.php"; ?>