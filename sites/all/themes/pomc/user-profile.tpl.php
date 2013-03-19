<?php
//dsm($elements['#account']->uid);
/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable $elements['#account']->uid
 */ 
//dsm($user);
?>
<div class="user-profile clearfix">
                <div class="user-pic pull-left"><?php print render($user_profile['user_picture']); ?></div>
                <div class="user-desc  pull-left">
                    <h2 class="user-name"><?php print format_username($elements['#account']); ?></h2>
                    <p class="user-city"><?php print render($user_profile['field_city']); ?></p>
                    <p class="user-intro"><?php print render($user_profile['field_description']); ?></p>
                    <div class="follow"><?php print render($user_profile['flags']['follow_users']); ?></div>
                </div>
                <div class="user-stats  pull-left">
		<?php if($elements['#account']->uid==$GLOBALS['user']->uid): ?>
                    <div class="edit-profile"><?php if($elements['#account']->uid==$GLOBALS['user']->uid) print l(t('Edit your profile'), "user/{$GLOBALS['user']->uid}/edit");?></div>
		<?php endif; ?>
                    <div class="single-stat"><span class="stat-no"> <?php print l(get_node_count_by_user($elements['#account']->uid).' pastes', "users/".$elements['#account']->uid); ?></span></div>
                    <div class="single-stat"><a href="#"><span class="stat-no">  <?php  $follow = flag_get_flag('follow_users'); print l($follow->get_user_count($elements['#account']->uid).' following', "user/".$elements['#account']->uid."/following"); ?></span></div>
                    <div class="single-stat"><a href="#"><span class="stat-no"> <?php $follow = flag_get_flag('follow_users'); print l( $follow->get_count($elements['#account']->uid).' followers', "user/".$elements['#account']->uid."/followers"); ?> </span></div>

                </div>
            </div>
