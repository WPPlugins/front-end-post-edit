=== custom-post-edit ===

Contributors: vimes1984

Donate link: http://buildawebdoctor.com

Tags: wordpress frontend post edit, AngularJS forms,

Requires at least: 4.0

Tested up to: 4.0

Stable tag: 1.0.9

License: GPLv2 or later

License URI: http://www.gnu.org/licenses/gpl-2.0.html

Frontend post edit using angularJS

== Description ==

This plugin is intented for Developers only it's a effort to implement a simple custom front end post edit form using angularJS. 

I'll be tracking issues via github: 

https://github.com/vimes1984/custompostedit/


It uses angularJS for the form and  requires you pass a `$_GET['posttoedit']` variable in the url to the form containing the post ID you want to edit.

<H2>Example: </h2>

` http://EXAMPLE.com/?posttoedit=POST_ID_TO_EDIT `



You are going to need to update three files to get this up and running first the form: 

These fileds need to match the following syntax where  in this case monthlysalary will be the object passed to  the php function: 

<H2>Example: </h2>

` <input type="text" name="jobtitle" ng-model="formobject.monthlysalary" placeholder="Monthly Salary" /> `

<H2>File: </h2>

` /includes/customedit.php `


Then the class customPostEdit->post_edit_fac() method,  line 237-> 262 is the function that actually updates the post and is called from the javascript:

<H2>File: </h2>

` customPostEdit.php `

you are going to need to fill these in with the fields you want to update you can find the default fields here: 

http://codex.wordpress.org/Database_Description#Table:_wp_posts

And you can update post meta fields like so: 

<H2>Example: </h2>

` update_post_meta( $postID, 'wpcf-monthly-salary', $monthlysalary ); `


There is one last file you may need to edit and that's the AngularJS file you may need to change 
<H2>Example: </h2>

` $scope.formobject = {'jobID': '', 'title': '', 'jobcontent': '', 'monthlysalary': ''};  `

Object to match your form fields in this file: 

<H2>File: </h2>

` /js/custom-post-edit.js `

This file calls the php endpoint we defined in the first file the post_edit_fac and sends the formobject {}  to that function from the form. 

You can place the form anywhere you want using the shortcode: 

<H2>Shortcode: </h2>

` [post_edit] `


Good luck and post any issues to github I'll gladly lend a hand...

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
= 1.0.9 =
*updated readme and added instructions
= 1.0.8 =
*updated readme and added instructions
= 1.0.7 =
*updated readme
= 1.0.6 =
*updated readme
= 1.0.5 =
*updated readme
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