# Release Notes for Google Tag Manager Tracking ENTERPRISE

## v.5.0.4 (2022-01-14)

### Geändert

- Das Plugin steht ab sofort kostenlos zur Verfügung. Die Lizenz wurde geändert auf AGPL-3.0.

## v.5.0.3 (2021-02-04)

### Behoben

- Der Trigger "Remove From Cart" wurde nicht korrekt ausgelöst. Dieser Fehler wurde behoben. 

- Bei gleichzeitiger Verwendung des Google Tag Manager Plugins und des Google Analytics Plugins konnte es vorkommen, dass die Conversion nicht erfasst wurde. 

- Es wurde ein Fehler behoben, wodurch Sonderzeichen im Suchfeld nicht richtig ersetzt wurden.

## v.5.0.2 (2020-08-06)

### Behoben

- Der Inhalt des plenty-shop-cookie wird in einigen Fällen im JSON Format und in anderen Fällen als encoded String gespeichert. Dieses unterschiedliche Format hat das korrekte Tracking in manchen Fällen verhindert. Dieses Update kann mit beiden Formate umgehen.

## v.5.0.1 (2020-08-05)

### Behoben

- Es gab einen Fehler im DataLayer der dafür gesorgt hat, dass nur Artikel mit hinterlegtem Staffelpreis korrekt erfasst wurden. Nun werden wieder alle Artikel sowohl im Warenkorb als auch in der Kaufabwicklung korrekt erfasst. 


## v.5.0.0 (2020-07-27)

### TODO

Bei einem Update von Version **3.0.1 oder älter** auf Version 5.0.0 sind im Google Tag Manager keine Änderungen notwendig. Bei einem Update von Version **4.0.0, 4.0.1 oder 4.0.2** wird dringend empfohlen die neue JSON Datei, die Sie per E-Mail zugesendet bekommen haben, im Tag Manager gemäß der Anleitung aus der E-Mail einzuspielen und zu konfigurieren. 

In beiden Fällen sollte nach dem Update die Einstellungen im Plugin überprüft werden. Welche Einstellungen für Sie relevant sind, finden Sie in der Anleitung unter dem Reiter _Beschreibung_. 

### Hinzugefügt

- Es wurde die Möglichkeit hinzugefügt bis zu 10 eigene Cookies über die plentymarkets Cookie Consent Schnittstelle zu registrieren. Damit ist es nun möglich, eigene Tracking-Scripte aus dem Tag Manager zu nutzen und die vom Script erzeugten Cookies korrekt und sauber zu registrieren. Es stehen alle Optionen zur Verfügung, die auch regulär bei der Cookie-Registrierung genutzt werden können. Es ist damit nicht mehr notwendig, eigene Cookies über ein eigenes Plugin bzw. ein Theme zu registrieren. 

### Behoben

- Für die Facebook Events "Purchase" und "InitiateCheckout" gab es wegen einer fehlende Variablen vereinzelt einen Fehler. Dies wurde behoben. 

- Staffelpreise wurden im Warenkorb nur mit dem Preis, der für die Menge 1 gültig ist, erfasst. Dies wurde korrigiert. Im Warenkorb werden die Staffelpreise nun direkt in der entsprechenden Höhe erfasst. 

- Die Gesamtwerte aus dem Warenkorb wurden nur einmal pro Seite geladen. Mit diesem Update werden die Daten aus dem Warenkorb bei jeder Änderung erneut in die Variable geschrieben und können ausgewertet werden, ohne dass dafür die Seite neu geladen werden muss. 


### Geändert

- Mit dieser Version kann der Tag Manager sowohl mit als auch ohne plentymarkets' Cookie Consent Lösung genutzt werden. Ob ein solcher Cookie Banner eingesetzt wird, kann in den Einstellungen angegeben werden. 

