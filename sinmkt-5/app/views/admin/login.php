<?php require APPROOT . "/views/inc/header.php"; ?>
<?php require APPROOT . "/views/inc/navbar.php"; ?>

<div class="login" style="width: 100%;
    height: 90vh;
    display: flex;
    justify-content: center;
    align-items: center;">
    <div style="width: 50%; padding: 20px;">
<form style="margin-top: 10rem; width: 90%;" action="<?php echo URLROOT ?>/admin" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter email" <?php echo (!empty($data['username_err']) ? 'is-invalid' : ''); ?>" value="<?php echo $data['username'] ?>">
    <span class="invalid-feedback"><?php echo $data['username_err'] ?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password"  placeholder="Password" >
    <span class="invalid-feedback"><?php echo $data['password_err'] ?></span>
  </div>
  <button type="submit" class="btn btn-primary" style="background-color: #e99c2e !important; border:#e99c2e">Submit</button>
</form></div>
</div>
<?php require APPROOT . "/views/inc/footer.php"; ?>