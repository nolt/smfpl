<?php
// Version: 2.1 Beta 3; EmailTemplates

global $txtBirthdayEmails;

// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it. You may
//   translate the description of the variable. Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = '';
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally, do not translate the @additional_params: line or the variable names in the lines that follow it. You may
//   translate the description of the variable. Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['resend_activate_message_subject'] = 'Witaj na {FORUMNAME}';
$txt['scheduled_approval_email_msg'] = '';
$txt['resend_activate_message_body'] = 'Thank you for registering at {FORUMNAME}. Your username is {USERNAME}. If you forget your password, you can reset it by visiting {FORGOTPASSWORDLINK}.

Before you can login, you must first activate your account by selecting the following link:

{ACTIVATIONLINK}

Should you have any problems with the activation, please visit {ACTIVATIONLINKWITHOUTCODE} and enter the code "{ACTIVATIONCODE}".

{REGARDS}';
$txt['scheduled_approval_email_attach'] = '';

$txt['resend_pending_message_subject'] = 'Witaj na {FORUMNAME}';
$txt['scheduled_approval_email_event'] = '';
$txt['resend_pending_message_body'] = 'Hello {REALNAME}, your registration request at {FORUMNAME} has been received.

The username you registered with was {USERNAME}.

Before you can login and start using the forum, your request will be reviewed and approved. When this happens, you will receive another email from this address.

{REGARDS}';

$txt['mc_group_approve_subject'] = 'Group Membership Approval';
$txt['mc_group_approve_body'] = '{USERNAME},

We\'re pleased to notify you that your application to join the "{GROUPNAME}" group at {FORUMNAME} has been accepted, and your account has been updated to include this new membergroup.

{REGARDS}';

$txt['mc_group_reject_subject'] = 'Group Membership Rejection';
$txt['mc_group_reject_body'] = '{USERNAME},

We\'re sorry to notify you that your application to join the "{GROUPNAME}" group at {FORUMNAME} has been rejected.

{REGARDS}';

$txt['mc_group_reject_reason_subject'] = 'Group Membership Rejection';
$txt['mc_group_reject_reason_body'] = '{USERNAME},

We\'re sorry to notify you that your application to join the "{GROUPNAME}" group at {FORUMNAME} has been rejected.

This is due to the following reason: {REASON}

{REGARDS}';

$txt['admin_approve_accept_subject'] = 'Welcome to {FORUMNAME}';
$txt['admin_approve_accept_body'] = 'Welcome, {NAME}

Your account has been activated manually by the admin and you can now login and post. Your username is: {USERNAME}. If you forget your password, you can change it at {FORGOTPASSWORDLINK}.

{REGARDS}';

$txt['admin_approve_activation_subject'] = 'Welcome to {FORUMNAME}';
$txt['admin_approve_activation_body'] = 'Welcome, {USERNAME}!

Your account on {FORUMNAME} has been approved by the forum administrator. Before you can login, you must first activate your account by selecting the following link:

{ACTIVATIONLINK}

Should you have any problems with the activation, please visit {ACTIVATIONLINKWITHOUTCODE} and enter the code "{ACTIVATIONCODE}".

{REGARDS}';

$txt['admin_approve_reject_subject'] = 'Registration Rejected';
$txt['admin_approve_reject_body'] = '{USERNAME},

Regrettably, your application to join {FORUMNAME} has been rejected.

{REGARDS}';

$txt['admin_approve_delete_subject'] = 'Account Deleted';
$txt['admin_approve_delete_body'] = '{USERNAME},

Your account on {FORUMNAME} has been deleted. This may be because you never activated your account, in which case you should be able to register again.

{REGARDS}';

$txt['admin_approve_remind_subject'] = 'Registration Reminder';
$txt['admin_approve_remind_body'] = '{USERNAME},
You still have not activated your account at {FORUMNAME}.

Please use the link below to activate your account:
{ACTIVATIONLINK}

Should you have any problems with the activation, please visit {ACTIVATIONLINKWITHOUTCODE} and enter the code "{ACTIVATIONCODE}".

{REGARDS}';

