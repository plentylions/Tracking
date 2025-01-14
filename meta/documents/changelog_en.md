# Release Notes for Google Tag Manager Tracking ENTERPRISE

## v.5.0.5 (2022-03-28)

### Changed

- The description has been updated.

## v.5.0.4 (2022-01-14)

### Changed

- The plugin is available free of charge. The license was changed to AGPL-3.0.

## v.5.0.3 (2021-02-04)

### Fixed

- "Remove From Cart" was not triggered correctly. This bug has been fixed.

- In some cases the conversion could not be tracked, when using the Google Tag Manager plug-in and the Google Analytics plug-in at the same time.

- Fixed a bug that prevented special characters from being properly replaced in the search field.

## v.5.0.2 (2020-08-06)

### Fixed

- In some cases the content of the plenty-shop-cookie is saved in JSON format and in other cases as an encoded string. This different format prevented correct tracking in some cases. This update can handle both formats.

## v.5.0.1 (2020-08-05)

### Fixed

- There was an error in the DataLayer which ensured that only articles with a scaled price were recorded correctly. Now all items are correctly recorded in both the shopping cart and the checkout process.


## v.5.0.0 (2020-07-27)

### TODO

When updating from version ** 3.0.1 or older ** to version 5.0.0, no changes are necessary in Google Tag Manager. When updating from version ** 4.0.0, 4.0.1 or 4.0.2 ** it is strongly recommended to import the new JSON file, which you have received by email, into the Tag Manager according to the instructions in the email.

In both cases, the settings in the plugin should be checked after the update. You can find out which settings are relevant to you in the instructions.

### Added

- The possibility to register up to 10 of your own cookies via the plentymarkets Cookie Consent interface has been added. It is now possible to use your own tracking scripts from Tag Manager and to correctly and cleanly register the cookies generated by the script. All options are available that can also be used regularly when registering cookies. It is no longer necessary to register your own cookies via your own plugin or theme.

### Fixed

- For the Facebook events "Purchase" and "InitiateCheckout" there was rarely an error due to a missing variable. This has been fixed.

- Graduated prices were only entered in the shopping cart with the price that is valid for quantity 1. This has been corrected. The shopping cart graduated prices are now recognized directly already in the appropriate height.

- The values from the shopping cart were only loaded once per page. With this update, the data from the shopping cart is written into the variable each time it is changed and can be evaluated without the page having to be reloaded.


### Changed

- With this version the Tag Manager can be used both with and without plentymarkets' Cookie Consent solution. Whether such a cookie banner is used can be specified in the settings.

- For each tracking service, the following settings can be selected in the area of ​​cookies:

	- "Register cookie" - if this box is checked, an entry in the cookie consent banner will be displayed for this service.

	- "Set as necessary" - The cookie is always set and the visitor cannot opt out to the cookie.

	- "Set as opt out" - The cookie is set by default and the visitor can opt out to this and deactivate the option.

	- "Assign group" - Select the group in which the entry in the Cookie Consent Banner should be listed. The name for the "Other" group can be changed under CMS > Multilingualism.

	- "Cookie names" - The file names of the cookies are listed here. It is possible to use Regular Express. In most cases adjustments to the standard values ​​are not necessary.

	The texts displayed in the Cookie Consent Banner can be changed under **CMS > Multilingualism**.


## v.4.0.2 (2020-01-30)

### Fixed

- Fixed a bug that in rare cases caused a visitor's origin to be recorded only from the second page on.

## v.4.0.1 (2019-11-18)

### Fixed

- By marking some checkbox fields as mandatory fields in the "Cookies" tab of the plugin configuration, an error could occur when saving the configuration (error message: [object Object]). This has been fixed.

## v.4.0.0 (2019-11-14)

**ATTENTION! You need an updated GTM import file for version 4.0.0. If you have already purchased this plugin and would like to install an update, please follow the steps in the "Changed" section or in the email that we sent you regarding the update together with the link to the new GTM import file. For all new buyers, the description in the plentyMarketplace applies. Please note that version 4.0.0 is only compatible with Ceres as of version 4.4.0.**

