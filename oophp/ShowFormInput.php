<?php
namespace phpintro\src\exercises\oophp;

/**
 * Einbinden des Errorhandlings, damit Sie Fehler im Browser angezeigt bekommen.
 * Erleichterung des Debugging
 */
require_once 'error_handling.php';
/**
 * TODO Sehen Sie sich die Bespiele in examples/oophp an
 * TODO Zu Beginn DefineAndConst.php und Inheritance.php
 * TODO danach auch Methods.php. (Vor allem wenn sie vollständig PSR2 konform werden möchten. Nicht Teil dieser UE)
 *
 * TODO Vergeben sie einen Klassennamen passend zu PSR1 in StudlyCaps
 */

class ShowFormInput
{
    /**
     * TODO definieren sie eine Klassenkonstante
     * TODO siehe examples/oophp/DefindeAndConst.php
     */
    const CLASS_CONST = "I am visible within the class and can be called statically from outside";

    /**
     * TODO definieren sie eine Klasseneigenschaft mit Scope public
     * TODO siehe examples/oophp/PublicProtectedPrivateProperties.php
     */
    public $myPublicVar = "I am visible within the class with \$this-> and can be called from outside with \$object->myPublicVar";

    /**
     * TODO Definieren sie einen Konstruktor
     * TODO siehe examples/oophp/DefindeAndConst.php
     */
    public function __construct()
    {
        // TODO Geben sie die oben definierte Klassenkonstante hier aus.
        // TODO Gestalten sie die Ausgabe so, dass dabei valides HTML entsteht
        // todo Umgeben sie Dazu den Wert mit einem <p> oder einem anderem Tag
        echo "<p>CLASS_CONST: " . self::CLASS_CONST . " </p>";
        // TODO Geben sie die oben definierte Klasseneigenschaft hier aus.
        // TODO Gestalten sie die Ausgabe so, dass dabei valides HTML entsteht
        // todo Umgeben sie Dazu den Wert mit einem <p> oder einem anderem Tag
        echo "<p>\$myVar: " . $this->myPublicVar . " </p>";
        // TODO Geben Sie den Wert der globalen Konstante DEBUG aus error_handling.php hier aus
        // TODO Verfahren sie dazu wie bei der Klassenkonstante
        echo "<p>DEBUG: " . DEBUG . " </p>";
    }

    /**
     * TODO Definieren Sie Methode mit Scope public
     * TODO siehe examples/oophp/Inheritance.php
     * TODO Geben Sie in dieser Methode den Inhalt des $_POST-Arrays das von indes.html geschickt wird aus
     * TODO Verwenden sie echo und testen Sie XSS in Chrome und Firefox: <script>alert('hacked')</script>
     * TODO In einem zweiten Schritt verhindern Sie XSS für alle Browser
     */
    public function Show() {
        echo "<p>Dumping \$_POST </p>";
        //echo $_POST['myinput'];
        echo htmlspecialchars($_POST['myinput'], ENT_QUOTES);
    }

}

/*
 * TODO Erzeugen Sie das Objekt
 * TODO Benennen sie das Objekt passend zur Klasse und zu PSR1 in camelCase.
 */
$showFormInput = new ShowFormInput();

// TODO Rufen Sie die Methode mit Scope public hier auf
$showFormInput->Show();

// TODO Geben sie das Objekt mit var_dump() aus
var_dump($showFormInput);

// TODO Geben sie die oben definierte Klassenkonstante im Konstruktor aus.
// TODO Gestalten sie die Ausgabe so, dass dabei valides HTML entsteht
// todo Umgeben sie Dazu den Wert mit einem <p> oder einem anderem Tag
echo "<p>CLASS_CONST: " . $showFormInput::CLASS_CONST . "</p>";

/*
 * TODO Erzeugen Sie ein zweites Objekt mit unterschiedlichem Namen
 * TODO Benennen sie das Objekt passend zur Klasse und zu PSR1 in camelCase.
 */
$showFormInput2 = new ShowFormInput();

// TODO Geben sie das Objekt mir var_dump() aus
var_dump($showFormInput);

// TODO Geben sie die oben definierte Klasseneigenschaft hier aus.
// TODO Gestalten sie die Ausgabe so, dass dabei valides HTML entsteht
// todo Umgeben sie Dazu den Wert mit einem <p> oder einem anderem Tag
echo "<p>\$myVar: " . $showFormInput2->myPublicVar . " </p>";

// TODO Geben Sie den Wert der globalen Konstante DEBUG aus error_handling.php hier aus
// TODO Verfahren sie dazu wie bei der Klassenkonstante
echo  "<p>DEBUG: " . DEBUG . "</p>";

// TODO Geben Sie nur einen Zeilenumbruch am Ende an und kein closing Tag für PHP gemäß PSR2
