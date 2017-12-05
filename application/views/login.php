<div class="container">
  <div class="col-md-6 col-md-offset-3" style="margin-top:100px; margin-bottom:100px;">
    <form class="" action="<?php echo base_url() ?>login/login" method="post">
      <div class="form-group">
        <input type="text" name="lgUsername" value="" placeholder="Username" class='form-control'>
      </div>
      <div class="form-group">
        <input type="password" name="lgPassword" value="" placeholder="Password" class='form-control'>
      </div>
      <div class="form-group">
        <input type="submit" class="center btn-danger" name="lgSubmit" value="Login" >
      </div>
    </form>
    <?php if($this->session->flashdata('error')): ?>
      <?php echo $this->session->flashdata('error'); ?>
    <?php endif; ?>
  </div>
</div>
