# Kickie — Pro Athletics Kickboxing

Een complete, lokale WordPress-startsite voor **Pro Athletics Kickboxing**. De site is als eigen thema gebouwd en bevat geen externe afbeeldingen, trackers of betaalde plug-ins.

## Lokaal starten met WampServer

1. Start WampServer en controleer dat Apache en MySQL groen zijn.
2. Clone deze repository direct in de Wamp-webmap:

   ```powershell
   git clone https://github.com/Delano-nimas/kickie.git C:\wamp64\www\kickie
   ```

   Gebruik je een andere Wamp-installatiemap, vervang dan alleen `C:\wamp64\www` door jouw eigen `www`-map.

3. Maak via phpMyAdmin (`http://localhost/phpmyadmin`) een database aan met de naam `kickie` en de tekenset `utf8mb4`.
4. Open [http://localhost/kickie](http://localhost/kickie) en volg de WordPress-installatie. WampServer gebruikt vaak deze standaardgegevens:

   ```text
   Databasenaam: kickie
   Gebruikersnaam: root
   Wachtwoord: leeg laten
   Databasehost: localhost
   Tabelvoorvoegsel: wp_
   ```

5. Log na de installatie eenmaal in op `http://localhost/kickie/wp-admin`. Het thema **Pro Athletics** wordt automatisch actief.

Daarna kun je de tekst, lessen en contactgegevens aanpassen via **Weergave → Thema-editor**, of eigen pagina's toevoegen via WordPress.

## Belangrijk

- De lokale URL voor deze installatie is `http://localhost/kickie`, niet `localhost:8080`.
- Alle navigatie in het thema gebruikt WordPress' eigen lokale URL, dus werkt ook als je later een andere lokale mapnaam kiest.
- Gebruik bij een lokaal Wamp-project geen productiecontactgegevens totdat die zijn gecontroleerd; de huidige contacttekst is een placeholder.

## Opbouw

```
wp-content/
  mu-plugins/activate-pro-athletics.php
  themes/pro-athletics/
```

De repository bevat de officiële WordPress-kern en het Pro Athletics-thema. Na het clonen hoef je dus niets extra's te downloaden.
