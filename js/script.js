$(document).on('ready',Iniciar);

function Iniciar()
{
	/*funcionalidad Central*/
	$varButton =$('#dcentral');
	$varButton.on('click',presionar);
	/*menu*/
	$varButton2 =$('#btnmenu');
	$varButton2.on('click',limpiar);
	
	/*Distrito Central*/
	$('#btn11').on('click',once);
	$('#btn12').on('click',doce);
	$('#btn13').on('click',trece);
	$('#btn14').on('click',catorce);
	$('#btn15').on('click',quince);
	$('#btn16').on('click',diesiseis);

	/*Distrito Sur*/
	$varButton3 =$('#dsur');
	$varButton3.on('click',Sur);
	$varButton4 =$('#btnsur');
	$varButton4.on('click',limpiar);
	$('#btn31').on('click',tuno);
	$('#btn32').on('click',tdos);
	$('#btn33').on('click',ttres);
	$('#btn34').on('click',tcuatro);

	/*Distrito Occidente*/
	$varButton5 =$('#doccidente');
	$varButton5.on('click',Occident);
	$('#btn41').on('click',cuno);
	$('#btn42').on('click',cdos);
	$('#btn43').on('click',ctres);
	$('#btn44').on('click',ccuatro);

	/*Distrito Nor-Occidente*/
	$varButton6 =$('#btnoccidente');
	$varButton6.on('click',limpiar);
	$('#dnocc').on('click',Noccident);
	$('#btnocc').on('click',limpiar);
	$('#btn71').on('click',nouno);
	$('#btn72').on('click',nodos);
	$('#btn73').on('click',notres);
	$('#btn74').on('click',nocuatro);

	/*Distrito Oriente*/
	$('#doriente').on('click',Oriente);
	$('#btnoriente').on('click',limpiar);
	$('#btn21').on('click',Oruno);
	$('#btn23').on('click',Ortres);
	$('#btn24').on('click',Orcuatro);
	$('#btn61').on('click',Orseis);

	/*Distrito Nor-Oriente*/
	$varButton7 =$('#dnoro');
	$varButton7.on('click',Noriente);
	$varButton8 =$('#btnoro');
	$varButton8.on('click',limpiar);
	$('#btn22').on('click',norteuno);
	$('#btn51').on('click',nortedos);
	$('#btn52').on('click',nortetres);
	$('#btn53').on('click',nortecuatro);

	/*Distrito Norte*/
	$varButton9 =$('#dnorte');
	$varButton9.on('click',Norte);
	$varButton10 =$('#btnnorte');
	$varButton10.on('click',limpiar);
	$('#btn62').on('click',jesus);
	

/*variables*/

/*Distritos*/	
	$varForm=$('#distritos');
	$varCentral=$('#central');
	$varOccidente=$('#occidente');
	$varNoccidente=$('#noccidente');
	$varSur=$('#sur');
	$varNoriente=$('#noriente');
	$varOriente=$('#oriente');
	$varNorte=$('#norte');

	$varImagen=$('#imag');
	/*Distrito Central Imagenes*/
	$varOncei=$('#img11');
	$varDocei=$('#img12');
	$varTrecei=$('#img13');
	$varCatorcei=$('#img14');
	$varQuincei=$('#img15');
	$varDiesiseisi=$('#img16');

	/*Distrito Occidente Imagenes*/
	$varCunoi=$('#img41');
	$varCdosi=$('#img42');
	$varCtresi=$('#img43');
	$varCcuatroi=$('#img44');

	/*Distrito Sur Imagenes*/
	$varSunoi=$('#img31');
	$varSdosi=$('#img32');
	$varStresi=$('#img33');
	$varScuatroi=$('#img34');

	/*Distrito NorOccidente Imagenes*/
	$varNuno=$('#img71');
	$varNdos=$('#img72');
	$varNtres=$('#img73');
	$varNcuatro=$('#img74');

	/*Distrito Oriente Imagenes*/
	$varOuno=$('#img21');
	$varOtres=$('#img23');
	$varOcuatro=$('#img24');
	$varOseis=$('#img61');

	/*Distrito Nor Oriente Imagenes*/
	$varnorteunoi=$('#img22');
	$varnortedosi=$('#img51');
	$varnortetresi=$('#img52');
	$varnortecuatroi=$('#img53');

	/*Distrito Norte Imagenes*/
	$varnortee=$('#img62');



/*visualizacion*/
$varForm.show();
/*Distritos visualizar imagenes*/
$varCentral.hide();
$varNorte.hide();
$varOriente.hide();
$varNoriente.hide();
$varSur.hide();
$varNoccidente.hide();
$varOccidente.hide();

/*Distrito Central Visualizar imagnes*/
$varOncei.hide();
$varDocei.hide();
$varTrecei.hide();
$varCatorcei.hide();
$varQuincei.hide();
$varDiesiseisi.hide();

/*Distrito Occidente Visualizar -imagebes*/
$varCunoi.hide();
$varCdosi.hide();
$varCtresi.hide();
$varCcuatroi.hide();

/*Distrito Sur Visualizar -imagebes*/ 
$varSunoi.hide();
$varSdosi.hide();
$varStresi.hide();
$varScuatroi.hide();

/*Distrito NorOccidente Visualizar imagnes*/
$varNuno.hide();
$varNdos.hide();
$varNtres.hide();
$varNcuatro.hide();

/*Distrito Oriente Visualizar imagnes*/
$varOuno.hide();
$varOtres.hide();
$varOcuatro.hide();
$varOseis.hide();

/*Distrito Nor Oriente Visualizar imagnes*/
$varnorteunoi.hide();
$varnortedosi.hide();
$varnortetresi.hide();
$varnortecuatroi.hide();

/*Distrito Norte Visualizar imagnes*/
$varnortee.hide();

}