- Für jeden Trackingdienst können im Bereich der Cookies folgende Einstellungen gewählt werden: 

	- "Cookie registrieren" - wird dieser Haken gesetzt, so wird für diesen Dienst einen Eintrag im Cookie Consent Banner angezeigt. 
	
	- "als notwendig setzen" - Das Cookie wird immer gesetzt und der Besucher kann dem Cookie nicht widersprechen.

	- "als Opt Out setzen" - Das Cookie wird standardmäßig gesetzt und der Besucher kann dem widersprechen und die Option deaktivieren.
	
	- "Gruppe zuordnen" - Wählen Sie die Gruppe in dem der Eintrag im Cookie Consent Banner aufgelistet werden soll. Der Name für die Gruppe "Sonstige" kann unter CMS > Mehrsprachigkeit geändert werden.

	- "Cookie-Namen" - Hier werden die Dateinamen der Cookies aufgelistet. Es besteht die Möglichkeit Regular Express zu nutzen. In der Regel sind Anpassungen an die Standartwerte nicht notwendig. 
	
	Die im Cookie Consent Banner angezeigten Texte können unter **CMS > Mehrsprachigkeit** geändert werden.


## v.4.0.2 (2020-01-30)

### Fixed

- Es wurde ein Fehler behoben, der in seltenen Fällen dazu geführt hat, dass die Herkunft eines Besuchers erst ab der zweiten Seite erfasst wurde. 

## v.4.0.1 (2019-11-18)

### Fixed

- Durch das Markieren einiger Checkbox-Felder als Pflichtfelder im Tab "Cookies" der Plugin-Konfiguration, konnte es zu einem Fehler beim Speichern der Konfiguration kommen (Fehlemeldung: [object Object]). Dies wurde behoben. 

## v.4.0.0 (2019-11-14)

**ACHTUNG! Sie benötigen für die Version 4.0.0 eine aktualisierte GTM-Import-Datei. Wenn Sie dieses Plugin bereits erworben haben und ein Update installieren möchten, befolgen Sie bitte die Schritte im Punkt "Changed" bzw. in der Email, die wir Ihnen bezüglich des Updates zusammen mit dem Link zur neuen GTM-Import-Datei zugesandt haben. Für alle neuen Käufer gilt die Beschreibung im plentyMarketplace. Bitte beachten Sie, dass Version 4.0.0 nur noch mit Ceres ab Version 4.4.0 kompatibel ist.**

### Added

- Registrierung der Tracking-Dienste aus der Google Tag Manager Konfiguration (Google Analytics, Google Ads, Facebook, Pinterest, Billiger.de, Kelkoo, Paypal Marketing Solutions, Awin und Webgains) im Cookie Consent Banner von Ceres. Erst wenn der Nutzer die Dienste ausdrücklich aktiviert, kann der Tag Manager die entsprechenden Tags auslösen. Für alle Dienste, die der Seitenbetreiber im Einsatz hat, müssen in der Plugin-Konfiguration Einstellungen vorgenommen werden. Eine Schritt-für-Schritt-Anleitung entnehmen Sie bitte der Beschreibung im Punkt 4.5 "Opt-In-Einstellungen für Tracking-Dienste".

### Changed

- Ab dieser Version werden keine Opt-Out-Optionen mehr angeboten. Sie werden durch das Opt-In über den Cookie-Consent-Banner von Ceres abgelöst.

- Zur Rückverfolgung der Produktliste aus der heraus ein Artikel angeklickt / in den Warenkorb gelegt wurde (wird z.B. von Google Analytics Enhanced Ecommerce genutzt) wurde bisher ein Local Storage Eintrag erzeugt. Dies wurde abgeändert in einen Session-Cookie namens "sessionItemList". Der Session-Cookie wird über den Cookie-Consent-Banner von Ceres registriert und kann vom Nutzer aktiviert bzw. deaktiviert werden.

