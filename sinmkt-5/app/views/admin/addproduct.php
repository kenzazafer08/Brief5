<?php require APPROOT . "/views/inc/header.php"; ?>
<?php require APPROOT . "/views/admin/navbar.php"; ?>
<div class="login" style="width: 100%;
    min-height: 70vh;
    margin: 10px;
    display: flex;
    justify-content: center;
    align-items: center;">
    <div style="width: 50%; padding: 20px;">
<form style=" width: 90%;" action="<?php echo URLROOT ?>/dashboard/addproduct" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name">
    <span class="invalid-feedback"><?php echo $data['name_err'] ?></span>
  </div>
  <div class="form-group">
    <label for="price">price</label>
    <input type="text" class="form-control" name="price" placeholder="Enter price">
    <span class="invalid-feedback"><?php echo $data['price_err'] ?></span>
  </div>
  <div class="form-group">
    <label for="Image">Image</label>
    <input type="text" class="form-control" name="Image" placeholder="Enter Image URL">
    <span class="invalid-feedback"><?php echo $data['Image_err'] ?></span>
  </div>
  <div class="form-group">
    <label for="disc">Discription</label>
    <input type="text" class="form-control" name="desc" placeholder="Discription">
    <span class="invalid-feedback"><?php echo $data['description_err'] ?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputtext1">Category</label>
    <select name="id_cat" id="cat" class="form-control ">
                        <option value="0">Select a category</option>
                        <?php foreach($data['categories'] as $category) :?>
                        <option value="<?= $category->id_cat ?>"><?= $category->name_cat; ?></option>
                        <?php endforeach;?>
                    </select>
                    <span class="invalid-feedback"><?php echo $data['id_cat_err']; ?></span>
  </div>
  <button type="submit" class="btn btn-primary" style="background-color: #e99c2e !important; border:#e99c2e">Submit</button>
</form></div>
</div>
<?php require APPROOT . "/views/inc/footer.php"; ?>