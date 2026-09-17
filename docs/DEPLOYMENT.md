# Déploiement ATHENEE v2

## Cible recommandée en septembre 2026

Pour une nouvelle installation de production, viser **Moodle 5.2.3** avec **PHP 8.3 ou 8.4**, HTTPS, cron actif et une base supportée par Moodle. Le plugin ATHENEE conserve un `requires` Moodle 4.4 afin de ne pas fermer inutilement la compatibilité, mais la recette finale doit être faite sur la version réellement retenue pour l'hébergement.

## Installation

1. Installer Moodle sur l'hébergement et terminer l'assistant Moodle en créant le compte administrateur propriétaire.
2. Installer `theme_athenee_v2.0.zip` puis `local_athenee_v2.0_PRIVATE.zip`.
3. Ouvrir **Administration du site > Notifications**, puis activer le thème ATHENEE.
4. Dans les réglages ATHENEE, renseigner la configuration privée Supabase et, après déploiement Apps Script, le webhook Google Sheets.
5. Ouvrir `/local/athenee/setup.php` pour créer/mettre à jour les 8 cours et leurs pages d'accueil/tutoriels.
6. Ouvrir `/local/athenee/import_manuals.php` et importer `ATHENEE_Manuels_Apprenants.zip` : les PDF sont copiés hors du webroot dans `moodledata/local_athenee/manuals`.
7. Ouvrir `/local/athenee/health.php` et résoudre tout contrôle non validé.
8. Ouvrir `/local/athenee/calendar.php` pour régler les fenêtres d'activation des modules et de l'évaluation finale.

## Activation

Première connexion obligatoirement en ligne. Le serial de 15 caractères est validé par Supabase et associé à l'utilisateur Moodle et à l'installation. Chaque module utilise ensuite son code distinct à 5 caractères. L'évaluation finale possède le scope `FINAL` et son propre code.

## Parcours apprenant

Activation plateforme → module → tutoriel → prétest → séquences + PDF sans corrigés → assistant IA → post-test → badge.

Après 8 badges : code FINAL → 16 tests objectifs + 4 cas pratiques → 60 minutes → correction → éventuelle validation humaine → attestation vérifiable.

## Google Sheets

Le classeur **ATHENEE - Suivi Progression Notes et Concours** existe déjà dans le dossier Drive ATHENEE. Déployer `Google_Apps_Script_Code.gs` comme **Application Web** exécutée par le propriétaire. Reporter ensuite l'URL se terminant par `/exec` dans le paramètre `sheetswebhook`. Le plugin conserve les événements localement tant qu'ils ne sont pas confirmés par le webhook.

## IA

Configurer endpoint, modèle et clé API uniquement côté serveur Moodle. L'assistant répond à partir des connaissances du module et reçoit une instruction explicite de ne pas fournir les réponses aux évaluations. Il est bloqué pendant l'évaluation finale. Sans API IA, les cas pratiques passent en validation humaine.

## Recette finale sur l'hébergement

- activation d'un serial de test ;
- rejet du même serial depuis une seconde installation ;
- déverrouillage du module M1 avec le code réel ;
- contrôle qu'un PDF n'est jamais accessible avant le scope M1 ;
- tutoriel, prétest, assistant, post-test et badge ;
- test de calendrier d'ouverture/fermeture ;
- obtention des 8 badges sur compte de recette ;
- activation FINAL ;
- contrôle 60 minutes + soumission automatique ;
- correction IA puis validation humaine d'un cas de recette ;
- attestation et URL de vérification ;
- remontée de chaque type d'événement dans Google Sheets ;
- test de cron et reprise après interruption réseau.
