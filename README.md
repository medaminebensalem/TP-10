<h1>Exercice 1</h1>
 - la page validation.php est la page appelée lors du traitement du formulaire par login.php son rôle est
de vérifier que les logins et mots de passe sont corrects. Pour cela, vous ferez appel à un fichier
config.php à l'aide de l'instruction require. Le fichier config.php contient les instructions suivantes :
<?php define(USERLOGIN', 'itisme') ; define('USERPASS', 'justme') ; ?>
 Si la page validation.php détecte que le login ou le mot de passe est vide, elle renvoie vers la
page login.php avec un code erreur – (Exemple le numero 1)
 Si la page validation détecte une erreur du login ou du mot de passe, elle renvoie vers la page
login.php avec un autre code erreur – (Exemple le numero 2)
 Si la page validation constate que le login et le mot de passe sont bons, elle redirige vers la
page accueil.php
La page login.php affichera donc un message adapté en fonction de l'erreur appelée
 Erreur 1 : Veuillez saisir un login et un mot de passe
 Erreur 2 : Erreur de login/mot de passe- la page accueil.php affiche juste le texte « Hello »
Etape 2 :
Essayez de taper directement l'URL de la page accueil.php. ...que constatez vous ?
Nous allons donc essayer d'améliorer la technique grâce à des sessions Pour cela, rajoutez du code
dans votre page validation.php
Dans le cas où votre page validation a trouvé une bonne combinaison de connexion, ouvrez une
session et créer une variable de nom CONNECT et de valeur OK, stocker également le login et le mot
de passe saisie dans la session.
Modifiez votre page accueil.php en déclarant l'ouverture de la session. Votre page accueil.php devra
faire afficher « Hello itisme » quand on y accède.
Etape 3 :
Modifiez encore un peu cette page et rajoutez en haut de la page le code nécessaire pour que si
CONNECT ne vaut pas OK, vous redirigiez l'utilisateur vers la page login.php.
Essayez donc de vous logger directement sur la page accueil.php, que constatez-vous ?
Modifiez encore une fois votre page accueil.php pour faire afficher un lien hypertexte écrit «
Deconnexion » (On passera dans l'URL la variable afaire=deconnexion). Quand l'utilisateur cliquera
sur ce lien, cela l'amènera vers la page validation.php. Ce script testera la valeur de « afaire », si cette
variable vaut « deconnexion », on détruira la session et on redirigera avec le code d'erreur 3 vers la
page login.php
Modifiez enfin votre page login.php pour qu'elle affiche ce message en cas d'erreur 3 : « Vous avez été
déconnecté du service ».
<h1>Exercice 2</h1>
On souhaite développer une application qui permet à l'utilisateur d'effectuer les différentes opérations
CRUD sur la table "exercice": exercice (id , titre, auteur, date_creation)
<h1>Exercice 3</h1>
L’objectif de cet exercice est de créer un mini jeu de combat. Il s’agit de mettre en place
d’abord une conception en termes de classes à créer et de tables à créer puis de coder les
scripts nécessaires pour jouer un tour avec ce jeu (un tour est joué avec deux guerriers).
Chaque visiteur pourra créer un guerrier avec lequel il pourra frapper d’autres guerriers. Le
guerrier frappé se verra infliger un certain degré de dégâts.
Un guerrier est défini selon 2 caractéristiques :
— Son nom (unique).
— Ses dégâts.
Les dégâts d’un guerrier sont compris entre 0 et 100. Au début, il a bien entendu 0 de dégât.
Chaque coup qui lui sera porté lui fera prendre 5 points de dégâts. Une fois arrivé à 100 points
de dégâts, le personnage est mort (on le supprimera alors de la base de données).
Un personnage doit pouvoir :
—Frapper un autre personnage ;
—recevoir des dégâts.