$txt['admin_register_activate_subject'] = 'Welcome to {FORUMNAME}';
$txt['admin_register_activate_body'] = 'Thank you for registering at {FORUMNAME}. Your username is {USERNAME} and your password is {PASSWORD}.

Before you can login, you must first activate your account by selecting the following link:

{ACTIVATIONLINK}

Should you have any problems with the activation, please visit {ACTIVATIONLINKWITHOUTCODE} and enter the code "{ACTIVATIONCODE}".

{REGARDS}';

$txt['admin_register_immediate_subject'] = 'Welcome to {FORUMNAME}';
$txt['admin_register_immediate_body'] = 'Thank you for registering at {FORUMNAME}. Your username is {USERNAME}, your password is {PASSWORD} and the forum url is: {SCRIPTURL}.

{REGARDS}';

$txt['new_announcement_subject'] = 'New announcement: {TOPICSUBJECT}';
$txt['new_announcement_body'] = '{MESSAGE}

To unsubscribe from these announcements, login to the forum and uncheck "Receive forum announcements and important notifications by email." in your profile.

You can view the full announcement by following this link:
{TOPICLINK}

{REGARDS}';

$txt['notify_boards_once_body_subject'] = 'New Topic: {TOPICSUBJECT}';
$txt['notify_boards_once_body_body'] = 'A new topic, \'{TOPICSUBJECT}\', has been made on a board you are watching.

You can see it at
{TOPICLINK}

More topics may be posted, but you won\'t receive more email notifications until you return to the board and read some of them.

The text of the topic is shown below:
{MESSAGE}

Unsubscribe to new topics from this board by using this link:
{UNSUBSCRIBELINK}

{REGARDS}';

$txt['notify_boards_once_subject'] = 'New Topic: {TOPICSUBJECT}';
$txt['notify_boards_once_body'] = 'A new topic, \'{TOPICSUBJECT}\', has been made on a board you are watching.

You can see it at
{TOPICLINK}

More topics may be posted, but you won\'t receive more email notifications until you return to the board and read some of them.

Unsubscribe to new topics from this board by using this link:
{UNSUBSCRIBELINK}

{REGARDS}';

$txt['notify_boards_body_subject'] = 'New Topic: {TOPICSUBJECT}';
$txt['notify_boards_body_body'] = 'A new topic, \'{TOPICSUBJECT}\', has been made on a board you are watching.

You can see it at
{TOPICLINK}

The text of the topic is shown below:
{MESSAGE}

Unsubscribe to new topics from this board by using this link:
{UNSUBSCRIBELINK}

{REGARDS}';

$txt['notify_boards_subject'] = 'New Topic: {TOPICSUBJECT}';
$txt['notify_boards_body'] = 'A new topic, \'{TOPICSUBJECT}\', has been made on a board you are watching.

You can see it at
{TOPICLINK}

Unsubscribe to new topics from this board by using this link:
{UNSUBSCRIBELINK}

{REGARDS}';

$txt['alert_unapproved_reply_subject'] = 'Topic reply: {SUBJECT}';
$txt['alert_unapproved_reply_body'] = 'A reply has been posted to \'{SUBJECT}\' by {POSTERNAME}.

You can see it at
{LINK}

{REGARDS}';

$txt['unapproved_attachment_subject'] = 'New Unapproved Attachment in: {SUBJECT}';
$txt['unapproved_attachment_body'] = 'A new attachment has been made in \'{SUBJECT}\' which needs to be approved.

You can approve or reject this attachment from the link below which will take you to the message that it is a part of.

{LINK}

{REGARDS}';

$txt['alert_unapproved_post_subject'] = 'New Unapproved Post: {SUBJECT}';
$txt['alert_unapproved_post_body'] = 'A new post has been made which needs to be approved: \'{SUBJECT}\'

You can approve or reject this post by using the link below:
{LINK}

{REGARDS}';

$txt['alert_unapproved_topic_subject'] = 'New Unapproved Topic: {SUBJECT}';
$txt['alert_unapproved_topic_body'] = 'A new topic has been made which needs to be approved: \'{SUBJECT}\'

You can approve or reject this topic by using the link below:
{LINK}

