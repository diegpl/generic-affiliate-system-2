<?php
/*Plugin: Generic Affiliate Plugin - Marketpress or Woo-commercePlugin URI: http://wpsoft.com.br/store/products/sistema-programa-de-afiliados-site/Author: diegpl , pkelbert, Rafael Nariz , Thiago MobilonDonateAuthor URI: http://wpsoft.com.br/Description:Affiliate plugin for any e-commerce system. It is only update the afiliados.xml at root folder with your products, price and imgs. After that, change the XML path of the host of your affiliate imgs server. At $linkXML = 'http://culturalivre.com/wp-content/plugins/generic-affiliate-system/afiliados.xml'; at line 1347, 1099 and 1783This plugin is based on mlv_contextual plugin, of Thiago, but don`t arrest you at Mercado Livre or eBay, you can share yours own products. Online example here: http://softwaresesistemas.com.br/agricultura/cultura-morangueiro-adubacao-organica/Version: 1.0License: GNU General Public License v2 or laterLicense URI: http://www.gnu.org/licenses/gpl-2.0.htmlTags: affiliate system,affiliate program,affiliate,mlx contextual,marketpress affiliate,woo-commerce affiliate,affiliate xmlText Domain: twentythirteen */


function tiraAcentosAux(&$textos) {
$textos = str_replace("�", "a", $textos);
$textos = str_replace("�", "A", $textos);
$textos = str_replace("�", "a", $textos);
$textos = str_replace("�", "A", $textos);
$textos = str_replace("�", "a", $textos);
$textos = str_replace("�", "A", $textos);
$textos = str_replace("�", "a", $textos);
$textos = str_replace("�", "A", $textos);
$textos = str_replace("�", "a", $textos);
$textos = str_replace("�", "A", $textos);
$textos = str_replace("�", "e", $textos);
$textos = str_replace("�", "E", $textos);
$textos = str_replace("�", "e", $textos);
$textos = str_replace("�", "E", $textos);
$textos = str_replace("�", "e", $textos);
$textos = str_replace("�", "E", $textos);
$textos = str_replace("�", "e", $textos);
$textos = str_replace("�", "E", $textos);
$textos = str_replace("�", "i", $textos);
$textos = str_replace("�", "I", $textos);
$textos = str_replace("�", "i", $textos);
$textos = str_replace("�", "I", $textos);
$textos = str_replace("�", "i", $textos);
$textos = str_replace("�", "I", $textos);
$textos = str_replace("�", "i", $textos);
$textos = str_replace("�", "I", $textos);
$textos = str_replace("�", "o", $textos);
$textos = str_replace("�", "O", $textos);
$textos = str_replace("�", "o", $textos);
$textos = str_replace("�", "O", $textos);
$textos = str_replace("�", "o", $textos);
$textos = str_replace("�", "O", $textos);
$textos = str_replace("�", "o", $textos);
$textos = str_replace("�", "O", $textos);
$textos = str_replace("�", "o", $textos);
$textos = str_replace("�", "O", $textos);
$textos = str_replace("�", "u", $textos);
$textos = str_replace("�", "U", $textos);
$textos = str_replace("�", "u", $textos);
$textos = str_replace("�", "U", $textos);
$textos = str_replace("�", "u", $textos);
$textos = str_replace("�", "U", $textos);
$textos = str_replace("�", "u", $textos);
$textos = str_replace("�", "U", $textos);
$textos = str_replace("�", "c", $textos);
$textos = str_replace("�", "C", $textos);
$textos = str_replace(":", "", $textos);
$textos = str_replace(";", "", $textos);
$textos = str_replace(",", "", $textos);
$textos = str_replace("?", "", $textos);
$textos = str_replace("!", "", $textos);
$textos = str_replace("&", "e", $textos);
$textos = str_replace("�", "", $textos);
$textos = str_replace("�", "", $textos);
$textos = str_replace("�", "", $textos);
$textos = str_replace("�", "", $textos);
$textos = str_replace("�", "", $textos);
$textos = str_replace("�", "", $textos);

$textos = str_replace("-", "", $textos);
$textos = str_replace("_", "", $textos);
$textos = str_replace("~", "", $textos);
$textos = str_replace("�", "", $textos);
$textos = str_replace("`", "", $textos);
$textos = str_replace("^", "", $textos);
$textos = str_replace("?", "", $textos);
$textos = str_replace("/", "", $textos);
$textos = str_replace("+", "", $textos);
$textos = str_replace("$", "S", $textos);
$textos = str_replace("'", "", $textos);
$textos = str_replace("\"", "", $textos);

$textos = str_replace('"', '', $textos);
$textos = str_replace(")", "", $textos);
$textos = str_replace("(", "", $textos);
}




$mlv_options=array(
  'mlv_pais'=>'mlb',
  'mlv_ctxwords'=>'mlvc',
  'mlv_vititle'=>'Ofertas Relacionadas',
  'mlv_time' => '0',
  'mlv_autoshowlocal'=>'under',
  'mlv_cant'=>'3',
  'mlv_encode'=>'n',
  'mlv_encode'=>'n',
  'mlv_function'=>'c',
);

	$options_pms = get_option('mlv_options');
	if (!$options_pms) add_option('mlv_options', $mlv_options);
	else $mlv_options = $options_pms;

$pais = $mlv_options['mlv_pais'];

	switch ($pais) {
	case 'mla':
	$urlml = 'mercadolibre.com.ar';
	$urlmlista ='listado.mercadolibre.com.ar';
	include_once ('lang/es_AR.php');
	break;
	case 'mlb':
	$urlml = 'mercadolivre.com.br';
	$urlmlista ='lista.mercadolivre.com.br';
	include_once ('lang/pt_BR.php');
	break;
	case 'mlc':
	$urlml = 'mercadolibre.cl';
	$urlmlista ='listado.mercadolibre.cl';
	include_once ('lang/es_AR.php');
	break;
	case 'mlo':
	$urlml = 'mercadolibre.com.co';
	$urlmlista ='listado.mercadolibre.com.co';
	include_once ("lang/es_AR.php");
	break;
	case 'mlm':
	$urlml = 'mercadolibre.com.mx';
	$urlmlista ='listado.mercadolibre.com.mx';
	include_once ('lang/es_AR.php');
	break;
	case 'mlv':
	$urlml = 'mercadolibre.com.ve';
	$urlmlista ='listado.mercadolibre.com.ve';
	include_once ('lang/es_AR.php');
	break;
		default:
		$urlml = 'mercadolivre.com.br';
		$urlmlista ='lista.mercadolivre.com.br';
		include_once ('lang/pt_BR.php');
		break;
	}

// output textarea to easily add tags in admin menu (addition to the post form)
add_action('simple_edit_form', 'mlv_contextual_input');
add_action('edit_form_advanced', 'mlv_contextual_input');
add_action('edit_page_form', 'mlv_contextual_input');

