<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_ldap', language 'pt_br', version '3.11'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Não foi possível criar uma nova conta no Active Directory. Certifique-se que todos os requerimentos foram verificados (conexão LDAPS, atribuições de privilégios aos usuários, etc.)';
$string['auth_ldap_attrcreators'] = 'Lista de grupos ou contextos cujos membros podem criar atributos. Separar mais de um grupo com \';\'. Geralmente algo como \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Atribuir criadores';
$string['auth_ldap_auth_user_create_key'] = 'Criar usuários externamente';
$string['auth_ldap_bind_dn'] = 'Para usar o bind-user para procurar usuários, especifique o parâmetro aqui. Algo como \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Nome distinto';
$string['auth_ldap_bind_pw'] = 'Senha para o bind-user.';
$string['auth_ldap_bind_pw_key'] = 'Senha';
$string['auth_ldap_bind_settings'] = 'Configurações bind';
$string['auth_ldap_changepasswordurl_key'] = 'Página de mudança de senha';
$string['auth_ldap_contexts'] = 'Lista dos contextos onde os usuários estão localizados. Separe contextos diferentes com \';\'. Por exemplo: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Contextos';
$string['auth_ldap_create_context'] = 'Se você ativar a confirmação via correio eletrônico para a criação de usuário, indique o contexto em que os usuários são criados. Este contexto deve ser diverso de outros usuários para evitar problemas de segurança. Você não precisa adicionar este contexto ao ldap_context-variable, isto vai ser feito automaticamente.';
$string['auth_ldap_create_context_key'] = 'Contexto para novos usuários';
$string['auth_ldap_create_error'] = 'Erro ao criar usuário em LDAP.';
$string['auth_ldap_expiration_desc'] = 'Selecione \'{$a->no}\' para desabilitar a verificação de senha expirada ou \'{$a->ldapserver}\' para ler o tempo de expiração da senha diretamente do servidor LDAP';
$string['auth_ldap_expiration_key'] = 'Expiração';
$string['auth_ldap_expiration_warning_desc'] = 'Número de dias antes que o aviso de expiração da senha seja enviado.';
$string['auth_ldap_expiration_warning_key'] = 'Aviso de expiração';
$string['auth_ldap_expireattr_desc'] = 'Opcional: sobrepõe o atributo LDAP que armazena a data de expiração da senha';
$string['auth_ldap_expireattr_key'] = 'Atributo de expiração';
$string['auth_ldap_graceattr_desc'] = 'Opcional: Sobrepor atributo "grace login"';
$string['auth_ldap_gracelogin_key'] = 'Atributo do gracelogin';
$string['auth_ldap_gracelogins_desc'] = 'Ativa o suporte a LDAP gracelogin. Depois que a senha estiver expirada, o usuário poderá fazer o login enquanto a contagem do gracelogin não for igual a 0. Uma mensagem será visualizada quando a senha expirar.';
$string['auth_ldap_gracelogins_key'] = 'Gracelogins';
$string['auth_ldap_groupecreators'] = 'Lista dos grupos em que os membros tem permissão para criar novos grupos. Separe os grupos com \';\'. Por exemplo \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'Criadores de grupos';
$string['auth_ldap_host_url'] = 'Especifique o servidor LDAP usando o URL como \'ldap://ldap.myorg.com/\' ou \'ldaps://ldap.myorg.com/\' . Separe vários servidores com \';\' para ter suporte à "failover".';
$string['auth_ldap_host_url_key'] = 'URL do host';
$string['auth_ldap_ldap_encoding'] = 'A Codificação usada pelo servidor LDAP, provavelmente utf-8. Se LDAP v2 for selecionado, o Active Directory (AD) utiliza a codificação configurada, como cp1252 ou cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'Codificação LDAP';
$string['auth_ldap_login_settings'] = 'Configurações de login';
$string['auth_ldap_memberattribute'] = 'Especifique o atributo do usuário quando pertence a um grupo. Normalmente o atributo é \'membro\'';
$string['auth_ldap_memberattribute_isdn'] = 'Opcional: Sobrepõe o valor dos atributos dos membros, ou 0 ou 1.';
$string['auth_ldap_memberattribute_isdn_key'] = 'O atributo do membro usa dn';
$string['auth_ldap_memberattribute_key'] = 'Atributo de membro';
$string['auth_ldap_no_mbstring'] = 'Você precisa da extensão mbstring para criar usuários no Active Directory.';
$string['auth_ldap_noconnect'] = 'LDAP - O módulo não conseguiu se conectar no servidor: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP - O módulo não conseguiu se conectar nos servidores: {$a}';
$string['auth_ldap_noextension'] = 'O módulo LDAP para o PHP parece não estar presente. Por favor, certifique-se que ele está instalado e habilitado se você quiser usar este plugin de autenticação.';
$string['auth_ldap_objectclass'] = 'Opcional: Sobrescreve objectClass usado para nomear/procurar usuários em ldap_user_type. Geralmente, você não precisa alterar isto.';
$string['auth_ldap_objectclass_key'] = 'Classe do objeto';
$string['auth_ldap_opt_deref'] = 'Determina como os aliases são tratados durante a busca. Escolha um dos seguintes valores:
"Não" (LDAP_DEREF_NEVER) or "Sim" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Atalhos de referenciamento';
$string['auth_ldap_passtype'] = 'Especifique o formato das senhas criadas e alteradas no servidor LDAP.';
$string['auth_ldap_passtype_key'] = 'Formato de senha';
$string['auth_ldap_passwdexpire_settings'] = 'Configurações de expiração da senha LDAP';
$string['auth_ldap_preventpassindb'] = 'Selecionar SIM para impedir que as senhas sejam arquivadas no DB do Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Impedir o armazenamento em cache de senha';
$string['auth_ldap_rolecontext'] = 'Contexto {$a->localname}';
$string['auth_ldap_rolecontext_help'] = 'Contexto LDAP usado para selecionar o mapeamento de <i>{$a->localname}</i>. Separe múltiplos grupos com ";" . Geralmente algo como "cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with-role-groups,o=myorg".';
$string['auth_ldap_search_sub'] = 'Inserir valor <> 0 se quiser procurar usuários nos sub-contextos.';
$string['auth_ldap_search_sub_key'] = 'Procurar por subcontextos';
$string['auth_ldap_server_settings'] = 'Configurações do servidor LDAP';
$string['auth_ldap_suspended_attribute'] = 'Opcional: Quando fornecido, este atributo será utilizado para ativar/suspender a conta de usuário criada localmente.';
$string['auth_ldap_suspended_attribute_key'] = 'Atributo suspenso';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() não suporta o tipo de usuário (usertype) selecionado: {$a}';
$string['auth_ldap_update_userinfo'] = 'Atualizar os dados dos usuários (nome, sobrenome, endereço...) a partir do LDAP. Para informação sobre o mapeamento consulte /auth/ldap/attr_mappings.php';
$string['auth_ldap_user_attribute'] = 'O atributo usado para nomear/procurar usuários. Geralmente \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Atributo de usuário';
$string['auth_ldap_user_exists'] = 'Usuário LDAP já existe.';
$string['auth_ldap_user_settings'] = 'Configurações de busca de usuário';
$string['auth_ldap_user_type'] = 'Selecione como os são armazenados no LDAP. Esta configuração define também como a expiração do login, logins extras e criação de usuários funcionarão.';
$string['auth_ldap_user_type_key'] = 'Tipo de usuário';
$string['auth_ldap_usertypeundefined'] = 'config.user_type não foi definido ou a função ldap_expirationtime2unix não suporta o tipo escolhido!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type não foi definido ou a função ldap_unixi2expirationtime não suporta o tipo escolhido!';
$string['auth_ldap_version'] = 'A versão do protocolo LDAP que o seu servidor usa.';
$string['auth_ldap_version_key'] = 'Versão';
$string['auth_ldapdescription'] = 'Este método faz a autenticação em um servidor LDAP externo. Se o usuário e a senha informados forem válidos, o Moodle cria um novo registro de usuário na sua base de dados. Este módulo pode ler atributos do usuário a partir do LDAP e preencher os valores desejados no Moodle. Nos logins seguintes serão verificados apenas o nome de usuário e a senha.