{REGARDS}';

$txt['request_membership_subject'] = 'New Group Application';
$txt['request_membership_body'] = '{RECPNAME},

{APPYNAME} has requested membership to the "{GROUPNAME}" group. The user has given the following reason:

{REASON}

You can approve or reject this application by using the link below:

{MODLINK}

{REGARDS}';

$txt['paid_subscription_reminder_subject'] = 'Subscription about to expire at {FORUMNAME}';
$txt['paid_subscription_reminder_body'] = '{REALNAME},

A subscription you are subscribed to at {FORUMNAME} is about to expire. If when you took out the subscription you selected to auto-renew you need take no action - otherwise you may wish to consider subscribing once more. Details are below:

Subscription Name: {SUBSCRIPTION}
Expires: {END_DATE}

To edit your subscriptions visit the following URL:
{PROFILE_LINK}

{REGARDS}';

$txt['activate_reactivate_subject'] = 'Welcome back to {FORUMNAME}';
$txt['activate_reactivate_body'] = 'In order to re-validate your email address, your account has been deactivated. Click the following link to activate it again:
{ACTIVATIONLINK}

Should you have any problems with activation, please visit {ACTIVATIONLINKWITHOUTCODE} and use the code "{ACTIVATIONCODE}".

{REGARDS}';

$txt['forgot_password_subject'] = 'New password for {FORUMNAME}';
$txt['forgot_password_body'] = 'Dear {REALNAME},
This mail was sent because the \'forgot password\' function has been applied to your account. To set a new password, click the following link:
{REMINDLINK}

IP: {IP}
Username: {MEMBERNAME}

{REGARDS}';

$txt['send_email_subject'] = '{EMAILSUBJECT}';
$txt['send_email_body'] = '{EMAILBODY}';

$txt['scheduled_approval_subject'] = '';

$txt['report_to_moderator_subject'] = 'Reported post: {TOPICSUBJECT} by {POSTERNAME}';
$txt['scheduled_approval_body'] = '';
$txt['report_to_moderator_body'] = 'The following post, "{TOPICSUBJECT}" by {POSTERNAME} has been reported by {REPORTERNAME} on a board you moderate:

The topic: {TOPICLINK}
Moderation center: {REPORTLINK}

The reporter has made the following comment:
{COMMENT}

{REGARDS}';

$txt['reply_to_moderator_subject'] = 'Follow-up to reported post: {TOPICSUBJECT} by {POSTERNAME}';
$txt['reply_to_moderator_body'] = 'Previously, "{TOPICSUBJECT}" was reported to moderators.

Since then, {COMMENTERNAME} has added a comment to the report. More information can be found in the forum.

The topic: {TOPICLINK}
Moderation center: {REPORTLINK}

{REGARDS}';

$txt['report_member_profile_subject'] = 'Reported profile: {MEMBERNAME}';
$txt['report_member_profile_body'] = 'The profile of "{MEMBERNAME}" has been reported by {REPORTERNAME}.

The profile: {PROFILELINK}
Moderation center: {REPORTLINK}

The reporter has made the following comment:
{COMMENT}

{REGARDS}';

$txt['reply_to_member_report_subject'] = 'Follow-up to reported profile: {MEMBERNAME}';
$txt['reply_to_member_report_body'] = 'Previously, the profile of {MEMBERNAME} was reported.

Since then, {COMMENTERNAME} has added a comment to the report. More information can be found in the forum.

The profile: {PROFILELINK}
Moderation center: {REPORTLINK}

{REGARDS}';

$txt['change_password_subject'] = 'New Password Details';
$txt['change_password_body'] = 'Dear {USERNAME},

Your login details at {FORUMNAME} have been changed and your password reset. Below are your new login details.

Your username is "{USERNAME}" and your password is "{PASSWORD}".

You may change it after you login by going to the profile page, or by visiting this page after you login:
{SCRIPTURL}?action=profile

{REGARDS}';

$txt['register_activate_subject'] = 'Welcome to {FORUMNAME}';
$txt['register_activate_body'] = 'Thank you for registering at {FORUMNAME}. Your username is {USERNAME}. If you forget your password, you can reset it by visiting {FORGOTPASSWORDLINK}.

