<link href="<?php echo base_url('css/adminlog.css'); ?>" rel="stylesheet">
<div class="login-page">
<?php $attributes = array('class' => 'login-form', 'method' => 'post','onsubmit'=>'return Validate(this);');?>
    <div class="form">
        <?php echo form_open(base_url()."index.php/user_ctrl/adduser", $attributes);?>          
        <input type="text" placeholder="username" name="username" />
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
  </div>
</div>