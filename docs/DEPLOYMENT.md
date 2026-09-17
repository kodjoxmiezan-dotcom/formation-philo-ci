# Déploiement ATHENEE v2

## Prérequis

- Moodle 4.4+ ;
- PHP 8.1+ et extensions Moodle usuelles, notamment cURL et ZIP ;
- HTTPS en production ;
- base de données supportée par Moodle ;
- cron Moodle actif.

## Installation

1. Installer `theme_athenee` dans `moodle/theme/athenee`.
2. Installer `local_athenee` dans `moodle/local/athenee`.
3. Lancer **Administration du site > Notifications**.
4. Activer le thème ATHENEE.
5. Configurer le plugin local avec les secrets fournis uniquement dans le pack administrateur privé.
6. Ouvrir `/local/athenee/setup.php` pour créer/mettre à jour les 8 cours.
7. Ouvrir `/local/athenee/import_manuals.php` et importer l’archive privée des 8 PDF apprenants.
8. Ouvrir `/local/athenee/health.php` et résoudre tout contrôle non validé.

## Activation

La première connexion doit être en ligne. Le serial de 15 caractères est validé par le service d’activation puis associé au compte et à l’installation. Chaque module est ensuite déverrouillé par un code de 5 caractères distinct. L’évaluation finale possède son propre code.

## Parcours

Tutoriel → prétest → séquences et PDF → assistant IA → post-test → badge. Après 8 badges : code FINAL → 16 tests objectifs + 4 cas pratiques → 60 min → correction → attestation.

## Google Sheets

Le plugin enregistre les événements dans une file locale. Déployer le script Google Apps Script fourni dans le pack privé comme **Application Web**, puis renseigner l’URL `/exec` dans les paramètres ATHENEE. Les événements non synchronisés sont conservés jusqu’à un prochain passage du cron.

## IA

Configurer endpoint, modèle et clé API uniquement côté serveur. Sans API IA, le reste de la plateforme demeure utilisable ; les cas pratiques finaux passent en validation humaine et l’assistant pédagogique n’est pas proposé.

## Recette après installation

- activer un serial de test ;
- vérifier que le même serial est refusé sur une autre installation ;
- déverrouiller un module ;
- vérifier que le PDF n’est accessible qu’après activation ;
- réaliser le prétest et le post-test ;
- générer un badge ;
- vérifier le tutoriel et l’assistant ;
- terminer les 8 modules ;
- activer l’épreuve finale ;
- vérifier le compte à rebours de 60 minutes et la soumission automatique ;
- valider un résultat final et une attestation ;
- contrôler la remontée d’un événement dans Google Sheets.