Before you can login, you first need to activate your account. To do so, please follow this link:

{ACTIVATIONLINK}

Should you have any problems with activation, please visit {ACTIVATIONLINKWITHOUTCODE} use the code "{ACTIVATIONCODE}".

{REGARDS}';

$txt['register_coppa_subject'] = 'Welcome to {FORUMNAME}';
$txt['register_coppa_body'] = 'Thank you for registering at {FORUMNAME}. Your username is {USERNAME}. If you forget your password, you can change it at {FORGOTPASSWORDLINK}

Before you can login, the admin requires consent from your parent/guardian for you to join the community. You can obtain more information at the link below:

{COPPALINK}

{REGARDS}';

$txt['register_immediate_subject'] = 'Welcome to {FORUMNAME}';
$txt['register_immediate_body'] = 'Thank you for registering at {FORUMNAME}. Your username is {USERNAME}. If you forget your password, you may change it at {FORGOTPASSWORDLINK}.

{REGARDS}';

$txt['register_pending_subject'] = 'Welcome to {FORUMNAME}';
$txt['register_pending_body'] = 'Hello {REALNAME}, your registration request at {FORUMNAME} has been received.

The username you registered with was {USERNAME}. If you forget your password, you can change it at {FORGOTPASSWORDLINK}.

Before you can login and start using the forum, your request will be reviewed and approved. When this happens, you will receive another email from this address.

{REGARDS}';

$txt['notification_reply_subject'] = 'Topic reply: {TOPICSUBJECT}';
$txt['notification_reply_body'] = 'A reply has been posted to a topic you are watching by {POSTERNAME}.

View the reply at: {TOPICLINK}

Unsubscribe to this topic by using this link: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['notification_reply_body_subject'] = 'Topic reply: {TOPICSUBJECT}';
$txt['notification_reply_body_body'] = 'A reply has been posted to a topic you are watching by {POSTERNAME}.

View the reply at: {TOPICLINK}

Unsubscribe to this topic by using this link: {UNSUBSCRIBELINK}

The text of the reply is shown below:
{MESSAGE}

{REGARDS}';

$txt['notification_reply_once_subject'] = 'Topic reply: {TOPICSUBJECT}';
$txt['notification_reply_once_body'] = 'A reply has been posted to a topic you are watching by {POSTERNAME}.

View the reply at: {TOPICLINK}

Unsubscribe to this topic by using this link: {UNSUBSCRIBELINK}

More replies may be posted, but you won\'t receive any more notifications until you read the topic.

{REGARDS}';

$txt['notification_reply_body_once_subject'] = 'Topic reply: {TOPICSUBJECT}';
$txt['notification_reply_body_once_body'] = 'A reply has been posted to a topic you are watching by {POSTERNAME}.

View the reply at: {TOPICLINK}

Unsubscribe to this topic by using this link: {UNSUBSCRIBELINK}

The text of the reply is shown below:
{MESSAGE}

More replies may be posted, but you won\'t receive any more notifications until you read the topic.

{REGARDS}';

$txt['notification_sticky_subject'] = 'Topic stickied: {TOPICSUBJECT}';
$txt['notification_sticky_body'] = 'A topic you are watching has been marked as a sticky topic.

View the topic at: {TOPICLINK}

Unsubscribe to this topic by using this link: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['notification_lock_subject'] = 'Topic locked: {TOPICSUBJECT}';
$txt['notification_lock_body'] = 'A topic you are watching has been locked.

View the topic at: {TOPICLINK}

Unsubscribe to this topic by using this link: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['notification_unlock_subject'] = 'Topic unlocked: {TOPICSUBJECT}';
$txt['notification_unlock_body'] = 'A topic you are watching has been unlocked.

View the topic at: {TOPICLINK}

Unsubscribe to this topic by using this link: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['notification_remove_subject'] = 'Topic removed: {TOPICSUBJECT}';
$txt['notification_remove_body'] = 'A topic you are watching has been removed.

{REGARDS}';

