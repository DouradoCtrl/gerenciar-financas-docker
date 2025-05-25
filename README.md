<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Tecnologias
- Laravel v12.x
- PHP v8.4.x
- MySQL v8.1.x (default)
- Mailpit v1.x
- Node.js v18.x
- NPM v10.x
- Redis v7.2.x
- Swagger UI
- Docker

# Descrição
Essa aplicação é dedicar para um construção de uma API que realizar operações básicas de CRUD como: Atualizar, Remover, Criar e Deletar. Além de realizar uma consulta individual de cada registro.

# Como instalar
**Obs:** Como pré-requisito precisa de ter o docker e docker compose instalado.

- `git clone https://github.com/refactorian/laravel-docker.git`
- `cd laravel-docker`
- `docker compose up -d --build`
- `docker compose exec -it [container] bash`

# Imagens

![Imagem da aplicação](imagens/swagger01.png)
![Imagem da aplicação](imagens/swagger02.png)
<!-- Substitua o caminho acima pelo caminho real da sua imagem -->

### Laravel App
- URL: http://localhost

### Mailpit
- URL: http://localhost:8025

### Swagger UI
- URL: http://localhost:8090

### Adminer
- URL: http://localhost:9090
- Server: `db`
- Username: `refactorian`
- Password: `refactorian`
- Database: `refactorian`

### Basic docker compose commands
- Build or rebuild services
    - `docker compose build`
- Create and start containers
    - `docker compose up -d`
- Stop and remove containers, networks
    - `docker compose down`
- Stop all services
    - `docker compose stop`
- Restart service containers
    - `docker compose restart`
- Run a command inside a container
    - `docker compose exec [container] [command]`

### Useful Laravel Commands
- Display basic information about your application
    - `php artisan about`
- Remover o arquivo de cache de configuração
    - `php artisan config:clear`
- Limpar o cache da aplicação
    - `php artisan cache:clear`
- Limpar todos os eventos e listeners em cache
    - `php artisan event:clear`
- Excluir todos os jobs da fila especificada
    - `php artisan queue:clear`
- Remover o arquivo de cache de rotas
    - `php artisan route:clear`
- Limpar todos os arquivos de visualização compilados
    - `php artisan view:clear`
- Remover o arquivo de classe compilado
    - `php artisan clear-compiled`
- Remover os arquivos de bootstrap em cache
    - `php artisan optimize:clear`
- Excluir os arquivos mutex em cache criados pelo agendador
    - `php artisan schedule:clear-cache`
- Limpar tokens expirados de redefinição de senha
    - `php artisan auth:clear-resets`