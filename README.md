# Stack Coderunner by Moodle
Este projeto inclui um stack de ferramentas úteis para utilização do plugin de tipo de questão Moodle chamado 
[Coderunner](https://moodle.org/plugins/qtype_coderunner). Com essa pilha, além dos desenvolvedores poderem validar novas libs, o próprio professor pode subir um ambiente local, com baixa latência, para elaborar as questões que posteriormente poderiam ser importadas para o Moodle da instituição.

## Itens da stack
- [x] Aplicação Moodle (ref. [Bitnami](https://hub.docker.com/r/bitnami/moodle/)) com database MariaDB (disponível em [https://localhost/](https://localhost/))
- [x] Instância de banco de dados Postgres com web PGAdmin (disponível em [http://localhost:16543/](http://localhost:16543/))
- [x] Intância de banco ArangoDB(inclui webconsole) (disponível em [http://localhost:8529/](http://localhost:8529/))
- [x] Instância da sandbox JobeServer ( disponível em [http://localhost:4000/jobe/index.php/restapi/languages](http://localhost:4000/jobe/index.php/restapi/languages))


> As credenciais de acesso são definidas no env_file .env disponível na raíz do projeto.

> O usuário de acesso padrão do Moodle **usuário=user**, **senha=bitnami**

## Para subir a stack
Para subir a stack é necessário ter pré-instalados o Docker e Docker-Compose. Baixar o projeto e executar o comando dentro da raiz:

```shell
docker-compose up -d
```
> Pode ser necessário dar permissão de escrita no diretório mariadb que será criado

Para visualizar os logs do docker-compose, execute:
```shell
docker-compose logs -f
```