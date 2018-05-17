<?php
function spnin_theme_opts_page(){
$theme_opts         =get_option('spnin_opts');
//print_r($theme_opts);
  ?>

<div class="wrap">


  <div class="panel panel-success">
      <div class="panel-heading">
          <h4 class="panel-title"><?php _e('Spnin Theme Settings','spnin');?></h4>
      </div>
      <div class="panel-body col-md-8">
        <?php
        if(isset($_GET['status'])&& $_GET['status']=='1'){
          ?>
          <div class='alert alert-success'>Success</div>
          <?php
        }?>
          <form method="post" action="admin-post.php">
            <input type="hidden" name="action" value="spnin_save_options">
            <?php wp_nonce_field('spnin_options_verify');?>
            <h4><?php _e('Social Icons','spnin');?></h4>
            <div class="form-group">
              <label ><?php _e('Twitter','spnin'); ?></label>
              <input type="text" class="form-control" name="spnin_inputtwitter" id="twitter" value="<?php echo $theme_opts['twitter'];?>">
            </div>
            <div class="form-group">
              <label ><?php _e('Facebook','spnin'); ?></label>
              <input type="text" class="form-control" name="spnin_inputfacebook" id="facebook" value="<?php echo $theme_opts['facebook'];?>">
            </div>
            <div class="form-group">
              <label ><?php _e('Youtube','spnin'); ?></label>
              <input type="text" class="form-control" name="spnin_inputyoutube" id="youtube" value="<?php echo $theme_opts['youtube'];?>">
            </div>
            <div class="form-group">
              <label ><?php _e('Logo Type','spnin'); ?></label>
              <select class="form-control" name="spnin_inputlogotype">
                  <option value="1"><?php _e('Site Name', 'spnin');?></option>
                  <option value="2"><?php _e('Image','spnin');?></option>
              </select>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Logo Image" name="spnin_inputimage" >
              <span class="input-group-btn">
                  <button class="btn btn-primary" type="button" id="spnin_uploadlogoimage"><?php _e('Upload','spnin');?></button>
              </span>
            </div>


            <h4><?php _e('Footer Settings','spnin');?></h4>
            <div class="form-group">
              <label ><?php _e('Footer copyright text','spnin');?></label>
              <textarea class="form-control"  name="spnin_inputfooter" ><?php echo stripslashes_deep($theme_opts['footer']);?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
  </div>



</div>

<?php }
