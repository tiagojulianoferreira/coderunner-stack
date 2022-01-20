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
 * Strings for component 'auth_shibboleth', language 'pt_br', version '3.11'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Logotipo do método de autenticação';
$string['auth_shib_auth_logo_description'] = 'Forneça um logotipo para o método de autenticação Shibboleth que seja familiar aos seus usuários. Este logotipo poderia ser da sua federação Shibboleth, por exemplo, <tt>SWITCHaai Login</tt> ou <tt>InCommon Login</tt> ou similar.';
$string['auth_shib_auth_method'] = 'Nome do método de autenticação';
$string['auth_shib_auth_method_description'] = 'Forneça um nome para o método de autenticação Shibboleth que seja familiar aos usuários. Um exemplo poderia ser o nome da sua associação Shibboleth, por exemplo <tt>SWITCHaai Login</tt> ou <tt>InCommon Login</tt> ou similares.';
$string['auth_shib_changepasswordurl'] = 'Página de mudança de senha';
$string['auth_shib_contact_administrator'] = 'No caso de você não estão associadas com as organizações dadas e você precisa ter acesso a um curso sobre este servidor, por favor entre em contato com o <a href="mailto:{$a}">Administrador do Moodle</a> .';
$string['auth_shib_convert_data'] = 'API de modificação dos dados';
$string['auth_shib_convert_data_description'] = 'Você pode usar esta API para modificar os dados fornecidos pelo Shibboleth. Leia <a href="../auth/shibboleth/README.txt" target="_blank">README</a> para maiores detalhes.';
$string['auth_shib_convert_data_warning'] = 'Este campo não existe ou não é legível com o processo do servidor web!';
$string['auth_shib_idp_list'] = 'Provedores de identidade';
$string['auth_shib_idp_list_description'] = 'Fornece uma lista de provedores de identidade “entityIDs” para deixar o usuário escolher na página de login.<br />Em cada linha deve haver uma tupla separada por vírgula para “EntityID” do IdP (consulte o arquivo de metadados Shibboleth) e Nome do IdP como será exibido na lista drop-down.<br />Como um terceiro parâmetro opcional, você pode adicionar a localização de um iniciador da sessão Shibboleth que será utilizado no caso de sua instalação Moodle fazer parte de uma instalação multi federação.';
$string['auth_shib_instructions'] = 'Para acessar via Shibboleth use o <a href="{$a}">login Shibboleth</a>, se sua instituição tem suporte para isso. Caso contrário, utilize o formulário de login normal indicado aqui.';
$string['auth_shib_instructions_help'] = 'Explique o uso de Shibboleth aos seus usuários. Este texto será publicado na página de login. É necessário incluir um link a um recurso protegido pelo Shibboleth que faça o endereçamento a "<b>{$a}</b>" em modo que os usuários de Shibboleth possam fazer o login no Moodle. Deixando este campo vazio, serão utilizadas as instruções padrão.';
$string['auth_shib_instructions_key'] = 'Instruções de login';
$string['auth_shib_integrated_wayf'] = 'Serviço WAYF do Moodle';
$string['auth_shib_integrated_wayf_description'] = 'Se você habilitar isso, o Moodle usará seu próprio serviço WAYF em vez do configurado para Shibboleth. O Moodle exibirá uma lista suspensa nesta página de login alternativa onde o usuário deve selecionar seu Provedor de Identidade.';
$string['auth_shib_logout_return_url'] = 'URL de saída alternativa do logout';
$string['auth_shib_logout_return_url_description'] = 'Forneça a URL para a qual os usuários Shibboleth devem ser redirecionado após o logoff. <br /> Se deixado em branco, os usuários serão redirecionados para o local padrão de redirecionamento de usuários Moodle.';
$string['auth_shib_logout_url'] = 'URL de manipulação de "logout" do provedor de serviços Shibboleth.';
$string['auth_shib_logout_url_description'] = 'Forneça a URL para o manipulador de logout do provedor de serviços Shibboleth. Normalmente é <tt> / Shibboleth.sso / Logout </tt>';
$string['auth_shib_no_organizations_warning'] = 'Se quiser usar o serviço WAYF integrado, faça uma lista separada por vírgulas do entityIDSs do provedor de identificação, com seus nomes e opcionalmente um iniciador de sessão.';
$string['auth_shib_only'] = 'Apenas Shibboleth';
$string['auth_shib_only_description'] = 'Selecionar esta opção para utilizar uma autenticação Shibboleth';
$string['auth_shib_username_description'] = 'Nome da variável do servidor Shibboleth que deve ser usada come "username" no Moodle';
$string['auth_shibboleth_errormsg'] = 'Por favor, selecione a organização da qual você é membro.';
$string['auth_shibboleth_login'] = 'Login Shibboleth';
$string['auth_shibboleth_login_long'] = 'Logar-se ao Moodle através de Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Login manual';
$string['auth_shibboleth_select_member'] = 'Eu sou membro de...';
$string['auth_shibboleth_select_organization'] = 'Para autenticação via Shibboleth, por favor selecione sua organização na lista abaixo:';
$string['auth_shibbolethdescription'] = 'Usando esse método, os usuários são criados e autenticados usando o Shibboleth. Para detalhes de configuração, consulte o <a href="{$a}">README do Shibboleth</a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'O plugin de autenticação Shibboleth não armazena nenhum dado pessoal.';
$string['shib_invalid_account_error'] = 'Você parece ser Shibboleth autenticado mas Moodle não tem conta válida para o seu nome de usuário. Sua conta pode não existir ou pode ter sido suspenso.';
$string['shib_no_attributes_error'] = 'Você usa autenticação Shibboleth mas o Moodle não recebeu os atributos do usuário. Controle o provedor da Identidade para a comunicação dos atributos ({$a}) necessários, ao provedor em que Moodle está instalado ou informe o webmaster deste servidor.';
$string['shib_not_all_attributes_error'] = 'O Moodle precisa de alguns atributos Shibboleth que não foram fornecidos no seu caso. Os atributos são: {$a}<br /> Contate o webmaster deste servidor ou o Provedor da sua Identidade.';
$string['shib_not_set_up_error'] = 'A autenticação Shibboleth não está configurada corretamente pois as variáveis de ambiente não estão presentes nesta página. Por favor, consulte o <a href="README.txt">README</a> para mais instruções sobre como configurar a autenticação Shibboleth ou entre em contato com o webmaster desta instalação do Moodle.';
