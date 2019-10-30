<? php
/*
	Crear funcion saludo que se le pasa como argumento el nombre
	si la llamamos sin parametros la funcion debe responder
	"hola", si le pasamos un texto te debe devolver algo distinto
	como "Buenos dias", y si le pasamos un segundo argumento, como
	el nombre y apellidos, entonces responderá con ellos.
*/

function saludo($texto = '', $nombre = '') {
	if ($texto == '') && ($nombre == '') {
		return "Hola.";
	} else {
		return "Buenos dias $nombre";
	}
}
echo saludo();
echo saludo("Hey");
echo saludo("Hey", "Zack");
?>