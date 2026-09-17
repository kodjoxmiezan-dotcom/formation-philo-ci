# Rapport de vérification ATHENEE v2

Recette technique réalisée le 17 septembre 2026 sur le paquet de livraison.

## Vérifications réussies

- 36 fichiers PHP : aucune erreur à `php -l` ;
- XMLDB Moodle : fichier `install.xml` bien formé ;
- données : 8 modules, 10 prétests + 10 post-tests par module, 16 tests objectifs finaux, 4 cas pratiques, durée 3600 s ;
- PDF apprenants : 8 versions sans section de corrigés ;
- accès PDF prévu hors webroot via `moodledata` ;
- 1000 serials enregistrés côté Supabase sous forme de hash ;
- test d’activation : première installation acceptée, même installation réacceptée, autre installation refusée ;
- 8 codes modules + code FINAL vérifiés ;
- Edge Function d’activation active ;
- index de performance ajouté sur les déverrouillages ;
- Google Sheets : classeur ATHENEE et onglets de suivi créés ;
- archives ZIP : contrôle d’intégrité réussi ;
- source publique : aucune liste de serials, aucun code d’activation, aucun secret réel, aucune banque de réponses protégée.

## À tester sur l’hébergement Moodle final

L’installation réelle des plugins, le cron, le Web App Apps Script, les appels IA et les tests multi-utilisateurs nécessitent l’instance Moodle cible. Le diagnostic `/local/athenee/health.php` a été prévu pour cette recette finale.
