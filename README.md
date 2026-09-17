# ATHENEE — Plateforme de formation des professeurs de philosophie de Côte d’Ivoire

ATHENEE est un dispositif Moodle de formation continue construit pour huit modules d’autoformation destinés aux professeurs de philosophie de Côte d’Ivoire.

## Architecture pédagogique

Le parcours comporte 8 modules :

1. **Exercer le métier avec justesse et intégrité**
2. **Communiquer et grandir dans le métier**
3. **Comprendre et accompagner l’adolescent**
4. **Du curriculum à l’APC : planifier les apprentissages**
5. **Maîtriser la philosophie pour faire philosopher**
6. **Concevoir une séquence qui donne à penser**
7. **Animer une classe qui pense**
8. **Tracer, évaluer et faire progresser**

Chaque module suit une logique commune : activation → tutoriel → prétest → ressources et séquences → assistant IA de compréhension → post-test → badge.

Après les huit badges, une évaluation finale distincte est activée : **16 tests objectifs + 4 cas pratiques, 60 minutes**, avec correction automatique des tests, correction IA sur grille pour les cas lorsque l’API est configurée, et possibilité de validation humaine. Une attestation vérifiable est générée après réussite.

## Sécurité et activation

- première activation obligatoirement en ligne ;
- 1000 serials uniques de 15 caractères, associés à une installation et un compte ;
- code distinct de 5 caractères pour chaque module ;
- code spécifique pour l’évaluation finale ;
- PDF apprenants stockés hors du webroot Moodle ;
- corrigés absents des PDF apprenants ;
- secrets, serials, codes, banques de réponses et documents protégés **non publiés dans ce dépôt**.

## Composants

- thème Moodle `theme_athenee` ;
- plugin local `local_athenee` ;
- service d’activation Supabase ;
- synchronisation Google Sheets ;
- assistant IA optionnel côté serveur ;
- badge par module et attestation finale ;
- espace Concours national du meilleur professeur de philosophie 2026-2027.

## Dépôt public

Ce dépôt est volontairement limité au code et à la documentation pouvant être rendus publics. Les éléments suivants restent dans le pack administrateur privé :

- serials et codes d’activation ;
- secrets Supabase et Google Sheets ;
- clés API IA ;
- banque de réponses protégée ;
- PDF apprenants et ressources sous contrôle d’accès.

Voir `SECURITY.md` et `docs/DEPLOYMENT.md`.

## Liens communautaires

- WhatsApp ATHENEE : https://chat.whatsapp.com/BztGG7KUGhI8CXYp6xdVmB
- Jitsi Meet : https://meet.jit.si/ATHENEE-Formation_profs

## Auteur et concepteur

**ÉBOULÉ Miézan** — encadreur pédagogique de philosophie, technopédagogue et auteur de ressources de formation.

Projet 2026-2027 — Côte d’Ivoire.