### Added

- Registrierung der Tracking-Dienste aus der Google Tag Manager Konfiguration (Google Analytics, Google Ads, Facebook, Pinterest, Billiger.de, Kelkoo, Paypal Marketing Solutions, Awin und Webgains) im Cookie Consent Banner von Ceres. Erst wenn der Nutzer die Dienste ausdrücklich aktiviert, kann der Tag Manager die entsprechenden Tags auslösen. Für alle Dienste, die der Seitenbetreiber im Einsatz hat, müssen in der Plugin-Konfiguration Einstellungen vorgenommen werden. Eine Schritt-für-Schritt-Anleitung entnehmen Sie bitte der Beschreibung im Punkt 4.5 "Opt-In-Einstellungen für Tracking-Dienste".

### Changed

- From this version, opt-out options will no longer be available. They are replaced by the opt-in via the Ceres Cookie Consent banner.

- To track the product list from which an article has been clicked / added to the shopping cart (used, for example, by Google Analytics Enhanced Ecommerce), a local storage entry has been created so far. This has been changed to a session cookie called "sessionItemList". The session cookie is registered via the Ceres Cookie Consent banner and can be activated or deactivated by the user.

- Switching to opt-in with a cookie-consent banner made a major change to the Google Tag Manager configuration necessary. All triggers had to be adapted to the new Consent cookie and relinked. Since a manual change is too extensive and error-prone in our view, we recommend that all those who have already purchased and set up the plugin re-import the entire configuration, taking into account the following instructions. For all new buyers, the description in the plentyMarketplace applies.  

	Before you install the plugin update, please make the following configurations in the Google Tag Manager account.  

	1. Save the new GTM import file **"GTM-Import-v-4-0-0.json"**. (You will receive the file as a zip directory via a link in the e-mail sent by us.) Please unpack the directory.)  

	2. In your Google Tag Manager account, go to **"Variables"** on the left and get all **Tracking ID's** and **Settings** that you set in the variables named "0 - XXX" by copying them into a document.  

	3. If you have created additional variables, triggers and tags independently, you should also save their configurations.  

	4. Go to your Google Tag Manager account **"Administration"** and then **"Import Container"**.  

	5. Select the new file **"GTM-Import-v-4-0-0.json"**.  

	6. Select "New" **as the workspace** and name the new workspace as **"v.4.0.0"**, for example.  

	7. Select the option **"Overwrite"** and **"confirm"** the import.  

	8. As soon as you are back on the overview page of the workspace, please make sure that the currently created workspace **"v.4.0.0"** is selected in the top left corner as **"current workspace"**.  

	9. Go to **Variables** on the left and enter the **secured Tracking ID's** and make the **settings as before**. If necessary, create the variables, triggers and tags that you previously had additionally installed. You can also copy the account IDs and settings from the old workspace by toggling between the workspaces in the top left corner of the current workspace.  

	10. If you use Facebook, Pinterest, Billiger.de, Kelkoo, Paypal, Awin or Webgains tracking, please go to the left **"Tags"** and activate all the tags you need for this. The paused tags can be recognized by the **"pause symbol"** at the far right of the list. To enable paused tags, click on the tag and then on the top right, click **"deactivate pause"** and save.  

	11. Switch to your plentymarkets system, into the corresponding **"Plugin-Set"**, and perform the **"Plugin Update"** by clicking on the round arrow symbol on the right.  

	12. In the **"plugin configuration"** go left to **"Cookies"** and set the checkboxes for **"register cookies"** for all tracking services that you have active in Google Tag Manager. More information can be found in the description in point **4.5 "Opt-in settings for tracking services"**.  

	13. **"Deploy the plugins"** by clicking the save icon in the plugin set.  

	14. Switch back to **Google Tag Manager** and publish the new workspace by clicking **"Submit"** in the top right corner.  

	15. Assign a **version name such as v.4.0.0** and click **"Publish"**.


