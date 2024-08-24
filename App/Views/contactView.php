<main>
                <?php if (isset($_SESSION["msg"])) {
                                $message = $_SESSION["msg"];
                            ?>
                                <p class="text"><?php echo $message ?></p>
                            <?php
                                unset($_SESSION['msg']);
                            } ?>
                    <form action="./contact/send" method="POST">
                        
                        <label class="text" for="email">Email</label>
                        <input class="text" type="text" id="email" name="email">

                        <label class="text" for="subject">Subject</label>
                        <input class="text" type="text" id="subject" name="subject">

                        <label for="text">Message</label>
                        <textarea name="message" rows="15" cols="140" id=""></textarea>
                        <button type="submit">Envoyer</button>
                    </form>

                </main>