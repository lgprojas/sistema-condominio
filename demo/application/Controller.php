<?php

abstract class Controller{
    
    protected $_view;
    protected $_acl;
    protected $_request;
    protected $_menu;


    public function __construct() {
        $this->_acl = new ACL();
        $this->_request = new Request();
        $this->_view = new View($this->_request, $this->_acl);
        $this->_menu = new Menu();
    }

    abstract public function index();
    
    protected function loadModel($modelo, $modulo = false){
        //realiza la llamada al modelo con require_once en true
        $modelo = $modelo . 'Model';
        $rutaModelo = ROOT . 'models' . DS . $modelo . '.php';
        
        //verificar si estamos trabajando en base a un módulo o controlador directo
        if(!$modulo){
            $modulo = $this->_request->getModulo();
        }
        
        if($modulo){
            if($modulo !=  'default'){//default lo vamos a utilizar para modelos directos
                
                $rutaModelo = ROOT . 'modules' . DS . $modulo . DS . 'models' . DS . $modelo . '.php';
            }
        }
        
        if(is_readable($rutaModelo)){//se revisa la ruta si existe*
            require_once $rutaModelo;
            $modelo = new $modelo;
            return $modelo;
        }else{
            throw new Exception('Error de modelo');
        }
        
    }
    
    protected function getLibrary($libreria){
        //realiza llamadas a las librerias
        $rutaLibreria = ROOT . 'libs' . DS . $libreria . '.php';
        
        if(is_readable($rutaLibreria)){
            require_once $rutaLibreria;
        }else{
            throw new Exception('Error de librería');
        }
    }
    //filtra signos
    protected function getTexto($clave){
        
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            
            $_POST[$clave] = htmlspecialchars($_POST[$clave], ENT_QUOTES);
            return $_POST[$clave];
        }
        return '';//retorna cadena vacia
    }
    //filtra enteros
    protected function getInt($clave){
        
         if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            
            $_POST[$clave] = filter_input(INPUT_POST, $clave, FILTER_VALIDATE_INT);
            return $_POST[$clave];
        }
        return 0;//retorna cero
    }
    
    protected function redireccionar($ruta = false){
        //redirecciona a otro lugar
        
        if ($ruta){
            header('location:' . BASE_URL . $ruta);
            exit;
        }else{
            header('location:' . BASE_URL);
            exit;
        }
                
    }
    
    protected function filtrarInt($int){
        //transforma a entero
        $int = (int) $int;
        
        if(is_int($int)){
            
            return $int;
        }else{
            return 0;//si no es entero retorna cero
        }
    }
    
    protected function getPostParam($clave){
        //verifica si es post
        if(isset($_POST[$clave])){
            return $_POST[$clave];
        }
    }
    
    protected function delPostParam($clave){
        //verifica si es post
        if(isset($_POST[$clave])){
            unset($clave);
            return $clave;
        }
    }
    
     protected function getSql($clave){//    (para sanitizar el nombre de usuario)
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = strip_tags($_POST[$clave]);//limpia los strip_tags
            
            if(!get_magic_quotes_gpc()){
                //$_POST[$clave] = mysql_real_escape_string($_POST[$clave], mysql_connect(DB_HOST, DB_USER, DB_PASS));//le pasa el mysql_ a las inyeccionesSQL
                $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
                $_POST[$clave] = mysqli_real_escape_string($conn, $_POST[$clave]);
            }
            
            return trim($_POST[$clave]);
        }
    }
    
    protected function getAlphaNum($clave){ //hace un parce a string, hace un reemplazo de todos los caracteres que sean diferentes
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = (string) preg_replace('/[^A-Z0-9_-]/i', '', $_POST[$clave]);//acepta sólo caracteres A-Z y 0-9 y _ y - (para sanitizar el nombre de usuario)
            return trim($_POST[$clave]);
        }
        
    }
    
    protected function validarEmail($email){
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }
        return true;
    }
    
    protected function formatPermiso($clave){
        
         if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = (string) preg_replace('/[^A-Z_]/i', '', $_POST[$clave]);
            return trim($_POST[$clave]);
         }
    }
    
    protected function getRut($rut){
        
        $pattern="/^0*(\d{1,3}(\.?\d{3})*)\-?([\dkK])$/";
        if(preg_match($pattern,$rut))
            return $rut;
        return false;    
    }
    
    protected function formatDate($date){
        //retorna formato año-mes-día        
        list($dia, $mes, $year) = explode('-',$date);
        $val = $year."-".$mes."-".$dia;  
            return $val;               
    }
    
    protected function formatDateTimeSave($dateTime) {
        //recibe  d-m-Y H:i
        //retorna Y-m-d H:i:s
        $myDateTime = DateTime::createFromFormat('d-m-Y H:i:s', $dateTime);
        $newDateString = $myDateTime->format('Y-m-d H:i:s');
        
        return $newDateString;
    }
    
    protected function formatDateTimeShow($dateTime) {
        //recibe   Y-m-d H:i:s
        //retorna  d-m-Y H:i:s
        $myDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $dateTime);
        $newDateString = $myDateTime->format('d-m-Y H:i:s');
        
        return $newDateString;
    }
    
    protected  function validarExtensionImage($image){
        //retorna la extensión si la extensión es JPG, PNG o JPEG
        //$info = new SplFileInfo($image);
        $trozos = explode(".", $image); 
        $extension = end($trozos); 
        if(strtolower($extension) == 'jpg' || 
           strtolower($extension) == 'jpeg' ||
           strtolower($extension) == 'png'
            ){
            return strtolower($extension);
            }
            return false;
    }
    
    protected  function validarExtensionFile($file){
        //retorna la extensión si la extensión es PDF, DOC, DOCX
        $trozos = explode(".", $file); 
        $extension = end($trozos); 

        if(strtolower($extension) == 'pdf' || 
           strtolower($extension) == 'doc' ||
           strtolower($extension) == 'docx'
            ){
            return strtolower($extension);
            }
            return false;
    }
    
    protected function filtrarNombre($filename, $cod=false){
        //rellena espacios y concatena concatena cod al nombre del file
        $cadena = str_replace(" ","-",$filename);
        //echo $resultado;exit;
        if (!strpos($cadena, " ")) {
            
            if($cod != false){
                $info = pathinfo($cadena);
                $resultado = $info["filename"]."_".$cod.".".$info["extension"];
                return $resultado;
            }else{
                return $cadena;
            }
        }
            return false;        
    }

    protected function createThumb($rtOriginal, $extension, $altoimg, $anchoimg, $rtDestino){
        
            $ext = strtolower($extension);
            //print_r($extension);exit;
            if($ext=="jpeg" || $ext=="jpg"){
                $original = @imagecreatefromjpeg($rtOriginal);
            } elseif($ext=="png"){
                $original = @imagecreatefrompng($rtOriginal);
            } elseif($ext=="gif") {
                $original = @imagecreatefromgif($rtOriginal);
            }

        //Definir tamaño máximo y mínimo
        $max_ancho = $anchoimg;
        $max_alto = $altoimg;

        //Recoger ancho y alto de la original
        list($ancho,$alto)=getimagesize($rtOriginal);

        //Calcular proporción ancho y alto
        $x_ratio = $max_ancho / $ancho;
        $y_ratio = $max_alto / $alto;

            if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){
            //Si es más pequeña que el máximo no redimensionamos
                $ancho_final = $ancho;
                $alto_final = $alto;
            }

            //si no calculamos si es más alta o más ancha y redimensionamos
            elseif (($x_ratio * $alto) < $max_alto){
                $alto_final = ceil($x_ratio * $alto);
                $ancho_final = $max_ancho;
            }
            else{
                $ancho_final = ceil($y_ratio * $ancho);
                $alto_final = $max_alto;
            }

    //Crear lienzo en blanco con proporciones
