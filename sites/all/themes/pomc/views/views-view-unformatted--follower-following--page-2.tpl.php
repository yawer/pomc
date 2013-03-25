<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php global $user;
$user_id = arg(1);
$user_profile = user_load($user_id);
?>
<div class="user-profile profile-follower-page  clearfix">


                <div class="user-pic pull-left"><?php
                print theme('image_style', array('style_name' => 'profile-picture', 'path' => $user_profile->field_profile_pic['und'][0]['uri'], 'alt' => $user_profile->name, 'title' => $user_profile->name));?><div><ul class = "extra-links"><li class= "extra-link-list"><?php print l("Send message", 'messages/new/'.$user_id); ?></li>
                <li class= "extra-link-list"><?php print flag_create_link('spam', $user_id); ?></li>
      </ul></div></div>
                <div class="user-desc  pull-left">
                    <h2 class="user-name"><?php print $user_profile->field_full_name['und'][0]['value']; ?></h2>
                    <p class="user-city"> <?php print taxonomy_term_load($user_profile->field_city['und'][0]['tid'])->name; ?></p>
                    <p class="user-intro"><?php print $user_profile->field_description['und'][0]['value']; ?></p>
                    <div class="follow"><?php print flag_create_link('follow_users', $user_id); ?></div>
                </div>
                <div class="user-stats  pull-left">
		<?php if($user_id==$user->uid): ?>
                    <div class="edit-profile"><?php if($user_id==$user->uid) print l(t('Edit your profile'), "user/".$user->uid."/edit");?></div>
		<?php endif; ?>
                    <div class="single-stat"><span class="stat-no"> <?php print l(get_node_count_by_user($user_id).' pastes', "user/".$user_id); ?></span></div>
                    <div class="single-stat"><a href="#"><span class="stat-no">  <?php  $follow = flag_get_flag('follow_users'); print l($follow->get_user_count($user_id).' following', "user/".$user_id."/following"); ?></span></div>
                    <div class="single-stat"><a href="#"><span class="stat-no"> <?php $follow = flag_get_flag('follow_users'); print l( $follow->get_count($user_id).' followers', "user/".$user_id."/followers"); ?> </span></div>

                </div>
            </div>
<div class = "follow-container">

 <div class="follow-title"> <?php $follow = flag_get_flag('follow_users'); print $follow->get_count($user_id) . t(' Followers')?> </div>
<?php foreach ($rows as $id => $row): ?>
  <div <?php if ($classes_array[$id]) { print 'class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>

</div>
