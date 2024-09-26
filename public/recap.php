<?php
require_once('vendor/autoload.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = htmlspecialchars($_POST['age']);
    $sexe = htmlspecialchars($_POST['sexe']);
    $ville = htmlspecialchars($_POST['ville']);
    $niveau = htmlspecialchars($_POST['niveau']);
    $domaine = htmlspecialchars($_POST['domaine']);
    $langues = htmlspecialchars($_POST['langues']);
    $sport = htmlspecialchars($_POST['sport']);
    $genre_musique = htmlspecialchars($_POST['genre_musique']);
    $soiree = htmlspecialchars($_POST['soiree']);
    $voyages = htmlspecialchars($_POST['voyages']);
    $destination_revee = htmlspecialchars($_POST['destination_revee']);
    $intro_extro = htmlspecialchars($_POST['intro_extro']);

   
    $pdf = new TCPDF();

    
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetTitle('Fiche récapitulative de ' . $prenom);

    
    $pdf->AddPage();

    
    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->Cell(0, 10, "Fiche récapitulative de $prenom", 0, 1, 'C');
    $pdf->Ln(10);

    
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Write(0, "Âge : $age ans\n");
    $pdf->Write(0, "Sexe : $sexe\n");
    $pdf->Write(0, "Ville de résidence : $ville\n");
    $pdf->Write(0, "Niveau d’études : $niveau\n");
    $pdf->Write(0, "Domaine d’études : $domaine\n");
    $pdf->Write(0, "Langues parlées : $langues\n");
    $pdf->Write(0, "Aime le sport : $sport\n");
    $pdf->Write(0, "Genre de musique préféré : $genre_musique\n");
    $pdf->Write(0, "Préférence pour les soirées : $soiree\n");
    $pdf->Write(0, "Aime voyager : $voyages\n");
    $pdf->Write(0, "Destination de rêve : $destination_revee\n");
    $pdf->Write(0, "Personnalité : $intro_extro\n");

    
    $pdf->Output('fiche_recap.pdf', 'D'); 
}
?>
