<?php
// $Id: author-pane.tpl.php,v 1.1.2.13 2009/03/30 15:33:27 michellec Exp $

/**
 * @file
 * Theme implementation to display information about the post author.
 *
 * Available variables (core modules):
 * - $account: The entire user object for the author.
 * - $picture: Themed user picture for the author.
 * - $account_name: Themed user name for the author.
 * - $account_id: User ID number for the author.
 *
 * - $joined: Date the post author joined the site.
 * - $joined_ago: Time since the author registered in the format "TIME ago"
 *
 * - $online_icon: Icon that changes depending on whether the author is online.
 * - $online_status: Translated text "Online" or "Offline"
 * - $last_active: Time since author was last active. eg: "5 days 3 hours"
 *
 * - $contact: Linked icon.
 * - $contact_link: Linked translated text "Contact user".
 *
 * - $profile - Profile object from core profile.
 *     D5 Usage: $profile['category']['field_name']['value']
 *     D5 Example: <?php print $profile['Personal info']['profile_name']['value']; ?>
 *     D6 Usage: $profile['category']['field_name']['#value']
 *     D6 Example: <?php print $profile['Personal info']['profile_name']['#value']; ?>
 *
 * Available variables (contributed modules):
 * - $buddylist: Linked icon.
 * - $buddylist_link: Linked translated text "Add to buddylist" or "Remove from buddylist".

 * - $user_relationship_api: Linked icon.
 * - $user_relationship_api_link: Linked text "Add to <relationship>" or "Remove from <relationship>".

 * - $flag_friend: Linked icon.
 * - $flag_friend_link: Linked text. Actual text depends on module settings.

 * - $facebook_status: Status, including username, from the facebook status module.
 * - $facebook_status_status: Status from the facebook status module.
 *
 * - $privatemsg: Linked icon.
 * - $privatemsg_link: Linked translated text "Send PM".
 *
 * - $user_badges: Badges from user badges module.
 *
 * - $userpoints_points: Author's total number of points from all categories.
 * - $userpoints_categories: Array holding each category and the points for that category.
 *
 * - $user_stats_posts: Number of posts from user stats module.
 * - $user_stats_ip: IP address from user stats module.
 *
 * - $user_title: Title from user titles module.
 * - $user_title_image: Image version of title from user titles module.

 * - $og_groups: Linked list of OG groups author is a member of.

 * - $location: User location as reported by the location module.

 * - $fasttoggle_block_author: Link to toggle the author blocked/unblocked.
 
 * - $troll_ban_author: Link to ban author via the Troll module.
 */

echo "<h3 class=\"librarian-name\">" . $account->profile_displayname;
//echo "<img alt=\"online availability\" class=\"tipsy\" src=\"http://lib.csusm.edu/plugins/presence/status?jid=" . $account->name . "@lib.csusm.edu\" original-title=\"online availability\" />\n";
echo "</h3>";
if (!empty($picture) && !strstr($picture,"profile_image1.png")):
  print str_replace("biblio.csusm.edu/sites/biblio.csusm.edu/files/imagecache/sm100/sites/lib.csusm.edu/files/","lib.csusm.edu/sites/lib.csusm.edu/files/imagecache/sm100/",$picture);
endif;
if (in_array("library staff & faculty",$account->roles)){
  if (!empty($account->profile_jobtitle)):
    echo "<h4 class=\"pane-title profile_jobtitle\">" . $account->profile_jobtitle . "</h4>";
  endif;
  if (!empty($account->profile_csusm_email)): 
    echo "<div class=\"profile_email\"><a href=\"mailto:" . $account->profile_csusm_email . "\">" . $account->profile_csusm_email . "</a></div>";
  endif;
  if (!empty($account->profile_ofctel)): 
    echo "<div class=\"profile_ofctel\">" . $account->profile_ofctel . "</div>";
  endif;
  if (!empty($account->profile_office)): 
    echo "<div class=\"profile_office\">" . $account->profile_office . "</div>";
  endif;
}
?>