$lienzo=imagecreatetruecolor($ancho_final,$alto_final); 

    if($ext=="png" || $ext=="gif") {
        //echo "es PNG o GIF";exit;
        if($ext=="png") {
            //echo "es PNG";exit;
            imagealphablending($lienzo, false);
            //$colorTransparent = imagecolorallocatealpha($lienzo, 0, 0, 0, 127);
            //imagefill($lienzo, 0, 0, $colorTransparent);
            //imagesavealpha($lienzo, true);
            
            $colorTransparancia=imagecolortransparent($original);
            
            //$colorTransparancia=imagecolortransparent($original);// devuelve el color usado como transparencia o -1 si no tiene transparencias
            if($colorTransparancia != -1){ //TIENE TRANSPARENCIA
                $colorTransparente = imagecolorsforindex($original, $colorTransparancia); //devuelve un array con las componentes de lso colores RGB + alpha
                $idColorTransparente = imagecolorallocatealpha($lienzo, $colorTransparente['red'], $colorTransparente['green'], $colorTransparente['blue']); // Asigna un color en una imagen retorna identificador de color o FALSO o -1 apartir de la version 5.1.3
                imagefill($lienzo, 0, 0, $idColorTransparente);// rellena de color desde una cordenada, en este caso todo rellenado del color que se definira como transparente
                imagecolortransparent($lienzo, $idColorTransparente); //Ahora definimos que en el nueva imagen el color transparente será el que hemos pintado el fondo.
            }
            imagesavealpha($lienzo, true);
        } elseif($ext=="gif") {
            //echo "es GIF";exit;
            $trnprt_indx = imagecolortransparent($original);
            if ($trnprt_indx >= 0) {
                //its transparent
                $trnprt_color = imagecolorsforindex($original, $trnprt_indx);
                $trnprt_indx = imagecolorallocate($lienzo, $trnprt_color['red'], $trnprt_color['green'], $trnprt_color['blue']);
                imagefill($lienzo, 0, 0, $trnprt_indx);
                imagecolortransparent($lienzo, $trnprt_indx);
            }
        }
    } 

