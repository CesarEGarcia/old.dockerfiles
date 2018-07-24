<?php

require ($_SERVER ['DOCUMENT_ROOT'] . '/.conexion.mysql');

$cfg['DefaultLang']             = 'es';
$cfg['ServerDefault']           = 1;
$cfg['UploadDir']               = '/tmp';
$cfg['SaveDir']                 = '/tmp';
$cfg['Export']['sql_extended']  = false;
$cfg['blowfish_secret']         = 'dkdkal23sdalkdkidd';

//$cfg['MemoryLimit']             = '128M';
//$cfg['ShowChgPassword']               = false;

//$cfg['ExecTimeLimit']           = 60;
//$cfg['ShowServerInfo']          = false;
//$cfg['AllowUserDropDatabase']   = false;
//$cfg['ShowStats']                     true
//$cfg['Servers'][$i]['verbose']

$cfg['NavigationTreeEnableGrouping'] = false;
$cfg['MaxNavigationItems']           = 200;
$cfg['ShowStats']                    = false;
$cfg['ShowServerInfo']               = false;
$cfg['NavigationTreeShowProcedures'] = false;
// $cfg['Servers'][$i]['hide_db']='^(information_schema|performance_schema|mysql|phpmyadmin|test|webauth)$';

$i = 1;

$cfg['Servers'][$i]['auth_type']       = 'config';
$cfg['Servers'][$i]['host']            = MYSQL_SERVIDOR;
$cfg['Servers'][$i]['connect_type']    = 'socket';
$cfg['Servers'][$i]['compress']        = false;
$cfg['Servers'][$i]['extension']       = 'mysqli';
$cfg['Servers'][$i]['AllowNoPassword'] = false;

$cfg['Servers'][$i]['user']     = MYSQL_USUARIO;
$cfg['Servers'][$i]['password'] = MYSQL_CLAVE;
$cfg['Servers'][$i]['only_db']  = defined ('MYSQL_BASEDATOSADMIN') ? explode (',', MYSQL_BASEDATOSADMIN) : MYSQL_BASEDATOS;

$cfg['Servers'][$i]['controluser'] = 'phpMyAdmin';
$cfg['Servers'][$i]['controlpass'] = 'phpMdmn_';
$cfg['Servers'][$i]['pmadb']       = 'phpmyadmin';

$cfg['Servers'][$i]['bookmarktable']     = 'pma__bookmark';
$cfg['Servers'][$i]['relation']          = 'pma__relation';
$cfg['Servers'][$i]['table_info']        = 'pma__table_info';
$cfg['Servers'][$i]['table_coords']      = 'pma__table_coords';
$cfg['Servers'][$i]['pdf_pages']         = 'pma__pdf_pages';
$cfg['Servers'][$i]['column_info']       = 'pma__column_info';
$cfg['Servers'][$i]['history']           = 'pma__history';
$cfg['Servers'][$i]['designer_coords']   = 'pma__designer_coords';
$cfg['Servers'][$i]['tracking']          = 'pma__tracking';
$cfg['Servers'][$i]['table_uiprefs']     = 'pma__table_uiprefs';
$cfg['Servers'][$i]['userconfig']        = 'pma__userconfig';
$cfg['Servers'][$i]['recent']            = 'pma__recent';
$cfg['Servers'][$i]['users']             = 'pma__users';
$cfg['Servers'][$i]['usergroups']        = 'pma__usergroups';
$cfg['Servers'][$i]['navigationhiding']  = 'pma__navigationhiding';
$cfg['Servers'][$i]['favorite']          = 'pma__favorite';
$cfg['Servers'][$i]['savedsearches']     = 'pma__savedsearches';
$cfg['Servers'][$i]['central_columns']   = 'pma__central_columns';
$cfg['Servers'][$i]['designer_settings'] = 'pma__designer_settings';
$cfg['Servers'][$i]['export_templates']  = 'pma__export_templates';


?>