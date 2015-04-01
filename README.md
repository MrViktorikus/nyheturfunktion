# berzanappen

##Instruktioner för testmiljö
För att sätta upp en testmiljö för din del så...
 1.Skapa databasen berzanapp
 2.Importera tabell
   a.Imporera berzanapp.sql vi phpMyAdmin
   b.Kör setupDB.php

##2015-03-30
- Tog in nyheter från Viktor, Anton och Albin. Merge OK. Måste städa bland filnamnen.
- Försöker förstå inloggningssystemet.
  - Inloggad avgörs av anvnamn i session. 
  - Gör en ny index.php och flyttar in saker steg för steg. Flöde:
    - Kolla om man är inloggad. Skicka till login.php om inte.


##2015-04-01
