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

## Utilizando o template de questão para PostgreSQL

1. Definir o tipo de questão como sendo python3
2. Configurar a questão para template de usuário, informando um nome especifico para o novo tipo de questão. Cuidado para não utilizar nomes já disponíveis.
3. No trecho abaixo, informar os dados de conexão ao servidor nos campos *user*, *password*, *port* e *host*.
```python
    conn = CodeRunnerPG(
        "dbname={{database}} user= <informar usuário> password=<informar senha> port=5432 host=postgres-coderunner")
```

4. Nas questões que irão utilizar o novo template, no campo *Template params*, informar as configurações específicas:
   1. **database**: Nome da base
   2. **queryType**: SELECT, UPDATE, INSERT, DELETE, DDL e PLSQL (este último pode ser utilizado para comandos DDL que requerem validação).
   3. **randomSchema**: A resposta do usuário será criada em um schema aleatório
   4. **required_commands**: Lista de comandos exigidos pela questão na resposta.

```json
{
	"database": "lbdi_minimercado_db",
	"queryType": "PLSQL",
	"randomSchema": "False",
	"required_commands": [
	    
	]
}

```
5. Para a execução de blocos anônimos cuja resposta baseia-se na saída de raise notice,
substituir pela chamada ao procedimento `moodle.p_message`. Tal recurso pode ser usado em qualquer questão que tenha código de validação específico.

```sql

create schema moodle;

create unlogged table moodle.event_messages(
	id bigserial not null primary key,
	message text
);

create or replace procedure moodle.p_message(p_message text) as
$$
begin
	insert into moodle.event_messages(message) values (p_message);
end;
$$ language plpgsql;

```
## Utilizando o template de questão para JavaScript

1. Definir o tipo de questão como sendo nodejs
2. Configurar a questão para template de usuário, informando um nome especifico para o novo tipo de questão. Cuidado para não utilizar nomes já disponíveis.
3. Escolher o novo template criado na lista de tipos quando for criar novas questões.

## Referências

[Projeto Coderunner](https://coderunner.org.nz/)
[Jobeinabox](https://github.com/trampgeek/jobeinabox)
[Arangodb](https://www.arangodb.com/)
[Postgres](https://www.postgresql.org/)
[PGAdmin Web](https://www.pgadmin.org/)