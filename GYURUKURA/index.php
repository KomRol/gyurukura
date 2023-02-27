<?php require_once('header.php'); ?>

<div id="content" class="container" name="content">
    <div class="container" style="padding-top: 15px; ">
        <!-- Tartalom eleje -->
        <p>
            <?php
            if (isset($_GET['status']) && $_GET['status'] == 'LoggedIn') {
                echo 'Sikeres bejelentkezés';
            }
            if (isset($_GET['status']) && $_GET['status'] == 'registrationComplete') {
                echo 'Sikeres regisztráció';
            }
            if (isset($_GET['status']) && $_GET['status'] == 'loggedOut') {
                echo 'Sikeres kijelentkezés';
            }
            ?>
        </p>

        
        <img src="jrrt.png" style="float:right; margin:0px 0px 45px 45px; cursor:pointer; cursor:hand; border:0" width="400" height="400" alt="J. R. R. Tolkien" />
        <h1>J. R. R. Tolkien</h1>
        <p> John Ronald Reuel Tolkien (3 January 1892 – 2 September 1973) was an English writer and philologist. He was the author of the high fantasy works The Hobbit and The Lord of the Rings.

            From 1925 to 1945, Tolkien was the Rawlinson and Bosworth Professor of Anglo-Saxon and a Fellow of Pembroke College, both at the University of Oxford. He then moved within the same university to become the Merton Professor of English Language and Literature and Fellow of Merton College, and held these positions from 1945 until his retirement in 1959. Tolkien was a close friend of C. S. Lewis, a co-member of the informal literary discussion group The Inklings. He was appointed a Commander of the Order of the British Empire by Queen Elizabeth II on 28 March 1972.

            After Tolkien's death, his son Christopher published a series of works based on his father's extensive notes and unpublished manuscripts, including The Silmarillion. These, together with The Hobbit and The Lord of the Rings, form a connected body of tales, poems, fictional histories, invented languages, and literary essays about a fantasy world called Arda and, within it, Middle-earth. Between 1951 and 1955, Tolkien applied the term legendarium to the larger part of these writings.

            While many other authors had published works of fantasy before Tolkien, the great success of The Hobbit and The Lord of the Rings led directly to a popular resurgence of the genre. This has caused him to be popularly identified as the "father" of modern fantasy literature—or, more precisely, of high fantasy. </p>
        <!-- Tartalom vége -->
        <?php require_once('footer.php'); ?>