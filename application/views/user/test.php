<form name="myForm" method="post" class="register" action="<?php echo base_url('index.php/test_ctrl/check_test'); ?>"  enctype="multipart/form-data" >
<section id="main" class="column">	
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Question List</h3>
        </header>
        <div class="module_content">
        <?php $i=1; foreach($list as $data)     {  ?>
        <fieldset>
            <label style=" width: 40px;">Q<?php echo $i; ?> :<input type="hidden" name="answer<?php echo $i; ?>" value="<?php echo $data->answer; ?>"></label><?php echo $data->question; ?>
            <br><br><label style=" width: 40px;"><input type="radio" name="q<?php echo $i; ?>" value="1" checked=""></label><?php echo $data->option1; ?>
            <br><br><label style=" width: 40px;"><input type="radio" name="q<?php echo $i; ?>" value="2"></label><?php echo $data->option2; ?>
            <br><br><label style=" width: 40px;"><input type="radio" name="q<?php echo $i; ?>" value="3"></label><?php echo $data->option3; ?>
            <br><br><label style=" width: 40px;"><input type="radio" name="q<?php echo $i; ?>" value="4"></label><?php echo $data->option4; ?>
            <br><br>
        </fieldset>
        <?php 
        $i++;
        } ?>
        </div>
          <footer>
            <div class="submit_link">
                <input type="hidden" name="all" value="<?php echo $i-1; ?>">
                <input type="submit" name="submit" value="Submit" class="alt_btn">
            </div>
        </footer>
    
    </article>
     <div class="spacer"></div>     <div class="spacer"></div>
</section>
</form>