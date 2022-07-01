## 4 En línea<br>
This is a school project based in PHP deployable with ddev.<br>
A move consists in placing your own sign on one of those columns, at your choice. The sign will fall down towards the base of the column, until it reaches another sign.<br> Due to this, the columns will be filled bottom-up.<br>
When you fill 4 spaces in a line, you win.<br><br>

## How to install<br>
First, you have to clone the repo like ever. <br>
Then, you have to start a ddev project in this folder with (CMD):
**ddev config**
And it shows a page that requires a name, leave it in blank, then when it asks for the public root you have to type leave it blank And Yes.<br>
After that, with **ddev start** you can run the program. You have to copy the .env.example file in another one called .env, then you have to enter ssh with **ddev ssh** and:<br><br>
**composer update
php artisan key:generate**<br><br>
Now, you can exit, and the project will be able to start with only **ddev start** and stop with **ddev poweroff**<br><br><br>



The last step is restart with **ddev restart** and then start playing on:<br>
http://cuatroenlinea.ddev.site/jugar/1

