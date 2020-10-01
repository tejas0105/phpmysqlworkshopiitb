<!-- Create a page vowel.php into root directory of your local web server. Write in the script for
determining whether or not the character associated with a variable is Vowel or a Consonant. If its
a Vowel echo out the name of the vowel otherwise echo out its a Consonant. Use Switch for this
script. -->
<?php
    $ab="e";
    $space=" ";
    switch($ab)
    {
        case 'a':
            echo"Entered char is ".$ab;
        break;
        case 'e':
            echo"Entered char is ".$ab;
        break;
        case 'i':
            echo"Entered char is ".$ab;
        break;
        case 'o':
            echo"Entered char is ".$ab;
        break;
        case 'u':
            echo"Entered char is ".$ab;
        break;
        default:
            echo"It is a Consonant";
    }
?>
