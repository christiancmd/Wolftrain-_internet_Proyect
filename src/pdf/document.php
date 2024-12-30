<?php

//AddPage(orientation[PORTRAIT, LADSCAPE], tamaño [A3, A4, A5, LETTER, LEGAL]),
//SetFont[tipo(COURIER, HELVETICA, ARIAL, TIMES, SYMBOL, ZAPDINGBATS), estilo[normal, B, I, U], tamaño],
//Cell(ancho, alto, texto, bordes, ?, alineación, rellenar, link)
//OutPut(destino[I, D, F, S], nombre_archivo, utf-8)
//Write -> Escribe texto en una posición específica, se ajusta automáticamente al ancho de la página, y maneja automáticamente los saltos de línea sin crear celdas específicas.
//MultiCell(ancho, alto, texto, bordes, justificado)


//$fpdf->Write(h: 10, txt: $loremText, );
//$fpdf->AddPage();   Add another page
//$fpdf->Write('5', 'Hola mundo, otra pagina');  Otra pagina del pdf

//UTF8_decode('text')
include '../php/conection_db.php';
require "../../fpdf/fpdf.php";
//require_once "../pages/details.php";

$fpdf = new FPDF();
$fpdf->AddPage(orientation: 'portrait', size: 'letter');   // Add a page


function getArrayData(string $filename): mixed ///Datos del usuario por json
{
    $jsonData = file_get_contents(filename: $filename);
    $data = json_decode(json: $jsonData, associative: true);
    return $data;
}

$arrayData = getArrayData(filename: "../php/arrayData.json");
$arrayService = getArrayData(filename: "../php/arrayServices.json");

class pdf extends FPDF
{
    public function header(): void
    {
        /*  $this->SetFont(family: 'Arial', style: 'BI', size: 15);
        $this->Write(h: '5', txt: "Logo");*/
        $this->Image(file: '../../public/Logo-removebg-preview.png', x: 8, y: 8, w: 30, h: 30, type: 'PNG');

        $this->SetX(x: -60);
        $this->SetFont(family: 'Arial', style: 'BI', size: 25);
        $this->Write(h: '22', txt: "Wolftrain");

        $this->ln(h: 30);
    }

    public function Footer(): void
    {
        $this->SetFont(family: 'Arial', style: 'B', size: 12);
        $this->SetY(y: -15);
        $this->Write(h: '5', txt: "Wolftrain.");

        $this->SetX(x: -25);
        $this->Write(h: '5', txt: $this->PageNo()) . ' / {nb}';
    }
}

date_default_timezone_set(timezoneId: 'America/Caracas'); ///Ejemplo de zona horaria
$date = date(format: 'Y-m-d');

function convert_String($string): mixed
{
    $string = mb_convert_encoding(string: $string, to_encoding: 'ISO-8859-1', from_encoding: 'UTF-8');
    return $string;
}

$fpdf = new pdf();
$fpdf->AddPage(orientation: 'portrait', size: 'letter');   // Add a page


$fpdf->SetFont(family: 'Arial', style: 'BIU', size: 20);
$fpdf->Cell(w: 195, h: 15, txt: convert_String(string: 'Comprobante de Adquisición de servicios'), border: 0, ln: 0, align: 'C', fill: false);  // Add text to the page

$fpdf->Ln(h: 20); //Salto de linea

$loremText = "  Yo, " . $arrayData['Full_name'] . ", estoy de acuerdo con los siguientes requerimientos y términos para la adquisición del servicio de internet ofrecido por la empresa de Wolftrain. Que conlleva la necesaria asistencia personal a la sede principal de Wolftrain ubicada en Maracay, Av.Bolivar-La Barraca h5. Para confirmar los datos necesarios y firmar los documentos pertinentes y recibir el equipo necesario para la instalación. La asistencia a la sede de la empresa garantiza que se cumplan todos los procedimientos de verificación y activación del servicio de manera adecuada.";
$fpdf->SetFont(family: 'Arial', style: 'B', size: 10);
$fpdf->MultiCell(w: 195, h: 7, txt: convert_String($loremText), border: 0, align: 'J');

$fpdf->Ln(h: 7);//Salto de linea

$fpdf->SetFont(family: 'Arial', style: 'B', size: 16);
$fpdf->Write(h: 10, txt: 'Datos personales del cliente:');

$fpdf->Ln(h: 10);//Salto de linea

$fpdf->SetFont(family: 'Arial', style: 'B', size: 11);
$fpdf->SetFillColor(r: 120, g: 156, b: 255);
$fpdf->Cell(w: 42, h: 15, txt: convert_String(string: 'Nombre Completo'), border: 1, ln: 0, align: 'C', fill: true);
$fpdf->Cell(w: 150, h: 15, txt: $arrayData['Full_name'], border: 1, ln: 1, align: 'C', fill: false);

$fpdf->SetFillColor(r: 120, g: 156, b: 255);
$fpdf->Cell(w: 42, h: 15, txt: convert_String(string: 'Correo Electrónico'), border: 1, ln: 0, align: 'C', fill: true);
$fpdf->Cell(w: 150, h: 15, txt: $arrayData['Email'], border: 1, ln: 1, align: 'C', fill: false);

$fpdf->SetFillColor(r: 120, g: 156, b: 255);
$fpdf->Cell(w: 42, h: 15, txt: convert_String(string: 'Nombre Usuario'), border: 1, ln: 0, align: 'C', fill: true);
$fpdf->Cell(w: 150, h: 15, txt: $arrayData['Name_user'], border: 1, ln: 1, align: 'C', fill: false);

foreach ($arrayService as $key) {
    $fpdf->SetFillColor(r: 120, g: 156, b: 255);
    $fpdf->Cell(w: 42, h: 15, txt: convert_String(string: 'Servicio'), border: 1, ln: 0, align: 'C', fill: true);
    $fpdf->Cell(w: 150, h: 15, txt: "Plan " . $key["Name_services"], border: 1, ln: 1, align: 'C', fill: false);
}

$fpdf->SetFillColor(r: 120, g: 156, b: 255);
$fpdf->Cell(w: 42, h: 15, txt: convert_String(string: 'Fecha Petición'), border: 1, ln: 0, align: 'C', fill: true);
$fpdf->Cell(w: 54, h: 15, txt: $date, border: 1, ln: 0, align: 'C', fill: false);

////////////////////////////////////////
$fpdf->SetFillColor(r: 120, g: 156, b: 255);
$fpdf->Cell(w: 46, h: 15, txt: convert_String(string: 'Número Comprobante'), border: 1, ln: 0, align: 'C', fill: true);
$fpdf->Cell(w: 50, h: 15, txt: '0000001', border: 1, ln: 1, align: 'C', fill: false);

$fpdf->Ln(h: 30);//Salto de linea

$fpdf->Cell(w: 195, h: 15, txt: "___________________________", border: 0, ln: 1, align: 'C', fill: false);
$fpdf->SetFont(family: 'Arial', style: 'BI', size: 10);
$fpdf->Cell(w: 195, h: 0, txt: convert_String(string: 'Firma del Cliente'), border: 0, ln: 0, align: 'C', fill: false);  // Add text to the page


$fpdf->Output(dest: 'I', name: 'Comprobante de Aquisición.pdf', isUTF8: 'UTF-8');  // Save the document