/*Distritos*/
function presionar()
{
$varCentral.show();
$varForm.show();
$varImagen.show();
$varNorte.hide();
$varOriente.hide();
$varNoriente.hide();
$varSur.hide();
$varNoccidente.hide();
$varOccidente.hide();
}


function limpiar()
{

$varForm.show();
$varImagen.show();

/*Distritos visualizar imagenes*/
$varCentral.hide();
$varNorte.hide();
$varOriente.hide();
$varNoriente.hide();
$varSur.hide();
$varNoccidente.hide();
$varOccidente.hide();

/*Distrito Central Visualizar imagenes*/
$varOncei.hide();
$varDocei.hide();
$varTrecei.hide();
$varCatorcei.hide();
$varQuincei.hide();
$varDiesiseisi.hide();

/*Distrito Occidente Visualizar -imagenes*/
$varCunoi.hide();
$varCdosi.hide();
$varCtresi.hide();
$varCcuatroi.hide();

/*Distrito Sur Visualizar -imagenes*/ 
$varSunoi.hide();
$varSdosi.hide();
$varStresi.hide();
$varScuatroi.hide();

/*Distrito NorOccidente Visualizar imagenes*/
$varNuno.hide();
$varNdos.hide();
$varNtres.hide();
$varNcuatro.hide();

/*Distrito Oriente Visualizar imagenes*/
$varOuno.hide();
$varOtres.hide();
$varOcuatro.hide();
$varOseis.hide();

/*Distrito Nor Oriente Visualizar imagenes*/
$varnorteunoi.hide();
$varnortedosi.hide();
$varnortetresi.hide();
$varnortecuatroi.hide();

/*Distrito Norte Visualizar imagenes*/
$varnortee.hide();

}

function Sur()
{
$varImagen.show();
$varCentral.hide();

$varNorte.hide();
$varOriente.hide();
$varNoriente.hide();
$varSur.show();
$varNoccidente.hide();
$varOccidente.hide();
}

function Occident()
{
$varImagen.show();
$varCentral.hide();

$varNorte.hide();
$varOriente.hide();
$varNoriente.hide();
$varSur.hide();
$varNoccidente.hide();
$varOccidente.show();
}

function Noccident()
{
$varImagen.show();
$varCentral.hide();

$varNorte.hide();
$varOriente.hide();
$varNoriente.hide();
$varSur.hide();
$varNoccidente.show();
$varOccidente.hide();
}

function Oriente()
{
$varImagen.show();
$varCentral.hide();

$varNorte.hide();
$varOriente.show();
$varNoriente.hide();
$varSur.hide();
$varNoccidente.hide();
$varOccidente.hide();
}

function Noriente()
{
$varImagen.show();
$varCentral.hide();

$varNorte.hide();
$varOriente.hide();
$varNoriente.show();
$varSur.hide();
$varNoccidente.hide();
$varOccidente.hide();
}

function Norte()
{
$varImagen.show();
$varCentral.hide();

$varNorte.show();
$varOriente.hide();
$varNoriente.hide();
$varSur.hide();
$varNoccidente.hide();
$varOccidente.hide();
}

