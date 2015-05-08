<!-- Modal Login form -->
<div id="kleo-login-modal" class="kleo-form-modal main-color mfp-hide">
  <div class="row">
    <div class="col-sm-12 text-center">

      <?php do_action('kleo_before_login_form');?>

        <div class="kleo-pop-title-wrap main-color">
            <h3 class="kleo-pop-title"><?php _e( "Log in with your credentials", "kleo_framework" ); ?></h3>

            <?php if(get_option('users_can_register')) : ?>

                <p>
                    <em><?php _e( "or", 'kleo_framework' );?></em>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php if (function_exists('bp_is_active')) bp_signup_page(); else echo get_bloginfo('url')."/wp-login.php?action=register"; ?>" class="new-account"><?php _e( "Create an account", "kleo_framework" ); ?></a>
                </p>

            <?php endif; ?>
        </div>

        <form action="<?php echo wp_login_url(apply_filters('kleo_modal_login_redirect', '')  ); ?>" id="login_form" name="login_form" method="post" class="kleo-form-signin">
            <?php wp_nonce_field( 'kleo-ajax-login-nonce', 'security' ); ?>
            <input type="text" id="username" autofocus required name="log" class="form-control" value="" placeholder="<?php _e( "Username", 'kleo_framework' );?>">
            <input type="password" id="password" required value="" name="pwd" class="form-control" placeholder="<?php _e( "Password", 'kleo_framework' );?>">
            <div id="kleo-login-result"></div>
            <button class="btn btn-lg btn-default btn-block" type="submit"><?php _e( "Sign in", "kleo_framework" ); ?></button>
            <label class="checkbox pull-left">
              <input id="rememberme" name="rememberme" type="checkbox" value="forever"> <?php _e( "Remember me", "kleo_framework" ); ?>
            </label>
            <a href="#kleo-lostpass-modal" class="kleo-show-lostpass kleo-other-action pull-right"><?php _e( 'Lost your password?' );?></a>
            <span class="clearfix"></span>

            <?php do_action('kleo_after_login_form');?>

        </form>

    </div>
  </div>
</div><!-- END Modal Login form -->



<!-- Modal Lost Password form -->
<div id="kleo-lostpass-modal" class="kleo-form-modal main-color mfp-hide">
  <div class="row">
    <div class="col-sm-12 text-center">
      <div class="kleo-pop-title-wrap alternate-color">
        <h2 class="kleo-pop-title"><?php _e( "Forgot your details?", "kleo_framework" ); ?></h2>
      </div>

      <?php do_action('kleo_before_lostpass_form');?>

      <form id="forgot_form" name="forgot_form" action="" method="post" class="kleo-form-signin">
        <?php wp_nonce_field( 'kleo-ajax-login-nonce', 'security' ); ?>
        <input type="text" id="forgot-email" autofocus required  name="user_login" class="form-control" placeholder="<?php _e("Username or Email",'kleo_framework');?>">
        <div id="kleo-lost-result"></div>
        <button class="btn btn-lg btn-default btn-block" type="submit"><?php _e( "Reset Password", "kleo_framework" ); ?></button>
        <a href="#kleo-login-modal" class="kleo-show-login kleo-other-action pull-right"><?php _e( 'I remember my details', "kleo_framework" );?></a>
        <span class="clearfix"></span>
      </form>

    </div>
  </div>
</div><!-- END Modal Lost Password form -->