- Die Umstellung auf Opt-In per Cookie-Consent-Banner machte eine umfassende Änderung in der Google Tag Manager Konfiguration notwendig. Alle Trigger mussten an den neuen Consent-Cookie angepasst und neu verknüpft werden. Da eine manuelle Änderung aus unserer Sicht zu umfangreich und fehleranfällig ist, empfehlen wir allen, die das Plugin bereits erworben und eingerichtet haben, einen Neu-Import der gesamten Konfiguration unter Berücksichtung der folgenden Anleitung. Für alle neuen Käufer gilt die Beschreibung im plentyMarketplace.  

	Bevor Sie das Update des Plugins installieren, nehmen Sie bitte die folgenden Konfigurationen im Google Tag Manager Konto vor.  

	1. Speichern Sie die neue GTM-Import-Datei **"GTM-Enterprise-Import-v-4-0-0.json"** ab. (Sie erhalten die Datei als zip-Verzeichnis über einen Link in der von uns gesandten Email. Bitte entpacken Sie das Verzeichnis.)  

	2. Gehen Sie in Ihrem Google-Tag-Manager-Konto links auf **"Variablen"** und sichern Sie sich alle **Tracking-ID's** und **Einstellungen**, die Sie bei den Variablen mit Name "0 - XXX" vorgenommen haben, indem Sie sie z.B. in ein Dokument kopieren.  

	3. Wenn Sie weitere Variablen, Trigger und Tags eigenständig angelegt haben, sollten Sie sich deren Konfigurationen ebenfalls sichern.  

	4. Gehen Sie in Ihrem Google-Tag-Manager-Konto auf **"Verwaltung"** und dann auf **"Container importieren"**.  

	5. Wählen Sie die neue Datei **"GTM-Enterprise-Import-v-4-0-0.json"** aus.  

	6. Wählen Sie als Arbeitsbereich **"Neu"** und benennen Sie den neuen Arbeitsbereich bspw. als **"v.4.0.0"**.  

	7. Wählen Sie die Option **"Überschreiben"** und **"bestätigen"** Sie den Import.  

	8. Sobald Sie sich wieder auf der Übersichtsseite des Arbeitsbereichs befinden, stellen Sie bitte sicher, dass links oben als **"aktueller Arbeitsbereich"** der gerade neu angelegte Arbeitsbereich **"v.4.0.0"** ausgewählt ist.  

	9. Gehen Sie links auf **"Variablen"** und tragen Sie bitte die **gesicherten Tracking-ID's** ein und nehmen die **Einstellungen wie vorher** vor. Legen Sie ggf. die Variablen, Trigger und Tags an, die Sie vorher schon zusätzlich installiert hatten. Sie können die Konto-IDs und Einstellungen auch aus dem alten Arbeitsbereich herauskopieren, indem Sie links oben bei "aktueller Arbeitsbereich" zwischen den Arbeitsbereichen hin- und herwechseln.  

	10. Wenn Sie Facebook-, Pinterest- Billiger.de, Kelkoo, Paypal-, Awin- oder Webgains-Tracking nutzen, gehen Sie bitte links auf **"Tags"** und aktivieren Sie alle Tags, die Sie hierzu benötigen. Die pausierten Tags erkennen Sie an dem **"Pause-Symbol"** ganz rechts in der Liste. Pausierte Tags aktivieren Sie, indem Sie auf den Tag klicken und dann rechts oben auf **"Pausieren aufheben"** gehen und speichern.  

	11. Wechseln Sie in Ihr plentymarkets System, in das entsprechende **"Plugin-Set"**, und führen Sie das **"Update des Plugins"** durch, indem Sie rechts auf das runde Pfeilsymbol klicken.  

	12. Gehen Sie in der **"Plugin-Konfiguration"** links auf **"Cookies"** und setzen Sie die Checkboxen für **"Cookies registrieren"** für alle Tracking-Dienste, die Sie im Google Tag Manager aktiv haben. Mehr Informationen finden Sie in der Beschreibung im Punkt **4.5 "Opt-In-Einstellungen für Tracking-Dienste"**.  

	13. **"Stellen Sie die Plugins neu bereit"**, indem Sie im Plugin-Set auf das Speichern-Symbol klicken.  

	14. Wechseln Sie wieder zum **"Google Tag Manager"** und veröffentlichen Sie den neuen Arbeitsbereich, indem Sie rechts oben auf **"Senden"** klicken.  

	15. Vergeben Sie einen **Versionsnamen z.B. v.4.0.0** und klicken Sie auf **"Veröffentlichen"**.


## v.3.0.1 (2019-10-30)

### Fixed

- Wenn DataLayer-Werte doppelte Anführungszeichen enthielten (z.B. der Kategoriename), kam es zu einem JavaScript-Fehler. Dies wurde behoben.

### Added

- Punkt 2.5.2 "Konfiguration Conversion Value" im UserGuide aktualisiert.

## v.3.0.0 (2019-10-24)

### Fixed

- Wenn der Produktname doppelte Anführungszeichen enthielt, kam es zu einem JavaScript-Fehler. Dies wurde behoben.

- Wenn das Plugin aktiv war, aber keine GTM-ID eingetragen wurde, kam es zu einem JavaScript-Fehler. Dies wurde behoben.

### Added

- Es wurden fünf neue Tracking-Dienste im Google Tag Manager integriert: Billiger.de Sales Tracking, Kelkoo Sales Tracking, PayPal Marketing Solutions, Awin Affiliate Tracking und Webgains Affiliate Tracking.

