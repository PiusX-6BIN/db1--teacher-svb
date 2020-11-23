# DB1: Database Ontwerp en Implementatie

## Opdracht 5

### 5a. Bestanden aanmaken

 - Kopieer je **HTML, CSS en PHP bestanden** uit opdracht 1 naar deze map.

### 5b. Databank connectie in PHP

 - Maak een connectie met je databank in je PHP bestand.
 - Test de connectie met behulp van PHP code om zeker te zijn dat de connectie werkt.

### 5c. Queries gebruiken in PHP

 - Gebruik de databank connectie om de queries uit de vorige opdracht uit te voeren.
 - Vang het resultaat van elke query op. **Zet het resultaat van elke query om in een associative array**.
   - _Optioneel_: gebruik de functie [print_r()](https://www.w3schools.com/php/func_var_print_r.asp) om te testen of de data in de associative array correct is. 


### 5d. Queries Aanpassen aan Parameters

Het PHP bestand zou nog steeds een URL parameter moeten krijgen om aan te duiden welk personage je wilt tonen.

 - Gebruik [prepared statements](https://www.w3schools.com/php/php_mysql_prepared_statements.asp) om de URL parameter door te geven aan de juiste queries.
   - _Optioneel_: gebruik de functie [print_r()](https://www.w3schools.com/php/func_var_print_r.asp) om te testen of de data in de associative array verandert op basis van de URL parameter. 

### 5e. PHP Objecten omzetten in JSON

 - Maak één grote associative array, waarin de resultaten van elke query worden geplaatst.
   - _Optioneel_: gebruik de functie [`print_r()`](https://www.w3schools.com/php/func_var_print_r.asp) om te testen of de data in de associative array correct is. 
 - Gebruik PHP om de grote associative om te zetten in een JSON formaat.
 - Gebruik `echo` om de JSON in het PHP bestand te tonen.

## Peer Review

In deze map vind je het document [PEERREVIEW.md](PEERREVIEW.md) terug. 
 - Beantwoord de vragen
 - Geef code voorbeelden
   - [Gebruik Markdown](https://guides.github.com/features/mastering-markdown/#examples) om de code-voorbeelden van de correcte opmaak te voorzien.



## Website Nakijken

Kijk de website goed na of alles goed werkt. Bijvoorbeeld:
 - Worden alle vier de personages getoond in de menu?
 - Wordt de juiste data voor elk personage weergegeven?
 - worden alle vijf de getuigenissen getoond voor elk personage?
 - ...

Zoals altijd kan je de evaluatie-methode bekijken. **Je wordt aangeraden om deze rubric goed te bekijken**. Probeer zelf in te schatten hoe goed je op elk onderdeel hebt gescoord. Maak aanpassingen in je website waar nodig.

Bv.:
 - Voeg voldoende commentaar toe aan je code
 - Heb je de peer reviews voldoende beantwoord?
 - ...


## Evaluatie 

### Kwaliteit

| Doelstelling | A | B | C | D | E |
| --- | --- | --- | --- | --- | --- |
| Programmeer attitude: coding guidelines | Je indentatie, naamgeving en commentaar is correct en duidelijk. Je hebt ook duidelijke commentaar toegevoegd op plaatsen waar je code moeilijker te begrijpen. |	Je indentatie is correct en de namen die je koos voor de verschillende elementen zijn duidelijk. Je hebt commentaar toegevoegd op de plaatsen waar dit verplicht is volgens de coding guidelines. |	De commentaar die je schrijft is onvoldoende uitgewerkt. De naamgeving van elementen is duidelijk en je indentatie is correct. |	De namen die je kiest voor de verschillende elementen zijn niet duidelijk genoeg. Je indentatie is correct en je hebt commentaar toegevoegd op de plaatsen waar dit verplicht is volgens de coding guidelines. | 	Je indentatie, naamgeving en commentaar zijn onduidelijk en onvoldoende uitgewerkt.
| Programmeer attitude: probleem analyse  | De opdracht werd goed uitgewerkt. Je probleem analyse bevat weinig of geen fouten. |	Hoewel de opdracht niet goed werd uitgewerkt, heb je een goede probleem analyse gemaakt met weinig of geen fouten. |	Je hebt de opdracht correct uitgewerkt, maar je probleemanalyse is onvoldoende uitgewerkt. |	Je hebt de opdracht niet goed uitgewerkt, omdat je probleem analyse fouten bevat. |	Je hebt geen probleem analyse gemaakt, waardoor de opdracht niet goed werd uitgewerkt. |
| Foutopsporing: syntax- en runtimefouten | Je hebt de meeste syntax- en runtimefouten gevonden en verklaard, en kan er ook een oplossing voor geven. | Je hebt de meeste runtime-fouten gevonden en verklaard, en kan er ook een oplossing voor geven. Je hebt slechts weinig syntax fouten gevonden. | Je hebt de meeste syntax-fouten gevonden en verklaard, en kan er ook een oplossing voor geven. Je hebt slechts weinig runtime fouten gevonden. | Je hebt weinig fouten gevonden. Je kan de fouten die je vond wel verklaren, maar je biedt weinig oplossingen hiervoor.  | Je hebt weinig fouten gevonden. De fouten die je vond kan je niet verklaren of oplossen. |


### programmeren

| Doelstelling | A | B | C | D | E |
| --- | --- | --- | --- | --- | --- |
|	Programmeren: Instructies	|	Variabelen worden correct geinitialiseerd en je maakt correct gebruik van de verschillende datatypes en operators.	|	Enkele variabelen worden nog niet juist geinitialiseerd. Je maakt wel correct gebruik van de verschillende datatypes en operators.	|	Je gebruik van de verschillende operators is correct. Je gebruikt de verschillende datatypes nog niet correct. Variabelen worden nog niet juist geinitialiseerd.	|	Je gebruik van de verschillende datatypes is correct. Je gebruikt de verschillende operators nog niet correct. Variabelen worden nog niet juist geinitialiseerd.	|	Variabelen worden niet goed geinitialiseerd, je maakt verkeerd gebruik van de verschillende datatypes en operators.	|														
|	Programmeren: Codeblokken (selectie)	|	Je past selectie toe op de juiste plaats met de juiste voorwaarde, waarbij je een optimale oplossing gebruikt voor het probleem.	|	Je past selectie toe op de juiste plaats met de juiste voorwaarde, maar er zijn oplossingen die veel korter of sneller zijn.	|	Je past selectie toe op de juiste plaats met de juiste voorwaarde, maar zet je selectie-blokken in de foute volgorde.	|	Je past selectie toe op de juiste plaats met de juiste voorwaarde, maar gebruikt hiervoor de verkeerde selectie-blokken.	|	Selecties worden niet gebruikt waar nodig. Wanneer je een selectie gebruikt is de voorwaarde niet juist.	|														
|	Programmeren: Codeblokken (iteratie)	|	Je past iteratie toe op de juiste plaats met de juiste voorwaarde en iterator en maakt correct het onderscheid tussen variabelen binnen en buiten de iteratie, waarbij je een optimale oplossing gebruikt voor het probleem.	|	Je past iteratie toe op de juiste plaats met de juiste voorwaarde en iterator en maakt correct het onderscheid tussen variabelen binnen en buiten de iteratie, maar er zijn oplossingen die veel korter of sneller zijn.	|	Je past iteratie toe op de juiste plaats met de juiste voorwaarde en maakt correct het onderscheid tussen variabelen binnen en buiten de iteratie, maar gebruikt de iterator niet wanneer dit nodig is.	|	Je past iteratie toe op de juiste plaats met de juiste voorwaarde, maar gebruikt de iterator niet wanneer dit nodig is en begrijpt niet wat het verschil is tussen een variabele die voor, tijdens en na de iteratie wordt aangemaakt.	|	Iteraties worden niet gebruikt waar nodig. Wanneer je een selectie gebruikt is de voorwaarde niet juist.	|														
|	Programmeren: Codeblokken (functie)	|	Parameters zijn correct gedefinieerd en worden correct gebruikt in de functie. De return waarde is correct geimplementeerd en wordt juist opgevangen bij de aanroep. Functies hebben één duidelijk doel. Functies werken zoals beschreven in de opdracht, waarbij je een optimale oplossing gebruikt voor het probleem.	|	Parameters zijn correct gedefinieerd en worden correct gebruikt in de functie. De return waarde is correct geimplementeerd en wordt juist opgevangen bij de aanroep. Functies hebben één duidelijk doel. Functies werken zoals beschreven in de opdracht, maar er zijn oplossingen die veel korter of sneller zijn.	|	Parameters zijn correct gedefinieerd en worden correct gebruikt in de functie. De return waarde is correct geimplementeerd, maar wordt niet opgevangen bij het aanroepen van de functie.	|	Parameters zijn correct gedefinieerd, maar worden verkeerd gebruikt in de functie zelf. De return waarde is correct geimplementeerd, maar wordt niet opgevangen bij het aanroepen van de functie.	|	De signature van de functie is niet volledig. Het aanroepen van de functie gebeurt verkeerd. Er is geen return-waarde aanwezig wanneer dit nodig is.	|														
|	Programmeren: Arrays	|	Arrays worden correct aangemaakt en het opvragen, invoegen, verwijderen en aanpassen van elementen gebeurt op de juiste wijze. 	|	Arrays worden correct aangemaakt en het opvragen, invoegen en aanpassen van elementen gebeurt op de juiste wijze. Het verwijderen van elementen wordt echter niet op de juiste manier gedaan.	|	Arrays worden correct aangemaakt en het opvragen en aanpassen van elementen gebeurt op de juiste wijze. Het invoegen en verwijderen van elementen wordt echter niet op de juiste manier gedaan.	|	Arrays worden correct aangemaakt en het opvragen van elementen gebeurt op de juiste wijze. Het invoegen, aanpassen en verwijderen van elementen wordt echter niet op de juiste manier gedaan.	|	Arrays worden op de verkeerde manier aangemaakt. Het opvragen, invoegen en verwijderen van elementen gebeurt niet op de correcte wijze.	|														


### databank

| Doelstelling | A | B | C | D | E |
| --- | --- | --- | --- | --- | --- |
|	Databankbeheer: database ontwerp	|	Databasefouten werden correct herkend. Het strokendiagram, multipliciteitendiagram en populatiediagram zijn correct en volledig uitgewerkt. Sleutels werden correct aangeduid. 	|	Databasefouten werden correct herkend. Het strokendiagram en populatiediagram zijn correct en volledig uitgewerkt. Sleutels werden correct aangeduid. Het multipliciteitendiagram is onvoldoende uitgewerkt. 	|	Enkele databasefouten werden niet goed herkend. Het strokendiagram bevat alle nodige entiteiten. Sleutels werden correct aangeduid. Het multipliciteitendiagram en populatiediagram is onvoldoende uitgewerkt. 	|	Enkele databasefouten werden niet goed herkend. Het strokendiagram bevat alle nodige entiteiten. Het multipliciteitendiagram en populatiediagram is onvoldoende uitgewerkt. Sleutels werden niet correct aangeduid. 	|	Databasefouten werden niet goed herkend. Het strokendiagram, multipliciteitendiagram en populatiediagram is onvoldoende uitgewerkt. Sleutels werden niet aangeduid. 	|														
|	Databankbeheer: database normalisatie	|	Normaalvormen NF0 tot en met NF3 en standaardisatie werden correct toegepast. 	|	Normaalvormen NF0 tot en met NF3 werden correct toegepast. Standaardisatie ontbreekt of werd niet correct toegepast.	|	Normaalvormen NF0 tot en met NF2 werden correct toegepast, NF3 niet.	|	Normaalvormen NF0 tot en met NF1 werden correct toegepast, NF2 en NF3 niet.	|	Normalisatie en standaardisatie werden niet correct toegepast.	|														
|	Databankbeheer: DBMS gebruik	|	Tabellen werden correct aangemaakt. Primaire en refererende sleutels werden correct aangeduid. Auto increment werd correct gebruikt waar nodig. Het domein van de velden is correct gedefinieerd. Velden en records werden correct aangemaakt. 	|	Tabellen werden correct aangemaakt. Primaire sleutels werden correct aangeduid. Auto increment werd correct gebruikt waar nodig. Het domein van de velden is correct gedefinieerd. Velden en records werden correct aangemaakt. 	|	Tabellen werden correct aangemaakt. Primaire sleutels werden correct aangeduid. Auto increment werd correct gebruikt waar nodig. Het domein van de velden is correct gedefinieerd. Enkele velden en records werden niet correct aangemaakt. 	|	Tabellen werden correct aangemaakt. Primaire sleutels werden correct aangeduid. Enkele velden en records werden niet correct aangemaakt. Het domein van de velden is fout gedefinieerd. Auto increment werd niet gebruikt waar nodig.	|	Tabellen, velden en records werden niet correct aangemaakt. Het domein van de velden is fout gedefinieerd. Sleutels werden niet of verkeerd aangeduid. Auto increment werd niet gebruikt waar nodig.	|														
|	Queries	|	De projectie, brontabel en selectie is correct geimplementeerd voor de hoofd- en subqueries.	|	De projectie, brontabel en selectie is correct geimplementeerd. Er werd geen gebruik gemaakt van subqueries waar nodig.	|	De projectie is correct geimplementeerd. De brontabel werd correct aangeduid voor queries uit meerdere brontabellen. De selectie is niet correct geimplementeerd.	|	De projectie is correct geimplementeerd. De brontabel werd correct aangeduid voor queries uit één brontabel. De selectie is niet correct geimplementeerd.	|	De projectie, brontabel en selectie van queries zijn verkeerd geimplementeerd.	|														