# ATHENEE v2 — État de vérification final

Date : 17 septembre 2026.

## Vérifié dans l'environnement de construction

- 1000 serials uniques de 15 caractères ; état Supabase contrôlé : **1000 UNUSED** après recette.
- 9 codes d'activation : M1 à M8 + FINAL, 5 caractères chacun, enregistrés sous forme de hash.
- Supabase actif ; tables privées sous RLS et droits directs anon/authenticated révoqués.
- Activation testée côté base : première activation acceptée, même installation réacceptée, autre installation refusée ; serial de test remis à UNUSED.
- Edge Function `athenee-license` **version 2** active : activation plateforme, déverrouillage module, lecture et modification des fenêtres d'activation.
- 8 PDF apprenants présents ; les sections de corrigés/clé de réponses ont été retirées.
- PDF prévus hors webroot Moodle, dans `moodledata/local_athenee/manuals`, puis servis après contrôle du scope activé.
- 42 fichiers PHP des composants ont passé `php -l` sans erreur dans l'environnement de construction.
- XMLDB `db/install.xml` bien formé.
- 8 prétests de 10 items et 8 post-tests de 10 items.
- Évaluation finale : 16 tests objectifs + 4 cas pratiques ; durée serveur 3600 s ; compte à rebours client + contrôle serveur.
- Assistant IA de compréhension par module et blocage pendant l'évaluation finale.
- Badge nominatif par module ; attestation finale imprimable/PDF avec code de vérification.
- Google Sheets créé dans Drive avec Dashboard, Journal, Progression, Notes_Modules, Evaluation_Finale, Concours et Parametres.
- Script Apps Script préparé ; file locale Moodle de reprise prévue en cas de coupure.
- Archives ZIP : contrôle SHA-256 et intégrité réussis.
- Paquet public scanné : aucun serial, code module, secret serveur ou banque de réponses protégée en clair.

## Point important

La certification « fonctionne sur un vrai Moodle de production » exige une instance Moodle réellement hébergée. L'environnement de construction ne contient pas la pile web/base de données Moodle complète. La cible recommandée pour la recette en septembre 2026 est Moodle 5.2.3 avec PHP 8.3/8.4.

## À valider sur le serveur cible

Installation des plugins, cron, import PDF, Web App Apps Script, appels IA, test multi-utilisateur, charge, reprise réseau et émission réelle d'une attestation. Utiliser `/local/athenee/health.php` et la checklist de `DEPLOYMENT.md`.
