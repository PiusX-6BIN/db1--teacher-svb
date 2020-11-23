# DB1: Database Ontwerp en Implementatie

## Opdracht 1

### 1a. Bestanden aanmaken

 - Kopieer je HTML, CSS, JS en JSON bestanden uit het vorige project en plaats ze hier.
 - Maak een nieuw PHP bestand aan.

### 1b. Filteren met PHP

Op dit moment stuur je een request naar je JSON bestand om data op te vragen.

Wijzig de request zodat je deze data vanaf nu opvraagt aan je PHP bestand. Geef daarbij een URL parameter mee, waar je de ID van de correcte superhero aan meegeeft.

Gebruik PHP om je JSON bestand te laden. Gebruik de URL parameter om de juiste superheld uit je JSON data te laden.


## Peer Review

In deze map vind je het document [PEERREVIEW.md](PEERREVIEW.md) terug. 
 - Beantwoord de vragen
 - Geef code voorbeelden
   - [Gebruik Markdown](https://guides.github.com/features/mastering-markdown/#examples) om de code-voorbeelden van de correcte opmaak te voorzien.

<!--

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


 -->