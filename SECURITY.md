# Sécurité ATHENEE

ATHENEE sépare strictement les composants publics et les données d’administration.

## Ne jamais publier

- les 1000 serials en clair ;
- les codes d’activation M1 à M8 et FINAL ;
- le secret partagé avec le service Supabase ;
- le secret du Web App Google Sheets ;
- les clés API IA ;
- `local/athenee/data.php` contenant les réponses protégées ;
- les PDF apprenants sous contrôle d’accès ;
- tout fichier `secrets.php` réel.

## Principes appliqués

- serials et codes stockés sous forme de hash côté serveur ;
- première activation en ligne et association compte/installation ;
- PDF placés dans `moodledata`, hors webroot ;
- contrôle d’activation avant téléchargement ;
- assistant IA désactivé pendant l’évaluation finale ;
- minuterie finale contrôlée côté serveur ;
- correction IA des cas pratiques considérée comme proposition de notation et révisable par un administrateur ;
- résultats de concours à valider avant classement définitif ;
- synchronisation Google Sheets via secret serveur et file locale de reprise.

## Dépôt public

Ce dépôt ne constitue pas à lui seul le paquet installable complet. Les fichiers privés sont injectés exclusivement lors du déploiement administrateur.

En cas de découverte accidentelle d’un secret dans l’historique Git, le secret doit être révoqué/roté immédiatement avant tout autre correctif.
