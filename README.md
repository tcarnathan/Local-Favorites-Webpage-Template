# Local-Favorites-Webpage-Template

I'm still working on the instructions so bare with me while I get it updated

I'm not a genius with programming so use this at your own risk. 
This was designed to work on a local web server away from direct access from the web 
There is no password protection on the edit pages so if it was online I can only imagine what sites people would like to the shortcuts. 


PHP based favorites page that you can edit the links images etc... within the page. You won't have to go and edit the html or php file when making small changes. 


This works on a local web sever, you can set one up on a raspberry pi, or a linux vm as well as many other ways. 


Each page has 28 "link blocks" 
Index page is the main page, any additional pages you would want would go in the pages folder each with it's own directory. There is two extra pages pre-loaded "shortcuts" and "shortcuts2" 

To add an extra, simply copy and paste one of the existing shortcut folders, rename it then edit the following using the exact same name as the folder
shortcuts.php >>> "newname".php (without quotes)
shortcutsconfig.txt >>> "newname"config.txt (without quotes)
shortcutssettings.php >>> "newname"settings.php (without quotes) 

Then inside the "newname".php file on the 2nd line change $pagename = 'shortcuts2'; >>>>> $pagename = 'newname'; (keep the quotes) basically you're just swapping out shortcuts for the new name this is all in this file you have to change
in the txt file 4th line you will see 

"version":1.4,"name":"shortcuts","namespace":"shortcuts","dropdown":"image","variables": 
Change both the name and namespace from shortcuts to the new name. Remember to match the name exactly across everything mentioned above and the folder name. 


Setting up

Setup is simple if you have some experience with a webserver 

Copy the entire directory to your html folder (or public(html)) depending on how your server is setup. 
then go into the directory and change the following file permissions (as always due with your own risk) 

indexsettings.php set it to 664

images folder set it to 774

in each page folder (e.g. shortcuts and shortcuts2) 
shortcutsettings.php 
shortcutsettings2.php
and any ones you added  set them to 664 as well just like with the indexsettings.php



