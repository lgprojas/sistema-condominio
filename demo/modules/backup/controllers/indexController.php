<?php

class indexController extends backupController {
    
    private $_backup;
    
    public function __construct() {
        parent::__construct();
        $this->_backup =  $this->loadModel('index');
    }
    
    public function index() {
        
    if(!Session::get('autenticado')){$this->redireccionar();}
    $this->_acl->acceso('ver_backup');
    
     $this->_view->assign('titulo', 'Backup DB');  
          
     $this->getLibrary('paginador');
        $pag1 = new Paginador();        
        $pagina1 = false;        
        if($_POST){
            $this->_view->assign('_datos', $_POST);
            $pagina1 = $this->getInt('pagina1');
        }
        
        $row = $this->_backup->getBackup();

        $this->_view->setJs(array('example'));        
        $this->_view->assign('color', '#F5FFFA');        
        $this->_view->assign('backup', $pag1->paginar($row, $pagina1, 10));
        $this->_view->assign('paginacion1', $pag1->getView('example1'));  
     
     $this->_view->renderizar('index', 'index');
        
    }
    
    public function simpleBackup(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('backup_simple_bd');

        $host = DB_HOST;
        $user = DB_USER;
        $pass = DB_PASS;
        $dbname = DB_NAME;
        
        $fecha = date("Ymd-His");
        $ruta = ROOT."views".DS."acl".DS."a".DS."b".DS."backup".DS."covecino".DS;
        $nameSql = "covecino_".$fecha.".sql";
        $salida_sql = $ruta.$nameSql;
        
        //$dump = 'mysqldump --host=' . DB_HOST . ' --user=' . DB_USER . ' --password=' . DB_PASS . ' ' . DB_NAME . '--result-file='.$salida_sql. '2>&1';       
        //$dump = "C:\xampp\mysql\bin\mysqldump.exe --host{$host} --user={$user} --password={$pass} {$bdname} > {$salida_sql}";
        //$dump = 'C:\xampp\mysql\bin\mysqldump.exe'. " -h{$host} -u{$user} -p{$pass} {$bdname} > {$salida_sql}";
        //system('C:\xampp\mysql\bin\mysqldump'." --opt -u $user -p$pass --databases $bdname > ".$salida_sql." 2>&1", $sal);
        //exec('C:\xampp\mysql\bin\mysqldump.exe'." --user={$user} --password={$pass} --host={$host} {$bdname} --result-file={$salida_sql} 2>&1", $output);
        
        //exec('mysqldump'." --user={$user} --password={$pass} --host={$host} {$dbname} --result-file={$salida_sql} 2>&1", $output);
//local
        exec('C:\xampp\mysql\bin\mysqldump.exe'." --user={$user} --password={$pass} --host={$host} {$dbname} --result-file={$salida_sql} 2>&1", $output);

        $zip = new ZipArchive();
        $salida_zip = $ruta.$dbname. '_' . $fecha . '.zip';
        if($zip->open($salida_zip, ZipArchive::CREATE) === true){            
            $zip->addFile($salida_sql);
            $zip->close();
            unlink($salida_sql);
            
            $this->_backup->regMovRespaldoBackup($nameSql, "simpleSave", Session::get('id_usuario'));
            Session::setMensaje("Backup realizado con éxito.");
            $this->redireccionar('backup/index');
            exit;
        }else {
                Session::setMensaje("Hubo un error al realizar el respaldo.");
                $this->redireccionar('backup/index');
            exit;
        }
        
//server
//        exec('mysqldump'." --user={$user} --password={$pass} --host={$host} {$dbname} --result-file={$salida_sql} 2>&1", $output);
//        
//        $salida_zip = $ruta.$dbname. '_' . $fecha . '.zip';
//        $passzip = ENCRYPT_KEY;
//        exec("zip -P $passzip $salida_zip $salida_sql");   
//        unlink($salida_sql);
//        
//        if(file_exists($salida_zip)){
//            
//            $this->_backup->regMovRespaldoBackup($nameSql, "simpleSave", Session::get('id_usuario'));
//                Session::setMensaje("Backup realizado con éxito.");
//                $this->redireccionar('backup/index');
//            exit;
//        } else {
//                Session::setMensaje("Hubo un error al realizar el respaldo.");
//                $this->redireccionar('backup/index');
//            exit;
//        }
    }
    
