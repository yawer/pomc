<?php 
 /**
  *
  */
global $base_url;
?>
<div class="contacts_previous_invitations">
<?php if (count($invite_friends)) :?>
  <?php foreach($invite_friends['friends'] as $friends_from):?>
    <?php foreach($friends_from as $user_email):?>
      <?php foreach($user_email as $friend):?>
        <div class="pagedlist_item" tabindex=-1 id="id_<?php print strtolower(str_replace('','-', $friend['name']));?>">
          <div class="col item p1 contact_list_item">
            <div class="col w1">
            </div>
            <div class="col w2">
              <div class="name">
                <?php print $friend['name'];?>
              </div>
              <div class="email">
                <a href="<?php print $base_url?>/invite" rel="lightmodal" id="edit-email"><?php print $friend['email'];?></a>
              </div>
            </div>
            <div class="side_col w3">
              <?php if(count($invite_friends['invited_friends']) && in_array($friend['email'], $invite_friends['invited_friends'])):?>
                <span class="invited-text">Already Invited</span>
              <?php else:?>
                <a class="action_button" href="#" id="__w2_ovxuJJI_invite_button">Invite</a>
              <?php endif?>
            </div>
          </div>
        </div>
      <?php endforeach;?>
    <?php endforeach;?>
  <?php endforeach;?>
<?php else:?>
  <p>No contacts or there for send invite</p>
<?php endif;?>
<div class="load-image hideme"><img src="<?php print $base_url.'/'. drupal_get_path('module', 'invite_custom'); ?>/css/loading.gif"/></div>
</div>
