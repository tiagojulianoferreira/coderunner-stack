# Stack Coderunner by Moodle
Este projeto inclui um stack de ferramentas úteis para utilização do plugin de tipo de questão Moodle chamado 
[Coderunner](https://moodle.org/plugins/qtype_coderunner).

## Itens da stack
- [x] Aplicação Moodle
- [x] Instância de banco de dados Postgres
- [x] Ferramenta web PGAdmin
- [x] Intância de banco ArangoDB(inclui webconsole)
- [ ] Instância da sandbox JobeServer

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
## Credenciais de acesso
As credenciais de acesso são definidas no env_file .env disponível na raíz do projeto.

O usuário de acesso padrão da aplicação Moodle que será disponibilizada no endereço [https://localhost](https://localhost) são **usuário=user**, **senha=bitnami**