    public function backupDownload(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('backup_download_bd');
        
        $host = DB_HOST;
        $user = DB_USER;
        $pass = DB_PASS;
        $dbname = DB_NAME;
        
        $fecha = date("Ymd-His");
        $ruta = ROOT."views".DS."acl".DS."a".DS."b".DS."backup".DS."covecino".DS;
        $rutaDownload = BASE_URL."views/acl/a/b/backup/covecino/";
        $nameSql = "covecino_".$fecha.".sql";
        $salida_sql = $ruta.$nameSql;
        
//local        
        exec('C:\xampp\mysql\bin\mysqldump.exe'." --user={$user} --password={$pass} --host={$host} {$dbname} --result-file={$salida_sql} 2>&1", $output);
        //exec('mysqldump'." --user={$user} --password={$pass} --host={$host} {$dbname} --result-file={$salida_sql} 2>&1", $output);

        $zip = new ZipArchive();
        $name_zip = $dbname. '_' . $fecha . '.zip';
        $salida_zip = $ruta.$name_zip;
        if($zip->open($salida_zip, ZipArchive::CREATE) === true){
            
            $zip->addFile($salida_sql);
            $zip->close();
            unlink($salida_sql);
        
            $this->_backup->regMovRespaldoBackup($nameSql, "save&download", Session::get('id_usuario'));
                Session::setMensaje("Backup realizado con éxito <a href='".$rutaDownload.$name_zip."' class='btn btn-success'>Descargar</a>");
                $this->redireccionar('backup/index');
            exit;
        } else {
                Session::setMensaje("Hubo un error al realizar el respaldo.");
                $this->redireccionar('backup/index');
            exit;
        }
        
//server
//        exec('mysqldump'." --user={$user} --password={$pass} --host={$host} {$dbname} --result-file={$salida_sql} 2>&1", $output);
//
//        $name_zip = $dbname. '_' . $fecha . '.zip';
//        $salida_zip = $ruta.$name_zip;
//        $passzip = ENCRYPT_KEY;
//        exec("zip -P $passzip $salida_zip $salida_sql"); 
//
//        unlink($salida_sql);
//        
//        if(file_exists($salida_zip)){
//            $this->_backup->regMovRespaldoBackup($nameSql, "save&download", Session::get('id_usuario'));
//                Session::setMensaje("Backup realizado con Ã©xito <a href='".$rutaDownload.$name_zip."' class='btn btn-success'>Descargar</a>");
//                $this->redireccionar('backup/index');
//            exit;
//        } else {
//                Session::setMensaje("Hubo un error al realizar el respaldo.");
//                $this->redireccionar('backup/index');
//            exit;
//        }
        
    }
    
    public function sendEmailBackUp(){
        
        if(!Session::get('autenticado')){$this->redireccionar();}
        $this->_acl->acceso('backup_sendmail_bd');
        
        $host = DB_HOST;
        $user = DB_USER;
        $pass = DB_PASS;
        $dbname = DB_NAME;
        
        $fecha = date("Ymd-His");
        $ruta = ROOT."views".DS."acl".DS."a".DS."b".DS."backup".DS."covecino".DS;
        $nameSql = "covecino_".$fecha.".sql";
        $salida_sql = $ruta.$nameSql;

//local        
        exec('C:\xampp\mysql\bin\mysqldump.exe'." --user={$user} --password={$pass} --host={$host} {$dbname} --result-file={$salida_sql} 2>&1", $output);
        //exec('mysqldump'." --user={$user} --password={$pass} --host={$host} {$dbname} --result-file={$salida_sql} 2>&1", $output);

        $zip = new ZipArchive();
        $salida_zip = $ruta.$dbname. '_' . $fecha . '.zip';
        if($zip->open($salida_zip, ZipArchive::CREATE) === true){
//        $passzip = ENCRYPT_KEY;
//        exec("zip -P $passzip $salida_zip $salida_sql");    
            $zip->addFile($salida_sql);
            $zip->close();
            unlink($salida_sql);
            
            $this->getLibrary('class.phpmailer');
            $mail = new PHPMailer();
            
            $mail->From = 'www.covecino.cl';
            $mail->FromName = 'Condominio: ';
            $mail->Subject = 'BackUp DB Covecino fecha: '.$fecha;
            $mail->Body = 'Hola <strong>'.Session::get('nombre_usu').'</strong>,' .
                    '<p>Se ha generado correctamente un backup del sistema Covecino.';           
            $mail->AltBody = 'Su servidor de correo no soporta HTML';
            $mail->AddAttachment($salida_zip);
            $mail->AddAddress('soporte@covecino.cl');
            $mail->Send();
            
            $this->_backup->regMovRespaldoBackup($nameSql, "email", Session::get('id_usuario'));
                Session::setMensaje("Backup realizado y enviado con éxito.");
                $this->redireccionar('backup/index');
            exit;
        } else {
                Session::setMensaje("Hubo un error al realizar el respaldo.");
                $this->redireccionar('backup/index');
            exit;
        }

//server
//        exec('mysqldump'." --user={$user} --password={$pass} --host={$host} {$dbname} --result-file={$salida_sql} 2>&1", $output);
//
//        $salida_zip = $ruta.$dbname. '_' . $fecha . '.zip';
//        $passzip = ENCRYPT_KEY;
//        exec("zip -P $passzip $salida_zip $salida_sql");    
//
//        unlink($salida_sql);
//        
//        if(file_exists($salida_zip))  {  
//            
//            $this->getLibrary('class.phpmailer');
//            $mail = new PHPMailer();
//            
//            $mail->From = 'www.covecino.cl';
//            $mail->FromName = 'Condominio: ';
//            $mail->Subject = 'BackUp DB Covecino fecha: '.$fecha;
//            $mail->Body = 'Hola <strong>'.Session::get('nombre_usu').'</strong>,' .
//                    '<p>Se ha generado correctamente un backup del sistema Covecino.';           
//            $mail->AltBody = 'Su servidor de correo no soporta HTML';
//            $mail->AddAttachment($salida_zip);
//            $mail->AddAddress('soporte@covecino.cl');
//            $mail->Send();
//            
//            $this->_backup->regMovRespaldoBackup($nameSql, "email", Session::get('id_usuario'));
//                Session::setMensaje("Backup realizado y enviado con Ã©xito.");
//                $this->redireccionar('backup/index');
//            exit;
//        } else {
//                Session::setMensaje("Hubo un error al realizar el respaldo.");
//                $this->redireccionar('backup/index');
//            exit;
//        }
//    }        
        
    }      
    
}