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

        $this->ln(h: 27);
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


function data_User($conn): mixed
{
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT IDuser, Full_name, Email, Name_user, Service FROM usuarios WHERE rol_id = 2";
    $result = $conn->query($sql);

    $data = array();

    if ($result->num_rows > 0) { // Almacenar los datos en la variable 
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    $conn->close();

    return $data; //Retornar datos
}

$Users = data_user(conn: $conexion);


function convert_String($string): mixed
{
    $string = mb_convert_encoding(string: $string, to_encoding: 'ISO-8859-1', from_encoding: 'UTF-8');
    return $string;
}

$fpdf = new pdf();
$fpdf->AddPage(orientation: 'portrait', size: 'letter');   // Add a page

$fpdf->SetFont(family: 'Arial', style: 'BIU', size: 22);
$fpdf->Cell(w: 195, h: 15, txt: convert_String(string: 'Reporte de Inscripción de Usuarios'), border: 0, ln: 0, align: 'C', fill: false);  // Add text to the page

$fpdf->Ln(h: 20); //Salto de linea
$fpdf->SetFont(family: 'Arial', style: 'BI', size: 12);

$text = "El presente reporte de inscripción de usuarios refleja detalladamente la decisión de los usuarios de adquirir nuestros servicios de internet, servicios sustentados por la empresa Wolftrain. La visualización precisa y ordenada de estos datos permite una mejor comprensión del comportamiento y las preferencias de nuestros clientes, facilitando así la toma de decisiones estratégicas. Además, este reporte se toma como una constancia de la actividad realizada directamente por los usuarios, proporcionando una base sólida para futuros análisis y planificaciones. Su formalidad y exactitud son esenciales para garantizar la transparencia y la confiabilidad de la información presentada al jefe de la empresa Wolftrain. Así, se asegura un seguimiento riguroso del proceso de adquisición de servicios, contribuyendo al crecimiento y éxito continuo de la empresa.";

$fpdf->MultiCell(w: 195, h: 7, txt: convert_String($text), border: 0, align: 'J');

$fpdf->Ln(h: 10);//Salto de linea


$fpdf->SetFillColor(r: 120, g: 156, b: 255);
$fpdf->Cell(w: 25, h: 15, txt: convert_String(string: 'ID'), border: 1, ln: 0, align: 'C', fill: true);
$fpdf->Cell(w: 39, h: 15, txt: convert_String(string: 'Nombre'), border: 1, ln: 0, align: 'C', fill: true);
$fpdf->Cell(w: 53, h: 15, txt: convert_String(string: 'Email'), border: 1, ln: 0, align: 'C', fill: true);
$fpdf->Cell(w: 36, h: 15, txt: convert_String(string: 'Usuario'), border: 1, ln: 0, align: 'C', fill: true);
$fpdf->Cell(w: 36, h: 15, txt: convert_String(string: 'Servicio'), border: 1, ln: 1, align: 'C', fill: true);

$fpdf->SetFont(family: 'Arial', style: 'BI', size: 9);
foreach ($Users as $key) {
    $service_known = $key["Service"] != null ? $key["Service"] : "Sin indentificar";

    $fpdf->Cell(w: 25, h: 12, txt: convert_String($key["IDuser"]), border: 1, ln: 0, align: 'C', fill: false);
    $fpdf->Cell(w: 39, h: 12, txt: convert_String($key["Full_name"]), border: 1, ln: 0, align: 'C', fill: false);
    $fpdf->Cell(w: 53, h: 12, txt: convert_String($key["Email"]), border: 1, ln: 0, align: 'C', fill: false);
    $fpdf->Cell(w: 36, h: 12, txt: convert_String($key["Name_user"]), border: 1, ln: 0, align: 'C', fill: false);
    $fpdf->Cell(w: 36, h: 12, txt: convert_String($service_known), border: 1, ln: 1, align: 'C', fill: false);
}



$fpdf->Output(dest: 'I', name: 'Reporte de usuarios registrados.pdf', isUTF8: 'UTF-8');  // Save the document
