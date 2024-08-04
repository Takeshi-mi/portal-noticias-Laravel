
# Setup Docker Laravel 11 com PHP 8.3
Portal Notícias Main.
Essa branch é a que eu estou trabalhando, caso você queira o projeto limpo criei outras branches para isso:
<img src="https://github.com/user-attachments/assets/53127274-d463-4924-855b-de5f162514b2" alt="branches" height="300" width="300"/>

- **crud base:** As operações básicas para monitorar as notícias funcionam e tem pouca estilização. (recomendável pra turma clonar)
- **Main:** A que eu estou trabalhando. Vou usar govDS (não recomendo que clone se quiser personalizar o seu)
- **laravel breeze:** Limpo e com Breeze configurado.
- **laravel ui:** alternativa ao Breeze. Breeze usa tailwind pra estilizar. laravel ui permite usar bootstrap, react e vue nativamente.
- **setup-docker:** caso queira iniciar um outro projeto do zero, comece por aqui.


### Passo a passo
Clone Repositório
```sh
git clone https://github.com/Takeshi-mi/portal-noticias-Laravel.git app-laravel
```
```sh
cd app-laravel
```

Suba os containers do projeto
```sh
docker-compose up -d
```


Crie o Arquivo .env
```sh
cp .env.example .env
```

Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

OPCIONAL: Gere o banco SQLite (caso não use o banco MySQL)
```sh
touch database/database.sqlite
```
O arquivo já está configurado para o MySQL

Rodar as migrations
```sh
php artisan migrate
```

Para rodar o Vite:
```sh
# De dentro do container:
npm run dev

# OU
# De fora do container:
docker compose exec npm run dev
```

Acesse o projeto
[http://localhost:8000](http://localhost:8000)

Caso queira encerrar o docker:
```sh
docker-compose down
```
