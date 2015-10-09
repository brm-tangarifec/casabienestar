  Ban List module for Drupal
====================================================


Description
===========
Ban List allows the administrator to disallow users from using a
username from a list of usernames. The list consist of usernames such
as: admin, administrator, root, demo, test, superuser, etc.

Although core can handle this, the primary purpose of the module is for people
in the community to contribute to the list and make it very easy for everyone
else to take advantage.


Installation
=============

1. Unpack the Ban List zip contents in the appropriate modules directory of your 
Drupal installation.  This is probably sites/all/modules/

2. Enable the Ban List module in the administration tools.

3. If you're not using Drupal's default administrative account, make sure 
"administer ban list" is enabled through access control administration.


Configuration
=============
Once the module is activated, go to:

Configuration >> User restrictions >> Ban list (admin/config/people/user-restrictions/banlist).

Here you will be able to view, enable, and disable usernames from the list.


Current Maintainer
==================
* Yonas Yanfa (http://drupal.org/user/473174)