Este método fornece autenticação em um servidor LDAP externo. Se o nome de usuário e a senha fornecidos forem válidos, o Moodle cria um novo registro de usuário em seu banco de dados. Este plugin pode ler os atributos do usuário no LDAP e preencher previamente os campos desejados no Moodle. Nos acessos  seguintes serão verificados apenas o nome de usuário e a senha.';
$string['auth_ldapextrafields'] = 'Estes campos são opcionais. É possível optar por preencher campos de usuários com informação de <b>campos LDAP</b> especificados aqui.<br />Deixando estes campos em branco, serão usados valores predefinidos.<br />Nos dois casos, o usuário poderá editar todos estes campos quando tiver entrado no sistema.';
$string['auth_ldapnotinstalled'] = 'Não foi possível usar a autenticação LDAP. O módulo LDAP do PHP não foi instalado.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Marque sim para tentar Single Sign On (login único) com o domínio NTLM.
Observe que isso requer configurações adicionais no servidor web para funcionar. Para mais detalhes, veja a documentação em <a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Ativar';
$string['auth_ntlmsso_ie_fastpath'] = 'Defina como “Sim” para habilitar o caminho rápido NTLM  SSO (ignora certos passos se o navegador do cliente é o MS Internet Explorer)';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Tentar NTLM em todos os navegadores';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Caminho mais rápido para o MS IE?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Sim, tentar NTLM com outros navegadores';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Sim, todos os outros navegadores usam formulário padrão de login';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Não foi possível extrair o nome do usuário a partir do cabeçalho REMOTE_USER. É o formato configurado certo?';
$string['auth_ntlmsso_missing_username'] = 'É necessário especificar pelo menos %username% no formato de identificação de usuário remoto';
$string['auth_ntlmsso_remoteuserformat'] = 'Se você escolheu \'NTLM\' em \'Tipo de autenticação\', você pode especificar o formato de nome de usuário remoto aqui. Se você deixar em branco, o formato padrão DOMAIN\\username será utilizado. Você pode utilizar a opção<b>%domínio%</b> no espaço reservado para especificar onde o nome de domínio aparece, e o obrigatório <b>%username%</b> no espaço reservado para especificar onde o nome de usuário aparece. <br /><br /> Alguns formatos utilizados são <tt>de domínio%%% username%</tt> (MS padrão do <tt>Windows),% domínio% /% username%,% domínio% +% username% e% username%</tt> apenas (se não há nenhuma parte do domínio).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Formato do nome de usuário remoto';
$string['auth_ntlmsso_subnet'] = 'Se marcado, só haverá tentativas de SSO com clientes nessa sub-rede. Formato: xxx.xxx.xxx.xxx/bitmask. Separe múltiplas sub-redes com \',\' (vírgula).';
$string['auth_ntlmsso_subnet_key'] = 'Subnet';
$string['auth_ntlmsso_type'] = 'O método de autenticação configurado no servidor web para autenticar os usuários (na dúvida, escolha NTLM)';
$string['auth_ntlmsso_type_key'] = 'Tipo de autenticação';
$string['cannotmaprole'] = 'O papel "{$a->rolename}" não pode ser mapeado em função do seu nome curto "{$a->shortname}" ser muito longo e/ou conter hífen. Para permitir que ele seja mapeado, seu nome curto precisa ser reduzido ao máximo de {$a->charlimit} caracteres e ter todos os hífens excluídos. <a href="{$a->link}">Editar o papel</a>';
$string['connectingldap'] = 'Conectando ao servidor LDAP...';
$string['connectingldapsuccess'] = 'A conexão ao servidor LDAP foi bem sucedida';
$string['creatingtemptable'] = 'Criando tabela temporária {$a}';
$string['diag_contextnotfound'] = 'O contexto {$a} não existe ou não pode ser lido pelo bine DN.';
$string['diag_emptycontext'] = 'Contexto vazio encontrado.';
$string['diag_genericerror'] = 'Erro de LDAP {$a->code} lendo {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'Grupo {$a->group} para papel {$a->localname} não existe ou não pode ser lido pelo DN de ligação.';
$string['diag_toooldversion'] = 'É muito improvável que um servidor LDAP moderno  utilize o protocolo LDAPv2. Configurações incorretas podem corromper valores nos campos do usuário. Verifique com seu administrador LDAP.';
$string['didntfindexpiretime'] = 'password_expire() não encontrou o tempo de expiração.';
$string['didntgetusersfromldap'] = 'Nenhum usuário obtido do LDAP -- erro? -- saindo';
$string['gotcountrecordsfromldap'] = 'Adquiridos {$a} registros do LDAP';
$string['ldapnotconfigured'] = 'O URL do host LDAP atualmente não está configurado';
$string['morethanoneuser'] = 'Mais de um registro de usuário encontrado no ldap. Somente o primeiro será utilizado.';
$string['needbcmath'] = 'Você precisa da extensão BCMath para usar a verificação de senhas expiradas com Active Directory.';
$string['needmbstring'] = 'Você precisa da extensão mbstring para alterar senhas no Active Directory';
$string['nodnforusername'] = 'Erro no user_update_password(). Nenhum DN para: {$a->username}';
$string['noemail'] = 'A tentativa de lhe enviar um email falhou!';
$string['notcalledfromserver'] = 'Não deve ser rodada a partir do servidor Web.';
$string['noupdatestobedone'] = 'Nenhuma atualização a ser feita';
$string['nouserentriestoremove'] = 'Nenhuma entrada de usuário a ser removida';
$string['nouserentriestorevive'] = 'Não há entradas do usuário a serem renovadas.';
$string['nouserstobeadded'] = 'Nenhuma entrada de usuário a ser adicionada';
$string['ntlmsso_attempting'] = 'Tentando inscrição única via NTLM...';
$string['ntlmsso_failed'] = 'O login automático falhou, tente pela página normal...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO está desativado.';
$string['ntlmsso_unknowntype'] = 'Tipo de ntlmsso desconhecido!';
$string['pagedresultsnotsupp'] = 'Os resultados paginados LDAP não são suportados (sua versão PHP não possui suporte ou você configurou o Moodle para usar o protocolo LDAP versão 2 ou ainda o Moodle não pode entrar em contato com o servidor LDAP para ver se o suporte paginado está disponível).';
$string['pagesize'] = 'Certifique-se este valor é menor do que o seu servidor LDAP resultado limite tamanho do conjunto (o número máximo de entradas que podem ser devolvidos em uma única consulta)';
$string['pagesize_key'] = 'Tamanho da página';
$string['pluginname'] = 'LDAP';
$string['pluginnotenabled'] = 'Plugin não está habilitado!';
$string['privacy:metadata'] = 'O plugin de autenticação do servidor LDAP não armazena nenhum dado pessoal.';
$string['renamingnotallowed'] = 'Renomear usuário não é permitido no LDAP';
$string['rootdseerror'] = 'Erro consultando rootDSE do Active Directory';
$string['start_tls'] = 'Usar o serviço LDAP regular (porta 389) com criptografia TLS';
$string['start_tls_key'] = 'Use TLS';
$string['syncroles'] = 'Sincronizar papéis do sistema a partir do LDAP';
$string['synctask'] = 'Trabalho de sincronização dos usuários LDAP';
$string['systemrolemapping'] = 'Mapeamento de papéis do sistema';
$string['updatepasserror'] = 'Erro no user_update_password(). Código de erro: {$a->errno}; String do erro: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Erro em user_update_password () ao ler tempo de expiração de senha. Código de erro: {$a->errno}; string de erro: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Erro em user_update_password () ao modificar tempo de expiração e/ou gracelogins. Código de erro: {$a->errno}; Mensagem de erro: {$a->errstring}';
$string['updateremfail'] = 'Erro ao atualizar registro LDAP. Código de erro: {$a->errno}; string de erro: {$a->errstring}<br/>Chave ({$a->key}) - valor moodle antigo: \'{$a->ouvalue}\'  novo valor: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'Falha ao atualizar o LDAP com o campo ambíguo {$a->key}; valor moodle antigo: {$a->ouvalue}\', novo valor: \'{$a->nuvalue}\'';
$string['updateremfailfield'] = 'Falha ao atualizar o LDAP com o campo inexistente (\'{$a->ldapkey}\'). Chave ({$a->chave}) - antigo valor do Moodle: \'{$a->ouvalue}\' novo valor: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'Não foi possível encontrar o usuário durante a atualização externa. Detalhes a seguir: base de pesquisa: \'{$a->userdn}\'; filtro de pesquisa: \'(objectClass=*)\'; atributos de pesquisa: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() não suporta o tipo de usuário (usertype) selecionado: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() não suporta o tipo de usuário (usertype) selecionado: {$a}';
$string['useracctctrlerror'] = 'Erro ao obter userAccountControl para {$a}';
$string['userentriestoadd'] = 'Entradas de usuário a serem adicionadas: {$a}';
$string['userentriestoremove'] = 'Entradas de usuário a serem removidas: {$a}';
$string['userentriestorevive'] = 'Entradas de usuário a serem reativadas: {$a}';
$string['userentriestoupdate'] = 'Entradas de usuário a serem atualizadas: {$a}';
$string['usernotfound'] = 'Usuário não encontrado no LDAP';
