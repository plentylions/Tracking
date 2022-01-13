# Google Tag Manager Tracking ENTERPRISE

<div class="alert alert-info" role="alert">
    Die "JSON-Import-Datei" erhalten Sie als Download unter [https://www.ecomsilio.de/plugin/gtm-tracking-enterprise/GTM-Enterprise-Import-v-5-0-3.json.zip](https://www.ecomsilio.de/plugin/gtm-tracking-enterprise/GTM-Enterprise-Import-v-5-0-3.json.zip "JSON-Import-Datei herunterladen").
</div>

## 1. Inhalt

Dieses Plugin beinhaltet folgende Tracking-Codes:

**Google Analytics**

* Google Analytics "PageView" - Seitenaufruf für alle Seiten
* Google Analytics Enhanced Ecommerce Event "Purchase" - abgeschlossene Transaktion
* Google Analytics Enhanced Ecommerce Event "Product Impressions" - Ansehen der Produkte auf Kategorieseiten und in der Suchergebnisliste
* Google Analytics Enhanced Ecommerce Event "Product Click" - Klick auf Produkte auf Kategorieseiten und in der Suchergebnisliste
* Google Analytics Enhanced Ecommerce Event "Product View" - Ansehen des einzelnen Produkts auf der Artikelseite
* Google Analytics Enhanced Ecommerce Event "Add To Cart" - Hinzufügen eines Artikels zum Warenkorb auf Kategorieseiten, in Suchergebnislisten und auf der Artikelseite
* Google Analytics Enhanced Ecommerce Event "Remove From Cart" - Entfernen eines Artikels aus dem Warenkorb auf allen Seiten über die Warenkorbvorschau und auf der Warenkorbseite  

_INFO_ Mehr zur Einrichtung von Google Analytics erfahren Sie im Punkt 3 "Einrichtung Google Analytics".

**Google Ads - Remarketing**

**Google Ads - Conversion Tracking**

**Facebook Tracking**

* Facebook Event "Page View" - Seitenaufruf für alle Seiten
* Facebook Event "Purchase" - abgeschlossene Transaktion
* Facebook Event "Add To Cart" - Hinzufügen eines Artikels zum Warenkorb auf Kategorieseiten, in Suchergebnislisten und auf der Artikelseite
* Facebook Event "Add To Wishlist" - Hinzufügen eines Artikels zur Wunschliste
* Facebook Event "Complete Registration" - Registrierung im Webshop über das Registrierungsformular und während des Checkout-Prozesses
* Facebook Event "Contact" - Absenden des Kontaktformulars
* Facebook Event "Initiate Checkout" - Betreten der Bestellübersicht vor dem Kauf

**Pinterest Tracking**

* Pinterest Event "Page Visit" - Seitenaufruf für alle Seiten
* Pinterest Event "Checkout"  - abgeschlossene Transaktion
* Pinterest Event "Add To Cart" - Hinzufügen eines Artikels zum Warenkorb auf Kategorieseiten, in Suchergebnislisten und auf der Artikelseite
* Pinterest Event "View Category" - Aufrufen von Kategorieseiten
* Pinterest Event "Search" - ausgeführte Suchanfrage
* Pinterest Event "Signup" - Registrierung im Webshop über das Registrierungsformular und während des Checkout-Prozesses

**Billiger.de Sales Tracking**

**Kelkoo Sales Tracking**

**Awin Tracking**

* Awin Journey - Seitenaufruf aller Seiten außer Checkout und Bestellbestätigungsseite
* Awin Conversion - abgeschlossene Transaktion

_INFO_ Mehr zur Einrichtung von Awin erfahren Sie im Punkt 6 "Einrichtung Awin Tracking".

**Webgains Tracking**

* Webgains All Pages - Seitaufruf für alle Seiten
* Webgains Conversion Tracking - abgeschlossene Transaktion

_INFO_ Mehr zur Einrichtung von Webgains erfahren Sie im Punkt 7 "Einrichtung Webgains Tracking".

**PayPal Marketing Solutions**

_INFO_ Mehr zur Einrichtung von PayPal Marketing Solutions erfahren Sie im Punkt 8 "Einrichtung PayPal Marketing Solutions".

<br>

<div class="alert alert-danger" role="alert">
    Wir möchten darauf hinweisen, dass wir keine Rechtsberatung leisten und keine Haftung für die Richtigkeit der Angaben übernehmen können. Konsultieren Sie einen Anwalt um die Angaben zu den Cookies datenschutzrechtlich abzusichern.**
</div>

<br>

## 2. Einrichtung Google Tag Manager


### 2.1. Anlegen Google Tag Manager Container

Um dieses Plugin nutzen zu können, benötigen Sie ein Google Tag Manager Konto. Falls noch keines vorhanden ist, melden Sie sich bitte mit Ihrem Google Konto auf der folgenden Seite an: [https://www.google.com/intl/de/tagmanager/](https://www.google.com/intl/de/tagmanager/ "Zur Seite des Google Tag Managers").

Nach der Anmeldung erstellen Sie einen neuen Google Tag Manager Container für Ihre Website. Sie erhalten nach Fertigstellung eine **"Google Tag Manager Container ID (GTM-XXX)"**.

_Google Tag Manager Container ID:_

<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-06-19_14.33.51.png" alt="Google Tag Manager ID" style="max-width:100%;height:auto;">

<br>

### 2.2. Daten in den Google Tag Manager importieren

Alle Variablen, Tags und Trigger, die Sie für die oben genannten Tracking Codes brauchen, haben wir bereits für Sie in einer **"JSON-Import-Datei"** vorbereitet. Sie können diese Datei in den Google Tag Manager importieren.

**Sie bekommen die Import-Datei nach dem Kauf des Plugins separat per E-Mail von uns zugesandt.**

1. Gehen Sie in Ihrem Google Tag Manager Konto auf den Tab **"Verwaltung"** und wählen Sie **"Container importieren"**.  

	_Datei importieren:_  

	<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-06-19_14.43.10.png" alt="Datei importieren" style="max-width:100%;height:auto;">

2. **Zu importierende Datei auswählen**  

	Wählen Sie die JSON-Import-Datei aus.

3. **Arbeitsbereich auswählen**  

	Wählen Sie einen Arbeitsbereich aus, in den die Daten importiert werden sollen. Vermutlich werden Sie mit dem Default Workspace arbeiten. Sie können aber auch einen neuen anlegen.

4. **Importoption auswählen**  

	Wählen Sie aus, ob Sie den kompletten Arbeitsbereich überschreiben möchten oder ob Sie die neuen Daten zu bestehenden Daten hinzufügen möchten. Wenn Sie den Google Tag Manager Container neu angelegt haben, können Sie "Überschreiben wählen". Sollten Sie bereits eigene Tags, Trigger und Variablen erstellt haben und sich für die Option "Zusammenführen" entscheiden, müssten Sie bitte prüfen, dass Tags nicht mehrfach ausgelöst werden und diese ggf. pausieren oder löschen.

5. **Bestätigen**  

	Nach dem Bestätigen werden alle Variablen, Trigger und Tags entsprechend der ausgewählten Importoption zu Ihrem Google Tag Manager Container hinzugefügt.

<br>

### 2.3. Konto-IDs für Tracking-Dienste im Google Tag Manager eintragen

Damit das Tracking funktioniert, müssen Sie noch Ihre individuellen Konto-IDs der jeweiligen Trackingdienste (Google Analytics, Google Ads - Remarketing, Google Ads - Conversion-Tracking, Facebook, Pinterest) eintragen. Standardmäßig stehen alle Werte auf 0, es werden also keine Daten übertragen. Tragen Sie nur die Werte für Dienste ein, die Sie auch nutzen. Für Dienste, die Sie nicht nutzen, können Sie die Werte auf 0 belassen.

Zur besseren Übersicht sind alle Variablen, die Konto-IDs beinhalten mit einer „0“ vor dem Namen gekennzeichnet, sodass Sie ganz oben in der Liste erscheinen.

1. Gehen Sie im Google Tag Manager in der linken Seitenspalte auf "Variablen".

2. Variable: **"0 Google Analytics - Tracking ID"**  

	Bitte tragen Sie hier die Tracking-ID der Google Analytics Property ein (UA-XXX).

3. Variable: **"0 Google Ads - Conversion ID"**  

	Bitte tragen Sie hier die Conversion-ID für die angelegte Conversion-Messung im Google Ads Konto ein.  

	So finden Sie die Conversion-ID:  

	* Gehen Sie im Google Ads Konto auf "Tools und Einstellungen / Messung / Conversions".  
	* Klicken Sie auf die aktive Conversion.  
	* Klicken Sie auf "Tag-Einrichtung" und dann auf "Google Tag Manager" verwenden.  
	* Lesen Sie hier die Conversion-ID ab

4. Variable: **"0 Google Ads - Conversion Label"**  

	Bitte tragen Sie hier das Conversion-Label zu der dazugehörigen Conversion-ID ein. Sie finden diesen Wert an der gleichen Stelle wie die Conversion-ID.  

	_Conversion-ID und Conversion-Label:_  

	<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-06-19_15.15.05.png" alt="Conversion-ID und Conversion-Label" style="max-width:100%;height:auto;">

5. Variable **"0 Facebook - Pixel ID"**  

	Bitte tragen Sie hier die Facebook Pixel-ID ein, die Sie von Ihrem Facebook Account erhalten haben.

6. Variable **"0 Pinterest - ID"**  

	Bitte tragen Sie hier die Pinterest-ID ein, die Sie von Ihrem Pinterest Account erhalten haben.

7. Variable **"0 Billiger.de - Shop ID"**  

	Bitte tragen Sie hier die Shop-ID ein, die Sie von Ihrem Billiger.de Account erhalten haben.

8. Variable **"0 Kelkoo - Merchant ID"**  

	Bitte tragen Sie hier die Merchant-ID ein, die Sie von Ihrem Kelkoo Account erhalten haben.

9. Variablen zu **"Awin"**

	Mehr zur Einrichtung von Awin erfahren Sie im Punkt 6 "Einrichtung Awin Tracking".

10. Variablen zu **"Webgains"**

	Mehr zur Einrichtung von Webgains erfahren Sie im Punkt 7 "Einrichtung Webgains Tracking".

<br>

### 2.4. pausierte Tags bei Bedarf aktivieren (Facebook- und Pinterest-Tracking)

Standardmäßig haben wir die Tags für Facebook- und Pinterest-Tracking im Google Tag Manager pausiert. Wenn Sie diese Dienste nutzen möchten und die entsprechenden IDs in den Variablen eingetragen haben, können Sie  die Tags aktivieren.

#### Beispiel: Aktivierung "Facebook - Page View"

1. Gehen Sie im Google Tag Manager in der linken Seitenspalte auf "Tags".

2. **Facebook - Page View**  

	Öffnen Sie den Tag "Facebook - Page View" und klicken Sie oben rechts auf die drei vertikalen Punkte um das Menü zu öffnen. Wählen Sie den Punkt "Erneut aktivieren".  

	_Aktivierung pausierter Tag:_  

	<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/pausierten-Tag-aktivieren.png" alt="Aktivierung pausierter Tag" style="max-width:100%;height:auto;">

**Gehen Sie bei allen anderen pausierten Tags, die Sie aktivieren möchten, genauso vor.**

<br>

### 2.5. Datenschicht-Variablen

1. **Datenschicht-Variablen über Google-Tag-Manager-Vorschau auslesen**  

	Abhängig von Seiten und Events stehen in der Datenschicht (Data Layer) für den Google Tag Manager eine Vielzahl an Variablen bereit. Sie können den Aufbau des Data Layers über die **"Vorschau"** des Google Tag Managers einsehen.  

	- Gehen Sie in Ihrem Google Tag Manager Konto oben rechts auf **"In Vorschau ansehen"**.  

	- Öffnen Sie die Website Ihres Shops im gleichen Browser  

	- Im sich öffnenden Panel vom Google Tag Manager gehen Sie auf den Reiter **"Data Layer"**. In der Spalte **"Current values of the Data Layer"** können Sie ablesen, welche Werte zu bestimmten Ereignissen oder auf bestimmten Seiten zur Verfügung stehen.

2. **Konfiguration Conversion Value**  

	Die Tags wurden von uns mit bestimmten Standardwerten eingerichtet, die Sie aber je nach Bedarf individuell anpassen können.  

	Der Conversion Value auf der Bestellbestätigungsseite ist in unserer Konfiguration die reine Brutto-Warenwert-Summe (falls Sie nur Nettopreise tracken, dann die reine Netto-Warenwert-Summe) **ohne** Versandkosten und **ohne** Berücksichtigung von Gutscheinwerten. Dies entspricht der GTM-Variable **"orderData.0.itemSum"**.  

	Wenn Sie einen anderen Wert an Google Analytics, Facebook etc. übergeben möchten z.B. den Gesamtwert inkl. Versandkosten und inkl. Gutscheinwert, dann ändern Sie im Google Tag Manager folgende Werte (bei Neuinstallationen müssen Sie nur den Punkt 1 "Variable Order - itemSum" und Punkt 2 "Variable Basket - itemSum" beachten):  

	1. Variable: **"Order - itemSum"**  

		- Gehen Sie im Google Tag Manager links auf Variablen und dann auf die Variable **"Order - itemSum"**.

		- Tragen Sie in das Feld für den Namen der Datenschichtvariable **"orderData.0.amount"** ein.  

		- Optional: Benennen Sie die Variable in **"Order - amount"** um.  

		- Speichern Sie die Variable.

	2. Variable: **"Basket - itemSum"**  

		- Gehen Sie im Google Tag Manager links auf Variablen und dann auf die Variable **"Basket - itemSum"**.

		- Tragen Sie in das Feld für den Namen der Datenschichtvariable **"basketData.0.amount"** ein.  

		- Optional: Benennen Sie die Variable in **"Basket - amount"** um.  

		- Speichern Sie die Variable.

	3. Variable: **"Google Analytics Enhanced Ecommerce - purchase"**  

		- Gehen Sie auf die Variable **"Google Analytics Enhanced Ecommerce - purchase"**.

		- In Zeile 28 bei "revenue" tragen Sie statt "orderData[0].itemSum" die Variable **"orderData[0].amount"** ein.

		- Speichern Sie die Variable.

	4. Variable: **"Google Ads Remarketing - ecomm_totalvalue"**  

		- Gehen Sie auf die Variable **"Google Ads Remarketing - ecomm_totalvalue"**.

		- In Zeile 15 bei "var totalAmount" tragen Sie statt "orderData[0].itemSum" die Variable **"orderData[0].amount"** ein.

		- In Zeile 19 bei "var totalAmount" tragen Sie statt "basketData[0].itemSum" die Variable **"basketData[0].amount"** ein.

		- Speichern Sie die Variable.

	5. Variable: **"Pinterest - value"**  

		- Gehen Sie auf die Variable **"Pinterest - value"**.  

		- In Zeile 10 bei "var value" tragen Sie statt "orderData[0].itemSum" die Variable **"orderData[0].amount"** ein.  

		- In Zeile 14 bei "var value" tragen Sie statt "basketData[0].itemSum" die Variable **"basketData[0].amount"** ein.

		- Speichern Sie die Variable.

<br>

### 2.6. Google Tag Manager Container veröffentlichen

Damit die Konfiguration live geht und Daten getrackt werden können, müssen Sie abschließend den Google Tag Manager Container veröffentlichen.  

 - Gehen Sie oben rechts auf **"Senden"**.  

	_Senden:_  

	<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/senden.png" alt="Senden" style="max-width:100%;height:auto;">  

 - Geben Sie einen **"Versionsnamen"** an (z.B. die Version des Plugins).  

 - Klicken Sie auf **"Veröffentlichen"**.  

 _Veröffentlichen:_  

 <img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/veroeffentlichen.png" alt="Veröffentlichen" style="max-width:100%;height:auto;">

<br>

## 3. Einrichtung Google Analytics

Um die Trackingdaten des Plugins optimal zu nutzen sollten Sie folgende Einstellungen in Google Analytics vornehmen:

1. **E-Commerce aktivieren**  

	Gehen Sie in Google Analytics links unten auf das Rädchen und öffnen Sie die Verwaltung. In der dritten Spalte finden Sie die E-Commerce-Einstellungen. Schalten Sie **"E-Commerce aktivieren"** und **"Erweiterte E-Commerce-Berichte aktivieren"** ein.  

	_Ecommerce einrichten:_  

	<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-06-20_09.25.12.png" alt="Ecommerce einrichten" style="max-width:100%;height:auto;">

<br>

## 4. Konfiguration Plugin

Öffnen Sie die Einstellungen des Plugins und nehmen Sie folgende Konfigurationen vor:

### 4.1. Integration des Consent Banners

**Konfiguration / Integration**  

* Falls Sie den Cookie Consent Banner von plentymarkets oder Frontend Studios in Ihrem Ceres-Shop nutzen, setzen Sie bei der Option _"Cookie Consent Banner ist aktiv"_ einen Haken. 

* Falls Sie kein Cookie Consent Banner im Einsatz haben, lassen Sie die Option deaktiviert. 

* Das Plugin kann nur mit einem Cookie Consent Banner genutzt werden, der die Cookie-Registrierungsschnittstelle vom Ceres-Shop unterstützt.

### 4.2. Registrierung der Cookies

**Konfiguration / Cookies**

Für jeden Trackingdienst können im Bereich der Cookies folgende Einstellungen gewählt werden: 

* "Cookie registrieren" - wird dieser Haken gesetzt, so wird für diesen Dienst ein Eintrag im Cookie Consent Banner angezeigt. 
	
* "als notwendig setzen" - Das Cookie wird immer gesetzt und der Besucher kann dem Cookie nicht widersprechen.

* "als Opt Out setzen" - Das Cookie wird standardmäßig gesetzt und der Besucher kann dem widersprechen und die Option deaktivieren.
	
* "Gruppe zuordnen" - Wählen Sie die Gruppe in der der Eintrag im Cookie Consent Banner aufgelistet werden soll. Der Name für die Gruppe "Sonstige" kann unter CMS > Mehrsprachigkeit geändert werden.

* "Cookie-Namen" - Hier werden die Dateinamen der Cookies aufgelistet. Es besteht die Möglichkeit Regular Express zu nutzen. In der Regel sind Anpassungen an die Standartwerte nicht notwendig. 
	
Die im Cookie Consent Banner angezeigten Texte können unter **CMS > Mehrsprachigkeit** geändert werden.

### 4.3. Eigene Cookies registrieren

**Konfiguration / Eigene Cookies**

Falls Sie die Trackingscripte im Google Tag Manager erweitern möchten oder aus einem anderen Grund eigene Cookies registrieren möchten, dann können Sie die Daten zu den Cookies wie folgt eintragen: 

* Setzen Sie ein Haken bei "Cookie registrieren". 

* Haken Sie ggfs. die Optionen "als notwendig setzen"  oder "als Opt Out setzen" an.

* Wählen Sie die entsprechende Gruppe in der das Cookie aufgeführt werden soll. 

* Im Feld "Cookie-Namen" listen Sie die Dateinamen der Cookies auf. Sie können mehrere Namen als Liste kommagetrennt auflisten. Falls die Cookie-Namen dynamisch sind, können Sie Regular Express für nutzen. 

Unter _"CMS > Mehrsprachigkeit"_ definieren Sie folgende Angaben: 

* Cookie-Name bzw. -Label

* Cookie-Beschreibung

* Die Dauer/Gültigkeit des Cookies

* Die URL der Cookie Policy bzw. die Datenschutzbelehrung

* Den Provider bzw. das ausgebende Unternehmen


### 4.4. Google Tag Manager Daten

**Konfiguration / Google Tag Manager**  

* Tragen Sie die Google Tag Manager Container ID (GTM-XXX) ein (siehe Punkt 1).
* Optional können Sie angeben, ob nur Nettopreise getrackt werden sollen.

_Einrichtung Plugin:_

<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-07-18_09.34.01.png" alt="Einrichtung Plugin" style="max-width:100%;height:auto;">

<br><br>

### 4.5. optional: Google Site Verification via HTML-Tag auf Website integrieren

Für die Nutzung der Google Search Console ist es notwendig die Inhaberschaft der Website zu bestätigen. (siehe: [https://support.google.com/webmasters/answer/9008080?hl=de#](https://support.google.com/webmasters/answer/9008080?hl=de# "Zur Hilfeseite der Search Console") )

Für die Bestätigung stehen in der Google Search Console mehrere Methoden zur Auswahl. Sie können die Inhaberschaft entweder über die Option "Google Tag Manager" oder über einen "HTML-Tag" bestätigen.

Wenn Sie die Option "HTML-Tag" nutzen möchten, können Sie den Code aus der Google Search Console im Plugin eintragen. Sie können bis zu drei solcher HTML-Tags anlegen.

Öffnen Sie die Einstellungen des Plugins und nehmen Sie folgende Konfigurationen vor:

**Konfiguration / Google Site Verification**

Tragen Sie den gesamten HTML-Tag in das Feld ein (<meta name="google-site-verification" content="XXX" />).  

_Eintragen HTML-Tag:_  

<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-07-18_09.36.05.png" alt="Eintragen HTML-Tag" style="max-width:100%;height:auto;">

<br><br>

### 4.6. Standard-Container-Verknüpfungen aktivieren

Damit die Scripte des Plugins auf der Website geladen werden können, müssen noch die Container verknüpft werden.

**Konfiguration / Standard-Container-Verknüpfungen**

Aktivieren Sie das erste Kästchen in der grauen Leiste, sodass alle Container verknüpft werden.  

_Aktivierung Standard-Container-Verknüpfungen:_  

<img src="https://cdn02.plentymarkets.com/38994c9e2cb4/frontend/plugins/Tracking/marketplace/Screenshot_2019-07-09_12.14.57.png" alt="Aktivierung Standard-Container-Verknüpfungen" style="max-width:100%;height:auto;">

**Erklärung zu den Container-Verknüpfungen**

Für den Betrieb des Plugins sind die Container-Verknüpfungen **"Google Tag Manager Code (Page Head)"** und **"Tracking Code"** zwingend notwendig. Diese dürfen nicht ausgegraut erscheinen. Wenn dies der Fall ist, fehlen die Container in Ihrem Layout. Bitte ergänzen Sie die Container entsprechend der Integration im Original Ceres Plugin, um den Betrieb des Plugins zu gewährleisten.

Bei **"Google Tag Manager Code (Page Body)"** handelt es sich um den Noscript-Code, welcher zur Einbindung des Google Tag Managers zwar empfohlen wird, aber nicht zwingend notwendig ist. Dieser Code wird mit dem Ceres-Container "AfterOpeningBodyTag" verknüpft, der seit Ceres Version 3.1.0 (Update vom 25.02.2019) zur Verfügung steht. Wenn Sie eine ältere Ceres-Version nutzen oder Ihr Theme-Plugin diesen Container nicht integriert hat, wird diese Verknüpfung ausgegraut, da sie nicht zur Verfügung steht.

Die letzte Container-Verknüpfung dient der optionalen Konfiguration "Google Site Verification".

Wir empfehlen alle Container-Verknüpfungen zu aktivieren. 

<br>

## 5. Enhanced Ecommerce zur Optimierung von Google Analytics Berichten

Das Plugin liefert einige Trackingdaten, die in Google Analytics für eine tiefere Datenanalyse genutzt werden können.

### 5.1. Tracking Events

* Tracking der **"product impressions"** (Aufruf der Kategorieseiten / Suchergebnisse)

	Es werden bei Aufruf der Kategorieseiten und wenn der User eine Suche ausführt, die ersten 20 Produkte, die sich der User auf dieser Seite anschaut an Google Analytics übertragen. Die Anzahl ist auf 20 begrenzt, da Google Analytics nur bis zu einer bestimmte Datenmenge den Request verarbeiten kann.  

	**Bitte beachten:**

	Leider wird zum derzeitigen Stand des Plugins dieses Event noch nicht für die Artikellisten auf der Startseite sowie für Crossselling-Listen ausgelöst.

* Tracking der **"product clicks"** (Klick auf Produkt)  

	In den Produktlisten wird getrackt, sobald der User auf ein Produkt in diesen Listen klickt um es sich anzuschauen. Die Daten dieses Artikels werden an Google Analytics übertragen.

	**Bitte beachten:**  

	Um dieses Event zu realisieren, muss auf Klassen zugegriffen werden, die sich im Standard-Ceres befinden. So bspw. der Link zum Produkt in den Kategorielisten und auf der Suchergebnisseite , welcher sich über **".product-list article a"** erreichen lässt.  

	Leider wird zum derzeitigen Stand des Plugins dieses Event noch nicht für die Artikellisten auf der Startseite sowie für Crossselling-Listen ausgelöst.

* Tracking **"product detail views"** (Ansehen einzelnes Produkt)  

	Wenn der User eine Artikelseite anschaut, wird dies an Google Analytics zusammen mit den Daten des entsprechenden Produkts übertragen.

* Tracking **"adds to cart"** (Hinzufügen Artikel zum Warenkorb)  

	In den Produktlisten wird getrackt, sobald der User einen Artikel direkt in den Warenkorb legt. Die Daten dieses Artikels werden an Google Analytics übertragen.

	**Bitte beachten:**  

	Um dieses Event für einen Artikel in der Artikelliste zu realisieren, muss auf Klassen zugegriffen werden, die sich im Standard-Ceres befinden. So bspw. der Warenkorb-Button in der Artikelliste, welcher sich über **".product-list .add-to-basket-lg-container"** (Kategorieseiten / Suchergebnisse) oder **".category-list-view-port button"** (Crossselling-Listen) erreichen lässt.

	Leider wird zum derzeitigen Stand des Plugins dieses Event noch nicht für die Artikellisten auf der Startseite ausgelöst.

* Tracking **"removes from cart"** (Entfernen Artikel aus Warenkorb)  

	Es wird getrackt, sobald der User einen Artikel aus der Warenkorbvorschau oder auf der Warenkorbseite entfernt. Die Daten dieses Artikels werden an Google Analytics übertragen.  

	**Bitte beachten:**  

	Um dieses Event für Artikel in der Warenkorb-Vorschau, die von jeder Seite aus aufgerufen werden kann, zu realisieren, muss auf Klassen zugegriffen werden, die sich im Standard-Ceres befinden. Das betrifft die Klassen / IDs **".toggle-basket-preview"**, **"#vue-app.open-right"**, **".cmp-basket-preview-list"** und **".item-remove-button"**.

	Um dieses Event für Artikel auf der Warenkorb-Seite zu realisieren, muss auf Klassen zugegriffen werden, die sich im Standard-Ceres befinden. Das betrifft die Klassen **".wrapper-main"**, **".cmp-basket-preview-list"**, **".basket-item-container"** und **".item-remove-button"**.  

	<br>
	<table width="100%" border="0" style="border-collapse: collapse;border-spacing:0;max-width:500px;">
	<tr>
	<td style="padding: 20px;border:1px solid #ccc;">

		**Wenn Sie Änderungen am Quellcode und an Klassennamen von Ceres vorgenommen haben, kann es sein, dass einige Events nicht ausgeführt werden.**

	</td>
	</tr>
	</table>

<br>

### 5.2. Auswerten der Daten in Google Analytics

In Google Analytics lassen sich die Daten unter **"Conversions / Ecommerce / Produktlistenleistung"** auswerten.

Sie können sich den Report so einstellen, dass Sie analysieren können, wie oft bspw. ein Produkt in einer Produktliste aufgerufen wurde, wie oft es von dort angeklickt oder in den Warenkorb gelegt wurde und wie oft es aus dieser Produktliste heraus gekauft wurde.

Für die aus dem Warenkorb entfernten Artikel gibt es keinen Standardbericht, aber Sie können sich einen eigenen Report dazu erstellen. Dort wählen Sie als Messwerte bspw. die entfernten Artikel und die entfernte Menge aus.

Um das Aufrufen der Artikelseite auszuwerten, können Sie in Google Analytics den Report **"Ecommerce / Kaufverhalten"** nutzen.

<br>

### 5.3. Sprachtexte für Produktlisten anpassen

Als Produktlistenname wird je nach Artikelliste eine Kombination aus Sprachtext, Name der Artikelliste und Seite innerhalb der Paginierung übergeben bspw. "Kategorieliste: Wohnzimmer > Sofas, Seite 1".

Sie können die Sprachtexte wie "Kategorieliste", "Startseitenliste" oder "Artikelliste" im plentymarkets Backend bei Mehrsprachigkeit ändern.

1. Gehen Sie auf **"CMS / Mehrsprachigkeit"**

2. Wählen Sie das **"Plugin-Set"** aus.

3. Stellen Sie rechts die Sprache ein z.B. "Deutsch".

4. Scrollen Sie zum Bereich **"Tracking"**

5. Öffnen Sie das Panel **"Artikeliste"**.

6. Tragen Sie in die Felder die gewünschten neuen Bezeichnungen ein. Sie können die Felder auch leer lassen. Wenn Sie z.B. das Feld "ItemListCategoryLabel" und "ItemListPaginationLabel" leer lassen, dann werden nur die Kategorien als Produktlistenname übergeben. Aus "Kategorieliste: Wohnzimmer > Sofas, Seite 1" wird so "Wohnzimmer > Sofas".

<br>

## 6. Einrichtung Awin Tracking

Gehen Sie im Google Tag Manager in der linken Seitenspalte auf "Variablen" und nehmen Sie folgende Einstellungen vor.

### 6.1. Merchant ID eintragen

Variable: **"0 Awin - Merchant ID"**

Bitte tragen Sie hier die Merchant-ID ein, die Sie aus Ihrem Awin Account erhalten.

<br>

### 6.2. Commission Group angeben

Variable: **"0 Awin - Commission Group"**

In Ihrem Awin Account können Sie Commission Groups definieren. Vermutlich werden Sie den Standard nutzen, sodass der Wert auf "Default" belassen werden kann. Bei Fragen wenden Sie sich am besten an den Awin Support.

<br>

### 6.3. Test Mode ein- oder ausstellen

Variable **"0 Awin - Test Mode"**

Setzen Sie den Wert auf 1, wenn Sie den Testmodus aktivieren möchten. Bei aktiviertem Testmodus werden keine Conversions in Ihrem Awin Account erfasst.

<br>

### 6.4. Source Parameter Name angeben

Variable **"0 Awin - Source Parameter Name"**

Sobald ein User auf einen Werbelink auf einer Affiliate-Seite klickt und in Ihren Shop gelangt, werden an die URL verschiedene Parameter gehängt. Einer dieser Parameter beinhaltet die Quelle anhand derer identifiziert werden kann, dass es sich um einen Affiliate im Awin-Netzwerk handelt. Üblicherweise wird Awin als Source mit "awc", "zanox" oder "zanpid" angegeben. Wenden Sie sich im Zweifel an den Awin Support.
Passen Sie die Variable bei Bedarf an. Als Standardwert ist "awc" angegeben.

<br>

### 6.5. Cookie Name angeben

Variable **"0 Awin - Cookie Name"**

Auf Grundlage des Affiliate-Links, über dessen Parameter die Quelle identifiziert werden konnte, wird ein Cookie unter dem angegebenen (frei wählbaren Namen) gespeichert. Wenn der Cookie existiert, wird bei der Conversion der Sale-Channel "aw" übergeben und Awin kann automatisiert die Conversion einem Affiliate-Partner aus dem Awin-Netzwerk zuordnen.
Wir empfehlen den Standardwert "aw" beizubehalten.

<br>

### 6.6. pausierte Tags aktivieren

Standardmäßig haben wir die Tags für das Awin-Tracking im Google Tag Manager pausiert. Wenn Sie diesen Dienst nutzen möchten und die Einstellungen aus 6.1. - 6.5. vorgenommen haben, können Sie die Awin-Tags aktivieren.

1. Gehen Sie im Google Tag Manager in der linken Seitenspalte auf "Tags".

2. Öffnen Sie den Tag **"Awin - Conversion"** und klicken Sie oben rechts auf **"Pausieren aufheben"**.  

3. Speichern Sie den Tag.

4. Gehen Sie genauso mit den Tags **"Awin - Journey"** und **"Awin - Source Handler"** vor.

5. **Veröffentlichen** Sie den Google Tag Manager Container mit KLick auf "Senden", damit die neuen Tags livegeschaltet werden.

<br>

## 7. Einrichtung Webgains Tracking

### 7.1. Programm ID eintragen

Variable **"0 Webgains - Program ID"**

Bitte tragen Sie hier die Prgramm-ID ein, die Sie aus Ihrem Webgains Account erhalten.

* Gehen Sie im Webgains Account links auf "Programm Einstellungen" und dann auf den Tab "Technischer Setup". Dort können Sie die Programm ID ablesen.

<br>

### 7.2. Event ID eintragen

Variable **"0 Webgains - Event ID"**

Bitte tragen Sie hier die Event-ID ein, die Sie aus Ihrem Webgains Account erhalten.

* Gehen Sie im Webgains Account links auf "Provisionsarten". Dort können Sie die Event ID rechts oben ablesen.

<br>

### 7.3. Netto- oder Bruttopreise tracken

Variable **"0 Webgains - Is Net Price"**

Webgains ermöglicht es, Brutto- oder Nettopreise für die Provisionsberechnung zugrunde zu legen. Wenn Sie nicht sicher sind, was bei Ihnen vertraglich festgehalten ist, wenden Sie sich bitte an den Webgains Support.

Standardmäßig steht der Wert der Variable auf "true", es werden also Nettopreise getrackt. Wenn Sie Bruttopreise tracken wollen, tragen Sie bitte "false" in das Feld ein.

<br>

### 7.4. Produktdaten in der Conversion übermitteln

Variable **"0 Webgains - Track Order Products"**

Je nach Provisionsart ist es sinnvoll detaillierte Produktdaten zu übermitteln (Artikelpreis, Artikel-ID, Artiklename etc.). Bei Festpreisprovisionen lohnt es sich meist nicht die einzelnen Produkte zu übermitteln, sondern nur den Gesamtauftrag. Haben Sie sich für eine prozentuale Provisionsberechnung entschieden, kann es aber hingegen ganz sinnvoll sein. Hierzu wird Ihnen Webgains eine Empfehlung aussprechen.

Standardmäßig steht der Wert der Variable auf "false", es werden also keine Produktdaten übertragen. Wenn Sie das ändern möchten, tragen Sie bitte "true" in das Feld ein.

<br>

### 7.5. Kommentar angeben

Variable **"0 Webgains - Comment"**

Sie haben die Möglichkeit einen Kommentar mitzuüberliefern. Standardmäßig ist hier eine "0" eingetragen, damit dieser Wert leer bleibt. Andernfalls tragen Sie hier Ihren Kommentar ein.

<br>

### 7.6. pausierte Tags aktivieren

Standardmäßig haben wir die Tags für das Webgains-Tracking im Google Tag Manager pausiert. Wenn Sie diesen Dienst nutzen möchten und die Einstellungen aus 7.1. - 7.5. vorgenommen haben, können Sie die Webgains-Tags aktivieren.

1. Gehen Sie im Google Tag Manager in der linken Seitenspalte auf "Tags".

2. Öffnen Sie den Tag **"Webgains - All Pages"** und klicken Sie oben rechts auf **"Pausieren aufheben"**.  

3. Speichern Sie den Tag.

4. Gehen Sie genauso mit dem Tag **"Webgains - Conversion Tracking"** vor.

5. **Veröffentlichen** Sie den Google Tag Manager Container mit Klick auf "Senden", damit die neuen Tags livegeschaltet werden.

<br>

## 8. Einrichtung PayPal Marketing Solutions

Der Tracking-Code von PayPal sammelt Daten für Ihr Kundendashboard. In den Einstellungen können Sie das Kundendashboard verwalten sowie Banner für Ihre Website schalten.

Sie benötigen ein PayPal-Geschäftskonto und müssen die Marketing Solutions mit diesem Konto aktivieren.

1. Gehen Sie auf diese Seite [https://www.paypal.com/de/webapps/mpp/paypal-marketing-solutions](https://www.paypal.com/de/webapps/mpp/paypal-marketing-solutions "Zu den PayPal Marketing Solutions").

2. Gehen Sie auf **"Jetzt aktivieren"**

3. Wählen Sie als Plattform **"Google Tag Manager"** oder **"Sonstige"** aus.

4. Kopieren Sie sich den generierten HTML-Code in die Zwischenablage.

5. Gehen Sie im Google Tag Manager Konto in der linken Seitenspalte auf **"Tags"**.

6. Wählen Sie den Tag **"Paypal - Marketing Solutions"** aus.

7. Klicken Sie ins HTML-Feld und markieren Sie den gesamten Inhalt (Windows: Strg + a, Mac: cmd + a).

8. Fügen Sie den HTML-Code aus der Zwischenablage ein.

9. Heben Sie die Pausierung des Tags auf indem Sie rechts oben auf **"Pausieren aufheben"** klicken

10. Speichern Sie den Tag.

11. **Veröffentlichen** Sie den Google Tag Manager Container mit Klick auf "Senden", damit der neue Tag livegeschaltet wird.

<br>

<div class="alert alert-danger" role="alert">
    Dieses Plugin steht nur noch als Self-Service-Plugin zur Verfügung. Bei Fragen oder Probleme bei der Installation oder der Nutzung, besteht kein Anspruch auf einen Support der Firma ecomsilio GmbH. 

	Der Quellcode kann als Github Repository heruntergeladen werden unter [https://github.com/gijsrutten/Tracking](https://github.com/gijsrutten/Tracking "Github Repository").
</div>