- Die Beschreibung im plentyMarketplace wurde um die neuen Tracking-Optionen erweitert.

	**Die Version 3.0.0. stellt neue Tag Manager Elemente zur Verfügung. Wenn Sie dieses Plugin bereits in einer früheren Version erworben haben und die neuen Optionen nutzen möchten, befolgen Sie bitte die nachfolgenden Schritte. Zusätzlich erhalten Sie von uns eine Email mit einer GTM-Import-Datei zum Hinzufügen der neuen Elemente.**  

	1. Speichern Sie die GTM-Import-Datei **"GTM-Enterprise-v-3-0-0-ADDED.json"** ab. (Sie erhalten die Datei als zip-Verzeichnis. Bitte entpacken Sie das Verzeichnis.)


	2. Gehen Sie in Ihrem Google-Tag-Manager-Konto auf **"Verwaltung"** und dann auf **"Container importieren"**.

	3. Wählen Sie die neue Datei **"GTM-Enterprise-Import-v-3-0-0-ADDED.json"** aus.

	4. Wählen Sie als Arbeitsbereich **"Bestehende"** und dann **"Default Workspace"** bzw. den Workspace Ihrer Live-Version aus.

	5. Wählen Sie die Option **"Zusammenführen"** und **"In Konflikt stehende Tags, Trigger und Variablen umbenennen"** aus. Bestätigen Sie den Import.

	6. Nehmen Sie die Einstellungen entsprechend der Beschreibung im plentyMarketplace vor.

	7. Veröffentlichen Sie den Arbeitsbereich indem Sie rechts oben auf **"Senden"** klicken.

	8. Vergeben Sie einen Versionsnamen z.B. **"v.3.0.0"** und klicken Sie auf **"Veröffentlichen"**.

## v.2.0.5 (2019-09-20)

### Fixed

- In der Version 2.0.4 wurde eine wichtige Funktion deaktiviert, was unter Umständen zu doppeltem Tracking führen könnte. Dies wurde behoben.

## v.2.0.4 (2019-09-18)

### Fixed

- Es konnte zu einem JavaScript-Fehler kommen wenn bestimmte Ceres-CSS-Klassen nicht gefunden werden konnten. Dies wurde behoben. Manche Events können nur ausgelöst werden, wenn die Ceres-CSS-Klassen unverändert bleiben. Mehr dazu lesen Sie in der Beschreibung Punkt 5.1. "Tracking Events".

### Added

- Im Data Layer wurde die Variantennummer ("number") mit aufgenommen. Diese kann bei manchen Trackingdiensten als "SKU" oder ähnliches genutzt werden. Über die Vorschau des Google Tag Managers können Sie im Tab "Data Layer" ablesen, wann die Variable zur Verfügung steht.

- Die Plugin-Beschreibung wurde um die Punkte "2.5 Datenschicht-Variablen" und "5.3. Sprachtexte für Produktlisten anpassen (Produktlistenname)" ergänzt. Der Punkt "5.1. Tracking Events" wurde um wichtige Hinweise ergänzt.

### Changed

- Wenn der Produktlistenname zur Übergabe an Google Analytics nicht definiert war, hat es den Wert "undefined" übergeben. Dies wurde geändert in eine leere Zeichenkette.

## v.2.0.3 (2019-09-03)

### Fixed

- Im Google Tag Manager konnte der Tag "Google Ads Remarketing" unter Umständen nicht die vollständigen Daten aus dem DataLayer beziehen. Der eingestellte Trigger "All Pages" wird zu früh ausgelöst. Die GTM-Import-Datei wurde entsprechend aktualisiert. Alle, die das Plugin in einer früheren Version erworben haben und Google Ads-Remarketing nutzen, sollten folgende Änderung vornehmen:  

	1. Legen Sie im Google Tag Manager einen neuen Trigger vom Typ **"Seitenaufruf - Fenster geladen"** an  und speichern Sie ihn bspw. mit dem Namen **"All Pages - Window Loaded"** ab.  

	2. Öffnen Sie den Tag **"Google Ads Remarketing"**. Gehen Sie im Bereich "Trigger" rechts auf den Stift zum Bearbeiten. Löschen Sie über das "Minus-Symbol" den Trigger "All Pages" und wählen Sie über das "Plus"-Symbol den neuen Trigger **"All Pages - Window Loaded"** aus.

