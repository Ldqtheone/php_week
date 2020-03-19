<?php


class Envelope
{
    private $dest;
    private $exp;
    private $isImportant;
    private $isConfidential;
    private $destLoc;
    private $expLoc;

    /**
     * Envelope constructor.
     * @param string $dest
     * @param string $destLoc
     * @param string $exp
     * @param string $expLoc
     * @param bool $isImportant
     * @param bool $isConfidential
     */
    public function __construct($dest = "Nom Prenom", $destLoc = "Adresse",
                                $exp = "Nom Prenom ", $expLoc = "Adresse",
                                $isImportant = false, $isConfidential = false)
    {
        $this->dest = $dest;
        $this->destLoc = $destLoc;
        $this->exp = $exp;
        $this->expLoc = $expLoc;
        $this->isImportant = $isImportant;
        $this->isConfidential = $isConfidential;
    }

    public function displayEnvelope()
    {
        echo ' <div class="container-enveloppe">';
        echo '<div class="enveloppe-recto">';
        echo $this->isImportant ? '<div class="stampRed"></div>' : '<div class="stampGreen"></div>';

        if ($this->isConfidential)
            echo '<span class="confidential" >Confidentiel</span>';

        echo '<div class="container-destinataire">';
        echo '<p>' . $this->dest . '</p>';
        echo ' <p>' . $this->destLoc . ' </p>';
        echo '</div>';

        echo '</div>';
        echo '<div class="enveloppe-verso">';
        echo '<div class="enveloppe-tri">';
        echo '<div class="container-expediteur">';
        echo '<p>' . $this->exp . '</p>';
        echo '<p>' . $this->expLoc . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

}