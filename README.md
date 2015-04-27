#Installation#

##Put in the right location##

Unzip:

```bash
tar -xvf nectar-hub-nectar-hub-hubzero_version1_3_upgrade.tar.gz
```

Move up to the theme directory:
 
 ```bash
 cd nectar-hub-nectar-hub/templates/
 ```
 
Copy the theme folder to the `/var/www/example/templates/` folder:

```bash
mv nectar/ /var/www/example/templates/
```

##Discover and enable##

Once in place, you need to log in as the HZCMS administrator and then discover and enable the module.

* Go to https://<site_address>/administrator/ and login
* Then to 'Extensions' -> 'Extensions Manager'
* Select the 'Discover' tab
* Hit the 'Discover' button
* Put a checkbox in the `NeCTAR - Default` theme row and then hit the 'install' icon.
* Go to 'Extensions' -> 'Template Manager'
* Drag the star for the default Site template to the NeCTAR template.
