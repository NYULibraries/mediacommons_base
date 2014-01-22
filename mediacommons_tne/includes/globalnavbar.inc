<nav class="global" role="navigation">
  <ul class="global-sections" role="menubar">
    <li><a class="logolink mc-logo" title="Media Commons" href="#"><span>Media Commons</span></a>
      <ul class="navitems">
        <li role="menuitem"><a href="<?php echo $GLOBALS['base_url'] ?>">Frontpage</a></li>
        <li role="menuitem"><a href="#">In Media Res</a></li>
        <li role="menuitem"><a href="#">MediaCommons Press</a></li>
        <li role="menuitem"><a href="#">The New Everyday</a></li>
        <li role="menuitem"><a href="#">#Alt-Academy</a></li>
      </ul>
    </li>
  </ul>
   <?php
      if ($user->uid > 0) { ?>
         <ul class="utils logged-in" role="menubar">
    <li role="menuitem" aria-haspopup="true"> <a href="#" class="login-link">Kathleen Fitzpatrick</a>
      <ul role="menu" aria-hidden="true" class="user-pref-area">
        <li role="menuitem"> <a href="#">Edit my account</a> </li>
        <li role="menuitem"> <a href="#">View my contributions</a> </li>
        <li role="menuitem"> <a href="#">View my bookmarks</a> </li>
        <li role="menuitem"> <a href="#">Logout</a> </li>
      </ul>
    </li>
  </ul>

        <?php } else { ?>
  <ul class="utils logged-out" role="menubar">
    <li role="menuitem"><a href="#">Join</a></li>
    <li role="menuitem" aria-haspopup="true"><a href="#" class="login-link">Login</a>
      <ul class="login-area" aria-hidden="true">
        <li role="menuitem">
          <form action="/imr/user/login"  accept-charset="UTF-8" method="post" id="user-login" class="user login form inline">
            <label for="edit-name">Username or e-mail address: <span class="form-required" title="This field is required.">*</span></label>
            <input type="text" maxlength="60" name="name" id="edit-name" size="60" value="" class="form-text required" placeholder="Username or e-mail address" autofocus />
            <div class="description">You may login with either your assigned username or your e-mail address.</div>
            <label for="edit-pass">Password: <span class="form-required" title="This field is required.">*</span></label>
            <input type="password" name="pass" id="edit-pass"  maxlength="128"  size="60" class="form-text required" placeholder="Password">
            <div class="description">The password field is case sensitive.</div>
            <input type="hidden" name="form_build_id" id="form-14a637cb46c0f54a557ca58476ba8fa2" value="form-14a637cb46c0f54a557ca58476ba8fa2">
            <input type="hidden" name="form_id" id="edit-user-login" value="user_login">
            <input type="submit" name="op" id="edit-submit" value="Login"  class="form-submit login">
            <a href="/imr/user/password" class="button-link">Forgot Password?</a> <span class="social-login">
            <input type="submit" name="op" id="edit-submit-twitter" value="Login with Twitter"  class="form-submit login twitter">
            <input type="submit" name="op" id="edit-submit-facebook" value="Login with Facebook"  class="form-submit login facebook">
            </span>
          </form>
        </li>
      </ul>
    </li>
  </ul> <?php  } ?>
</nav>