//Copiar $original sobre la imagen que acabamos de crear en blanco ($tmp)
imagecopyresampled($lienzo,$original,0,0,0,0,$ancho_final,$alto_final,$ancho,$alto);

imagedestroy($original);
    //Se crea la imagen final en el directorio indicado
        if($ext=="jpeg" || $ext=="jpg"){
            $cal=90;
            imagejpeg($lienzo,$rtDestino,$cal);
        } elseif($ext=="png"){
            imagepng($lienzo,$rtDestino,$cal);
        } elseif($ext=="gif") {
            imagegif($lienzo,$rtDestino,$cal);
        }
        imagedestroy($lienzo);
}

    protected function xss_clean($str, $is_image = FALSE){
		/*
		 * Is the string an array?
		 *
		 */
		if (is_array($str))
		{
			while (list($key) = each($str))
			{
				$str[$key] = $this->xss_clean($str[$key]);
			}

			return $str;
		}

		/*
		 * Remove Invisible Characters
		 */
		$str = remove_invisible_characters($str);

		// Validate Entities in URLs
		$str = $this->_validate_entities($str);

		/*
		 * URL Decode
		 *
		 * Just in case stuff like this is submitted:
		 *
		 * <a href="http://%77%77%77%2E%67%6F%6F%67%6C%65%2E%63%6F%6D">Google</a>
		 *
		 * Note: Use rawurldecode() so it does not remove plus signs
		 *
		 */
		$str = rawurldecode($str);

		/*
		 * Convert character entities to ASCII
		 *
		 * This permits our tests below to work reliably.
		 * We only convert entities that are within tags since
		 * these are the ones that will pose security problems.
		 *
		 */

		$str = preg_replace_callback("/[a-z]+=([\'\"]).*?\\1/si", array($this, '_convert_attribute'), $str);

		$str = preg_replace_callback("/<\w+.*?(?=>|<|$)/si", array($this, '_decode_entity'), $str);

		/*
		 * Remove Invisible Characters Again!
		 */
		$str = remove_invisible_characters($str);

		/*
		 * Convert all tabs to spaces
		 *
		 * This prevents strings like this: ja	vascript
		 * NOTE: we deal with spaces between characters later.
		 * NOTE: preg_replace was found to be amazingly slow here on
		 * large blocks of data, so we use str_replace.
		 */

		if (strpos($str, "\t") !== FALSE)
		{
			$str = str_replace("\t", ' ', $str);
		}

		/*
		 * Capture converted string for later comparison
		 */
		$converted_string = $str;

		// Remove Strings that are never allowed
		$str = $this->_do_never_allowed($str);

		/*
		 * Makes PHP tags safe
		 *
		 * Note: XML tags are inadvertently replaced too:
		 *
		 * <?xml
		 *
		 * But it doesn't seem to pose a problem.
		 */
		if ($is_image === TRUE)
		{
			// Images have a tendency to have the PHP short opening and
			// closing tags every so often so we skip those and only
			// do the long opening tags.
			$str = preg_replace('/<\?(php)/i', "&lt;?\\1", $str);
		}
		else
		{
			$str = str_replace(array('<?', '?'.'>'),  array('&lt;?', '?&gt;'), $str);
		}

		/*
		 * Compact any exploded words
		 *
		 * This corrects words like:  j a v a s c r i p t
		 * These words are compacted back to their correct state.
		 */
		$words = array(
			'javascript', 'expression', 'vbscript', 'script', 'base64',
			'applet', 'alert', 'document', 'write', 'cookie', 'window'
		);

		foreach ($words as $word)
		{
			$temp = '';

			for ($i = 0, $wordlen = strlen($word); $i < $wordlen; $i++)
			{
				$temp .= substr($word, $i, 1)."\s*";
			}

			// We only want to do this when it is followed by a non-word character
			// That way valid stuff like "dealer to" does not become "dealerto"
			$str = preg_replace_callback('#('.substr($temp, 0, -3).')(\W)#is', array($this, '_compact_exploded_words'), $str);
		}

		/*
		 * Remove disallowed Javascript in links or img tags
		 * We used to do some version comparisons and use of stripos for PHP5,
		 * but it is dog slow compared to these simplified non-capturing
		 * preg_match(), especially if the pattern exists in the string
		 */
		do
		{
			$original = $str;

			if (preg_match("/<a/i", $str))
			{
				$str = preg_replace_callback("#<a\s+([^>]*?)(>|$)#si", array($this, '_js_link_removal'), $str);
			}

			if (preg_match("/<img/i", $str))
			{
				$str = preg_replace_callback("#<img\s+([^>]*?)(\s?/?>|$)#si", array($this, '_js_img_removal'), $str);
			}

			if (preg_match("/script/i", $str) OR preg_match("/xss/i", $str))
			{
				$str = preg_replace("#<(/*)(script|xss)(.*?)\>#si", '[removed]', $str);
			}
		}
		while($original != $str);

		unset($original);

		// Remove evil attributes such as style, onclick and xmlns
		$str = $this->_remove_evil_attributes($str, $is_image);

		/*
		 * Sanitize naughty HTML elements
		 *
		 * If a tag containing any of the words in the list
		 * below is found, the tag gets converted to entities.
		 *
		 * So this: <blink>
		 * Becomes: &lt;blink&gt;
		 */
		$naughty = 'alert|applet|audio|basefont|base|behavior|bgsound|blink|body|embed|expression|form|frameset|frame|head|html|ilayer|iframe|input|isindex|layer|link|meta|object|plaintext|style|script|textarea|title|video|xml|xss';
		$str = preg_replace_callback('#<(/*\s*)('.$naughty.')([^><]*)([><]*)#is', array($this, '_sanitize_naughty_html'), $str);

		/*
		 * Sanitize naughty scripting elements
		 *
		 * Similar to above, only instead of looking for
		 * tags it looks for PHP and JavaScript commands
		 * that are disallowed.  Rather than removing the
		 * code, it simply converts the parenthesis to entities
		 * rendering the code un-executable.
		 *
		 * For example:	eval('some code')
		 * Becomes:		eval&#40;'some code'&#41;
		 */
		$str = preg_replace('#(alert|cmd|passthru|eval|exec|expression|system|fopen|fsockopen|file|file_get_contents|readfile|unlink)(\s*)\((.*?)\)#si', "\\1\\2&#40;\\3&#41;", $str);


		// Final clean up
		// This adds a bit of extra precaution in case
		// something got through the above filters
		$str = $this->_do_never_allowed($str);

		/*
		 * Images are Handled in a Special Way
		 * - Essentially, we want to know that after all of the character
		 * conversion is done whether any unwanted, likely XSS, code was found.
		 * If not, we return TRUE, as the image is clean.
		 * However, if the string post-conversion does not matched the
		 * string post-removal of XSS, then it fails, as there was unwanted XSS
		 * code found and removed/changed during processing.
		 */

		if ($is_image === TRUE)
		{
			return ($str == $converted_string) ? TRUE: FALSE;
		}

		log_message('debug', "XSS Filtering completed");
		return $str;
	}
    
    protected function filCad($cadena){
       
    //compruebo que los caracteres sean los permitidos
       $permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789 ";

       for ($i=0; $i<strlen($cadena); $i++){
          if (strpos($permitidos, substr($cadena, $i, 1))===false){
             return false;
          }
       }
       return $cadena;
    }
    
    protected function urls_amigables($valor, $url) {

    // Tranformamos todo a minusculas

    $url = strtolower($url);

    //Rememplazamos caracteres especiales latinos

    $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');

    $repl = array('a', 'e', 'i', 'o', 'u', 'n');

    $url = str_replace ($find, $repl, $url);

    // Añaadimos los guiones

    $find = array(' ', '&', '\r\n', '\n', '+');
    $url = str_replace ($find, '-', $url);

    // Eliminamos y Reemplazamos demás caracteres especiales

    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

    $repl = array('', '-', '');

    $url = preg_replace ($find, $repl, $url);

    return $url;

    }
    
    protected function encrypt ($var) {        
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'munku';
        $secret_iv = 'walki';

        $key = hash('sha256', $secret_key);   
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

            $output = openssl_encrypt($var, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);

            return $output;
    }
 
    protected function decrypt ($var) {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'munku';
        $secret_iv = 'walki';

        $key = hash('sha256', $secret_key);    
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $des = openssl_decrypt(base64_decode($var), $encrypt_method, $key, 0, $iv);

        return $des;
    }
    
    protected function filtraSaltos($cadena){
        settype($cadena, 'string');
        //$order   = array('\\r\\n');
        $result = str_replace('\\r\\n', '<br/>', $cadena); 
        return $result;
    }
}
?>
