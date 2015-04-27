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

##Tailor footer via the Admin console##

The module `Hub Footer` needs to be adjusted via the Module manager to be as follows:

```html
<h2>Helpful Links</h2>
<div id="ancillary" class="grid cf">

	<div class="col span-quarter">
		<h3>Get Help</h3>
		<ul>
			<li><a href="/feedback">Feedback</a></li>
			<li><a href="/login/remind">Forgot username?</a></li>
			<li><a href="/login/reset">Lost password?</a></li>
			<li><a href="/legal/accessibility">Accessibility Issues</a></li>
			<li><a href="/about/contact">Contact us</a></li>
		</ul>
	</div>
	<div class="col span-quarter">
		<h3>Participate</h3>
		<ul>
			<li><a href="/resources/new">Submit a resource</a></li>
			<li><a href="/groups/new">Create a group</a></li>
			<li><a href="/answers"><span>Answer questions</span></a></li>
			<li><a href="/wishlist"><span>Make a wish</span></a></li>
			<li><a href="/forum"><span>Join the discussion</span></a></li>
		</ul>
	</div>
	<div class="col span-quarter">
		<h3>Discover</h3>
		<ul>
			<li><a href="/whatsnew"><span>What's New</span></a></li>
			<li><a href="/resources"><span>Resources</span></a></li>
			<li><a href="/wiki"><span>Wiki</span></a></li>
			<li><a href="/tags"><span>Tags</span></a></li>
			<li><a href="/kb"><span>Knowledge Base</span></a></li>
		</ul>
	</div>
	<div class="col span-quarter omega">
		<h3>About Us</h3>
		<ul>
			<li><a href="/about">Who we are</a></li>
			<li><a href="/legal/terms">Terms of use</a></li>
			<li><a href="/legal/privacy">Privacy Policy</a></li>
			<li><a href="/legal/abuse">Abuse Policy</a></li>
		</ul>
	</div>

</div><!-- / footer nav -->
<div class="inner">
<ul id="legalese">
	<li class="policy left">Copyright &copy; 2012 Hubzilla</li>
	<li><a  href="http://www.v3.org.au" target="_blank">
		<img class="v3" src="/templates/nectar/images/logos/v3-logo.png"/></a></li>
	<li><a href="https://www.nectar.org.au/" target="_blank">
		<img class="nectar" src="/templates/nectar/images/logos/nectar-logo.jpg"/></a></li>
	<li class="right">Powered by <a href="http://hubzero.org" rel="external">HUBzero<sup>&reg;</sup></a>, a <a href="http://www.purdue.edu" title="Purdue University" rel="external">Purdue</a> project</li>
</ul><!-- / footer #legalese -->
</div>
```

##Update the content##

The following pages should be updated:

1. About Us
1. Contact Us
1. Terms of Use
1. Privacy Policy