## v.3.0.1 (2019-10-30)

### Fixed

- If DataLayer values contained double quotation marks (for example, the category name), a JavaScript error occurred. This has been fixed.

### Added

- Point 2.5.2 "Configuration Conversion Value" updated in the UserGuide.

## v.3.0.0 (2019-10-24)

### Fixed

- If the product name contained double quotation marks, a JavaScript error occurred. This has been fixed.

- If the plugin was active, but no GTM ID was entered, a JavaScript error occurred. This has been fixed.

### Added

- Five new tracking services have been integrated into the Google Tag Manager: Billiger.de Sales Tracking, Kelkoo Sales Tracking, PayPal Marketing Solutions, Awin Affiliate Tracking and Webgains Affiliate Tracking.

- The description in plentyMarketplace has been extended by the new tracking options.  

	**The version 3.0.0. provides new Tag Manager items. If you have already purchased this plugin in an earlier version and would like to take advantage of the new options, please follow the steps below. In addition, you will receive an email from us with a GTM import file to add the new elements.**

	1. Save the GTM import file **"GTM-Enterprise-v-3-0-0-ADDED.json"**. (You will receive the file as a zip directory. Please unpack the directory.)

	2. In your Google Tag Manager account, go to **"Administration"** and then **"Import Container"**.

	3. Select the new file **"GTM-Enterprise-Import-v-3-0-0-ADDED.json"**.

	4. Select **"Existing"** and then **"Default Workspace"** or the workspace of your live version as the workspace.

	5. Select **"Merge"** and **"Conflicting Tags, Rename Triggers, and Variables"**. Confirm the import.

	6. Make the settings according to the description in plentyMarketplace.

	7. Publish the workspace by clicking **"Submit"** in the top right corner.

	8. Assign a version name, e.g. **"v.3.0.0"** and click **"Publish"**.

## v.2.0.5 (2019-09-20)

### Fixed

- In version 2.0.4, an important feature was disabled, which could potentially lead to duplicate tracking. This has been fixed.

## v.2.0.4 (2019-09-18)

### Fixed

- A Javascript error could occur if certain Ceres CSS classes could not be found. This has been fixed. Some events can only be triggered if the Ceres CSS classes remain unchanged. Read more about this in the description point 5.1. "Tracking Events".

### Added

- The variant number ("number") was included in the Data Layer. This can be used in some tracking services as "SKU" or the like. The Google Tag Manager preview lets you see when the variable is available in the Data Layer tab.

- The plugin description has been supplemented with the items "2.5 Data Layer Variables" and "5.3. Customizing language texts for product lists (product list name)". The item "5.1 Tracking Events" has been supplemented with important information.

### Changed

- If the product list name was undefined for submission to Google Analytics, it passed the value "undefined". This has been changed to an empty string.

## v.2.0.3 (2019-09-03)

### Fixed

- In Google Tag Manager, "Google Ads Remarketing" may not be able to retrieve the full data from the DataLayer. The set trigger "All Pages" is triggered too early. The GTM import file has been updated accordingly. Anyone who has purchased the plugin in an earlier version and is using "Google Ads Remarketing" should make the following changes:  

	1. In Google Tag Manager, create a new trigger of the type **"Page View - Window Loaded"** and save it, for example, with the name **"All Pages - Window Loaded"**.  

	2. Open the tag **"Google Ads Remarketing"**. In the "Trigger" area, go right to the pen for editing. Use the "minus" symbol to delete the "All Pages" trigger and use the "plus" symbol to select the new trigger **"All Pages - Window Loaded"**.

## v.2.0.2 (2019-08-27)

### Fixed

- A javascript error occurred if the article did not have an RRP stored because the query for the variable "rrp" failed. This has been fixed.

## v.2.0.1 (2019-08-26)

### Added