$txt['notification_move_subject'] = 'Topic moved: {TOPICSUBJECT}';
$txt['notification_move_body'] = 'A topic you are watching has been moved to another board.

View the topic at: {TOPICLINK}

Unsubscribe to this topic by using this link: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['notification_merge_subject'] = 'Topic merged: {TOPICSUBJECT}';
$txt['notification_merge_body'] = 'A topic you are watching has been merged with another topic.

View the new merged topic at: {TOPICLINK}

Unsubscribe to this topic by using this link: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['notification_split_subject'] = 'Topic split: {TOPICSUBJECT}';
$txt['notification_split_body'] = 'A topic you are watching has been split into two or more topics.

View what remains of this topic at: {TOPICLINK}

Unsubscribe to this topic by using this link: {UNSUBSCRIBELINK}

{REGARDS}';

$txt['admin_notify_subject'] = 'A new member has joined';
$txt['admin_notify_body'] = '{USERNAME} has just signed up as a new member of your forum. Click the link below to view their profile.
{PROFILELINK}

{REGARDS}';

$txt['admin_notify_approval_subject'] = 'A new member has joined';
$txt['admin_notify_approval_body'] = '{USERNAME} has just signed up as a new member of your forum. Click the link below to view their profile.
{PROFILELINK}

Before this member can begin posting they must first have their account approved. Click the link below to go to the approval screen.
{APPROVALLINK}

{REGARDS}';

$txt['admin_attachments_full_subject'] = 'Urgent! Attachments directory almost full';
$txt['admin_attachments_full_body'] = '{REALNAME},

The attachments directory at {FORUMNAME} is almost full. Please visit the forum to resolve this problem.

Once the attachments directory reaches it\'s maximum permitted size users will not be able to continue to post attachments or upload custom avatars (If enabled).

{REGARDS}';

$txt['paid_subscription_refund_subject'] = 'Refunded Paid Subscription';
$txt['paid_subscription_refund_body'] = '{REALNAME},

A member has received a refund on a paid subscription. Below are the details of this subscription:

	Subscription: {NAME}
	User Name: {REFUNDNAME} ({REFUNDUSER})
	Date: {DATE}

You can view this member\'s profile by clicking the link below:
{PROFILELINK}

{REGARDS}';

$txt['paid_subscription_new_subject'] = 'New Paid Subscription';
$txt['paid_subscription_new_body'] = '{REALNAME},

A member has taken out a new paid subscription. Below are the details of this subscription:

	Subscription: {NAME}
	User Name: {SUBNAME} ({SUBUSER})
	User Email: {SUBEMAIL}
	Price: {PRICE}
	Date: {DATE}

You can view this member\'s profile by clicking the link below:
{PROFILELINK}

{REGARDS}';

$txt['paid_subscription_error_subject'] = 'Paid Subscription Error Occurred';
$txt['paid_subscription_error_body'] = 'Dear {REALNAME},

The following error occurred when processing a paid subscription
---------------------------------------------------------------
{ERROR}

{REGARDS}';

$txt['new_pm_subject'] = 'New Personal Message: {SUBJECT}';
$txt['new_pm_body'] = 'You have just been sent a personal message by {SENDER} on {FORUMNAME}

IMPORTANT: Remember, this is just a notification. Please do not reply to this email.

Read this Personal Message here: {READLINK}

Reply to this Personal Message here: {REPLYLINK}

{REGARDS}';

$txt['new_pm_body_subject'] = 'New Personal Message: {SUBJECT}';
$txt['new_pm_body_body'] = 'You have just been sent a personal message by {SENDER} on {FORUMNAME}

IMPORTANT: Remember, this is just a notification. Please do not reply to this email.

The message they sent you was:

{MESSAGE}

Reply to this Personal Message here: {REPLYLINK}

{REGARDS}';

$txt['new_pm_tolist_subject'] = 'New Personal Message: {SUBJECT}';
$txt['new_pm_tolist_body'] = 'You and {TOLIST} have just been sent a personal message by {SENDER} on {FORUMNAME}

IMPORTANT: Remember, this is just a notification. Please do not reply to this email.

Read this Personal Message here: {READLINK}

