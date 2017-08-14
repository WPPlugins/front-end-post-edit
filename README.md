=== custom-post-edit ===

Contributors: vimes1984

Donate link: http://buildawebdoctor.com

Tags: wordpress frontend post edit, AngularJS forms,

Requires at least: 4.0.0

Tested up to: 4.0.0

Stable tag: 1.0.4

License: GPLv2 or later

License URI: http://www.gnu.org/licenses/gpl-2.0.html

Frontend post edit using angularJS

== Description ==
This plugin is intented for Developers only it's a effort to implement a simple custom front end post edit... 

It uses angularJS fdor the form obejct and requiers you pass a `$_GET['posttoedit']` variable in the url to the form containing the post ID you want to edit.

ok we have a basic implementation it'll edit a post on the fron end if the user is logged in your gonna need some checks an your going to need to fill it out with your values:

https://github.com/vimes1984/custompostedit/blob/master/customPostEdit.php

Is the main file again line 237-> 262 is the function that actually updates the post

https://github.com/vimes1984/custompostedit/blob/master/includes/customedit.php

Is your form all you need to feed this is your Post/Job ID and it will update that post
the only other file that does anything is this one

https://github.com/vimes1984/custompostedit/blob/master/js/custom-post-edit.js

Calls the php endpoint we defined in the first file the post_edit_fac and sends the formobject {}  to that function from the form you can dump the form anywhere using the shortcode [post_edit]

== Installation ==

1. Upload `` to the `/wp-content/plugins/` directory
1. Activate the plugin through the "Plugins" menu in WordPress
1. Place `<?php do_action("custom-post-edit_hook"); ?>` in your templates

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==
= 1.0.4 =
*updated readme
= 1.0.3 =
*updated readme
= 1.0.2 =
*updated readme
= 1.0.1 =
*updated readme
= 1.0 =
* Initial Commit