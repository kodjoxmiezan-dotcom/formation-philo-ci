# Architecture ATHENEE v2

## 1. Couche Moodle

### `theme_athenee`
Page d’accueil ATHENEE : identité visuelle orange-blanc-vert, auteur discret, accès aux huit modules, WhatsApp, Jitsi, concours et partenaires. Les cartes de cours utilisent les images d’accueil réelles des huit manuels.

### `local_athenee`
Plugin métier :
- activation plateforme ;
- codes des modules ;
- tutoriel ;
- accès protégé aux PDF ;
- prétests/post-tests ;
- badges ;
- assistant IA ;
- progression ;
- évaluation finale chronométrée ;
- correction IA et validation humaine ;
- attestation et vérification ;
- synchronisation Google Sheets ;
- diagnostic administrateur.

## 2. Couche d’activation

Supabase conserve les empreintes des serials de 15 caractères et des codes de 5 caractères. Le navigateur ne reçoit jamais la liste des codes. Une Edge Function valide les demandes émises par le serveur Moodle.

Flux :

`serial → première activation en ligne → installation liée → compte Moodle → code module → scope débloqué`

## 3. Protection des manuels

Les versions apprenant sont des PDF sans corrigés. Elles sont importées dans `moodledata/local_athenee/manuals` et ne disposent d’aucune URL statique publique. Le téléchargement passe par un contrôleur PHP qui vérifie l’utilisateur et le scope activé.

## 4. Assistant IA

Chaque module dispose d’une base de connaissances liée à son manuel. L’assistant est conçu pour expliquer et reformuler, non pour livrer les réponses des évaluations. Il est indisponible pendant l’évaluation finale.

## 5. Évaluation finale

- code d’activation indépendant ;
- accès après obtention des 8 badges ;
- 16 tests objectifs ;
- 4 cas pratiques ;
- 60 minutes contrôlées côté serveur ;
- soumission automatique à échéance ;
- score objectif automatique ;
- score des cas sur grille, par IA si configurée ;
- révision humaine possible ;
- attestation après réussite.

## 6. Données et suivi

Les événements sont journalisés dans Moodle puis synchronisés avec le classeur Google Sheets ATHENEE : progression, notes de modules, évaluation finale et concours. Une file de reprise évite de perdre les événements lors d’une coupure réseau.

## 7. Concours

Le concours national 2026-2027 exploite les résultats de formation, mais un classement définitif doit reposer sur des résultats validés. Le seuil de 13/20 sert à l’éligibilité à la récompense annoncée ; il reste distinct du seuil pédagogique de réussite configuré pour l’attestation.
