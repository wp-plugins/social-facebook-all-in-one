=== Social Facebook All In One ===
Contributors: donimedia
Author URI: http://donisocial.donimedia-servicetique.net/
Plugin URI: http://donisocial.donimedia-servicetique.net/?p=69
Tags:  Facebook, facebook like, facebook like box, fb, Like, likebox, connect, publish, Share, social media, social widget, registration, page, wall, feed, social, widget, wordpress, wordpress Facebook, wordpress facebook like, wordpress facebook like box, wordpress fb, wordpress Like, wordpress likebox, wordpress connect, wordpress publish, wordpress Share, wordpress social media, wordpress social widget, wordpress registration, wordpress page, wordpress wall, wordpress feed, wordpress social, wordpress widget
Donate link: http://donisocial.donimedia-servicetique.net/
Requires at least: 3.0.1
Tested up to: 3.3.1
Stable tag: 1.0.2
	
Customizable jQuery accordion for Wordpress which gathers Facebook social plugins together .

== Description ==
	
Wordpress Social Facebook All In One is a widget which allows to display , on your wordpress website , 
a customizable jQuery accordion that brings together different social plugins published by Facebook , 
that is to say :

* Facebook fans like box
* Facebook Activity Feed
* Facebook Recommandations
* Facebook Registration


Wordpress Social Facebook All In One widget is distinguished by a prefix to avoid conflicts 
in database Options table .
Wordpress Social Facebook All In One widget is based on a jQuery accordion which is animated by the following effects , for now :

* Bounceslide effect ( 12/15/2011 ) .


