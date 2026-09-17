# Tester ATHENEE v2 localement avec un vrai Moodle

Le pack privé fournit `ATHENEE_v2_TEST_DOCKER.zip`. Il sert à exécuter une vraie instance Moodle de recette sur un ordinateur disposant de Docker Desktop ou Docker Engine.

## Ce que le kit installe

- Moodle **5.2.3** depuis le dépôt officiel Moodle ;
- environnement de test `moodlehq/moodle-docker` ;
- PHP 8.3 ;
- MariaDB ;
- thème `theme_athenee` ;
- plugin privé `local_athenee` ;
- archive des 8 manuels apprenants sans corrigés.

## Démarrage

1. Installer Docker et Git.
2. Décompresser `ATHENEE_v2_TEST_DOCKER.zip` dans un dossier de travail.
3. Ouvrir un terminal dans `ATHENEE_v2_docker_test`.
4. Exécuter : `bash start-athenee-test.sh`.
5. Lorsque l'initialisation est terminée, ouvrir `http://localhost:8000`.
6. Se connecter avec le compte de recette indiqué par le script et le fichier README du kit.
7. Activer le thème ATHENEE, puis ouvrir `/local/athenee/setup.php` et `/local/athenee/import_manuals.php`.
8. Terminer par `/local/athenee/health.php` pour la recette.

## Arrêt

Exécuter `bash stop-athenee-test.sh` dans le même dossier.

## Sécurité

Les identifiants du kit Docker sont **uniquement des identifiants de recette locale**. Ils ne doivent jamais être utilisés sur le futur site public. Les codes d'activation, serials et secrets de production restent dans le paquet administrateur privé.

## Ce que ce test ne remplace pas

La recette locale confirme le fonctionnement Moodle dans un environnement conteneurisé. Le serveur public final doit encore être testé avec son domaine HTTPS, son cron, le Web App Google Apps Script et la clé d'API IA réellement retenue.