Reply to this Personal Message (to the sender only) here: {REPLYLINK}

{REGARDS}';

$txt['new_pm_body_tolist_subject'] = 'Nowa prywatna wiadomość: {SUBJECT}';
$txt['new_pm_body_tolist_body'] = 'You and {TOLIST} have just been sent a personal message by {SENDER} on {FORUMNAME}

IMPORTANT: Remember, this is just a notification. Please do not reply to this email.

The message they sent you was:

{MESSAGE}

Reply to this Personal Message (to the sender only) here: {REPLYLINK}

{REGARDS}';

$txt['msg_quote_subject'] = 'You have been quoted in the post: {CONTENTSUBJECT}';
$txt['msg_quote_body'] = 'Hello {MEMBERNAME},

You have been quoted in the post titled "{CONTENTSUBJECT}" by {QUOTENAME}, you can see the post here:
{CONTENTLINK}

{REGARDS}';

$txt['msg_mention_subject'] = 'You have been mentioned in the post: {CONTENTSUBJECT}';
$txt['msg_mention_body'] = 'Hello {MEMBERNAME},

You have been mentioned in the post titled "{CONTENTSUBJECT}" by {MENTIONNAME}, you can see the post here:
{CONTENTLINK}

{REGARDS}';

$txtBirthdayEmails['happy_birthday_subject'] = 'Happy birthday from {FORUMNAME}.';
$txtBirthdayEmails['happy_birthday_body'] = 'Dear {REALNAME},

We here at {FORUMNAME} would like to wish you a happy birthday. May this day and the year to follow be full of joy.

{REGARDS}';
$txtBirthdayEmails['happy_birthday_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>';

$txtBirthdayEmails['karlbenson1_subject'] = 'On your Birthday...';
$txtBirthdayEmails['karlbenson1_body'] = 'We could have sent you a birthday card. We could have sent you some flowers or a cake.

But we didn\'t.

We could have even sent you one of those automatically generated messages to wish you happy birthday where we don\'t even have to replace INSERT NAME.

But we didn\'t

We wrote this birthday greeting just for you.

We would like to wish you a very special birthday.

{REGARDS}

//:: This message was automatically generated :://';
$txtBirthdayEmails['karlbenson1_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';

$txtBirthdayEmails['nite0859_subject'] = 'Happy Birthday!';
$txtBirthdayEmails['nite0859_body'] = 'Your friends at {FORUMNAME} would like to take a moment of your time to wish you a happy birthday, {REALNAME}. If you have not done so recently, please visit our community in order for others to have the opportunity to pass along their warm regards.

Even though today is your birthday, {REALNAME}, we would like to remind you that your membership in our community has been the best gift to us thus far.

Best Wishes,
The Staff of {FORUMNAME}';
$txtBirthdayEmails['nite0859_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>';

$txtBirthdayEmails['zwaldowski_subject'] = 'Birthday Wishes to {REALNAME}';
$txtBirthdayEmails['zwaldowski_body'] = 'Dear {REALNAME},

Another year in your life has passed. We at {FORUMNAME} hope it has been filled with happiness, and wish you luck in the coming one.

{REGARDS}';
$txtBirthdayEmails['zwaldowski_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>';

$txtBirthdayEmails['geezmo_subject'] = 'Happy birthday, {REALNAME}!';
$txtBirthdayEmails['geezmo_body'] = 'Do you know who\'s having a birthday today, {REALNAME}?

We know... YOU!

Happy birthday!

You\'re now a year older but we hope you\'re a lot happier than last year.

Enjoy your day today, {REALNAME}!

- From your {FORUMNAME} family';
$txtBirthdayEmails['geezmo_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>';

$txtBirthdayEmails['karlbenson2_subject'] = 'Your Birthday Greeting';
$txtBirthdayEmails['karlbenson2_body'] = 'We hope your birthday is the best ever cloudy, sunny or whatever the weather.
Have lots of birthday cake and fun, and tell us what you have done.

We hope this message brought you cheer, and make it last, until same time same place, next year.

{REGARDS}';
$txtBirthdayEmails['karlbenson2_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';

?>