function mlv_contextual_input() {
	global $post, $pais, $urlml, $urlmlista, $lang;

	$mlv_id = get_post_meta($post->ID, 'mlv_id', true);  
	$mlv_minpr = get_post_meta($post->ID, 'mlv_minpr', true);
	$mlv_word = get_post_meta($post->ID, 'mlv_word', true);
	
	echo "<div id=\"mlvcontinsert\" class=\"postbox\" ><div class=\"handlediv\" title=\"Click to toggle\"></div><h3 class='hndle'><span>MLV_Contextual</span></h3><div class=\"inside\"><p id=\"jaxtag\"><span id=\"ajaxtag\"><b>".$lang['palavra-chave']."</b>:<br/><input type=\"text\" name=\"mlv_word\" id=\"mlv_word\" size=\"50%\" value=\"".$mlv_word."\" /><input type=\"hidden\" name=\"bunny-key\" id=\"bunny-key\" value=\"".wp_create_nonce("bunny")."\" /><span class=\"howto\">".$lang['palavra-mais-tem']."</span><br/><b>ID de categoria</b>:<br/><input type=\"text\" name=\"mlv_id\" id=\"mlv_id\" size=\"50%\" value=\"".$mlv_id."\" /><input type=\"hidden\" name=\"bunny-key\" id=\"bunny-key\" value=\"".wp_create_nonce("bunny")."\" /><span class=\"howto\">".$lang['1648-info']." <a href=\"http://www.".$urlml."/jm/ml.allcategs.AllCategsServlet\" title=\"".$lang['lista-categorias']."\">".$lang['veja-ids']."</a>.</span><br/><b>".$lang['preco-min']."</b>:<br/><input type=\"text\" name=\"mlv_minpr\" id=\"mlv_minpr\" size=\"50%\" value=\"".$mlv_minpr."\" /><input type=\"hidden\" name=\"bunny-key\" id=\"bunny-key\" value=\"".wp_create_nonce("bunny")."\" /><span class=\"howto\">".$lang['apenas-acima']."</span></span></p></div></div>";

}

//Function to clean Keywords
function trat($var){
 
 $var = strtolower($var);
 $var = trim($var);
 $var = ereg_replace("[����]","a",$var); 
 $var = ereg_replace("[���]","e",$var); 
 $var = ereg_replace("[���]","i",$var); 
 $var = ereg_replace("[����]","o",$var); 
 $var = ereg_replace("[���]","u",$var); 
 $var = str_replace("�","c",$var);
 $var = str_replace("_"," ",$var);
 $var = str_replace("-"," ",$var);
 $var = str_replace(",","",$var);
 $var = str_replace("&","e",$var);
 $var = str_replace("?","",$var);
 $var = str_replace('"','',$var);
 $var = str_replace('/','',$var);
 $var = str_replace("'","",$var);
 
 return $var;
 
}

// general custom field update function
add_action('save_post', 'mlv_contextual_update', 1, 2);
add_action('edit_post', 'mlv_contextual_update');
add_action('publish_post', 'mlv_contextual_update');
function mlv_contextual_update($post_id) {
	global $mlv_options, $count_keywords, $topkw_key, $pais, $urlml, $urlmlista;

  // authorization
	if ( !current_user_can('edit_post', $post_id) )
		return $post_id;
	// origination and intention
	if ( !wp_verify_nonce($_POST['bunny-key'], 'bunny') )
		return $post_id;
	
	/*
	//hack para corrigir duplicados
	if (!$post || $post->post_type == 'revision') {
	return;
	}*/
	
	$setting_word = trim($_POST['mlv_word']);
	$setting_id = trim($_POST['mlv_id']);
	$setting_minpr = trim($_POST['mlv_minpr']);
	
	if(!update_post_meta($post_id, 'mlv_word', $setting_word))
	{
		add_post_meta($post_id, 'mlv_word', $setting_word, true);
	}
	if(!update_post_meta($post_id, 'mlv_id', $setting_id))
	{
		add_post_meta($post_id, 'mlv_id', $setting_id, true);
	}
	if(!update_post_meta($post_id, 'mlv_minpr', $setting_minpr))
	{
		add_post_meta($post_id, 'mlv_minpr', $setting_minpr, true);
	}
	
	//caso n�o haja nenhuma palavra chave, ou ID para o post em quest�o
	if((($setting_word)and($setting_id))==''){
		
		//executar script que coleta as top keywords
		$xml_parserkey = xml_parser_create();
		xml_set_element_handler($xml_parserkey, "startElementkey", "endElementkey");
		xml_set_character_data_handler($xml_parserkey, "characterDatakey");

		$baseURL2 = "http://www.".$urlml."/jm/ml.web.pulse.PulsePageController?gzip=y&as_XML";

	//Selecionar Fopen ou Curl
	
	if(function_exists(curl_init)){
	
		$curl = curl_init();
		$timeout = 0;
	
		curl_setopt ($curl, CURLOPT_URL, $baseURL2);
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
	
		$data = curl_exec($curl);
		xml_parse($xml_parserkey, $data) or trigger_error("Erro ao executar o parser");
	
	
		curl_close($curl);
	
	}else{
		
		$fp = fopen($baseURL2,"r") or trigger_error("Erro ao executar o parser"); 

		while($data = fread($fp, 4096)) { 
  			# begin parse 
  			xml_parse($xml_parserkey, $data, feof($fp)) 
  			or die(sprintf("XML error: %s at line %d", 
  			xml_error_string(xml_get_error_code($xml_parserkey)), 
  			xml_get_current_line_number($xml_parserkey))); 
  			# end parse 
		}
	
	fclose($fp); 	
	
	}
		xml_parser_free($xml_parserkey);
	}

}

// Function:Deleta os custom fields
add_action('delete_post', 'mlv_delete_cfields');
function mlv_delete_cfields($post_ID) {
	global $wpdb;
	delete_post_meta($post_ID, 'mlv_word');
	delete_post_meta($post_ID, 'mlv_id');
	delete_post_meta($post_ID, 'mlv_minpr');	
}

//Carrega o CSS no Header
add_action('wp_head', 'mlv_loadcss');
function mlv_loadcss() {
         global $mlv_options;
		 echo '<link rel="stylesheet" href="'.get_bloginfo('url').'/wp-content/plugins/generic-affiliate-system/gas_stylesheet.css" type="text/css" media="screen" />'."\n";
}

//BEGIN LOOP
//include_once ('functions_loop.php');

//Fun��es para gerar o loop coletor de palavras chave

	$count_keywords='1';
	$topkw_key='';
	$count='0';

function startElementkey($parserkey, $name, $attrs) {
	global $tag2, $attrbs, $keyword2;
	$tag2 = $name;
}
	
function endElementkey($parserkey, $name) {
	global $keyword2, $tag2, $count_keywords, $topkw_key;
	if(($name=='KEYWORD')and($count_keywords<='5')){
		$topkw_key='_mlv_topkw'.$count_keywords;
		if(!update_post_meta('1', $topkw_key, $keyword2)){
		add_post_meta('1', $topkw_key, $keyword2, true);
		}
		$keyword2='';
		$count_keywords++;
		$topkw_key='';
	}
}

function characterDatakey($parserkey, $data) {
	global $keyword2, $tag2;
	if ($tag2=="KEYWORD") {
	  $keyword2 .= $data;
	  $keyword2=trim($keyword2);
	  }
}

//Fun��es para gerar o loop coletor de ofertas

function startElement($parser, $name, $attrs) { 
global $insideitem, $tag, $encontrados, $vitrine_ml, $mlv_options;
if ($insideitem) {
$tag = $name; 
} elseif ($name == 'ITEM') { 
$insideitem = true;
}
if ($name == 'LISTING') {
$encontrados .= $attrs['ITEMS_TOTAL'];
if ($encontrados == '0') {
$vitrine_ml.= $mlv_options["mlv_anuncio_alternativo"];
}
}
}



