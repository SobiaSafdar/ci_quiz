<section id="main" class="column">	
    <article class="module width_full">
        <header>
            <h3 class="tabs_involved">Result</h3>
        </header>
    <div class="tab_container">
        <div id="tab1" class="tab_content" style="display: block;">
        <table class="tablesorter" cellspacing="0"> 
        <thead> 
            <tr> 
                <th class="header">User</th> 
                <th class="header">Question</th> 
                <th class="header">Correct</th> 
                <th class="header">Wrong</th> 
                <th class="header">Action</th> 
            </tr> 
        </thead> 
        <tbody> 
        <?php 
        if(isset($list) && $list!='')
            foreach($list as $data)     {  ?>
            <tr> 
                <td><?php echo $data->username; ?></td> 
                <td><?php echo ($data->correct)+($data->wrong); ?></td> 
                <td><?php echo $data->correct; ?></td> 
                <td><?php echo $data->wrong; ?></td> 
                <td>
                    <a href="<?php echo base_url('index.php/test_ctrl/del_test/'.$data->id); ?>"><input  type="image" src="<?php echo base_url('images/icn_trash.png'); ?>" title="Trash"></a>
                </td> 
            </tr> 
        <?php } ?>
        </tbody> 
        </table>
        </div><!-- end of #tab1 -->
    </div><!-- end of .tab_container -->
    </article>
</section>