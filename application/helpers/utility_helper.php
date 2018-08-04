<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     if ( ! function_exists('asset_url()'))
     {
       function asset_url()
       {
          return base_url().'assets/';
       }
     }
	 
	 if ( ! function_exists('upload_url()'))
     {
       function upload_url()
       {
          return base_url().'uploads/';
       }
     }
	 
	 function get_processing_order_id()
	 {
		 		     $ci =& get_instance();
					 $ci->load->model("admin/OrderStatus_model");
					 return $ci->OrderStatus_model->get_order_status_processing()->OrderStatusId;
					 
	 }
	 
	 function IsAdminLogin()
	 {
		 $ci=&get_instance();
		 if($ci->session->has_userdata("login"))
		 {
			 return TRUE;
		 }
		 return FALSE;
	 }
	 
	 function IsLogin()
	 {
		if(IsAdminLogin()==FALSE)
		{
			
			redirect("admin/account/login");
		}
	 }
	 
	 //Pakistan Cities List
	 function get_city_dropdown()
	 {
		 echo '<option value="ABBOTABAD" >ABBOTABAD</option><option value="ABDUL HAKIM" >ABDUL HAKIM</option><option value="ADDA BUN BOSAN" >ADDA BUN BOSAN</option><option value="ADDA LAR" >ADDA LAR</option><option value="ADDA ZAKHEERA" >ADDA ZAKHEERA</option><option value="AHMED PUR EAST" >AHMED PUR EAST</option><option value="AHMED PUR LAMMA" >AHMED PUR LAMMA</option><option value="AHMED PUR SIAL " >AHMED PUR SIAL </option><option value="ALI PUR CHATTA" >ALI PUR CHATTA</option><option value="ALIPUR" >ALIPUR</option><option value="AMINPUR BANGLOW" >AMINPUR BANGLOW</option><option value="ARIF WALA" >ARIF WALA</option><option value="ATTOCK" >ATTOCK</option><option value="AWARAN" >AWARAN</option><option value="BADIN" >BADIN</option><option value="BAGH" >BAGH</option><option value="BAHAWALNAGAR" >BAHAWALNAGAR</option><option value="BAHAWALPUR" >BAHAWALPUR</option><option value="BAJWAR " >BAJWAR </option><option value="BANGLOW GOGERA" >BANGLOW GOGERA</option><option value="BANNU" >BANNU</option><option value="BARA KAHU" >BARA KAHU</option><option value="BARKHAN" >BARKHAN</option><option value="BARNALA" >BARNALA</option><option value="BASIR PUR" >BASIR PUR</option><option value="BATKHELA" >BATKHELA</option><option value="BATTGRAM" >BATTGRAM</option><option value="BELA" >BELA</option><option value="BHAI PHARU" >BHAI PHARU</option><option value="BHAKKAR" >BHAKKAR</option><option value="BHALWAL" >BHALWAL</option><option value="BHAWANA" >BHAWANA</option><option value="BHERA" >BHERA</option><option value="BHIMBER" >BHIMBER</option><option value="BHIRIA CITY" >BHIRIA CITY</option><option value="BHIRIA ROAD" >BHIRIA ROAD</option><option value="BHIT SHAH" >BHIT SHAH</option><option value="BUCHIANA MANDI" >BUCHIANA MANDI</option><option value="BUDHLA SANT" >BUDHLA SANT</option><option value="BUNAIR" >BUNAIR</option><option value="BUREWALA" >BUREWALA</option><option value="CHACHRO" >CHACHRO</option><option value="CHAK JHUMRA" >CHAK JHUMRA</option><option value="CHAK SAWARI" >CHAK SAWARI</option><option value="CHAKWAL" >CHAKWAL</option><option value="CHAMAN" >CHAMAN</option><option value="CHARSADDA" >CHARSADDA</option><option value="CHASHMA" >CHASHMA</option><option value="CHAWINDA" >CHAWINDA</option><option value="CHENAB NAGAR" >CHENAB NAGAR</option><option value="CHICHAWATNI" >CHICHAWATNI</option><option value="CHINIOT" >CHINIOT</option><option value="CHISHTIAN" >CHISHTIAN</option><option value="CHITRAL" >CHITRAL</option><option value="CHOA SYDEN SHAH" >CHOA SYDEN SHAH</option><option value="CHOHAR JAMALI" >CHOHAR JAMALI</option><option value="CHOR CANTT" >CHOR CANTT</option><option value="CHOWK AZAM" >CHOWK AZAM</option><option value="CHOWK SARWER SHAHEED" >CHOWK SARWER SHAHEED</option><option value="CHUNIAN" >CHUNIAN</option><option value="DADU" >DADU</option><option value="DADYAL (A.K)" >DADYAL (A.K)</option><option value=" DAHARKI" > DAHARKI</option><option value="DAHRANWALA" >DAHRANWALA</option><option value="DAKOTA" >DAKOTA</option><option value="DALBANDIN" >DALBANDIN</option><option value="DARA ADM KHEL" >DARA ADM KHEL</option><option value="DARGAI" >DARGAI</option><option value="DARY KHAN" >DARY KHAN</option><option value="DASKA" >DASKA</option><option value="DAUD KHEL" >DAUD KHEL</option><option value="DAULATPUR" >DAULATPUR</option><option value="DEPAL PUR" >DEPAL PUR</option><option value="DERA ALLAHYAR" >DERA ALLAHYAR</option><option value="DERA GHAZI KHAN" >DERA GHAZI KHAN</option><option value="DERA ISMAIL KHAN" >DERA ISMAIL KHAN</option><option value="DERAMURAD JAMAL" >DERAMURAD JAMAL</option><option value="DHANOT" >DHANOT</option><option value="DHODHAK" >DHODHAK</option><option value="DHUDIAL" >DHUDIAL</option><option value="DIGRI" >DIGRI</option><option value="DIJKOT" >DIJKOT</option><option value="DINA" >DINA</option><option value="DINGA" >DINGA</option><option value="DOKRI" >DOKRI</option><option value="DOLAT NAGAR" >DOLAT NAGAR</option><option value="DOUR" >DOUR</option><option value="DUKKI" >DUKKI</option><option value="DULLE WALA" >DULLE WALA</option><option value="DUNYA PUR" >DUNYA PUR</option><option value="ELLAH ABAD" >ELLAH ABAD</option><option value="FAISALABAD" >FAISALABAD</option><option value="FARROQABAD" >FARROQABAD</option><option value="FATEH JANG" >FATEH JANG</option><option value="FATEHPUR" >FATEHPUR</option><option value="FAZIL PUR" >FAZIL PUR</option><option value="FEROZ WATOWAN" >FEROZ WATOWAN</option><option value="FEROZA" >FEROZA</option><option value="FORTE ABBAS" >FORTE ABBAS</option><option value="GADOON AMAZAI" >GADOON AMAZAI</option><option value="GAGGO MANDI" >GAGGO MANDI</option><option value="GAMBAT" >GAMBAT</option><option value="GARH MOR" >GARH MOR</option><option value="GARI KHAIRO" >GARI KHAIRO</option><option value="GARI YASIN" >GARI YASIN</option><option value="GAWADAR" >GAWADAR</option><option value="GHAKAR " >GHAKAR </option><option value="GHARO" >GHARO</option><option value="GHAZI ABAD" >GHAZI ABAD</option><option value="GHOTKI" >GHOTKI</option><option value="GHOUS PUR" >GHOUS PUR</option><option value="GILGIT" >GILGIT</option><option value="GOJRA" >GOJRA</option><option value="GOLARCHI" >GOLARCHI</option><option value="GUDDU" >GUDDU</option><option value="GUJARKHAN" >GUJARKHAN</option><option value="GUJRANWALA" >GUJRANWALA</option><option value="GUJRAT" >GUJRAT</option><option value="HAFIZABAD" >HAFIZABAD</option><option value="HAJIRA" >HAJIRA</option><option value="HALA" >HALA</option><option value="HANGU" >HANGU</option><option value="HARIPUR" >HARIPUR</option><option value="HARNOULI" >HARNOULI</option><option value="HAROONABAD" >HAROONABAD</option><option value="HASILPUR" >HASILPUR</option><option value="HASSAN ABDAL" >HASSAN ABDAL</option><option value="HATTER" >HATTER</option><option value="HAVELLIAN" >HAVELLIAN</option><option value="HAZRO" >HAZRO</option><option value="HUB" >HUB</option><option value="HUJRA SHAMUQEEM" >HUJRA SHAMUQEEM</option><option value="HUMAK" >HUMAK</option><option value="HUNZA" >HUNZA</option><option value="HYDERABAD" >HYDERABAD</option><option value="IQBAL NAGAR" >IQBAL NAGAR</option><option value="ISKANDARABAD" >ISKANDARABAD</option><option value="ISLAMABAD" >ISLAMABAD</option><option value="ISLAMKOT" >ISLAMKOT</option><option value="ISSA KHEL" >ISSA KHEL</option><option value="JACOBABAD" >JACOBABAD</option><option value="JALAL PUR BHATTIAN" >JALAL PUR BHATTIAN</option><option value="JALALPUR JATTAN" >JALALPUR JATTAN</option><option value="JALALPURPIRWALA" >JALALPURPIRWALA</option><option value="JAMALDIN WALI" >JAMALDIN WALI</option><option value="JAMPUR" >JAMPUR</option><option value="JAMSHORO" >JAMSHORO</option><option value="JAND WALA" >JAND WALA</option><option value="JARANWALA" >JARANWALA</option><option value="JARWAR" >JARWAR</option><option value="JATOI" >JATOI</option><option value="JAWARIAN" >JAWARIAN</option><option value="JHANG" >JHANG</option><option value="JHANGIRA" >JHANGIRA</option><option value="JHANIAN" >JHANIAN</option><option value="JHAT PAT" >JHAT PAT</option><option value="JHELUM" >JHELUM</option><option value="JOUHARABAD" >JOUHARABAD</option><option value="KABIR WALA" >KABIR WALA</option><option value="KACHA KHO" >KACHA KHO</option><option value="KAHOTA" >KAHOTA</option><option value="KALA BAGH" >KALA BAGH</option><option value="KALA SHAH KAKU" >KALA SHAH KAKU</option><option value="KALAR KAHAR" >KALAR KAHAR</option><option value="KALAT" >KALAT</option><option value="KALOOR KOT" >KALOOR KOT</option><option value="KAMALIA" >KAMALIA</option><option value="KAMBAR ALI KHAN" >KAMBAR ALI KHAN</option><option value="KAMER MOSHANI" >KAMER MOSHANI</option><option value="KAMOKE" >KAMOKE</option><option value="KANA NAU" >KANA NAU</option><option value="KANDH KOT" >KANDH KOT</option><option value="KANDIARI" >KANDIARI</option><option value="KANDYARO" >KANDYARO</option><option value="KARACHI" >KARACHI</option><option value="KARAK" >KARAK</option><option value="KAROR LALESAN" >KAROR LALESAN</option><option value="KAROR PAKKA" >KAROR PAKKA</option><option value="KASHMORE" >KASHMORE</option><option value="KASOWAL" >KASOWAL</option><option value="KASUR" >KASUR</option><option value="KATLANG" >KATLANG</option><option value="KHAIPUR TAMEWAL" >KHAIPUR TAMEWAL</option><option value="KHAIR PUR TAMIANWALI" >KHAIR PUR TAMIANWALI</option><option value="KHAIRPUR" >KHAIRPUR</option><option value="KHAIRPUR NATHAN" >KHAIRPUR NATHAN</option><option value="KHAN BELA" >KHAN BELA</option><option value="KHANEWAL" >KHANEWAL</option><option value="KHANPUR" >KHANPUR</option><option value="KHANQA SHARIF" >KHANQA SHARIF</option><option value="KHAPLU" >KHAPLU</option><option value="KHARAN" >KHARAN</option><option value="KHARIAN" >KHARIAN</option><option value="KHARIAN CANTT" >KHARIAN CANTT</option><option value="KHAZAKHELA" >KHAZAKHELA</option><option value="KHEWRA DANDOT" >KHEWRA DANDOT</option><option value="KHIDDER WALA" >KHIDDER WALA</option><option value="KHIPRO" >KHIPRO</option><option value="KHUSHAB" >KHUSHAB</option><option value="KHUZDAR" >KHUZDAR</option><option value="KOHAT" >KOHAT</option><option value="KOT ABDUL MALIK" >KOT ABDUL MALIK</option><option value="KOT ADDU" >KOT ADDU</option><option value="KOT CHUTTA" >KOT CHUTTA</option><option value="KOT GHULAM MUHD" >KOT GHULAM MUHD</option><option value="KOT MITTHAN" >KOT MITTHAN</option><option value="KOT MOMIN " >KOT MOMIN </option><option value="KOT RADHA KISHA" >KOT RADHA KISHA</option><option value="KOT SAMABAH" >KOT SAMABAH</option><option value="KOTLA" >KOTLA</option><option value="KOTLI-A.KASHMIR" >KOTLI-A.KASHMIR</option><option value="KOTRI" >KOTRI</option><option value="KUNDIAN" >KUNDIAN</option><option value="KUNRI" >KUNRI</option><option value="LAHORE" >LAHORE</option><option value="LAKI MARWAT" >LAKI MARWAT</option><option value="LALAMUSA" >LALAMUSA</option><option value="LALIAN" >LALIAN</option><option value="LANDIKOTAL" >LANDIKOTAL</option><option value="LARKANA" >LARKANA</option><option value="LAYYAH" >LAYYAH</option><option value="LIAQUATPUR" >LIAQUATPUR</option><option value="LODHRAN" >LODHRAN</option><option value="LORA LAI" >LORA LAI</option><option value="MACHI GOTH" >MACHI GOTH</option><option value="MAILSI" >MAILSI</option><option value="MAKHDOOM AALI" >MAKHDOOM AALI</option><option value="MALAK WAL" >MALAK WAL</option><option value="MALAKAND" >MALAKAND</option><option value="MAMUN KANJAN" >MAMUN KANJAN</option><option value="MANDI BAHAUDDIN" >MANDI BAHAUDDIN</option><option value="MANDI FAIZ ABAD" >MANDI FAIZ ABAD</option><option value="MANGA MANDI" >MANGA MANDI</option><option value="MANGLA" >MANGLA</option><option value="MANGOWAL" >MANGOWAL</option><option value="MANKERA" >MANKERA</option><option value="MANSHERA" >MANSHERA</option><option value="MARDAN" >MARDAN</option><option value="MASTUNG" >MASTUNG</option><option value="MATIARI" >MATIARI</option><option value="MATLI" >MATLI</option><option value="MEHAR" >MEHAR</option><option value="MEHMOODKOT" >MEHMOODKOT</option><option value="MEHRAB PUR" >MEHRAB PUR</option><option value="MIAN CHANOO" >MIAN CHANOO</option><option value="MIANWALI" >MIANWALI</option><option value="MINCHANABAD" >MINCHANABAD</option><option value="MINGORA (SWAT)" >MINGORA (SWAT)</option><option value=" MIRPUR A.K." > MIRPUR A.K.</option><option value="MIRPUR KHAS" >MIRPUR KHAS</option><option value="MIRPUR MATHELO" >MIRPUR MATHELO</option><option value="MIRPUR SAKRO " >MIRPUR SAKRO </option><option value="MIRWAH GORCHANI" >MIRWAH GORCHANI</option><option value="MITHI" >MITHI</option><option value="MITYARI" >MITYARI</option><option value="MORO" >MORO</option><option value="MUBARAK PUR" >MUBARAK PUR</option><option value="MUCH" >MUCH</option><option value="MULTAN" >MULTAN</option><option value="MURID WALA" >MURID WALA</option><option value="MURIDKEY" >MURIDKEY</option><option value="MURREE" >MURREE</option><option value="MUSLIM BAGH" >MUSLIM BAGH</option><option value="MUZAFFARABAD AK" >MUZAFFARABAD AK</option><option value="MUZAFFARGARH" >MUZAFFARGARH</option><option value="NANKANA SAHIB" >NANKANA SAHIB</option><option value="NAROWAL" >NAROWAL</option><option value="NARWALA BANGLA" >NARWALA BANGLA</option><option value="NASIRABAD" >NASIRABAD</option><option value="NAUABAD" >NAUABAD</option><option value="NAUDERO" >NAUDERO</option><option value="NAUSHERA" >NAUSHERA</option><option value="NAWABSHAH" >NAWABSHAH</option><option value="NEW JATOI" >NEW JATOI</option><option value="NEW SAEEDABAD" >NEW SAEEDABAD</option><option value="NOORPUR" >NOORPUR</option><option value="NOSHERO FEROZ" >NOSHERO FEROZ</option><option value="NOSHKI" >NOSHKI</option><option value="NOWSHERA" >NOWSHERA</option><option value="NOWSHERA VIRKA" >NOWSHERA VIRKA</option><option value="NURPUR THAL" >NURPUR THAL</option><option value="OGHI" >OGHI</option><option value="OKARA" >OKARA</option><option value="OKARA CANTT" >OKARA CANTT</option><option value="OLE KHI" >OLE KHI</option><option value="OLE LHE" >OLE LHE</option><option value="OLE RWP" >OLE RWP</option><option value="PABBI" >PABBI</option><option value="PAHAR PUR" >PAHAR PUR</option><option value="PAINSRA" >PAINSRA</option><option value="PAK PATTAN SHAR" >PAK PATTAN SHAR</option><option value="PALANDRI" >PALANDRI</option><option value="PANJGOOR" >PANJGOOR</option><option value="PANNU AKIL" >PANNU AKIL</option><option value="PANU AQIL CANTT" >PANU AQIL CANTT</option><option value="PASNI" >PASNI</option><option value="PASROOR" >PASROOR</option><option value="PATOKI (LAHORE)" >PATOKI (LAHORE)</option><option value=" PESHAWAR" > PESHAWAR</option><option value="PETARO" >PETARO</option><option value="PHALIA " >PHALIA </option><option value="PIND DADAN KHAN" >PIND DADAN KHAN</option><option value="PINDI BHATIAN" >PINDI BHATIAN</option><option value="PINDI GHEB" >PINDI GHEB</option><option value="PIPLAN" >PIPLAN</option><option value="PIRYALO" >PIRYALO</option><option value="PISHIN" >PISHIN</option><option value="QABOOLA" >QABOOLA</option><option value="QADIRPUR RAWAN" >QADIRPUR RAWAN</option><option value="QALANDRABAD" >QALANDRABAD</option><option value="QAZI AHMED" >QAZI AHMED</option><option value="QILA DEDAR SING" >QILA DEDAR SING</option><option value="QUAIDABAD" >QUAIDABAD</option><option value="QUETTA" >QUETTA</option><option value="RADHAN STATION" >RADHAN STATION</option><option value="RAHIMYARKHAN" >RAHIMYARKHAN</option><option value="RAIWAND" >RAIWAND</option><option value="RAJANA" >RAJANA</option><option value="RAJANPUR" >RAJANPUR</option><option value="RANIPUR" >RANIPUR</option><option value="RATTO DERO" >RATTO DERO</option><option value="RAWALAKOT" >RAWALAKOT</option><option value="RAWALPINDI" >RAWALPINDI</option><option value="RAWAT" >RAWAT</option><option value="RENALA KHURD" >RENALA KHURD</option><option value="RISALPUR" >RISALPUR</option><option value="ROHRI" >ROHRI</option><option value="SADIQABAD" >SADIQABAD</option><option value="SAHIWAL" >SAHIWAL</option><option value="SAHIWAL - FSD" >SAHIWAL - FSD</option><option value="SAIDU SHARIF" >SAIDU SHARIF</option><option value="SAKARDU" >SAKARDU</option><option value="SAKRAND" >SAKRAND</option><option value="SAMANDRI" >SAMANDRI</option><option value="SAMARO" >SAMARO</option><option value="SAMBRIAL" >SAMBRIAL</option><option value="SANAWAN" >SANAWAN</option><option value="SANGHAR" >SANGHAR</option><option value="SANGLA HILL" >SANGLA HILL</option><option value="SARGODAH" >SARGODAH</option><option value="SARWAR SHAHEED" >SARWAR SHAHEED</option><option value="SATIANA BANGLA" >SATIANA BANGLA</option><option value="SEHWAN" >SEHWAN</option><option value="SERAI NAURANG" >SERAI NAURANG</option><option value="SHABQADAR" >SHABQADAR</option><option value="SHAHDAD KOT" >SHAHDAD KOT</option><option value="SHAHDADPUR" >SHAHDADPUR</option><option value="SHAHDARA" >SHAHDARA</option><option value="SHAHKOT" >SHAHKOT</option><option value="SHAKAR GARH" >SHAKAR GARH</option><option value="SHANGLA" >SHANGLA</option><option value="SHARAQPUR" >SHARAQPUR</option><option value="SHEIKHUPURA" >SHEIKHUPURA</option><option value="SHIKARPUR" >SHIKARPUR</option><option value="SHINKIARI" >SHINKIARI</option><option value="SHORKOT" >SHORKOT</option><option value="SHUJAABAD" >SHUJAABAD</option><option value="SIALKOT" >SIALKOT</option><option value="SIBI" >SIBI</option><option value="SILANWALI " >SILANWALI </option><option value="SINJHORO" >SINJHORO</option><option value="SITA ROAD" >SITA ROAD</option><option value="SRAI ALAMGEER" >SRAI ALAMGEER</option><option value="SUI" >SUI</option><option value="SUJAWAL" >SUJAWAL</option><option value="SUKKUR" >SUKKUR</option><option value="SUMBRIAL" >SUMBRIAL</option><option value="SUNDAR ADDA" >SUNDAR ADDA</option><option value="SWABI" >SWABI</option><option value="SWAT" >SWAT</option><option value="TAKHAT BAI " >TAKHAT BAI </option><option value="TALAGANG" >TALAGANG</option><option value="TALL" >TALL</option><option value="TANDLIANWALA" >TANDLIANWALA</option><option value="TANDO ADAM" >TANDO ADAM</option><option value="TANDO ALLAYAR" >TANDO ALLAYAR</option><option value="TANDO BAGHO" >TANDO BAGHO</option><option value="TANDO JAM" >TANDO JAM</option><option value="TANDO MOHD KHAN" >TANDO MOHD KHAN</option><option value="TANK" >TANK</option><option value="TARBELA" >TARBELA</option><option value="TAUNSA SHARIF" >TAUNSA SHARIF</option><option value="TAXILA" >TAXILA</option><option value="TEMARGARAH" >TEMARGARAH</option><option value="TERNOL" >TERNOL</option><option value="THARO SHAH" >THARO SHAH</option><option value="THATTA" >THATTA</option><option value="THULL" >THULL</option><option value="TIBBA SULTAN" >TIBBA SULTAN</option><option value="TOBATEK-SINGH" >TOBATEK-SINGH</option><option value="TOPI" >TOPI</option><option value="TURBAT" >TURBAT</option><option value="UBARO" >UBARO</option><option value="UCH SHARIF" >UCH SHARIF</option><option value="UMERKOT" >UMERKOT</option><option value="UPPER DIR" >UPPER DIR</option><option value="USTA MOHAMMAD" >USTA MOHAMMAD</option><option value="UTHAL" >UTHAL</option><option value="VARI DIR" >VARI DIR</option><option value="VEHARI" >VEHARI</option><option value="WAH" >WAH</option><option value="WAN BACHRAN" >WAN BACHRAN</option><option value="WARAH" >WARAH</option><option value="WAZIRABAD" >WAZIRABAD</option><option value="WINDER" >WINDER</option><option value="YAZMAN MANDI" >YAZMAN MANDI</option><option value="ZAFARWAL" >ZAFARWAL</option><option value="ZAHIRPEER" >ZAHIRPEER</option><option value="ZHOB" >ZHOB</option><option value="18 HAZARI" >18 HAZARI</option>';
	 }
	 
	 function get_username()
	 {
		 $ci=&get_instance();
		 if($ci->session->has_userdata("login"))
		 {
			 
			return $ci->session->get_userdata("login")["login"]["username"];
		 }
	 }
	 
	 function get_thumbnail($imageName)
	 {
		 
		 $tmp = explode('.', $imageName);
		$ext = end($tmp);
		 $fileName = substr($imageName, 0, strrpos($imageName, "."));
		 return $fileName."_thumb.".$ext;
		 
	 }
	 
	 function get_product_url($productObj)
	 {
		 
		 if(!empty($productObj))
		 {
			 return site_url()."/Product/".$productObj->Slug."/".$productObj->ProductId;
		 }
		 return "#";
	 }
	 
	 function get_category_url($productCatObj)
	 {
		 
		 if(!empty($productCatObj))
		 {
			 return site_url()."/ProductCategory/".slugify($productCatObj->CatName)."/".$productCatObj->ProductCatId;
		 }
		 return "#";
	 }
	 
	 
	 function get_delivery_charges()
	 {
		 return 200;
	 }
	 
	 function amount_format($price)
	 {
		 return "Rs. ".number_format($price);
	 }
	 
	 function create_thumbnail($fullpath)
	 {
		     $ci =& get_instance();
	$ci->load->library('image_lib');
    $config['image_library']  = 'gd2';
    $config['source_image']   = $fullpath;       
    $config['create_thumb']   = TRUE;
    $config['maintain_ratio'] = TRUE;
    $config['width']          = 300;
    $config['height']         = 300;
    $config['new_image']      = $fullpath;               
    $ci->image_lib->initialize($config);
    if (! $ci->image_lib->resize()) { 
        echo $ci->image_lib->display_errors();
    }        
	 }
	 
	 if(!function_exists("slugify"))
	 {
		  function slugify($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}
		 
	 }
	 
	 if ( ! function_exists('SiteName()'))
     {
       function SiteName()
       {
          return "Ecommerce Codeigniter";
       }
     }