## v.2.0.2 (2019-08-27)

### Fixed

- Es kam zu einem JavaScript-Fehler, wenn beim Artikel kein UVP hinterlegt wurde, da die Abfrage der Variable "rrp" fehlschlug. Dies wurde behoben.

## v.2.0.1 (2019-08-26)

### Added

- OptOut-Funktion für Facebook- und Pinterest-Tracking wurde hinzugefügt. Nehmen Sie die Konfiguration entsprechend der Beschreibung im plentyMarketplace vor.   

	**Die Version 2.0.1. stellt neue Tag Manager Elemente zur Verfügung. Wenn Sie dieses Plugin bereits in einer früheren Version erworben haben und die neuen OptOut-Funktionen nutzen möchten, befolgen Sie bitte die nachfolgenden Schritte. Zusätzlich erhalten Sie von uns eine Email mit Link zu einer detaillierteren PDF-Anleitung und einer GTM-Import-Datei zum Hinzufügen der neuen Elemente. Für alle Käufer der Version 2.0.1 gilt die Beschreibung im plentyMarketplace.**  

	1. Speichern Sie die GTM-Import-Datei **"GTM-Enterprise-v-2-0-1-ADDED.json"** ab. (Sie erhalten die Datei als zip-Verzeichnis. Bitte entpacken Sie das Verzeichnis.)


	2. Gehen Sie in Ihrem Google-Tag-Manager-Konto auf **"Verwaltung"** und dann auf **"Container importieren"**.

	3. Wählen Sie die neue Datei **"GTM-Enterprise-Import-v-2-0-1-ADDED.json"** aus.

	4. Wählen Sie als Arbeitsbereich **"Bestehende"** und dann **"Default Workspace"** aus (Arbeitsbereich mit der Konfiguration aus Plugin-Version 2.0.0).

	5. Wählen Sie die Option **"Zusammenführen"** und **"In Konflikt stehende Tags, Trigger und Variablen umbenennen"** aus. Bestätigen Sie den Import.

	6. Die neuen Trigger für Facebook- und Pinterest-Optout müssen bei den Tags verknüpft werden.

		- Gehen Sie links auf **"Tags"** und wählen Sie den Tag **"Facebook - Page View"** aus.  

			Gehen Sie im Bereich **"Trigger"** rechts auf den Stift zum Bearbeiten. Löschen Sie über das "Minus-Symbol" den Trigger "All Pages" und wählen Sie über das "Plus"-Symbol den neuen Trigger **"Facebook - trigger optout"**.
  

		- Verfahren Sie so genauso mit **"Pinterest - PageVisit"**. Ersetzen Sie den bestehenden Trigger "All Pages" mit **"Pinterest - trigger optout"**.  

		- Bei den bestehenden Facebook- und Pinterest-Events müssen Sie ebenfalls den Trigger austauschen. Statt dem bisherigen Event-Trigger muss nun die gleichnamige Trigger-Gruppe verknüpft werden.

			- Beispiel:
  
				Öffnen Sie den Tag **"Facebook - AddToCart - Item List"**  

				Gehen Sie im Bereich "Trigger" rechts auf den Stift zum Bearbeiten. Löschen Sie über das "Minus-Symbol" den Trigger "All Pages" und wählen Sie über das "Plus"-Symbol den neuen Trigger **"Facebook - trigger group - add to cart on item list page"** aus.
  

		**Verfahren Sie so mit allen weiteren Facebook- und Pinterest-Events. Zu jedem Event gibt es eine neue, gleichnamige Trigger-Gruppe, die Sie auswählen müssen.**

	7. Veröffentlichen Sie den Arbeitsbereich indem Sie rechts oben auf **"Senden"** klicken.

	8. Vergeben Sie einen Versionsnamen z.B. **"v.2.0.1"** und klicken Sie auf **"Veröffentlichen"**.

	9. Wechseln Sie in Ihr plentymarkets System und gehen Sie in der Plugin-Konfiguration links auf **"Standard-Container-Verknüpfungen"** und aktivieren Sie die Haken für Facebook OptOut und Pinterest OptOut.  

	10. Nehmen Sie die Konfiguration der OptOut-Links entsprechend Punkt 4.3 der Beschreibung im plentyMarketplace vor.

### Changed