/* Distrito Central*/
function once()
{
	$varOncei.show();
	$varDocei.hide();
	$varTrecei.hide();
	$varCatorcei.hide();
	$varQuincei.hide();
	$varDiesiseisi.hide();
}

function doce()
{
	$varOncei.hide();
	$varDocei.show();
	$varTrecei.hide();
	$varCatorcei.hide();
	$varQuincei.hide();
	$varDiesiseisi.hide();
}


function trece()
{
	$varOncei.hide();
	$varDocei.hide();
	$varTrecei.show();
	$varCatorcei.hide();
	$varQuincei.hide();
	$varDiesiseisi.hide();
}
function catorce()
{
	$varOncei.hide();
	$varDocei.hide();
	$varTrecei.hide();
	$varCatorcei.show();
	$varQuincei.hide();
	$varDiesiseisi.hide();
}

function quince()
{
	$varOncei.hide();
	$varDocei.hide();
	$varTrecei.hide();
	$varCatorcei.hide();
	$varQuincei.show();
	$varDiesiseisi.hide();
}
function diesiseis()
{
	$varOncei.hide();
	$varDocei.hide();
	$varTrecei.hide();
	$varCatorcei.hide();
	$varQuincei.hide();
	$varDiesiseisi.show();
}

/*Distrito Occidente*/
function cuno()
{
$varCunoi.show();
$varCdosi.hide();
$varCtresi.hide();
$varCcuatroi.hide();
}

function cdos()
{
$varCunoi.hide();
$varCdosi.show();
$varCtresi.hide();
$varCcuatroi.hide();
}

function ctres()
{
$varCunoi.hide();
$varCdosi.hide();
$varCtresi.show();
$varCcuatroi.hide();
}

function ccuatro()
{
$varCunoi.hide();
$varCdosi.hide();
$varCtresi.hide();
$varCcuatroi.show();
}

/*Distrito Sur*/
	function tuno()
{
$varSunoi.show();
$varSdosi.hide();
$varStresi.hide();
$varScuatroi.hide();
}

	function tdos()
{
$varSunoi.hide();
$varSdosi.show();
$varStresi.hide();
$varScuatroi.hide();
}

	function ttres()
{
$varSunoi.hide();
$varSdosi.hide();
$varStresi.show();
$varScuatroi.hide();
}

	function tcuatro()
{
$varSunoi.hide();
$varSdosi.hide();
$varStresi.hide();
$varScuatroi.show();
}

/*Distrito Nor-Occidente*/
	function nouno()
{
$varNuno.show();
$varNdos.hide();
$varNtres.hide();
$varNcuatro.hide();
}

	function nodos()
{
$varNuno.hide();
$varNdos.show();
$varNtres.hide();
$varNcuatro.hide();
}

	function notres()
{
$varNuno.hide();
$varNdos.hide();
$varNtres.show();
$varNcuatro.hide();
}
	function nocuatro()
{
$varNuno.hide();
$varNdos.hide();
$varNtres.hide();
$varNcuatro.show();
}

/*Oriente*/
	function Oruno()
{
$varOuno.show();
$varOtres.hide();
$varOcuatro.hide();
$varOseis.hide();
}

	function Ortres()
{
$varOuno.hide();
$varOtres.show();
$varOcuatro.hide();
$varOseis.hide();
}

	function Orcuatro()
{
$varOuno.hide();
$varOtres.hide();
$varOcuatro.show();
$varOseis.hide();
}

	function Orseis()
{
$varOuno.hide();
$varOtres.hide();
$varOcuatro.hide();
$varOseis.show();
}

/*Nor-Oriente*/
function norteuno()
{
	$varnorteunoi.show();
	$varnortedosi.hide();
	$varnortetresi.hide();
	$varnortecuatroi.hide();

}

function nortedos()
{
	$varnorteunoi.hide();
	$varnortedosi.show();
	$varnortetresi.hide();
	$varnortecuatroi.hide();

}

function nortetres()
{
	$varnorteunoi.hide();
	$varnortedosi.hide();
	$varnortetresi.show();
	$varnortecuatroi.hide();

}

function nortecuatro()
{
	$varnorteunoi.hide();
	$varnortedosi.hide();
	$varnortetresi.hide();
	$varnortecuatroi.show();

}

function nortecuatro()
{
	$varnorteunoi.hide();
	$varnortedosi.hide();
	$varnortetresi.hide();
	$varnortecuatroi.show();
}

function jesus()
{
	$varnortee.show();
	
}
	

	