[Newsletter](http://www.donimedia-servicetique.net/newsletters "Newsletter about Wordpress Social Facebook All In One widget") | [Forum](http://www.donimedia-servicetique.net/support-forum-donimedia-servicetique-cms-extensions  "Forum about Wordpress Social Facebook All In One widget")


* [LIVE DEMO 1 ( For a Small Sidebar Wordpress website )](http://donisocial-small-sidebar.donimedia-servicetique.net/?p=53 "Wordpress Social Facebook All In One widget Live Demo for a Small Sidebar Wordpress website") 
* [LIVE DEMO 2  ( For a Wide Sidebar Wordpress website )](http://donisocial.donimedia-servicetique.net/?p=69 "Wordpress Social Facebook All In One widget Live Demo for a Wide Sidebar Wordpress website") 



<b>Changelog :</b>


* Wordpress Social Facebook All In One widget ** 1.0.2 ** version fixes following bug :

	* ** require('/home/donimedi/donisocial/www/wp-load.php') [function.require]: failed to open stream: No such file or directory in /home/mysite/public_html/wp-content/plugins/social-facebook-all-in-one/social_facebook_all_in_one.php on line 211  :**
		On line 211 , the following instruction require( '/home/donimedi/donisocial/www/wp-load.php' ); is now replaced by this instruction :
		require( $_SERVER["DOCUMENT_ROOT"].'/wp-load.php' );

* Wordpress Social Facebook All In One widget ** 1.0.1 ** version fixes following bugs :

	* ** Accordion titles font size is too big : ** Now you can set titles font size ( in pt ) with "Titles Font Size" option .
	* ** Thumbnail images don't line up correctly : ** Now you can set thumbnail width and thumbnail padding left .
	* ** redirect_uri isn't allowed for that client_id error message : ** Now register.php file processes signed Facebook data properly .
	* On Wordpress 3.3 installation, activating this plugin **[ breaks drag and drop in widget admin section and user cannot add or remove widgets from a sidebar : ** Files paths and javascript functions are now fixed .

* Version ** 1.0.0 ** : WordPress Social Facebook All In One widget first version release .





* Wordpress Social Facebook All In One widget Author plugin : David DONISA
* Wordpress Social Facebook All In One widget Author E-mail : donimedia-servicetique@orange.fr
* Wordpress Social Facebook All In One widget Plugin license type : GPL v2.0


== Installation ==	

[Wordpress Social Facebook All In One DOCUMENTATION](http://donisocial.donimedia-servicetique.net/?p=113 "Wordpress Social Facebook All In One DOCUMENTATION") 

WIDGET INSTALLATION PROCEDURE :
 
1. WIDGET INSTALLATION :

1. Download Wordpress Social Facebook All In One widget  to your computer , from official Wordpress directory .
2. Launch your web browser and connect you to your Wordpress blog .
3. Click on the plugins menu .
4. Click on the Add New button .
5. Click on the Upload link .
6. Use the  browse  button to select the plugin zip file that was downloaded .
7. Click on the  Install Now  button .
8. Once the widget is installed, click on the Activate plugin button .
9. The widget is now ready to use !

 
2. WIDGET CONFIGURATION :

1. You can access Wordpress Social Facebook All In One widget  from  Appearance --> Widget menu or from widgets option of your theme .
2. Drag and drop Wordpress Social Facebook All In One widget  towards the appropriate sidebar .
3. Enter a title for this widget .
4. Translate the predefined labels , at your convenience .
5. Enter your Facebook Url Page .
6. Enter your Facebook App Id .
7. Enter your Facebook App Secret .
   ( You will find a tutorial explaining how to retrieve a Facebook App id and your Facebook App Secret , at the following address : http://donisocial.donimedia-servicetique.net/?p=49 )
8. The most important of remaining parameters, is the "width" one. Whether the social blocks plugins, the registration box or the footer Like button,  be sure to choose an appropriate value for the width of your template sidebar .
9. Once your web page is refreshed , you can see that  Wordpress Social Facebook All In One widget is ready to use !



== Frequently Asked Questions ==

** How to retrieve a Facebook App id and a Facebook App secret ? **

Facebook App id and Facebook App secret are two parameters required to use Wordpress Social Facebook All In One widget .

More precisely, Facebook app id is a parameter , sometimes called Facebook client id, required to use Facebook applications , including registration box .

Facebook app secret is a number , only known by you and Facebook , which is used to signed your Facebook data .


** To retrieve a Facebook App id and a Facebook App secret  **, you can follow instructions of ** our tutorial ** , at the following address :

[http://donisocial.donimedia-servicetique.net/?p=49](http://donisocial.donimedia-servicetique.net/?p=49
 "How to retrieve a Facebook App id and a Facebook App secret Tutorial")



== Screenshots ==

1. Wordpress Social Facebook All In One widget admin panel - Facebook Labels Translations section -
2. Wordpress Social Facebook All In One widget admin panel - General Settings section -
3. Wordpress Social Facebook All In One widget admin panel - Social Containers Settings section -
4. Wordpress Social Facebook All In One widget admin panel - Like Box Settings section -
5. Wordpress Social Facebook All In One widget admin panel - Registration Box Settings section - , Wordpress Social Facebook All In One widget admin panel - Footer Like Button Settings section - , Wordpress Social Facebook All In One widget admin panel - Credit link for DoniSocial section -

== Changelog ==

= 1.0.2 =
* Wordpress Social Facebook All In One widget 1.0.2 version fixes following bug :

	* require(/home/donimedi/donisocial/www/wp-load.php) [function.require]: failed to open stream: No such file or directory in /home/mysite/public_html/wp-content/plugins/social-facebook-all-in-one/social_facebook_all_in_one.php on line 211 .
		On line 211 , the following instruction require( '/home/donimedi/donisocial/www/wp-load.php' ); is now replaced by this instruction :
		require( $_SERVER["DOCUMENT_ROOT"].'/wp-load.php' );

= 1.0.1 =
* Wordpress Social Facebook All In One widget 1.0.1 version fixes following bugs :

	* Accordion titles font size is too big : Now you can set titles font size ( in pt ) with "Titles Font Size" option .
	* Thumbnail images don't line up correctly : Now you can set thumbnail width and thumbnail padding left .
	* "redirect_uri isn't allowed for that client_id" error message : Now register.php file processes signed Facebook data properly .
	* On Wordpress 3.3 installation, activating this plugin breaks drag and drop in widget admin section and user cannot add or remove widgets from a sidebar : Files paths and javascript functions are now fixed .

= 1.0.0 =
* Wordpress Social Facebook All In One widget first version .