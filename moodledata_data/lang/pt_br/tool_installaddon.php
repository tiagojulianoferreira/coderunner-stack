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
 * Strings for component 'tool_installaddon', language 'pt_br', version '3.11'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Reconhecimento';
$string['acknowledgementtext'] = 'Eu entendo que é minha responsabilidade ter backups completos deste site antes de instalar plugins adicionais. Eu aceito e compreendo que plugins (especialmente, mas não apenas os originários de fontes não oficiais) podem conter falhas de segurança, podem tornar o site indisponível ou causar vazamentos perdas de dados privados.';
$string['featuredisabled'] = 'O instalador plugins está desativado neste site.';
$string['installaddon'] = 'Instalar plugin!';
$string['installaddons'] = 'Instalar plugins';
$string['installfromrepo'] = 'Instalar plugins do diretório de plugins do Moodle';
$string['installfromrepo_help'] = 'Você será redirecionado para o diretório de plugins do Moodle para procurar e instar um plugin. Note que o nome completo do seu site, sua URL e a versão do seu Moodle serão enviados para facilitar o processo de instalação para você.';
$string['installfromzip'] = 'Instalar plugin de arquivo ZIP';
$string['installfromzip_help'] = 'Uma alternativa para a instalação de plugins diretamente do diretório de plugins do Moodle é fazer o upload de um pacote ZIP do plugin. O pacote ZIP deve ter a mesma estrutura de um pacote baixado do diretório de plugins do Moodle.';
$string['installfromzipfile'] = 'Pacote ZIP';
$string['installfromzipfile_help'] = 'O pacote ZIP do plugin deve conter apenas um diretório, nomeado com o mesmo nome do plugin. O ZIP será extraído em um local apropriado para o tipo do plugin. Se o pacote foi baixado do diretório de plugins do Moodle, ele terá essa estrutura.';
$string['installfromzipinvalid'] = 'O pacote ZIP do plugin deve conter apenas um diretório, cujo nome deve ser igual ao nome do plugin. O arquivo fornecido não é um pacote ZIP de plugin válido.';
$string['installfromziprootdir'] = 'Renomeie o diretório raiz';
$string['installfromziprootdir_help'] = 'Alguns pacotes ZIP, tais como os gerados por Github, podem conter um nome de diretório raiz incorreto. Se assim for, o nome correto pode ser inserido aqui.';
$string['installfromzipsubmit'] = 'Instalar plugin do arquivo ZIP';
$string['installfromziptype'] = 'Tipo de plugin';
$string['installfromziptype_help'] = 'Para os plugins que declaram corretamente o nome do seu componente, o instalador pode detectar o tipo de plugin automaticamente. Se a auto-detecção falhar, escolha o tipo correto de plugin manualmente. Aviso: O procedimento de instalação pode falhar se um tipo de plugin incorreto for definido.';
$string['permcheck'] = 'Certifique-se se o tipo de plugin no local raiz é gravável pelo processo do servidor web.';
$string['permcheckerror'] = 'Erro durante a verificação de permissão de escrita';
$string['permcheckprogress'] = 'Verificando permissão de escrita...';
$string['permcheckrepeat'] = 'Verifique novamente';
$string['permcheckresultno'] = 'Não é possível escrever na localização do tipo de plugin <em>{$a->path}</em>';
$string['permcheckresultyes'] = 'É possível escrever na localização do tipo plugin <em>{$a->path}</em>';
$string['pluginname'] = 'Instalador de plugin';
$string['privacy:metadata'] = 'O plugin Instalador de plugin não armazena nenhum dado pessoal.';
$string['remoterequestalreadyinstalled'] = 'Há um pedido para instalar neste site o plugin {$a->name} ({$a->component}) versão {$a->version} do diretório de plugins do Moodle. No entanto, este plugin <strong>já está instalado</strong> neste site.';
$string['remoterequestconfirm'] = 'Há um pedido para instalar neste site o plugin <strong>{$a->name}</strong> ({$a->component}) versão {$a->version} do diretório de plugins do Moodle. Se você continuar, será feito o download do pacote ZIP do plugin para validação. Nada será instalado ainda.';
$string['remoterequestinvalid'] = 'Existe um pedido para instalar neste site um plugin do diretório de plugins do Moodle. Infelizmente, este pedido não é válido, então o plugin não pode ser instalado.';
$string['remoterequestnoninstallable'] = 'Existe um pedido para instalar o plugin {$a->name} ({$a->component}) versão {$a->version} no diretório de plugins do Moodle neste site. No entanto, a pré-verificação da instalação do plugin falhou (código do motivo: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Há um pedido para instalar neste site o plugin {$a->name} ({$a->component}) versão {$a->version} do diretório de plugins do Moodle. No entanto, <strong>não é possível escrever</strong> na localização <strong>{$a->typepath}</strong>. Você deve dar acesso de escrita para o usuário do servidor web para esta localização e então pressionar o botão "continuar" para repetir a verificação.';
$string['remoterequestpluginfoexception'] = 'Oops ... Ocorreu um erro ao tentar obter informações sobre o plugin {$a->name} ({$a->component}) versão {$a->version}. O plugin não pode ser instalado. Ativar o modo de depuração para ver detalhes do erro.';
$string['typedetectionfailed'] = 'Não foi possível detectar o tipo de plugin. Por favor, escolha o tipo plugin manualmente.';
$string['typedetectionmismatch'] = 'O tipo de plugin selecionado não corresponde ao declarado pelo plugin: {$a}';