function endElement($parser, $name) { 
global $insideitem, $tag, $title, $link, $price, $image, $currency, $encontrados, $actual, $count, $vitrine_ml, $mlv_options,$palabras, $cat, $mpago, $pais, $urlml, $urlmlista, $lang; 

if ($name == 'ITEM') { 
$actual++;
$count++;

$link = htmlentities($link, ENT_QUOTES);
$image = htmlentities($image, ENT_QUOTES);

  if($mlv_options["mlv_encode"]=='y'){
    $title = htmlentities($title, ENT_QUOTES);
  }

if(($count=='1')and($encontrados>'0')){$vitrine_ml.= "<table id=\"tabela_ml\" cellpadding=\"0\" cellspacing=\"0\"><tr><th class=\"mlv_vititle\" colspan=\"".$mlv_options["mlv_cant"]."\">PPP".$mlv_options['mlv_vititle']."</th></tr>";}

     $vitrine_ml.= "<td class=\"celula_ml\">";
	 if($image != '') {$vitrine_ml.="<a href=\"http://pmstrk.".$urlml."/jm/PmsTrk?tool=".$mlv_options["mlv_afidml"]."&amp;go=http://".$urlmlista."/";
	 if(!empty($palabras)){$vitrine_ml.="$palabras";}
	 if(!empty($cat)){$vitrine_ml.="_CategID_$cat";}
	 if(!empty($minpr)){$vitrine_ml.="_PriceMin_$minpr";} 
	 $vitrine_ml.="_DisplayType_G\" title=\"".$lang["clique"]." $title\" onclick=\"javascript: pageTracker._trackPageview('/mlv_contextual/imagem');\" rel=\"nofollow\" target=\"_blank\"><img src=\"$image\" alt=\"$title\" /></a>";
	}else{
     $vitrine_ml.="<a href=\"http://pmstrk.".$urlml."/jm/PmsTrk?tool=".$mlv_options["mlv_afidml"]."&amp;go=http://".$urlmlista."/";
	 if(!empty($palabras)){$vitrine_ml.="$palabras";}
	 if(!empty($cat)){$vitrine_ml.="_CategID_$cat";}
	 if(!empty($minpr)){$vitrine_ml.="_PriceMin_$minpr";}
	 $vitrine_ml.="_DisplayType_G\" title=\"".$lang["clique"]." $title\" onclick=\"javascript: pageTracker._trackPageview('/mlv_contextual/imagem');\" rel=\"nofollow\" target=\"_blank\"><img src=\"http://img.mercadolivre.com.br/jm/img?s=".$pais."&f=artsinfoto.gif&v=I\" /></a>";
	}
     $vitrine_ml.="<div class=\"title_ml\">$title<br/><a href=\"$link\" title=\"".$lang['mais-info']." $title\" onclick=\"javascript: pageTracker._trackPageview('/mlv_contextual/texto');\" rel=\"nofollow\" target=\"_blank\"><b>Mais info&raquo;</b></a></div>";
	 
	 $vitrine_ml.="<div class=\"preco_ml\">$currency $price<br /></div>";
	 
	 
	 if($mpago=='Y') {
	 	$price_jur=str_replace(",","",$price);
	 	$price_jur=($price_jur*1.35)/18;
	 	$price_jur=number_format($price_jur, 2, ".", "");
	 	$vitrine_ml.="<div class=\"mpago_ml\">".$lang['ate-18']." $price_jur<br /></div>";
	 }
	
	$vitrine_ml.= "</td>";
	
  if($actual == $mlv_options["mlv_ancho"]) { 
  $vitrine_ml.= "</tr>";
  $actual = 0;
  }

	
$title = '';
$link = ''; 
$price = ''; 
$image = ''; 
$currency = ''; 
$insideitem = false;
$mpago='';
}
}


function characterData($parser, $data) { 
global $insideitem, $tag, $title, $link, $price, $image, $currency, $mlv_options, $mpago; 
if ($insideitem) { 
  switch ($tag) { 
  case "TITLE": 
  $title .= str_replace(array('+','/','*','-'),' ',$data);
  $title = str_replace(',',', ',$title);
  $title = trim($title);
  break;
  case "LINK":
  $link .= str_replace("XXX",$mlv_options["mlv_afidml"],$data); 
  $link=trim($link);
  break; 
  case "PRICE": 
  $price .= $data; 
  $price = trim($price); 
  break; 
  case "IMAGE_URL": 
  $image .= $data; 
  $image = trim($image); 
  break; 
  case "CURRENCY": 
  $currency .= $data; 
  $currency = trim($currency); 
  break;
  case "MPAGO":
  $mpago .= $data; 
  $mpago = trim($mpago);
  break;
  } 
} 
}

// END LOOP

//Adiciona a vitrine ap�s os textos
function auto_vc($text){
global $vitrine_ml, $mlv_options, $pais, $lang, $mlv_post_time, $mlv_time;

if((is_single())and($mlv_options["mlv_autoshowlocal"]!='none')){
	$mlv_post_time = get_the_time('U');
	$mlv_time = trim($mlv_options['mlv_time']);
	if($mlv_time=='0') {
		vitrine_contextual();
		//Acima ou abaixo do post?
		if($mlv_options["mlv_autoshowlocal"]=='over'){
		$text=$vitrine_ml.$text;
		}elseif($mlv_options["mlv_autoshowlocal"]=='under'){
		$text.=$vitrine_ml;
		}
	} elseif ($mlv_post_time<=time()-($mlv_time*24*60*60)){
		vitrine_contextual();
		//Acima ou abaixo do post?
		if($mlv_options["mlv_autoshowlocal"]=='over'){
		$text=$vitrine_ml.$text;
		}elseif($mlv_options["mlv_autoshowlocal"]=='under'){
		$text.=$vitrine_ml;
		}
	}
}
return $text;
}

//Fun��o para chamar manualmente
function mlv_contextual($parametrop){ 
global $vitrine_ml, $mlv_options, $s, $pais, $lang, $mlv_post_time, $mlv_time;

	if((is_single())and($mlv_options["mlv_autoshowlocal"]=='none')){
		$mlv_post_time = get_the_time('U');
		$mlv_time = $mlv_options['mlv_time'];
		if($mlv_time=='0') {
		vitrine_contextual($parametrop);
		print $vitrine_ml."\n";
		} elseif ($mlv_post_time<=time()-($mlv_time*24*60*60)){
		vitrine_contextual($parametrop);
		print $vitrine_ml."\n";
		}
	}elseif(!empty($s)){
		vitrine_contextual($parametrop);
		print $vitrine_ml."\n";
	}
}

// Adiciona a op��o no menu Options
function mlv_add_options_page() {
		add_options_page('MLV Contextual Options', 'MLV Contextual', 8, basename(__FILE__), 'mlv_manage_options');
}

