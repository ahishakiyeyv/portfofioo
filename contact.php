<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/bb.png">
    <script src="https://kit.fontawesome.com/7e089e6dcc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/contacte.css">
    <title>Contact</title>
</head>

<body>
    <article>

        <a class="back" href="index.php"><i class="far fa-arrow-alt-circle-left"></i></a>
        <h1 class="title">Contactez Nous</h1>
        <p class="para">Des Questions ou Remarques? Contactez nous par un message</p>
        <section class="container">
            <div class="box1">
                <h3 class="title1">Information du Contact</h3>
                <p class="para1">Completez le formulaire et Nous vous répondrons dans quelques heures.</p>
                <p class="nume">
                    <i class="fas fa-phone-alt"></i>+257 76 837 105 <br><i class="fas fa-phone-alt"></i>+257 68 756 612
                    <br> <i class="fab fa-whatsapp"></i>+257 71 878 079
                </p>
                <p class="mail">
                    <i class="far fa-envelope"></i> <a class="maili" href="mailto:budigobertrandhau@gmail.com"
                        target="_blank">budigobertrandhau@gmail.com</a> <br>
                    <!--<i class="far fa-envelope"></i> <a class="maili" href="mailto:ahig@biu.bi"
                        target="_blank">ahig@biu.biu</a>-->
                </p>
                <p class="addresse">
                    <i class="fas fa-map-marker-alt"></i> Bujumbura Mairie, Burundi
                </p>
                <br><br>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
            </div>
            <div class="box2">
                <form method="post">
                    <table>
                        <tr>
                            <th class="th">Nom:</th>
                            <th class="th">Prenom:</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="name" placeholder="Votre nom..." class="input"></td>
                            <td><input type="text" name="prenom" placeholder="Votre prenom..." class="input"></td>
                        </tr>
                        <tr>
                            <th class="th">Email:</th>
                            <th class="th">Telephone:</th>
                        </tr>
                        <tr>
                            <td><input type="email" name="mail" placeholder="Votre email..." class="input"></td>
                            <td><input type="text" name="phone" placeholder="Numero de telephone..." class="input"></td>
                        </tr> <br>
                        <!-- <tr>
                            <th class="th">Comment pouvons-nous vous aider?</th>
                        </tr>
                        <tr>
                            <td><input type="radio" name="design" id="">Web design
                                <input type="radio" name="developpement" id="">Web developpement
                                <input type="radio" name="other" id="">Autre
                            </td>
                        </tr>-->
                        <tr>
                            <th class="th">Message:</th>
                        </tr>
                        <tr>
                            <td><textarea name="message" id="textarea" cols="30" rows="3"
                                    placeholder="Ecrire votre message..."></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Envoyer" name="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
    </article>
    <br>
    <footer>
        <div class="copy">
            <p>&copy 2021 BUDIGO Bertrand, Tous Droits Réservés</p>
        </div>
        <div class="contact">
            <p class="cont">Contact: <a class="media" href="facebook.com"><i class="fab fa-facebook-square"></i></a> <a class="media" href="twitter.com"><i class="fab fa-twitter-square"></i></a> <a
                    class="media" href="mailto:bertrandbudigohau@gmail.com" target="_blank"><i class="fas fa-envelope-square"></i></a></p>
        </div>
        <p class="dev">Developped by Y.I Ahishakiye</p>
    </footer>
</body>

</html>