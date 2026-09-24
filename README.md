# Kickie — Pro Athletics Kickboxing

Een complete, lokale WordPress-startsite voor **Pro Athletics Kickboxing**. De site is als eigen thema gebouwd en bevat geen externe afbeeldingen, trackers of betaalde plug-ins.

## Lokaal starten

1. Installeer [Docker Desktop](https://www.docker.com/products/docker-desktop/) als dat nog niet op je computer staat.
2. Clone deze repository en open de map in je terminal.
3. Start de site:

   ```powershell
   docker compose up -d
   ```

4. Open [http://localhost:8080](http://localhost:8080). Bij de eerste keer vraagt WordPress om een beheerdersaccount aan te maken. Het thema **Pro Athletics** wordt automatisch actief.

Na het starten kun je de tekst, lessen en contactgegevens aanpassen via **Weergave → Thema-editor**, of je eigen contentbeheer toevoegen via WordPress.

## Handige commando's

```powershell
docker compose down       # stoppen
docker compose up -d      # opnieuw starten
docker compose down -v    # alles inclusief lokale database opnieuw beginnen
```

> De laatste opdracht verwijdert uitsluitend de lokale Docker-data van deze site.

## Opbouw

```
docker-compose.yml
wp-content/
  mu-plugins/activate-pro-athletics.php
  themes/pro-athletics/
```

Alle publieke links worden met WordPress-functies opgebouwd en verwijzen lokaal naar `http://localhost:8080`.

