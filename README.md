# Sign-In-Sync
Time and Employee Manage Applaction - With us, time syncs for the leader and the team.
# SyncDatabase
To set up the project and synchronize the database with your local environment, follow these steps:

- **Update XAMPP Configuration**: Update the XAMPP MySQL configuration file (`my.ini` or `my.cnf`) it is in xampp\mysql\bin
make it point to the new location of the `SignInSyncDB` database files. 
Set the `datadir` parameter to the path of the `SignInSyncDB` directory within the project.

3. **Restart MySQL Server**: Restart the MySQL server from the XAMPP control panel to apply the changes.

## Example Configuration
Here's an example of how the `datadir` parameter should be updated in the MySQL configuration file:
datadir="P:/xampp/mysql/data" to datadir="k:GitHub\Sign-In-Sync\SignInSyncDB"

Moving MySQL Data Directory in XAMPP
If you need to change the location of the MySQL data directory (datadir) in XAMPP, follow these steps carefully:

Stop MySQL Server: Open the XAMPP Control Panel and stop the MySQL server to ensure no data is being written or accessed during the move.

Copy the Data Folder:

Locate the current data folder of MySQL in your XAMPP installation directory.
Copy the entire data folder to the new location where you want to move your database.
Delete Unnecessary Folders:

In the old location (the one you copied from), remove all database folders except the mysql folder, which contains system databases.
Additionally, you can delete the performance_schema folder, as it will be recreated automatically.
Update Configuration File:

Open the my.ini file located in the xampp/mysql/bin directory using a text editor.
Find the datadir parameter and modify its value to reflect the new location of the MySQL data folder.
Save the changes to the my.ini file.
Restart MySQL Server: Return to the XAMPP Control Panel and start the MySQL server again.

By following these steps, you should be able to successfully move the MySQL data directory in XAMPP to a new location without encountering any issues. Remember to double-check everything before restarting the MySQL server to avoid potential problems.

