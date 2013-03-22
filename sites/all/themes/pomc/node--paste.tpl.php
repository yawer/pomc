<?php
//dsm($node);
//dsm($content);
/**
 * @file
 * Fusion theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $display_submitted: whether submission information should be displayed.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
//dsm($content['comments']['comment_form']);
?>
<div class="row clearfix" id="test">

                <div class="paste-container">

                    <div class="user-col pull-left">
                        <h2 class="user-name"> <?php  print $name; ?></h2>
                        <div class="user-pic"><?php print $user_picture; ?></div>
                        <?php 
                        ?>
                        <div class="follow"><?php
 print flag_create_link("follow_users", $uid); ?></div>
                    </div>

                    <div class="paste-col clearfix pull-left">
                        <!--<div class="curl"></div>-->
                        <h1 class="paste-title"><?php print $title; ?></h1>
                        <div class="info clearfix">
                            <div class="pull-left">
                                by <a href="#"><?php  print $name; ?></a>
                                <!-- url = user-name/ -->
                            </div>

                            <div class="pull-right date">
                                <?php  print format_interval(time() - $node->created, 1) . ' ' . t('ago'); ?>
                            </div>
                        </div>

                        <div class="paste-bar clearfix">
                            <div class="pull-left">
                                <?php print render($content['links']['flag']['#links']['flag-like']['title']); ?>
                                <span> • </span>
                                <a href="#"><?php print render($content['links']['flag']['#links']['flag-share']['title']); ?></a>
                            </div>
                            <div class="pull-right">
                                <span> <?php print get_like_count($node->nid); ?> Likes</span>
                                <span> • </span>
                                <span> <?php print get_share_count($node->nid); ?> Shares</span>
                            </div>
                        </div>
                        <div class="paste-img"> <?php print render($content['field_paste_image']); ?></div>
                        <p class="paste-desc"><?php print render($content['body']); ?></p>

                        <h3 class="sub-paste-title">Say something</h3>
                        <div class="comment-author comment-on-paste clearfix">
                            <?php hide($content['comments']['comment_form']['author']);
				  print $user_picture;
                                  print render($content['comments']['comment_form']); ?>
                        </div>
         		
			 <h3 class="sub-paste-title"><?php print get_share_count($node->nid); ?> Shares</h3>
			<?php $block_share = module_invoke('views', 'block_view', 'user_interests-block_2');
				print render($block_share['content']); ?> 
			<h3 class="sub-paste-title"><?php print get_like_count($node->nid); ?> Likes</h3>
			<?php $block_like = module_invoke('views', 'block_view', 'user_interests-block_1');
				print render($block_like['content']);?>
			<h3 class="sub-paste-title"><?php print $comment_count; ?> Comments</h3>
                        <?php print render($content['comments']); ?>
                        </div>
                    </div>
                </div>
            </div>
