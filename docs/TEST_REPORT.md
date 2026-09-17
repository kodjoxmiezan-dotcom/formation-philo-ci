# Rapport de vérification ATHENEE v2

Recette technique mise à jour le 17 septembre 2026.

## Vérifications réussies

- 42 fichiers PHP des composants ATHENEE passent `php -l` sans erreur dans l'environnement de construction ;
- XMLDB Moodle : `install.xml` bien formé ;
- données : 8 modules, 10 prétests + 10 post-tests par module, 16 tests objectifs finaux, 4 cas pratiques, durée 3600 s ;
- PDF apprenants : 8 versions sans section de corrigés ;
- accès PDF prévu hors webroot via `moodledata` ;
- 1000 serials enregistrés côté Supabase sous forme de hash et revenus à l'état `UNUSED` après les tests ;
- test d'activation : première installation acceptée, même installation réacceptée, autre installation refusée ;
- 8 codes modules + code FINAL vérifiés ;
- Edge Function `athenee-license` version 2 active, avec gestion des fenêtres d'ouverture/fermeture ;
- Google Sheets : classeur ATHENEE et onglets de suivi créés ;
- archives ZIP : contrôle SHA-256 et intégrité réussis ;
- source publique : aucune liste de serials, aucun code d'activation, aucun secret réel, aucune banque de réponses protégée.

## À tester sur l'hébergement Moodle final

L'installation réelle des plugins, le cron, le Web App Apps Script, les appels IA et les tests multi-utilisateurs nécessitent l'instance Moodle cible. La cible recommandée pour la recette finale en septembre 2026 est Moodle 5.2.3 avec PHP 8.3/8.4. Le diagnostic `/local/athenee/health.php` est prévu pour cette recette finale.
