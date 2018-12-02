# bd-populado

Esse projeto esta com as migrations e seeders prontos para gerar um numero gigantesco de dados no bd.
A ideia foi criar um projeto para consumir dados massivos a fim de ter grande produtividade na hora de desenvolver layouts no frontend.
Para usa-lo basta gerar o rodar o comando:

php artisan migrate

no arquivo database/seeders/databaseSeeder vc descomenta o que quer criar

php artisan db:seed

e pronto. Você terá um banco de dados com varios Fakers.