function vitrine_contextual($parametrop){
global $bannerXML, $insideitem, $item, $tag, $s, $post, $cat, $palabras, $minpr, $count, $vitrine_ml, $mlv_options, $fil1_array, $fil1_rand, $ord_array, $ord_rand, $mpago, $pais, $urlml, $urlmlista, $lang;



#Enable GZip compression? 
$gzip = 'y';

# Other Configs
$insideitem = false; 
$item = array();
$encontrados='';
$tag = '';
$cat='';
$palabras='';
$minpr='';
$executar_ml='';


	
	$minpr=urlencode(get_post_meta($post->ID, 'mlv_minpr', true));
	$cat=urlencode(get_post_meta($post->ID, 'mlv_id', true));

# COMECO - edicao para suporte do palavras de e moneticao - COMECO
	# inclusao by bernabauer.com
	
	if($mlv_options['mlv_ctxwords'] == 'mlvc') {
		$palabras.=trim(get_post_meta($post->ID, 'mlv_word', true));
	 } else {
		$palabras.=trim(get_post_meta($post->ID, 'mlv_word', true));
		$current_plugins = get_option('active_plugins'); 
		if (!in_array('palavras-de-monetizacao/palavrasmonetizacao.php', $current_plugins)) { 
			$palabras.=trim(get_post_meta($post->ID, 'mlv_word', true));
		} else {
$array_pm = pm_get_words();
$palabras.= str_replace  ( " "  , "+"  , $array_pm[0] );
		}
	}
# FIM - edicao para suporte do palavras de e moneticao - FIM

	if($parametrop == "produtos") {
		
		
	if($palabras != "" ) {	
	
		
$executar_ml = true;

//codigo Rafael (*)	
if($executar_ml){
	
			//se n�o tiver ',' em palabras ent�o considera-se uma �nica palavra chave e faz a busca padr�o (sem densidade)
			if(!strstr($palabras , ',')) { // **** Uma palavra chave  ***

				//acessar xml da BMS (fixo) - para teste , ler xml do link da std
				// caminho do xml 
				$linkXML = 'http://culturalivre.com/wp-content/plugins/generic-affiliate-system/afiliados.xml';
				//$linkXML = 'http://sites.std1.com.br/mlvTeste/exemplo.xml';
				// leitura do xml
				$xmlLoaded = simplexml_load_file($linkXML);


				$encontrouBanner = false;
				$bannerXML="";

				// contador
				$countt = 0;

				$totalEncontrados = 0;

					$vitrine_ml ="<table id=\"tabela_ml\" cellpadding=\"0\" cellspacing=\"0\"><tr><th class=\"mlv_vititle\" colspan=\"3\" ><h3>Ofertas Relacionadas</h3></th></tr>";

					 $vitrine_ml .= "<tr>";    

					 
					 //depois pega os 3 mais relevantes (se tiver)
					 // Todo produto deve ter uma imagem pequena de dimens�es de aproximadamente: 90px por 90px 
					foreach ( $xmlLoaded->children() as $itemDoXML )
					{
						
						//pega informa��es do item
						$nomeXMLXMLauxiliar = (string)$itemDoXML->nome;
						
						
						$descricaoXML= (string)$itemDoXML->descricao;
						
						//preco deve ser em formato com ponto Ex 7.00
						$precoXML=$itemDoXML->preco;
						
						$imagemXML=$itemDoXML->imagem;
						$linkXML = $itemDoXML->link;
						$idProdXML = $itemDoXML->id;
						
						//para cada produto do xml padr�o, verifica se esse produto est� vinculado � palavra chave $palabras
						// OBS: $palabras � UMA palavra chave  min�scula e sem acento (armazenada no mlvContext)
						
						$nomeItemXML = (string)$itemDoXML->nome;
						tiraAcentosAux($nomeItemXML);
						$nomeItemXML=strtolower($nomeItemXML);
						
						
						//palavara(s) chave do xml min�scula e sem acento separadas por v�rgula (padr�o)
						$keyItemXML  =  (string)$itemDoXML->keyword;
						$keysExplodidas=explode("," , $keyItemXML);
								
					
						//m�ximo de tres produtos
						//verifica se palavra chave (�nica) armazenada no mlv Context est� contida no nome ou na lista de keyswords    	
						if( (in_array($palabras , $keysExplodidas) || substr_count($nomeItemXML , $palabras) > 0)  && $totalEncontrados < 3 ) {
							
							
							
							++$totalEncontrados;
							
							//verifica se produto tem banner
							if((string)$itemDoXML->banner != "" && $encontrouBanner == false ){
							$encontrouBanner = true;
							$bannerXML = (string)$itemDoXML->banner;
							
							}
							
							
							
							//armazena esse produto no xml global
							$vitrine_ml .= "<td class=\"celula_ml\">";
							
							
										
							
							
								 $vitrine_ml.="<a href=\"".$linkXML."\" rel=\"nofollow\" target=\"_blank\"><img src=\"$imagemXML\" alt=\"$nomeXMLXMLauxiliar\" /></a>";
					
						
								 $vitrine_ml.="<div class=\"title_ml\">$nomeXMLXMLauxiliar<br/><a href=\"$linkXML\" title=\"Mais info\" rel=\"nofollow\" target=\"_blank\"><b>Mais info&raquo;</b></a></div>";
					 
								$vitrine_ml.="<div class=\"preco_ml\">R$ $precoXML<br /></div>";
						 
					   
					 
							
							$vitrine_ml.= "</td>";		
							
									
							
							
							
						}
						
						// echo "Total Encontrados: ".$totalEncontrados."<br><br><br><br>";   
						
						
						$countt++;
					   
					}
				 
					
					$vitrine_ml .= "</tr>";

					$vitrine_ml.="<tr><th class=\"powered_by\" colspan=\"".$mlv_options["mlv_cant"]."\">Empresa WP Soft - <a href=\"http://wpsoft.com.br/\" title=\"Softwares Online\" target=\"_blank\">Sistemas Online</a>&nbsp;&nbsp;</th></tr>";
					$vitrine_ml.= "</table>";
					
					
					if($totalEncontrados == 0){
						
						//nao encontrou nenhum, faz o que ??
						
					}
					
			
			} else { // **** V�rias palavras chave  ***
				// Realiza a busca considerando todas palavras chave e usando densidade = grau de relacionamento
				//Le todos itens do xml e vai armazenando em uma estrutura de itens em ordem decrescente de grau de relacionamento
				//depois seleciona at� os 3 primeiros (que tiverem maior densidade)
				
				
						
				
				//acessar xml da BMS (fixo) - para teste , ler xml do link da std
				// caminho do xml 
				//$linkXML = 'http://sites.std1.com.br/mlvTeste/exemplo.xml';
				$linkXML = 'http://culturalivre.com/wp-content/plugins/generic-affiliate-system/afiliados.xml';
				// leitura do xml
				$xmlLoaded = simplexml_load_file($linkXML);

				

				
				$countt = 0; //total de produtos

				

									
					//Array que armazenar� os graus de relacionamento de cada produto
					$estruturaProdutos = array();
					$indicei = 0;
					
					 //depois pega os 3 mais relevantes (se tiver)
					 // Todo produto deve ter uma imagem pequena de dimens�es de aproximadamente: 90px por 90px 
					foreach ( $xmlLoaded->children() as $itemDoXML )
					{
												
						$idProdXML = $itemDoXML->id;
						
						//para cada produto do xml padr�o, verifica se esse produto est� vinculado � palavra chave $palabras
						// OBS: $palabras � UMA palavra chave  min�scula e sem acento (armazenada no mlvContext)
						
						$nomeItemXML = (string)$itemDoXML->nome;
						tiraAcentosAux($nomeItemXML);
						$nomeItemXML=strtolower($nomeItemXML);
						
						
						//palavara(s) chave do xml min�scula e sem acento separadas por v�rgula (padr�o)
						$keyItemXML  =  (string)$itemDoXML->keyword;
						$keysExplodidas=explode("," , $keyItemXML);
						

						//calcula o grau de relacionamento entre produto e palavras chave
						//cada vez que uma palavra chave for encontrada nas palavras chave do produto ou no titulo do produto, o grau � aumentado em uma unidade
						
						$grauRelacionamento = 0;
						
						$palabrasExplodidas=explode("," , $palabras);
						for($j = 0 ; $j < count($palabrasExplodidas) ; ++$j){
						
							$palavraCorrente=$palabrasExplodidas[$j];
							
							//verifica nas palavras chave do produto
							if(in_array($palavraCorrente , $keysExplodidas))
									++$grauRelacionamento;
							
							//verifica no t�tulo
							if(substr_count($nomeItemXML , $palavraCorrente) > 0)		
									++$grauRelacionamento;  
						
						}
						
						//Armazena  o produto e a relevancia em uma estrutura de produtos
						$estruturaProdutos["produto_".$indicei] = $grauRelacionamento;
						++$indicei;
											
												
												
						
						$countt++;
					   
					}
				 
					
					//pegar at� os 3 primeiros produtos de vetor produtos
					arsort($estruturaProdutos); 
					$contadorr = 0;
					
					//inicialmente n�o tem nehum
					$produtosRelevantes[0] = -1;   // primeiro mais relevante
					$produtosRelevantes[1] = -1;   // segundo mais relevante
					$produtosRelevantes[2] = -1;   // terceiro mais relevante
					
					foreach ($estruturaProdutos as $chaveP => $valorP) {
						
						if($contadorr > 2) break;
						
						//obter o id do produto que esta em chaveP e armazenar em produtos relevantes
						$chavePexplodida=explode("_" , $chaveP);
						
						if($valorP > 0){ //se tiver relev�ncia
							$produtosRelevantes[$contadorr] = $chavePexplodida[1];
						}		
						
						
						++$contadorr;
					}
					
					// id dos produtos no xml deve come�ar de 0
					
					//Ler novamente o xml e os que tiverem o id == produtosrelevnates, insere na exibi��o 
					$xmlLoadedAgain = simplexml_load_file($linkXML);
					
					$encontrouBanner = false;
					$bannerXML="";
					
					$totalEncontrados = 0;
					$contadorr = 0;  //id do produto
					
					$relevanciaBanner = -1;
					
					$vitrine_ml ="<table id=\"tabela_ml\" cellpadding=\"0\" cellspacing=\"0\"><tr><th class=\"mlv_vititle\" colspan=\"3\" ><h3>Ofertas Relacionadas</h3></th></tr>";

					 $vitrine_ml .= "<tr>";  
					
					
					
					foreach($xmlLoadedAgain->children() as $itemDoXML){
					
					//pega informa��es do item
						$nomeXMLXMLauxiliar = (string)$itemDoXML->nome;
						
						
						$descricaoXML= (string)$itemDoXML->descricao;
						
						//preco deve ser em formato com ponto Ex 7.00
						$precoXML=$itemDoXML->preco;
						
						$imagemXML=$itemDoXML->imagem;
						$linkXML = $itemDoXML->link;
						$idProdXML = $itemDoXML->id;
						
						//para cada produto do xml padr�o, verifica se esse produto est� vinculado � palavra chave $palabras
						// OBS: $palabras � UMA palavra chave  min�scula e sem acento (armazenada no mlvContext)
						
						$nomeItemXML = (string)$itemDoXML->nome;
						tiraAcentosAux($nomeItemXML);
						$nomeItemXML=strtolower($nomeItemXML);
						
						
						//palavara(s) chave do xml min�scula e sem acento separadas por v�rgula (padr�o)
						$keyItemXML  =  (string)$itemDoXML->keyword;
						$keysExplodidas=explode("," , $keyItemXML);
								
					
						//verifica se esse produto � um dos relevantes
						if($contadorr == $produtosRelevantes[0] || $contadorr == $produtosRelevantes[1] || $contadorr == $produtosRelevantes[2]) {
							
							//adiciona							
							++$totalEncontrados;
							
							
							//tenta pegar o banner do produto mais relevente (se ele tiver)
							//verifica se produto tem banner
							if((string)$itemDoXML->banner != "" && $encontrouBanner == false && $relevanciaBanner == -1 ){
								$encontrouBanner = true;
								$bannerXML = (string)$itemDoXML->banner;
								
								if($contadorr == $produtosRelevantes[0])
								$relevanciaBanner = 0;
								else if($contadorr == $produtosRelevantes[1])
								$relevanciaBanner = 1;
								else if($contadorr == $produtosRelevantes[2])
								$relevanciaBanner = 2;
								
							} else if((string)$itemDoXML->banner != "" && $encontrouBanner == true  && ($relevanciaBanner == 1 || $relevanciaBanner == 2 )){
								
								//se o produto corrente tiver maior relevancia, tenta trocar
							    if($contadorr == $produtosRelevantes[0]) {
									
									$bannerXML = (string)$itemDoXML->banner;
									$relevanciaBanner = 0;
								}
							
							}
							
							
														
							 //armazena esse produto no xml global
							 $vitrine_ml .= "<td class=\"celula_ml\">";
							
							 $vitrine_ml.="<a href=\"".$linkXML."\" rel=\"nofollow\" onclick=\"javascript:_gaq.push(['_trackEvent','vitrine-rodape','".$linkXML."']);\" target=\"_blank\"><img src=\"$imagemXML\" alt=\"$nomeXMLXMLauxiliar\" /></a>";
										
							 $vitrine_ml.="<div class=\"title_ml\">$nomeXMLXMLauxiliar<br/><a href=\"$linkXML\" title=\"Mais info\" rel=\"nofollow\" target=\"_blank\"><b>Mais info&raquo;</b></a></div>";
					 
         					 $vitrine_ml.="<div class=\"preco_ml\">R$ $precoXML<br /></div>";
				
		  					 $vitrine_ml.= "</td>";								
							
						}					
						
						$contadorr++;					
					
					}				
					
					
					$vitrine_ml .= "</tr>";

					$vitrine_ml.="<tr><th class=\"powered_by\" colspan=\"".$mlv_options["mlv_cant"]."\">Empresa WP Soft - <a href=\"http://wpsoft.com.br/\" title=\"Softwares Online\" target=\"_blank\">Sistemas Online</a>&nbsp;&nbsp;</th></tr>";
					$vitrine_ml.= "</table>";
					
					
					if($totalEncontrados == 0){
						
						//nao encontrou nenhum, faz o que ??
						
					}
					

				
			
			}
	
	} // fim executar ml

  } 
} else {  //exibe o banner   //colocar exibi��o de banner com if 1 palavra ou v�rias
	

				$vitrine_ml = "";
	
	 				if($palabras != "" ) {

								//$linkXML = 'http://sites.std1.com.br/mlvTeste/exemplo.xml';
								$linkXML = 'http://culturalivre.com/wp-content/plugins/generic-affiliate-system/afiliados.xml';
								// 	leitura do xml
								$xmlLoaded = simplexml_load_file($linkXML);
								$encontrouBanner = false;
								$bannerXML="";
								
								$linkk_XML="";
								
								$totalEncontrados = 0;
							

								if(!strstr($palabras , ',')) { // **** Uma palavra chave  ***	
															
								 foreach ( $xmlLoaded->children() as $itemDoXML )
										{
											
											$nomeItemXML = (string)$itemDoXML->nome;
											tiraAcentosAux($nomeItemXML);
											$nomeItemXML=strtolower($nomeItemXML);
											
											$keyItemXML  =  (string)$itemDoXML->keyword;
											$keysExplodidas=explode("," , $keyItemXML);
											
											if( (in_array($palabras , $keysExplodidas) || substr_count($nomeItemXML , $palabras) > 0)  && $totalEncontrados < 1 ) {
													
												++$totalEncontrados;
												
												//verifica se produto tem banner
												if((string)$itemDoXML->banner != "" && $encontrouBanner == false ){
													$encontrouBanner = true;
													$bannerXML = (string)$itemDoXML->banner;
													$linkk_XML = (string)$itemDoXML->link;
												}
												
												
											}
											
										}
								
									//chama a imagem
									if($bannerXML != ""){ 
										
										echo "<a onclick=\"javascript:_gaq.push(['_trackEvent','banner-lateral', '".$linkk_XML."']);\" href='".$linkk_XML."' target='_blank' rel='nofollow' > <img src='".$bannerXML."' /> </a>";  
									}  	
									

									
							    } else { //V�rias Palavras																							
															
								 $countt = 0;
								 $indicei = 0;
								 $maiorGR = 0;
								 
								 foreach ( $xmlLoaded->children() as $itemDoXML )
										{
											
											
											$idProdXML = $itemDoXML->id;
						
											//para cada produto do xml padr�o, verifica se esse produto est� vinculado � palavra chave $palabras
											// OBS: $palabras � UMA palavra chave  min�scula e sem acento (armazenada no mlvContext)
											
											$nomeItemXML = (string)$itemDoXML->nome;
											tiraAcentosAux($nomeItemXML);
											$nomeItemXML=strtolower($nomeItemXML);
											
											
											//palavara(s) chave do xml min�scula e sem acento separadas por v�rgula (padr�o)
											$keyItemXML  =  (string)$itemDoXML->keyword;
											$keysExplodidas=explode("," , $keyItemXML);
											

											//calcula o grau de relacionamento entre produto e palavras chave
											//cada vez que uma palavra chave for encontrada nas palavras chave do produto ou no titulo do produto, o grau � aumentado em uma unidade
											
											$grauRelacionamento = 0;
											
											$palabrasExplodidas=explode("," , $palabras);
											for($j = 0 ; $j < count($palabrasExplodidas) ; ++$j){
											
												$palavraCorrente=$palabrasExplodidas[$j];
												
												//verifica nas palavras chave do produto
												if(in_array($palavraCorrente , $keysExplodidas))
														++$grauRelacionamento;
												
												//verifica no t�tulo
												if(substr_count($nomeItemXML , $palavraCorrente) > 0)		
														++$grauRelacionamento;  
											
											}
											
											//busca produto com maior gr
											if($countt == 0){//considera primeiro como maior gr e se tiver banner pega o dele
												
													$maiorGR = $grauRelacionamento;
													
													//verifica se produto tem banner
													if((string)$itemDoXML->banner != "" && $grauRelacionamento > 0 ){
														$encontrouBanner = true;
														$bannerXML = (string)$itemDoXML->banner;
														$linkk_XML = (string)$itemDoXML->link;
						
													}										
											} else { //verifica se tem um grau de relacionamento maior
											
												if($grauRelacionamento > $maiorGR) {
													
													$maiorGR = $grauRelacionamento;
													
													if((string)$itemDoXML->banner != "" && $grauRelacionamento > 0) {
														$encontrouBanner = true;
														$bannerXML = (string)$itemDoXML->banner;
														$linkk_XML = (string)$itemDoXML->link;
													}
													
												
												}
											
											
											}
											
											
											
											++$indicei;										
											$countt++;									
										
										}
								
									//chama a imagem
									if($bannerXML != ""){ 
										
										echo "<a onclick=\"javascript:_gaq.push(['_trackEvent','banner-lateral', '".$linkk_XML."']);\" href='".$linkk_XML."' target='_blank' rel='nofollow' > <img src='".$bannerXML."' /> </a>";  
										
									}  									
									
								
								}
								
	 					
	 				} //fim if
	
} 
  
}

