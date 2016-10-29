function AbrirCentro(url,nompopup,popW,popH,resizable,scroll){
	w = screen.availWidth;
	h = screen.availHeight;
	var leftPos = (w-popW)/2; topPos = (h-popH)/2;
	leftPos = leftPos - 20;
	topPos = topPos - 20;
	window.open(url,nompopup,'width=' + popW + ',height=' + popH + ',top=' + topPos + ',left=' + leftPos + ',resizable=' + resizable + ',scrollbars=' + scroll );
}

function Caracteres(string) {
    var invalid = "!Ò—¥·ÈÌÛ˙¡…Õ”⁄{}[]";
    var rpta = '';
    for (var i=0; i<string.length; i++){
        inval = string.substring(i, i+1);
        if (invalid.indexOf(inval) > -1) rpta += inval;
    }
    return rpta;
}
function Espacio(string) {
    var invalid = " ";
    var rpta = '';
    for (var i=0; i<string.length; i++){
        inval = string.substring(i, i+1);
        if (invalid.indexOf(inval) > -1) rpta += inval;
    }
    return rpta;
}
function Puntos(string) {
    var invalid = ".";
    var rpta = '';
    for (var i=0; i<string.length; i++){
        inval = string.substring(i, i+1);
        if (invalid.indexOf(inval) > -1) rpta += inval;
    }
    return rpta;
}