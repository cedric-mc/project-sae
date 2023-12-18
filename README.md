# project-sae
## Cédric Mariya Constantine
### Consignes :

1. création d'un compte => confirmation/email
2. connexion au compte (session) => envoi email connexion
3. récupération d'un compte => confirmation/email
4. déconnexion de la session
5. journalisation de l'ensemble des actions ci-dessus dans la base de données

Prendre par ailleurs en compte le guide de l'équipe de développement de la CNIL => https://lincnil.github.io/Guide-RGPD-du-developpeur/
Regardez en particulier pour le chiffrement du mot de passe, la journalisation, le temps de conservation des données, ...

Pour l'envoi des emails, ne pas utiliser la fonction mail() de php mais une librairie comme PhpMailer() => https://github.com/PHPMailer/PHPMailer

Pensez également à :
partager votre dépôt avec moi
commiter/pousser régulièrement votre code sur votre dépôt