- OptOut feature for Facebook and Pinterest tracking has been added. Make the configuration as described in the plentyMarketplace.  

	**The version 2.0.1. provides new Tag Manager items. If you have already purchased this plugin in an earlier version and would like to take advantage of the new OptOut features, please follow the steps below. In addition, you will receive an email from us with a link to a more detailed PDF guide and a GTM import file to add the new elements. For all buyers of version 2.0.1 the description in the plentyMarketplace applies.**  

	1. Save the GTM import file **GTM-Enterprise-v-2-0-1-ADDED.json**. (You will receive the file as a zip directory. Please unpack the directory.)

	2. In your Google Tag Manager account, go to **Administration** and then **Import Container**.

	3. Select the new file **GTM-Enterprise-v-2-0-1-ADDED.json**.

	4. Select **Existing** and then **Default Workspace** as the workspace (workspace with the configuration from plugin version 2.0.0).

	5. Select **Merge** and **Conflicting Tags, Rename Triggers, and Variables**. Confirm the import.

	6. The new triggers for Facebook and Pinterest optout must be linked to the tags.

		- Go to **Tags** on the left and select the tag **Facebook - Page View**.  

			In the **Trigger** area, go right to the pen for editing. Use the "minus" symbol to delete the "All Pages" trigger and use the "plus" symbol to select the new trigger **Facebook - trigger optout**.  

		- Proceed in the same way with **Pinterest - PageVisit**. Replace the existing trigger "All Pages" with **Pinterest - trigger optout**.  

		- For existing Facebook and Pinterest events, you also need to swap the trigger. Instead of the previous event trigger, the trigger group of the same name must now be linked.
			- Example:  
				Open the tag **Facebook - AddToCart - Item List**  

				In the "Trigger" area, go right to the pen for editing. Use the "minus" icon to clear the "All Pages" trigger and use the "plus" icon to select the new trigger **Facebook - trigger group - add to cart on item list page**.  

		**Do the same with all other Facebook and Pinterest events. For every event, there is a new trigger group with the same name, which you must select.**

	7. Publish the workspace by clicking **Submit** in the top right corner.

	8. Assign a version name, e.g. ** v.2.0.1 ** and click **Publish**.

	9. Switch to your plentymarkets system and in the plugin configuration go to **Default Container Shortcuts** on the left and check the checkboxes for Facebook OptOut and Pinterest OptOut.

	10. Make the configuration of the OptOut links according to point 4.3 of the description in the plentyMarketplace.

### Changed

- The plugin was renamed from "All-In-One Google Tag Manager Tracking" to "Google Tag Manager Tracking ENTERPRISE".

- Correction of items in Google Tag Manager. The changes refer to the new GTM import file **GTM-Enterprise-v-2-0-1.json**.  

	1. Correcting typing errors
		- Corrected the typing error in the **Facebook - InitiateCheckout** tag. Change the Javascript variable basketItemsContens to: **basketItemsContents**  
		- Corrected the typing error in the **Facebook - Purchase** tag. Change the Javascript variable orderItemsContens to: **orderItemsContents**  
		- Corrected the typing error in the **Facebook - Search** tag. Change the Javascript variable itemContens to: **itemContents**

	2. Deleting extraneous triggers in Google Tag Manager  
		- Trigger **Page View - Dom ready**. This trigger was unused in our default Tag Manager configuration.
		- Trigger **Global Events**. This trigger corresponds to the "All Pages" trigger. "Google Ads Remarketing" tag exchanged "Global Events" trigger for "All Pages".

	3. Correction of folder assignments  
		- The elements "Google Ads Remarketing - ecomm_pagetype", "Google Ads Remarketing - ecomm_pcat", "Google Ads Remarketing - ecomm_pname", "Google Ads Remarketing - ecomm_prodid", "Google Ads Remarketing - ecomm_totalvalue" have been moved to the folder "Google Ads"  
		- The elements "Pinterest - AddToCart - Item List - line_items", "Pinterest - AddToCart - Item List - order_quantity", "Pinterest - AddToCart - Item List - value", "Pinterest - AddToCart - Single Item - line_items", "Pinterest - AddToCart - Single Item - order_quantity", "Pinterest - AddToCart - Single Item - value", "Pinterest - line_items", "Pinterest - order_quantity", "Pinterest - value" have been moved to the folder "Pinterest".


