## Terminal

# Permet de lancer le serveur
    symfony serve

# Permet de créer des fichiers
    symfony console make:controller NomDuFichier
ou
    symfony console m:con NomDuFichier

# DOCTRINE -> Base de données
Creer une BDD. Aller dans le fichier .env pour mettre à jour les données et choisir un nom de BDD
DATABASE_URL="mysql://root:GNTHrmn@127.0.0.1:3306/nomDeBDD?serverVersion=5.7"

    php bin/console doctrine:database:create

Entity -> Represente une table

    php bin/console make:entity
    php bin/console make:migration -> Mettre la BDD dans PHPmyAdmin
    php bin/console doctrine:migrations:migrate -> Migrer les élements dans la BDD

Manager -> Manipuler un enregistrement (Insertion, MaJ, Suppresion)

Repository -> Selection de données

# Permet de creer des fixtures

Installation du package
    composer require orm-fixtures --dev

Création de fixtures
    php bin/console make:fixtures
# Permet de vérifier la sécurité du site
    symfony security:check 

# Commentaire en twig
{# mettre ce que l'on veut ici #}