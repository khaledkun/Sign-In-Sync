# Sign-In-Sync
Time Employee Manage Applaction - With us, time syncs for the leader and the team.
# Wanna Run PHP in the project ?
1. inside the Visual Studio Code in Extensions.
2. search for @builtin php.
3. Disable PHP Language Features only.
![PhpRun](/Tutorial/Run-Php1.PNG)
4. Install `PHP Intelephense`.
5. Install `PHP Server`.
![Php-Extensions](/Tutorial/Php-Extensions.PNG)
6. Download Xampp From that link:
- [XAMPP-Download](https://www.apachefriends.org/download.html)
7. After installing the Xampp go to xampp\php where you installed.
8. Then System Properties.
9. Then Environment Variables.
10. Edit the path for system or only-user as you like.
![Edit-Path](/Tutorial/Edit-Path.PNG)
11. Click on path  then New and add the full path for php for Ex: `P:\xampp\php`.
12. Then Click Run in PHP Server It should work.
- If not Restart your Pc.
## 13. Extra if you want to run the mysql database:
- search for xampp control panel and run Apache with mysql.
![Xampp-Conrol-Panel](/Tutorial/Xampp.PNG)
# How to Run the Project Database to make it sync ?
To set up the project and synchronize the database with your local environment, follow these steps:
**Make Sure to stop the Xampp from Running After doing anything**
## 1. Delete Unnecessary Folders From xampp 
- In the old location remove all database folders except the `mysql` folder and `phpmyadmin`, which contains system databases.
- Additionally, you can delete the `performance_schema` folder, as it will be recreated automatically.
- If you have personal databases you can just copy it to somewhere else.
## Update XAMPP Configuration: 
1. Update the XAMPP MySQL configuration file (`my.ini`) it is in xampp\mysql\bin
- Or click in Config button 
![Config-Edit](/Tutorial/Config-Edit.PNG)
- Find the `datadir` parameter and modify its value to Point to  MySQL Project data folder.
- Save the changes to the `my.ini` file.
## Example Configuration
Here's an example of how the `datadir` parameter should be updated in the MySQL configuration file:
`datadir="P:/xampp/mysql/data"` to `datadir="P:\Sign-In-Sync\data"`
![DataDir](/Tutorial/DataDir.PNG)