# Local-Favorites-Webpage-Template

I'm still working on the instructions so bare with me while I get it updated

I'm also constantly updating and improving the features. When updating the files backup all your settings.php files (e.g. indexsettings.php shortcutssettings.php and shortcuts2settings.php (not to be confused with setup.php that one can be upgraded) The settings.php files hold your saved settings and links etc... once you upgrade all the files just reload your saved backuped settings.php files and it will reload all your shortcuts and settings.  

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

Here's an example of local links

<img width="1918" height="1162" alt="index" src="https://github.com/user-attachments/assets/d29cea81-95eb-4161-ac7e-8b68b77c4919" />

here's an example of outside favorites. 

<img width="2029" height="935" alt="shortcuts" src="https://github.com/user-attachments/assets/76d9fa82-ddb8-4fb0-9fd8-969b0de2d9e8" />

When you click on edit it will take you to the edit page (this is shared for all the pages when you click the edit link it will tell it what page you want to edit) 

<img width="1954" height="1020" alt="editor1" src="https://github.com/user-attachments/assets/10fbce8f-f7bb-4bf1-9d3a-fbdd2a3e722c" />

This will show you underneath each button what link is set to that button as well as allowing you to see what image you have it set to. Clicking on it while on the edit page will allow you to change the settings for that shortcut button. 

<img width="2132" height="963" alt="submitpage" src="https://github.com/user-attachments/assets/841e8a85-f6d2-4b88-acbf-f40709ef43b4" />

On this page, you can upload images to use for the shortcut pages. This uploads to the image directory. 

Images that are in the images directory will populate in the drop down menu (note if you just uploaded an image you will have to refresh the page so the menu will update) 

<img width="1335" height="1103" alt="drop down" src="https://github.com/user-attachments/assets/6a5da288-f63f-45c1-a97c-b60ca6125ac9" />




