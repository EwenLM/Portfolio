<main>
                <?php if (isset($_SESSION["msg"])) {
                                $message = $_SESSION["msg"];
                            ?>
                                <p class="text"><?php echo $message ?></p>
                            <?php
                                unset($_SESSION['msg']);
                            } ?>
                    <form action="./contact/send" method="POST">

                        <label class="text" for="name">Nom</label>
                        <input class="text" type="text" id="name" name="name">

                        <label class="text" for="surname">Prénom</label>
                        <input class="text" type="text" id="surname" name="surname">

                        <label class="text" for="email">Email</label>
                        <input class="text" type="text" id="email" name="email">

                        <button type="submit">Envoyer</button>
                    </form>

                </main>