- Das Plugin wurde von "All-In-One Google Tag Manager Tracking" in "Google Tag Manager Tracking ENTERPRISE" umbenannt

- Korrektur von Elementen im Google Tag Manager. Die Änderungen beziehen sich auf die neue GTM-Import-Datei **"GTM-Enterprise-v-2-0-1.json"**.  

	1. Korrektur von Schreibfehlern  
		- Korrektur des Schreibfehlers im Tag **"Facebook - InitiateCheckout"**. Änderung der JavaScript-Variable basketItemsContens in
: **"basketItemsContents"**  
		- Korrektur des Schreibfehlers im Tag **"Facebook - Purchase"**. Änderung der JavaScript-Variable orderItemsContens in: **"orderItemsContents"**  
		- Korrektur des Schreibfehlers im Tag **"Facebook - Search"**. Änderung der JavaScript-Variable itemContens in: **"itemContents"**

	2. Löschen von überflüssigen Triggern  
		- Trigger **"Page View - Dom ready"**. Dieser Trigger war in unserer vorgegebenen Tag Manager Konfiguration unbenutzt.  
		- Trigger **"Global Events"**. Dieser Trigger entspricht dem Trigger "All Pages". Beim Tag "Google Ads - Remarketing" wurde der Trigger "Global Events" gegen "All Pages" ausgetauscht.

	3. Korrektur der Ordner-Zuweisungen  
		- Die Elemente "Google Ads Remarketing - ecomm_pagetype", "Google Ads Remarketing - ecomm_pcat", "Google Ads Remarketing - ecomm_pname", "Google Ads Remarketing - ecomm_prodid", "Google Ads Remarketing - ecomm_totalvalue" wurden in den Ordner "Google Ads" verschoben.  
		- Die Elemente "Pinterest - AddToCart - Item List - line_items", "Pinterest - AddToCart - Item List - order_quantity", "Pinterest - AddToCart - Item List - value", "Pinterest - AddToCart - Single Item - line_items", "Pinterest - AddToCart - Single Item - order_quantity", "Pinterest - AddToCart - Single Item - value", "Pinterest - line_items", "Pinterest - order_quantity", "Pinterest - value" wurden in den Ordner "Pinterest" verschoben.


## v.2.0.0 (2019-07-24)

**ACHTUNG! Sie benötigen für die Version 2.0.0 eine aktualisierte GTM-Import-Datei. Wenn Sie dieses Plugin bereits erworben haben und ein Update installieren möchten, befolgen Sie bitte die Schritte im Punkt "Changed" bzw. in der Email, die wir Ihnen bezüglich des Updates zusammen mit dem Link zur neuen GTM-Import-Datei zugesandt haben.**

### Added

- Die Ereignisse für Facebook- und Pinterest-Tracking wurden erweitert. Für Facebook stehen nun diese weiteren Ereignisse zur Verfügung: **"Add To Cart**, **Add To Wishlist**, **Complete Registration"**, **"Contact"** und **"Initiate Checkout"**. Für Pinterest stehen nun diese weiteren Ereignisse zur Verfügung: **"Add To Cart"**, **"View Category"**, **"Search"**, **"Signup"**

- **"Google Analytics-OptOut-Link für Datenschutz-Seite"** hinzugefügt. Sollte Ihre Datenschutzerklärung keinen Google Analytics-OptOut-Link beinhalten, können Sie ihn nun mithilfe des Plugins unter die Datenschutzerklärung setzen. Weitere Informationen erhalten Sie in Punkt 4.3 der Beschreibung.

### Changed

