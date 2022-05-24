# Google Tag Manager Tracking ENTERPRISE

<div class = "alert alert-info" role = "alert">
     You can download the "JSON import file" from <a href="https://www.ecomsilio.de/plugin/gtm-tracking-enterprise/GTM-Enterprise-Import-v-5-0-3.json.zip">https://www.ecomsilio.de/plugin/gtm-tracking-enterprise/GTM-Enterprise-Import-v-5-0-3.json.zip</a>.
</div>

## 1. Content

This plugin contains the following tracking codes:

**Google Analytics**

* Google Analytics "PageView" - pageview for all pages
* Google Analytics Enhanced Ecommerce Event "Purchase" - completed transaction
* Google Analytics Enhanced Ecommerce Event "Product Impressions" - View the products on category pages and in the search results list
* Google Analytics Enhanced Ecommerce Event "Product Click" - Click on products on category pages and in the search results list
* Google Analytics Enhanced Ecommerce Event "Product View" - View the individual product on the product page
* Google Analytics Enhanced Ecommerce Event "Add To Cart" - adding an item to the shopping cart on category pages, in search result lists and on the item page
* Google Analytics Enhanced Ecommerce Event "Remove From Cart" - Remove an item from the shopping cart on all pages via the shopping cart preview and on the shopping cart page

_INFO_ You can find out more about setting up Google Analytics under point 3 "Setting up Google Analytics".

**Google Ads Remarketing**

**Google Ads - Conversion Tracking**

**Facebook Tracking**

* Facebook Event "Page View" - pageview for all pages
* Facebook Event "Purchase" - completed transaction
* Facebook Event "Add To Cart" - adding an article to the shopping cart on category pages, in search result lists and on the article page
* Facebook Event "Add To Wishlist" - Add an article to wishlist
* Facebook Event "Complete Registration" - Registration in the webshop via the registration form and during the checkout process
* Facebook Event "Contact" - Submit the contact form
* Facebook Event "Initiate Checkout" - Enter the order summary before purchasing

**Pinterest Tracking**

* Pinterest Event "Page Visit" - pageview for all pages
* Pinterest Event "Checkout" - completed transaction
* Pinterest Event "Add To Cart" - adding an item to the shopping cart on category pages, in search result lists and on the article page
* Pinterest Event "View Category" - Calling category pages
* Pinterest Event "Search" - executed search query
* Pinterest Event "Signup" - Registration in the webshop via the registration form and during the checkout process

**Billiger.de Sales Tracking**

**Kelkoo Sales Tracking**

**Awin Tracking**

* Awin Journey - Page view of all pages except checkout and order confirmation page
* Awin Conversion - completed transaction

_INFO_ More about setting up Awin can be found in point 6 "Setting up Awin Tracking".

**Webgains Tracking**

* Webgains All Pages - pageview for all pages
* Webgains Conversion Tracking - completed transaction

_INFO_ More about setting up Webgains can be found in point 7 "Webgains Tracking Setup".

**PayPal Marketing Solutions**

_INFO_ More about setting up PayPal Marketing Solutions can be found in point 8 "Setting up PayPal Marketing Solutions".

<br>

<table width="100%" border="0" style="border-collapse: collapse;border-spacing:0;max-width:800px;">
<tr>
<td style="padding: 20px;border:2px solid #000;">
**Starting with version 4.0.0, the tracking services must be registered in Ceres' Cookie Consent banner. This version is therefore only compatible with Ceres from version 4.4.0. Please follow the steps in section 4.5 "Opt-in settings for tracking services". We would like to point out that we can not provide legal advice and assume no liability for the accuracy of the information. Consult a lawyer to protect the information about the cookies under data protection law.**
</td>
</tr>
</table>

<br>

## 2. Setup Google Tag Manager


### 2.1. Create Google Tag Manager container

