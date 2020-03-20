<?php

/**
 * Class Postal
 */
class Postal
{
    /**
     * @var string $dest;
     * @var string $exp;
     * @var string $destLoc;
     * @var string $expLoc;
     * @var string $expPostal;
     * @var string $expCity;
     * @var string $destPostal;
     * @var string $destCity;
     * @var string $contentLetter;
     * @var bool $isImportant;
     * @var bool $isConfidential;
     */
    private $dest;
    private $exp;
    private $destLoc;
    private $expLoc;
    private $expPostal;
    private $expCity;
    private $destPostal;
    private $destCity;
    private $contentLetter;
    private $isImportant;
    private $isConfidential;

    /**
     * Postal constructor.
     * @param string $dest
     * @param string $destLoc
     * @param string $destCity
     * @param string $destPostal
     * @param string $exp
     * @param string $expLoc
     * @param string $expCity
     * @param string $expPostal
     * @param bool $isImportant
     * @param bool $isConfidential
     */
    public function __construct($dest = "Nom Prenom", $destLoc = "Adresse",$destCity ="ville", $destPostal="Code postal",
                                $exp = "Nom Prenom ", $expLoc = "Adresse",$expCity ="ville", $expPostal="Code postal",
                                $isImportant = false, $isConfidential = false)
    {
        $this->dest = $dest;
        $this->destLoc = $destLoc;
        $this->destCity = $destCity;
        $this->destPostal = $destPostal;
        $this->exp = $exp;
        $this->expLoc = $expLoc;
        $this->expCity = $expCity;
        $this->expPostal = $expPostal;
        $this->isImportant = $isImportant;
        $this->isConfidential = $isConfidential;
        $this->contentLetter = "Contenue lettre ici";
    }

    /**
     * Getter of contentLetter
     * @return string
     */
    public function getContentLetter(): string
    {
        return $this->contentLetter;
    }

    /**
     * Setter of contentLetter
     * @param string $contentLetter
     */
    public function setContentLetter(string $contentLetter): void
    {
        $this->contentLetter = $contentLetter;
    }

    /**
     * Function to display the envelop
     */
    public function displayEnvelope() : void
    {
        echo ' <div class="container-enveloppe">';
        echo '<div class="enveloppe-recto">';
        echo $this->isImportant ? '<div class="stampRed"></div>' : '<div class="stampGreen"></div>';

        if ($this->isConfidential)
        {
            echo '<span class="confidential" >Confidentiel</span>';
        }

        echo '<div class="container-destinataire">';
        echo '<p>' . $this->dest . '</p>';
        echo ' <p>' . $this->destLoc . ' </p>';
        echo ' <p>' . $this->destCity . ', ' . $this->destPostal.'</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="enveloppe-verso">';
        echo '<div class="enveloppe-tri">';
        echo '<div class="container-expediteur">';
        echo '<p>' . $this->exp . '</p>';
        echo '<p>' . $this->expLoc . '</p>';
        echo ' <p>' . $this->expCity . ', ' . $this->expPostal.'</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    /**
     * Function to display the letter
     */
    public function displayLetter() : void
    {
        echo '<div class="container-letter" >';
        echo '<div class="letter" >';
        echo '<div class="content-letter-expediteur" >';
        echo '<p>'. $this->exp .'</p>';
        echo '<p>'. $this->expLoc .'</p>';
        echo '<p>'. $this->expCity . ', ' . $this->expPostal.'</p>';
        echo '</div>';
        echo '<div class="content-letter-destinataire" >';
        echo '<p>'. $this->dest .'</p>';
        echo '<p>'. $this->destLoc .'</p>';
        echo '<p>'. $this->destCity . ', ' . $this->destPostal.'</p>';
        echo '</div>';
        echo '<p class="content-letter">'. nl2br($this->getContentLetter()) .'</p>';
        echo '</div>';
        echo '</div>';
    }
}
?>