// Tela do Painel
function mlv_manage_options() {
  global $mlv_options, $lang;
  if (isset($_POST['mlv_atualizar'])) {
 	$mlv_options["mlv_pais"] = $_POST["mlv_pais"];
	$mlv_options["mlv_ctxwords"] = $_POST["mlv_ctxwords"];
	$mlv_options["mlv_autoshowlocal"] = $_POST["mlv_autoshowlocal"];
	$mlv_options["mlv_time"] = $_POST["mlv_time"];	
	$mlv_options["mlv_afidml"] = $_POST["mlv_afidml"];
	$mlv_options["mlv_vititle"] = $_POST["mlv_vititle"];
	$mlv_options["mlv_cant"] = $_POST["mlv_cant"];
	$mlv_options["mlv_ancho"] = $_POST["mlv_ancho"];
	$mlv_options["mlv_ord"] = $_POST["mlv_ord"];
	$mlv_options["mlv_fil1"] = $_POST["mlv_fil1"];
	$mlv_options["mlv_fil2"] = $_POST["mlv_fil2"];
	$mlv_options["mlv_anuncio_alternativo"] = stripslashes($_POST["mlv_anuncio_alternativo"]);
	$mlv_options["mlv_encode"] = $_POST["mlv_encode"];
	update_option('mlv_options', $mlv_options);
    ?>
    <div class="updated">
      <p>
        <strong>
          Dados atualizados com sucesso.
        </strong>
      </p>
    </div>
    <?php
  }
  ?>
  <style type="text/css">
  <!--
  label { display:block; width:350px; margin-right:20px; float:left; }
  //-->
  </style>
  <div class="wrap">
    <h2>MLV Contextual</h2>
      <form method="post">
	  
    <table class="form-table">
	 <tr>
		<th scope="row" valign="top">Pa�s:</th>
		<td>
		  <select name="mlv_pais" id="mlv_pais">
		    <option <?php if($mlv_options['mlv_pais'] == 'mla') { echo 'selected'; } ?> value="mla">Argentina</option>
        	<option <?php if($mlv_options['mlv_pais'] == 'mlb') { echo 'selected'; } ?> value="mlb">Brasil</option>
        	<option <?php if($mlv_options['mlv_pais'] == 'mlc') { echo 'selected'; } ?> value="mlc">Chile</option>
		    <option <?php if($mlv_options['mlv_pais'] == 'mlo') { echo 'selected'; } ?> value="mlo">Col�mbia</option>
        	<option <?php if($mlv_options['mlv_pais'] == 'mlm') { echo 'selected'; } ?> value="mlm">M�xico</option>
        	<option <?php if($mlv_options['mlv_pais'] == 'mlv') { echo 'selected'; } ?> value="mlv">Venezuela</option>
		  </select>
		</td>
	 </tr>
	</table>

    <table class="form-table">
	 <tr>
		<th scope="row" valign="top"><?php echo $lang['origem-cont']; ?>:</th>
		<td>
		  <select name="mlv_ctxwords" id="mlv_ctxwords">
		    <option <?php if($mlv_options['mlv_ctxwords'] == 'mlvc') { echo 'selected'; } ?> value="mlvc">MLV Contextual</option>
        	<option <?php if($mlv_options['mlv_ctxwords'] == 'pm') { echo 'selected'; } ?> value="pm"><?php echo $lang['pals-monet']; ?></option>
		  </select> <br /> 
			<?php 
				$current_plugins = get_option('active_plugins'); 
				if (!in_array('palavras-de-monetizacao/palavrasmonetizacao.php', $current_plugins)) { 
			
			echo $lang['necess-plugin'];
		
		} else { 

			echo $lang['apto-pmon'];
		
		} ?>
		</td>
	 </tr>
	</table>

    <table class="form-table">
	 <tr>
		<th scope="row" valign="top"><?php echo $lang['id-af-ml']; ?>:</th>
		<td>
          <input name="mlv_afidml" type="text" id="mlv_afidml" value="<?=$mlv_options['mlv_afidml'];?>" size="25" maxlength="25" />
		</td>
	 </tr>
	</table>
	
	    <table class="form-table">
	 <tr>
		<th scope="row" valign="top"><?php echo $lang['exibir-auto']; ?>:</th>
		<td>
		  <select name="mlv_autoshowlocal" id="mlv_autoshowlocal">
		    <option <?php if($mlv_options['mlv_autoshowlocal'] == 'over') { echo 'selected'; } ?> value="over"><?php echo $lang['acima-post']; ?></option>
        	<option <?php if($mlv_options['mlv_autoshowlocal'] == 'under') { echo 'selected'; } ?> value="under"><?php echo $lang['abaixo-post']; ?></option>
        	<option <?php if($mlv_options['mlv_autoshowlocal'] == 'none') { echo 'selected'; } ?> value="none"><?php echo $lang['vou-manual']; ?></option>
		  </select>
		</td>
	 </tr>
	</table>
	
	    <table class="form-table">
	 <tr>
		<th scope="row" valign="top"><?php echo $lang['dias']; ?>:</th>
		<td>
		  <select name="mlv_time" id="mlv_time">
		    <option <?php if($mlv_options['mlv_time'] == '0') { echo 'selected'; } ?> value="0"><?php echo $lang['0']; ?></option>
        	<option <?php if($mlv_options['mlv_time'] == '7') { echo 'selected'; } ?> value="7"><?php echo $lang['7']; ?></option>
        	<option <?php if($mlv_options['mlv_time'] == '15') { echo 'selected'; } ?> value="15"><?php echo $lang['15']; ?></option>
			<option <?php if($mlv_options['mlv_time'] == '30') { echo 'selected'; } ?> value="30"><?php echo $lang['30']; ?></option>
		  </select>
		</td>
	 </tr>
	</table>
	
	<table class="form-table">
	 <tr>
		<th scope="row" valign="top"><?php echo $lang['title-vitr']; ?>:</th>
		<td>
          <input name="mlv_vititle" type="text" id="mlv_vititle" value="<?=$mlv_options['mlv_vititle'];?>" size="40" maxlength="40" />
		</td>
	 </tr>
	</table>

    <table class="form-table">
	 <tr>
		<th scope="row" valign="top"><?php echo $lang['quant-ofertas']; ?>:</th>
		<td>
		  <select name="mlv_cant" id="mlv_cant">
		    <option <?php if($mlv_options['mlv_cant'] == '0') { echo 'selected'; } ?> value="0"><?php echo $lang['selecione']; ?></option>
        	<option <?php if($mlv_options['mlv_cant'] == '1') { echo 'selected'; } ?> value="1">1</option>
			<option <?php if($mlv_options['mlv_cant'] == '2') { echo 'selected'; } ?> value="2">2</option>
			<option <?php if($mlv_options['mlv_cant'] == '3') { echo 'selected'; } ?> value="3">3</option>
			<option <?php if($mlv_options['mlv_cant'] == '4') { echo 'selected'; } ?> value="4">4</option>
			<option <?php if($mlv_options['mlv_cant'] == '5') { echo 'selected'; } ?> value="5">5</option>
			<option <?php if($mlv_options['mlv_cant'] == '6') { echo 'selected'; } ?> value="6">6</option>
			<option <?php if($mlv_options['mlv_cant'] == '7') { echo 'selected'; } ?> value="7">7</option>
			<option <?php if($mlv_options['mlv_cant'] == '8') { echo 'selected'; } ?> value="8">8</option>
			<option <?php if($mlv_options['mlv_cant'] == '9') { echo 'selected'; } ?> value="9">9</option>
			<option <?php if($mlv_options['mlv_cant'] == '10') { echo 'selected'; } ?> value="10">10</option>
		  </select>

		</td>
	 </tr>
	</table>

    

    <table class="form-table">
	 <tr>
		<th scope="row" valign="top"><?php echo $lang['quant-ofertas-linha']; ?>:</th>
		<td>
		  <select name="mlv_ancho" id="mlv_ancho">
		    <option <?php if($mlv_options['mlv_ancho'] == '0') { echo 'selected'; } ?> value="0"><?php echo $lang['selecione']; ?></option>
        	<option <?php if($mlv_options['mlv_ancho'] == '1') { echo 'selected'; } ?> value="1">1</option>
			<option <?php if($mlv_options['mlv_ancho'] == '2') { echo 'selected'; } ?> value="2">2</option>
			<option <?php if($mlv_options['mlv_ancho'] == '3') { echo 'selected'; } ?> value="3">3</option>
			<option <?php if($mlv_options['mlv_ancho'] == '4') { echo 'selected'; } ?> value="4">4</option>
			<option <?php if($mlv_options['mlv_ancho'] == '5') { echo 'selected'; } ?> value="5">5</option>
			<option <?php if($mlv_options['mlv_ancho'] == '6') { echo 'selected'; } ?> value="6">6</option>
			<option <?php if($mlv_options['mlv_ancho'] == '7') { echo 'selected'; } ?> value="7">7</option>
			<option <?php if($mlv_options['mlv_ancho'] == '8') { echo 'selected'; } ?> value="8">8</option>
			<option <?php if($mlv_options['mlv_ancho'] == '9') { echo 'selected'; } ?> value="9">9</option>
			<option <?php if($mlv_options['mlv_ancho'] == '10') { echo 'selected'; } ?> value="10">10</option>
		  </select>
		</td>
	 </tr>
	</table>

    <table class="form-table">
	 <tr>
		<th scope="row" valign="top"><?php echo $lang['ord-por']; ?>:</th>
		<td>
		  <select name="mlv_ord" id="mlv_ord">
		    <option <?php if($mlv_options['mlv_ord'] == '') { echo 'selected'; } ?> value=""><?php echo $lang['selecione']; ?></option>
        	<option <?php if($mlv_options['mlv_ord'] == 'AUCTION_STOP') { echo 'selected'; } ?> value="AUCTION_STOP"><?php echo $lang['temp-rest']; ?></option>
			<option <?php if($mlv_options['mlv_ord'] == 'ITEM_TITLE') { echo 'selected'; } ?> value="ITEM_TITLE"><?php echo $lang['alfab']; ?></option>
			<option <?php if($mlv_options['mlv_ord'] == 'HIT_PAGE') { echo 'selected'; } ?> value="HIT_PAGE">Visitas</option>
			<option <?php if($mlv_options['mlv_ord'] == 'MENOS_OFERTADOS') { echo 'selected'; } ?> value="MENOS_OFERTADOS">Menos vendidos</option>
			<option <?php if($mlv_options['mlv_ord'] == 'MAS_OFERTADOS') { echo 'selected'; } ?> value="MAS_OFERTADOS"><?php echo $lang['mais-ven']; ?></option>
			<option <?php if($mlv_options['mlv_ord'] == 'BARATOS') { echo 'selected'; } ?> value="BARATOS"><?php echo $lang['mais-bar']; ?></option>
			<option <?php if($mlv_options['mlv_ord'] == 'CAROS') { echo 'selected'; } ?> value="CAROS"><?php echo $lang['mais-car']; ?></option>
			<option <?php if($mlv_options['mlv_ord'] == 'R') { echo 'selected'; } ?> value="R"><?php echo $lang['rand']; ?></option>
		  </select>
		</td>
	 </tr>
	</table>

    <table class="form-table">
	 <tr>
		<th scope="row" valign="top"><?php echo $lang['filtro-1']; ?>:</th>
		<td>
		  <select name="mlv_fil1" id="mlv_fil1">
		    <option <?php if($mlv_options['mlv_fil1'] == '') { echo 'selected'; } ?> value=""><?php echo $lang['nenhum']; ?></option>
        	<option <?php if($mlv_options['mlv_fil1'] == '24_HS') { echo 'selected'; } ?> value="24_HS"><?php echo $lang['fin-24h']; ?></option>
			<option <?php if($mlv_options['mlv_fil1'] == 'PRECIO_FIJO') { echo 'selected'; } ?> value="PRECIO_FIJO"><?php echo $lang['preco-fix']; ?></option>
			<option <?php if($mlv_options['mlv_fil1'] == 'SOLO_SUBASTAS') { echo 'selected'; } ?> value="SOLO_SUBASTAS"><?php echo $lang['leilao']; ?></option>
			<option <?php if($mlv_options['mlv_fil1'] == 'UN_PESO') { echo 'selected'; } ?> value="UN_PESO"><? echo $lang['comec-1']; ?></option>
			<option <?php if($mlv_options['mlv_fil1'] == 'RECIEN_EMPIEZAN') { echo 'selected'; } ?> value="RECIEN_EMPIEZAN"><?php echo $lang['comec-hoje']; ?></option>
			<option <?php if($mlv_options['mlv_fil1'] == 'CERTIFIED') { echo 'selected'; } ?> value="CERTIFIED">MercadoL&iacute;deres</option>
			<option <?php if($mlv_options['mlv_fil1'] == 'NUEVO') { echo 'selected'; } ?> value="NUEVO"><?php echo $lang['prods-novs']; ?></option>
			<option <?php if($mlv_options['mlv_fil1'] == 'USADO') { echo 'selected'; } ?> value="USADO"><?php echo $lang['prods-usads']; ?></option>
			<option <?php if($mlv_options['mlv_fil1'] == 'MPAGO') { echo 'selected'; } ?> value="MPAGO"><?php echo $lang['aceitam-mp']; ?></option>	
			<option <?php if($mlv_options['mlv_fil1'] == 'R') { echo 'selected'; } ?> value="R"><?php echo $lang['rand']; ?></option>	
		  </select>
		</td>
	 </tr>
	</table>

    <table class="form-table">
	 <tr>
		<th scope="row" valign="top"><?php echo $lang['filtro-2']; ?>:</th>
		<td>
		  <select name="mlv_fil2" id="mlv_fil2">
		    <option <?php if($mlv_options['mlv_fil2'] == '') { echo 'selected'; } ?> value=""><?php echo $lang['nenhum']; ?></option>
        	<option <?php if($mlv_options['mlv_fil2'] == '24_HS') { echo 'selected'; } ?> value="24_HS"><?php echo $lang['fin-24h']; ?></option>
			<option <?php if($mlv_options['mlv_fil2'] == 'PRECIO_FIJO') { echo 'selected'; } ?> value="PRECIO_FIJO"><?php echo $lang['preco-fix']; ?></option>
			<option <?php if($mlv_options['mlv_fil2'] == 'SOLO_SUBASTAS') { echo 'selected'; } ?> value="SOLO_SUBASTAS"><?php echo $lang['leilao']; ?></option>
			<option <?php if($mlv_options['mlv_fil2'] == 'UN_PESO') { echo 'selected'; } ?> value="UN_PESO"><? echo $lang['comec-1']; ?></option>
			<option <?php if($mlv_options['mlv_fil2'] == 'RECIEN_EMPIEZAN') { echo 'selected'; } ?> value="RECIEN_EMPIEZAN"><?php echo $lang['comec-hoje']; ?></option>
			<option <?php if($mlv_options['mlv_fil2'] == 'CERTIFIED') { echo 'selected'; } ?> value="CERTIFIED">MercadoL&iacute;deres</option>
			<option <?php if($mlv_options['mlv_fil2'] == 'NUEVO') { echo 'selected'; } ?> value="NUEVO"><?php echo $lang['prods-novs']; ?></option>
			<option <?php if($mlv_options['mlv_fil2'] == 'USADO') { echo 'selected'; } ?> value="USADO"><?php echo $lang['prods-usads']; ?></option>
			<option <?php if($mlv_options['mlv_fil2'] == 'MPAGO') { echo 'selected'; } ?> value="MPAGO"><?php echo $lang['aceitam-mp']; ?></option>	
		  </select>
		</td>
	 </tr>
	</table>

    <table class="form-table">
	 <tr>
		<th scope="row" valign="top"><?php echo $lang['anunc-alt']; ?></th>
		<td>
          <textarea name="mlv_anuncio_alternativo" id="mlv_anuncio_alternativo" cols="70" rows="6" ><?=stripslashes($mlv_options['mlv_anuncio_alternativo']);?></textarea>
		</td>
	 </tr>
	</table>

    <table class="form-table">
	 <tr>
		<th scope="row" valign="top"><?php echo $lang['so-prob-acent']; ?></th>
		<td>
		  <select name="mlv_encode" id="mlv_encode">
        	<option <?php if($mlv_options['mlv_encode'] == 'y') { echo 'selected'; } ?> value="y"><?php echo $lang['sim']; ?></option>
			<option <?php if($mlv_options['mlv_encode'] == 'n') { echo 'selected'; } ?> value="n"><?php echo $lang['nao']; ?></option>
		  </select>
		</td>
	 </tr>
	</table>

		  <br/>
		  <br/>
           <div class="submit" style="text-align: left;margin-top:10px">
            <input type="submit" name="mlv_atualizar" value="Atualizar" />
          </div>
      </form>
  </div>
<?php
}




// Actions and Filters
add_action('admin_menu', 'mlv_add_options_page');
add_filter('the_content', 'auto_vc');
?>