- Das Update unseres Plugins auf die Version 2.0.0 stellt viele neue Trackingmöglichkeiten zur Verfügung und basiert auf einer komplett überarbeiteten, technischen Struktur im Hintergrund. Aus diesem Grund haben sich die Einstellungen im Google Tag Manager zugunsten einer zentralen, einheitlichen Verwaltung grundlegend geändert. Wenn Sie dieses Plugin in einer früheren Version erworben haben, müssen Sie eine neue GTM-Import-Datei einspielen, da sonst das Tracking nicht mehr gewährleistet werden kann. Für alle neuen Käufer gilt die Beschreibung im plentyMarketplace.  

	**Wir empfehlen folgende Vorgehensweise, damit keine Lücken im Tracking entstehen:**

	Bevor Sie das Update des Plugins installieren, nehmen Sie bitte die folgenden Konfigurationen im Google Tag Manager Konto vor.

	1. Speichern Sie die neue GTM-Import-Datei **"GTM-Import-v-2-0-0.json"** ab. (Sie erhalten die Datei als zip-Verzeichnis über einen Link in der von uns gesandten Email. Bitte entpacken Sie das Verzeichnis.)

	2. Gehen Sie in Ihrem Google-Tag-Manager-Konto auf **"Verwaltung"** und dann auf **"Container importieren"**.

	3. Wählen Sie die neue Datei **"GTM-Import-v-2-0-0.json"** aus.

	4. Wählen Sie als Arbeitsbereich **"Neu"** und benennen Sie den neuen Arbeitsbereich bspw. als **"v.2.0.0"**.

	5. Wählen Sie die Option **""Überschreiben"** und **"bestätigen"** Sie den Import.

	6. Sobald Sie sich wieder auf der Übersichtsseite des Arbeitsbereichs befinden, stellen Sie bitte sicher, dass links oben als **"aktueller Arbeitsbereich"** der gerade neu angelegte Arbeitsbereich **"v.2.0.0"** ausgewählt ist.

	7. Gehen Sie links auf **"Variablen"** und tragen Sie bitte die **"Konto-IDs für die gewünschten Dienste"** ein. Zur besseren Übersicht sind alle Variablen, die Konto-IDs beinhalten mit einer **"0"** vor dem Namen gekennzeichnet, sodass Sie ganz oben in der Liste erscheinen.  

	Sie können die Konto-IDs aus dem alten Arbeitsbereich herauskopieren, indem Sie links oben bei „aktueller Arbeitsbereich“ zwischen den Arbeitsbereichen hin- und herwechseln.

	8. Wenn Sie das Facebook- und Pinterest-Tracking nutzen, gehen Sie bitte links auf **"Tags"** und aktivieren Sie alle Tags, die Sie hierzu benötigen. Zur besseren Übersicht sind alle Tags einheitlich mit dem entsprechenden Trackingdienst-Namen gekennzeichnet. Die pausierten Tags erkennen Sie an dem **"Pause-Symbol"** ganz rechts in der Liste.  

	Pausierte Tags aktivieren Sie, indem Sie auf den Tag klicken und dann rechts oben auf „Pausieren aufheben“ gehen und speichern.

	9. Haben Sie zusätzlich zu der von uns mitgelieferten Konfiguration bereits eigene Tags, Trigger und Variablen angelegt, müssen Sie diese von dem alten Arbeitsbereich in den neuen Arbeitsbereich übertragen.

	10. Wechseln Sie in Ihr plentymarkets System, in das entsprechende **"Plugin-Set"**, und führen Sie das **"Update des Plugins"** durch, indem Sie rechts auf das runde Pfeilsymbol klicken.

	11. Gehen Sie in der **"Plugin-Konfiguration"** links auf **"Standard-Container-Verknüpfungen"** und aktivieren Sie alle Checkboxen.

	12. **"Stellen Sie die Plugins neu bereit"** indem Sie im Plugin-Set auf das Speichern-Symbol klicken.

	13. Wechseln Sie wieder zum **"Google Tag Manager"** und veröffentlichen Sie den neuen Arbeitsbereich indem Sie rechts oben auf **"Senden"** klicken.

	14. Vergeben Sie einen **"Versionsnamen z.B. v.2.0.0** und klicken Sie auf **"Veröffentlichen"**.


## v.1.0.2 (2019-07-15)

### Fixed

- Durch einen Fehler wurde die Währung bei Transaktionen nicht übermittelt. Dies wurde nun behoben.

- Die Anforderungen zur Multilingualitätsfähigkeit des Plugins wurden auf den neuesten Stand gebracht. Sprachtexte, die z.B. bei Google Enhanced Ecommerce Events genutzt werden, konnten unter Umständen nicht korrekt übermittelt werden. Dieser Fehler wurde nun behoben.

- Sonderzeichen in Artikelnamen wurden nicht korrekt übermittelt. Dieser Fehler wurde ebenfalls behoben.

## v.1.0.1 (2019-07-03)

### Fixed

- Bei Aufträgen mit Lieferung außerhalb der Europäischen Union wurden falsche Conversion-Werte und falsche Versandkosten getrackt. Das wurde nun behoben.

## v.1.0.0 (2019-06-20)

### Added

- Erster Release