## v.2.0.0 (2019-07-24)

**ATTENTION! You need an updated GTM import file for version 2.0.0. If you have already purchased this plugin and would like to install an update, please follow the steps in the "Changed" section or in the email that we sent you regarding the update together with the link to the new GTM import file.**

### Added

- The events for Facebook and Pinterest tracking have been extended. These additional events are now available for Facebook: **Add To Cart**, **Add To Wishlist**, **Complete Registration**, **Contact** and **Initiate Checkout**. For Pinterest these further events are now available: **Add To Cart**, **View Category**, **Search**, **Signup**

- Added **Google Analytics opt-out link for privacy policy page**. If your privacy policy does not include a Google Analytics OptOut link, you can now use the plugin to place it under the privacy policy. Further information can be found in section 4.3 of the description.

### Changed

- The update of our plugin to the version 2.0.0 provides many new tracking options and is based on a completely revised, technical structure in the background. As a result, Google Tag Manager settings have changed dramatically in favor of central, unified management. If you have purchased this plugin in an earlier version, you will need to import a new GTM import file, otherwise tracking can no longer be guaranteed. For all new buyers, the description in the plentyMarketplace applies.  

	**We recommend the following procedure so that there are no gaps in tracking:**

	Before you install the plugin update, please make the following configurations in the Google Tag Manager account.

	1. Save the new GTM import file **GTM-Import-v-2-0-0.json**. (You will receive the file as a zip directory via a link in the e-mail sent by us. Please unpack the directory.)

	2. Go to your Google Tag Manager account **Administration** and then **Import container**

	3. Select the new file **GTM-Import-v-2-0-0.json**.

	4. Select **New** as the workspace and name the new workspace as **v.2.0.0**, for example.

	5. Select the option **Overwrite** and **confirm** the import.

	6. As soon as you are back on the overview page of the workspace, please make sure that the work area **v.2.0.0** you just created is selected in the top left as the **current workspace**.

	7. Go to **Variables** on the left and enter the **account IDs for the requested services**. For a better overview, all variables that contain account IDs are marked with a **0** in front of the name, so that they appear at the top of the list.  

	You can copy the account IDs from the old workspace by toggling between the workspaces in the upper left corner of the current workspace.

	8. If you use Facebook and Pinterest tracking, please go to **Tags** on the left and activate all the tags you need. For a better overview, all tags are uniformly marked with the corresponding tracking service name. The paused tags are indicated by the **pause symbol** on the far right of the list.  

	To enable paused tags, click on the tag and then on the top right, click "Pause cancel" and save.

	9. If you have already created your own tags, triggers and variables in addition to the configuration supplied by us, you must transfer these from the old workspace to the new workspace.

	10. Switch to your plentymarkets system, into the corresponding **plugin set**, and perform the **plugin update** by clicking on the round arrow symbol.

	11. In the **plugin configuration** go left **standard container shortcuts** and activate all checkboxes.

	12. **Deploy the plugins** by clicking on the save icon in the plugin set.

	13. Go back to **Google Tag Manager** and publish the new workspace by clicking **Submit** in the top right corner.

	14. Assign a **version name, e.g. "v.2.0.0"** and click **Publish**.


## v.1.0.2 (2019-07-15)

### Fixed

- Due to an error, the currency was not transferred for transactions. This has now been fixed.

- The requirements for multilingual capability of the plugin have been updated. Language texts, e.g. Google Enhanced Ecommerce events may not be transmitted correctly. This bug has now been fixed.

- Special characters in article names were not transmitted correctly. This bug has also been fixed.

## v.1.0.1 (2019-07-03)

### Fixed

- For orders shipped outside the European Union, incorrect conversion values and incorrect shipping costs were tracked. This has now been fixed.

## v.1.0.0 (2019-06-20)

### Added

- First Release
