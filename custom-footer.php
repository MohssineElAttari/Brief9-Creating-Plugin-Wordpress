<?php

if (!defined('ABSPATH')) {
    exit;
}
global $cl;
global $fb;
global $inst;
global $twit;
global $git;
global $gm;
global $ld;

if (isset($_POST['wp_submit'])) {
    wphw_opt();
}

function wphw_opt()
{
    $copyrightLink = $_POST['copyright-link'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];
    $github = $_POST['github'];
    $google = $_POST['google'];
    $linkedin = $_POST['linkedin'];

    global $cl;
    if (get_option('copyright-link') != trim($copyrightLink)) {
        $cl = update_option('copyright-link', trim($copyrightLink));
    }

    global $fb;
    if (get_option('facebook-icon') != trim($facebook)) {
        $fb = update_option('facebook-icon', trim($facebook));
    }

    global $inst;
    if (get_option('instagram-icon') != trim($instagram)) {
        $inst = update_option('instagram-icon', trim($instagram));
    }

    global $twit;
    if (get_option('twitter-icon') != trim($twitter)) {
        $twit = update_option('twitter-icon', trim($twitter));
    }

    global $git;
    if (get_option('github-icon') != trim($github)) {
        $git = update_option('github-icon', trim($github));
    }

    global $gm;
    if (get_option('google-icon') != trim($google)) {
        $gm = update_option('google-icon', trim($google));
    }

    global $ld;
    if (get_option('linkedin-icon') != trim($linkedin)) {
        $ld = update_option('linkedin-icon', trim($linkedin));
    }
}
?>

<!-- code html -->
<div class="wrap">
    <div id="icon-options-general" class="icon32"> <br>
    </div>
    <h2>Footer Settings</h2>
    <?php if (isset($_POST['wp_submit']) && ($fb || $inst || $twit || $git || $gm || $ld || $cl)) : ?>
        <div id="message" class="updated below-h2">
            <p>Content updated successfully</p>
        </div>
    <?php endif; ?>

    <div class="metabox-holder">
        <div class="postbox">
            <h3><strong>Enter footer text and click on save button.</strong></h3>
            <form method="post" action="" style="padding: 20px;">
                <table class="form-table">

                    <tr>
                        <th scope="row">Copyright Link</th>
                        <td><input type="text" name="copyright-link" value="<?php echo get_option('copyright-link'); ?>" style="width:350px;"></td>
                    </tr>

                    <tr>
                        <th scope="row">facebook Link</th>
                        <td><input type="text" name="facebook" value="<?php echo get_option('facebook-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">instagram Link</th>

                        <td><input type="text" name="instagram" value="<?php echo get_option('instagram-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">twitter Link</th>

                        <td><input type="text" name="twitter" value="<?php echo get_option('twitter-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">Github Link</th>

                        <td><input type="text" name="github" value="<?php echo get_option('github-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">Gmail</th>
                        <td><input type="text" name="google" value="<?php echo get_option('google-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">Linkedin</th>
                        <td><input type="text" name="linkedin" value="<?php echo get_option('linkedin-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <td style="padding-top:10px;  padding-bottom:10px;">
                            <input type="submit" name="wp_submit" value="Save changes" class="button-primary" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>