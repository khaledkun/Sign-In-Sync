# Sign-In-Sync
Time and Employee Manage Applaction - With us, time syncs for the leader and the team.

To set up the project and synchronize the database with your local environment, follow these steps:

- **Update XAMPP Configuration**: Update the XAMPP MySQL configuration file (`my.ini` or `my.cnf`) it is in xampp\mysql\bin
make it point to the new location of the `SignInSyncDB` database files. 
Set the `datadir` parameter to the path of the `SignInSyncDB` directory within the project.

3. **Restart MySQL Server**: Restart the MySQL server from the XAMPP control panel to apply the changes.

## Example Configuration
Here's an example of how the `datadir` parameter should be updated in the MySQL configuration file:
datadir="P:/xampp/mysql/data" to datadir="k:GitHub\Sign-In-Sync\SignInSyncDB"