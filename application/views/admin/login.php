<link href="<?php echo base_url('css/adminlog.css'); ?>" rel="stylesheet">
<div class="login-page">
<?php      
$attributes = array('class' => 'login-form', 'method' => 'post','onsubmit'=>'return Validate(this);');
echo form_open('login_ctrl/dologin',$attributes);
?>
    <div class="form">
        <?php echo form_open(base_url()."index.php/login_ctrl/dologin", $attributes);?>          
        <input type="text" placeholder="username" name="username" value="admin" />
        <input type="password" placeholder="password" name="password" value="admin"/>
        <button type="submit" name="submit" value="submit">login</button>
<!--      <p class="message">Not registered? <a href="#">Create an account</a></p>-->
    </form>
  </div>
</div>