To use this plugin, you need a Google Tag Manager account. If you do not already have one, please sign in with your Google Account on the following page: [https://www.google.com/intl/en/tagmanager/](https://www.google.com/intl / DE / tagmanager / "To the page of the Google Tag Manager").

After logging in, create a new Google Tag Manager container for your website. Upon completion you will receive a **"Google Tag Manager Container ID (GTM-XXX)""**.

_Google Tag Manager Container ID:_

<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-06-19_14.33.51.png" alt="Google Tag Manager Container ID" style="max-width : 100%; height: auto; ">

<br>

### 2.2. Import data into Google Tag Manager

All variables, tags and triggers that you need for the above mentioned tracking codes have already been prepared for you in a **"JSON import file"**. You can import this file into Google Tag Manager.

**You will receive the import file separately after the purchase of the plugin by e-mail from us.**

1. In your Google Tag Manager account, go to the **"Administration"** tab and select **"Import container"**.

	_Import File:_  

	<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-06-19_14.43.10.png" alt="Import file" style="max-width:100%;height:auto;">

2. **Select file to import**  

	Select the JSON import file.

3. **Select Workspace**  

	Select a workspace to which the data should be imported. You will probably work with the default workspace. You can also create a new one.

4. **Select import option**  

	Select whether you want to overwrite the entire workspace or if you want to add the new data to existing data. If you have newly created the Google Tag Manager Container, you can choose "Overwrite". If you have already created your own tags, triggers and variables and decide on the "merge" option, you should check that tags are not fired multiple times and that they may be paused or deleted.

5. **Confirm**  

	After confirming, all variables, triggers and tags will be added to your Google Tag Manager container according to the selected import option.

<br>

### 2.3. Enter account IDs for tracking services in Google Tag Manager

For the tracking to work, you still need to enter your individual account IDs for the respective tracking services (Google Analytics, Google Ads Remarketing, Google Ads - Conversion Tracking, Facebook, Pinterest). By default, all values ​​are set to 0, so no data is transferred. Only enter the values ​​for services that you use. For services you do not use, you can leave the values ​​at 0.

For clarity, all variables that contain account IDs are marked with a "0" in front of the name, so they appear at the top of the list.

1. In Google Tag Manager, in the left-hand side column, go to "Variables".

2. Variable: **"0 Google Analytics - Tracking ID"**  

	Please enter the tracking ID of the Google Analytics Property here (UA-XXX).

3. Variable: **"0 Google Ads - Conversion ID"**  

	Please enter here the conversion ID for the conversion measurement you have created in the Google Ads account.  

	To find the conversion ID:  

	* In the Google Ads account go to "Tools and Settings / Measurement / Conversions".
	* Click on the active conversion.
	* Click "Tag Setup" and then use "Google Tag Manager".
	* Read the conversion ID here

4. Variable: **"0 Google Ads - Conversion Label"**  

	Please enter the conversion label for the corresponding conversion ID here. You'll find this value in the same location as the conversion ID.

	_Conversion ID and Conversion label:_  

	<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-06-19_15.15.05.png" alt="Conversion ID and Conversion Label" style=" max-width: 100%; height: auto; ">

5. Variable **"0 Facebook - Pixel ID"**  

	Please enter here the Facebook Pixel ID, which you received from your Facebook account.

6. Variable **"0 Pinterest - ID"**  

	Please enter the Pinterest ID you received from your Pinterest account here.

7. Variable **"0 Billiger.de - Shop ID"**  

	Please enter here the Shop-ID, which you received from your Billiger.de account.

8. Variable **"0 Kelkoo - Merchant ID"**  

	Please enter here the Merchant ID you received from your Kelkoo account.

9. Variablen zu **"Awin"**

	More about setting up Awin can be found in point 6 "Setting up Awin Tracking".

10. Variablen zu **"Webgains"**

	More about setting up Webgains can be found in point 7 "Webgains Tracking Setup".

<br>

### 2.4. enable paused tags as needed (Facebook and Pinterest tracking)

By default, we've paused the tags for Facebook and Pinterest tracking in Google Tag Manager. If you want to use these services and have entered the corresponding IDs in the variables, you can activate the tags.

#### Example: Activation "Facebook - Page View"

1. In Google Tag Manager, in the left-hand page column, go to "Tags."

2. **Facebook - Page View**  

	Open the tag "Facebook - Page View" and click on the three vertical dots in the upper right corner to open the menu. Select the item "reactivate".  

	_Activation of paused tag:_  

	<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/pausierten-Tag-aktivieren.png" alt="Activation of paused tag" style="max-width: 100%; height: auto; ">

**Do the same for all other paused tags you want to activate.**

<br>

### 2.5. Data Layer variables

1. **Read data layer variables through Google Tag Manager Preview**  

	Depending on pages and events, the Google Tag Manager Data Layer provides a variety of variables. You can view the structure of the data layer via the Google Tag Manager's **"Preview"**.  

	- Go to the top right of your Google Tag Manager account **"Preview"**.  

	- Open your shop's website in the same browser.  

	- In the opening panel of the Google Tag Manager go to the tab **"Data Layer"**. In the column **"Current values of the Data Layer"** you can see which values are available for specific events or on specific pages.

2. **Configuration Conversion Value**  

	We have set the tags with certain default values, but you can customize them as needed.  

	The Conversion Value on the order confirmation page in our configuration is the gross value of the goods (if you only track net prices, then the net value of the goods) **excluding** shipping costs and **without** consideration of coupon values. This corresponds to the GTM variable **"orderData.0.itemSum"**.  

	If you want to pass a different value to Google Analytics, Facebook, etc. the total value including shipping costs and including voucher value, then proceed as follows (For new installations, you only have to observe point 1 "Variable Order - itemSum"):  

	1. Variable: **"Order - itemSum"**  

		- In Google Tag Manager, go to Variables on the left and then the variable **"Order - itemSum"**.  

		- Enter **"orderData.0.amount"** in the field for the name of the data layer variable.  

		- Optional: Rename the variable to **"Order - amount"**.  

		- Save the variable.  

	2. Variable: **"Basket - itemSum"**  

		- In Google Tag Manager, go to Variables on the left and then the variable **"Basket - itemSum"**.  

		- Enter **"basketData.0.amount"** in the field for the name of the data layer variable.  

		- Optional: Rename the variable to **"Basket - amount"**.  

		- Save the variable.  

	3. Variable: **"Google Analytics Enhanced Ecommerce - purchase"**  

		- Go to the variable **"Google Analytics Enhanced Ecommerce - purchase"**.  

		- In line 28 of "revenue", enter the variable **"orderData[0].amount"** instead of "orderData[0].itemSum".  

		- Save the variable.

	4. Variable: **"Google Ads Remarketing - ecomm_totalvalue"**  

		- Go to the variable **"Google Ads Remarketing - ecomm_totalvalue"**.

		- In line 15 of "var totalAmount", enter the variable **"orderData[0].amount"** instead of "orderData[0].itemSum".  

		- In line 19 of "var totalAmount", enter the variable **"basketData[0].amount"** instead of "basketData[0].itemSum".  

		- Save the variable.

	5. Variable: **"Pinterest - value"**  

		- Go to the variable **"Pinterest - value"**.  

		- In line 10 of "var value", enter the variable **"orderData[0].amount"** instead of "orderData[0].itemSum".  

		- In line 14 of "var value", enter the variable **"basketData[0].amount"** instead of "basketData[0].itemSum".  

		- Save the variable.

<br>

### 2.6. Publish Google Tag Manager Container

In order for the configuration to go live and data to be tracked, you must finally publish the Google Tag Manager Container.

- Go to the top right **"Send"**.  

	_Send:_  

	<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/senden.png" alt="Send" style="max-width:100%;height:auto;">  

- Enter a **"version name"** (for example, the version of the plugin).

- Click **"Publish"**.  

	_Publish:_  

	<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/veroeffentlichen.png" alt="Publish" style="max-width:100%;height:auto;">

<br>

## 3. Establish Google Analytics

In order to get the most out of the plugin's tracking data, you should make the following settings in Google Analytics:

1. **Enable ecommerce**  

	In Google Analytics, go to the bottom left of the wheel and open the administration. In the third column you will find the e-commerce settings. Enable **"Enable Ecommerce"** and **"Enable Advanced Ecommerce Reporting"**.  

	_Ecommerce Setup:_  

	<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-06-20_09.25.12.png" alt="Ecommerce Setup" style="max-width : 100%; height: auto; ">

<br>

## 4. Configuration plugin

Open the settings of the plugin and make the following configurations:

### 4.1. Integration of the consent banner

** Configuration / integration **

* If you use the cookie consent banner from plentymarkets or frontend studios in your Ceres shop, check the option "Cookie consent banner is active".

* If you do not use a cookie consent banner, leave the option deactivated.

* The plugin can only be used with a cookie consent banner that supports the cookie registration interface of the Ceres Shop.

### 4.2. Registration of cookies

** Configuration / cookies **

The following settings can be selected for each tracking service in the cookies area:

* "Register cookie" - if this box is checked, an entry in the cookie consent banner will be displayed for this service.

* "Set as necessary" - The cookie is always set and the visitor cannot object to the cookie.

* "Set as opt out" - The cookie is set by default and the visitor can object and deactivate the option.

* "Assign group" - Select the group in which the entry in the Cookie Consent Banner should be listed. The name for the "Other" group can be changed under CMS> Multilingualism.

* "Cookie names" - The file names of the cookies are listed here. It is possible to use Regular Express. As a rule, adjustments to the standard values ​​are not necessary.

The texts displayed in the Cookie Consent Banner can be changed under ** CMS> Multilingualism **.

### 4.3. Register your own cookies

** Configuration / own cookies **

If you want to expand the tracking scripts in Google Tag Manager or want to register your own cookies for another reason, you can enter the data about the cookies as follows:

* Check "Register cookie".

* If necessary, check the options "set as necessary" or "set as opt out".

* Select the appropriate group in which the cookie should be listed.

* In the "Cookie Name" field, list the file names of the cookies. You can list multiple names as a comma-separated list. If the cookie names are dynamic, you can use Regular Express for.

Under _ "CMS> Multilingualism" _ you define the following information:

* Cookie name or label

* Cookie description

* The duration / validity of the cookie

* The URL of the cookie policy or data protection information

* The provider or the issuing company

### 4.4. Google Tag Manager data

** Configuration / Google Tag Manager **

* Enter the Google Tag Manager Container ID (GTM-XXX) (see point 1).
* Optionally, you can specify whether only net prices should be tracked.

_Installation plugin: _

<img src = "https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-07-18_09.34.01.png" alt = "Setup plugin" style = "max-width: 100% ; height: auto; ">

<br> <br>

### 4.5. optional: integrate Google Site Verification via HTML tag on the website

To use the Google Search Console it is necessary to confirm the ownership of the website. (see: [https://support.google.com/webmasters/answer/9008080?hl=en#)](https://support.google.com/webmasters/answer/9008080?hl=en#) "help page of Search Console") )

There are several methods for confirmation in the Google Search Console. You can verify ownership using either the "Google Tag Manager" option or an "HTML tag".

If you want to use the "HTML Tag" option, you can enter the code from the Google Search Console in the plugin. You can create up to three such HTML tags.

Open the settings of the plugin and make the following configurations:

** Configuration / Google Site Verification **

Enter the entire HTML tag in the field (<meta name = "google-site-verification" content = "XXX" />)

_Enter HTML tag: _

<img src = "https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-07-18_09.36.05.png" alt = "Enter HTML-Tag" style = "max-width: 100%; height: auto; ">

<br> <br>

### 4.6. Activate standard container links

So that the scripts of the plugin can be loaded on the website, the containers must be linked.

** Configuration / standard container links **

Check the first box in the gray bar so that all containers are linked.

_Activation of standard container links: _

<img src = "https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-07-09_12.14.57.png" alt = "Activation of standard container links" style = "max- width: 100%; height: auto; ">

** Explanation of the container links **

The container links ** "Google Tag Manager Code (Page Head)" ** and are for the operation of the plugin

## 5. Enhanced Ecommerce to optimize Google Analytics reports

The plugin provides some tracking data that can be used in Google Analytics for deeper data analysis.

### 5.1. Tracking events

* Tracking the **"product impressions"** (calling the category pages / search results)  

	When calling the category pages and when the user performs a search, the first 20 products that the user looks at on this page are transferred to Google Analytics. The number is limited to 20, because Google Analytics can process the request only up to a certain amount of data.  

	**Please note:**  

	Unfortunately, the current state of the plugin, this event is not yet triggered for the article lists on the start page and for cross-selling lists.

* Tracking the **"product clicks"** (click on product)  

	The product lists are tracked as soon as the user clicks on a product in these lists to look at it. The data in this article will be transmitted to Google Analytics.

	**Please note:**  

	To realize this event, you must access classes that are in the standard Ceres. For example, the link to the product in the category list and on the search results page, which can be reached via **".product-list article a"**.  

	Unfortunately, the current state of the plugin, this event is not yet triggered for the article lists on the start page and for cross-selling lists.

* Tracking **"product detail views"** (view single product)  

	If the user looks at an article page, this will be transmitted to Google Analytics along with the data of the corresponding product.

* Tracking **"adds to cart"** (Add item to cart)  

	The product lists are tracked as soon as the user places an article directly into the shopping cart. The data in this article will be transmitted to Google Analytics.  

	**Please note:**  

	To realize this event for an article in the article list, you must access classes that are in the standard Ceres. For example, the shopping cart button in the item list, which can be accessed via **".product-list .add-to-basket-lg-container"** (category pages / search results) or **".category-list-view-port button"** (cross-selling lists).  

	Unfortunately the current version of the plugin does not trigger this event for the article lists on the homepage.

* Tracking **"removes from cart"** (Remove item from cart)  

	It will be tracked as soon as the user removes an article from the shopping cart preview or on the shopping cart page. The data in this article will be transmitted to Google Analytics.  

	**Please note:**  

	To realize this event for items in the shopping cart preview that can be accessed from any page, you must access classes that are in the standard Ceres. This concerns the classes / IDs **".toggle-basket-preview"**, **"#vue-app.open-right"**, **".cmp-basket-preview-list"** and **".item-remove-button"**.  

	To realize this event for items on the shopping cart page, you must access classes that are in the standard Ceres. This applies to the classes **".wrapper-main"**, **".cmp-basket-preview-list"**, **".basket-item-container"** and **".item-remove-button"**  

	<br>
	<table width="100%" border="0" style="border-collapse: collapse;border-spacing:0;max-width:500px;">
	<tr>
	<td style="padding: 20px;border:1px solid #ccc;">

		**If you've made any changes to the source code and class names of Ceres, some events may not run.**

	</td>
	</tr>
	</table>

<br>

### 5.2. Evaluate the data in Google Analytics

In Google Analytics, the data can be evaluated under **"Conversions / Ecommerce / Product List Performance"**.

You can set the report so that you can analyze how often, for example, a product was called up in a product list, how many times it was clicked from there or put into the shopping cart.

There is no standard report for the items removed from the shopping cart, but you can create your own report. There, you select the removed items and the removed quantity as the measured values.

In order to evaluate the access to the article page, you can use the report **"Ecommerce / Buying Behavior"** in Google Analytics.

<br>

### 5.3. Customizing language texts for product lists (product list name)

Depending on the item list, the product list name for Google Analytics is a combination of language text, name of the item list and page within the pagination, eg "Category List: Living room > Sofas, Page: 1".

You can change the language texts such as "Category List", "Startpage List" or "Product List" in the plentymarkets backend in the menu for multilingualism.

1. Go to **"CMS / Multilingualism"**.

2. Select the **"Plugin Set"**.

3. Set the language to the right, e.g. "German".

4. Scroll to the **"Tracking"** area.

5. Open the **"Article List"** panel.

6. Enter the desired new terms in the fields. You can also leave the fields empty. If you e.g. leave the field "ItemListCategoryLabel" and "ItemListPaginationLabel" blank, then only the categories are passed as product list name. From "Category List: Living Room> Sofas, Page: 1" becomes "Living Room> Sofas".

<br>

## 6. Establish Awin Tracking

In Google Tag Manager, in the left-hand column, go to Variables and make the following settings.

### 6.1. Enter Merchant ID

Variable: **"0 Awin - Merchant ID"**

Please enter the merchant ID that you receive from your Awin account.

<br>

### 6.2. Specify Commission Group

Variable: **"0 Awin - Commission Group"**

You can define commission groups in your Awin account. Presumably you will use the default, so the value can be left at "Default". If you have any questions, please contact Awin Support.

<br>

### 6.3. Activate or deactivate test mode

Variable **"0 Awin - Test Mode"**

Set the value to 1 if you want to enable the test mode. With trial mode turned on, no conversions will be recorded in your Awin account.

<br>

### 6.4. Specify Source Parameter Name

Variable **"0 Awin - Source Parameter Name"**

As soon as a user clicks on an advertising link on an affiliate page and enters your shop, various parameters are appended to the URL. One of these parameters includes the source from which it can be identified that it is an affiliate in the Awin network. Usually Awin is specified as source with "awc", "zanox" or "zanpid". If in doubt, contact Awin Support.
Adjust the variable as needed. The default value is "awc".

<br>

### 6.5. Specify cookie name

Variable **"0 Awin - Cookie Name"**

On the basis of the affiliate link, over whose parameter the source could be identified, a cookie is stored under the specified (freely selectable name). If the cookie exists, the conversion channel will pass the "aw" sale channel and Awin can automatically map the conversion to an Affiliate partner from the Awin network.
We recommend to keep the default value "aw".

<br>

### 6.6. Enable paused tags

By default, we've paused the tags for Awin tracking in Google Tag Manager. If you want to use this service and the settings from 6.1. - 6.5. you can enable the Awin tags.

1. In the Google Tag Manager, go to "Tags" in the left-hand page column.

2. Open the tag **"Awin - Conversion"** and click on the top right **"Pause Pause"**.

3. Save the tag.

4. Do the same with the tags **"Awin - Journey"** and **"Awin - Source Handler"**.

5. **Publish** the Google Tag Manager Container by clicking on "Send" to activate the new tags.

<br>

## 7. Set up Webgains tracking

### 7.1. Enter program ID

Variable **"0 Webgains - Program ID"**

Please enter here the program ID you receive from your Webgains account.

* Go to the Webgains account on the left on "Program Settings" and then on the tab "Technical Setup". There you can read the program ID.

<br>

### 7.3. Track net or gross prices

Variable **"0 Webgains - Is Net Price"**

Webgains makes it possible to use gross or net prices for the commission calculation. If you are not sure what is contracted with you, please contact Webgains Support.

By default, the value of the variable is set to "true", so net prices are tracked. If you want to track gross prices, please enter "false" in the field.

<br>

### 7.4. Submit product data in the conversion

Variable **"0 Webgains - Track Order Products"**

Depending on the type of commission, it makes sense to submit detailed product data (item price, article ID, article name, etc.). For fixed-price commissions, it is usually not worthwhile to submit the individual products, but only the entire order. If you have opted for a percentage commission calculation, however, it can be very useful. For this Webgains will give you a recommendation.

By default, the value of the variable is "false", so no product data is transferred. If you want to change that, please enter "true" in the field.

<br>

### 7.5. Enter comment

Variable **"0 Webgains - Comment"**

You have the possibility to send a comment. By default, a "0" is entered here so that this value remains empty. Otherwise, enter your comment here.

<br>

### 7.6. Enable paused tags

By default, we've paused the tags for Webgains tracking in Google Tag Manager. If you want to use this service and have set the settings from 7.1. - 7.5. you can enable the Webgains tags.

1. In the Google Tag Manager, go to "Tags" in the left-hand page column.

2. Open the tag **"Webgains - All Pages"** and click on the top right **"deactivate pause"**.

3. Save the tag.

4. Do the same with the tag **"Webgains - Conversion Tracking"**.

5. **Publish** the Google Tag Manager Container by clicking on "Send" to activate the new tags.

<br>

## 8. Establish PayPal Marketing Solutions

PayPal's tracking code collects data for your customer dashboard. In the settings, you can manage the customer dashboard and place banners for your website.

You need a PayPal business account and need to activate Marketing Solutions with this account.

1. Go to this page [https://www.paypal.com/de/webapps/mpp/paypal-marketing-solutions](https://www.paypal.com/de/webapps/mpp/paypal-marketing-solutions "To PayPal Marketing Solutions").

2. Go to **"Activate now"**

3. Choose **"Google Tag Manager"** or **"Other"** as your platform.

4. Copy the generated HTML code to the clipboard.

5. Go to the Google Tag Manager account in the left-hand page column **"Tags"**.

6. Select the tag **"Paypal - Marketing Solutions"**.

7. Click in the HTML field and select all content (Windows: Ctrl + a, Mac: cmd + a).

8. Paste the HTML code from the clipboard.

9. Unpair the tag by clicking **"deactivate pause"** in the top right corner

10. Save the tag.

11. **Publish** the Google Tag Manager Container by clicking on "Send" to activate the new tags.

<br>

<div class = "alert alert-danger" role = "alert">
     This plug-in is only available as a self-service plug-in. If you have any questions or problems with installation or use, there is no entitlement to support from ecomsilio GmbH.
</div>

The source code can be downloaded as a Github repository at [https://github.com/gijsrutten/Tracking ](https://github.com/gijsrutten/Tracking "Github Repository").
