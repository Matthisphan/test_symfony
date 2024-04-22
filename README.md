- installer xampp : https://sourceforge.net/projects/xampp/
      aller sur php.init dans C:\xampp\php
          désargumenter :
                extension=zip (l-962)
                extension=pdo_pgsql (l-947)
                extension=pgsql (l-949)

- lancer apache dans le xampp control panel
  
- installer composer : https://getcomposer.org/download/
      ignorer le mode développeur et continuer l'installation

-installer postgresql : https://www.enterprisedb.com/downloads/postgres-postgresql-downloads
      aller dans file > preferences > Paths > binary paths et ajouter "C:\Program Files\PostgreSQL\16\bin" à EDB Advanced Server 16 et à PostgreSQL 16, Set as default.
      créer une base de donnée "bdd_test_symfony"
      restaurer la bdd

- extraire le projet du rar

- aller dans .env et changer DATABASE_URL="pgsql://postgres:postgreadmin@127.0.0.1:5432/bdd_test_symfony" par DATABASE_URL="pgsql://postgres:VOTRE_MOT_DE_PASSE@127.0.0.1:5432/bdd_test_symfony"

- supprimer composer.lock et le dossier vendor

- composer clear-cache

- composer install

- symfony server:start

- http://127.0.0.1:8000/login

- email : admin@gmail.com
- mdp : admin

- http://127.0.0.1:8000/admin
      la gestion des notes et l'ajout des étudiants

- http://127.0.0.1:8000 l'affichage des étudiants et leur moyenne dans un tableau responsive.
