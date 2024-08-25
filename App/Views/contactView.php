<main>
    <?php if (isset($_SESSION["msg"])) {
        $message = $_SESSION["msg"];
    ?>
        <p class="text"><?php echo $message ?></p>
    <?php
        unset($_SESSION['msg']);
    } ?>
    <form action="./contact/send" method="POST" class="centered-form">
        <div class="form-group">
            <label class="text" for="email">Email</label>
            <input class="text" type="text" id="email" name="email">
        </div>
        <div class="form-group">
            <label class="text" for="subject">Subject</label>
            <input class="text" type="text" id="subject" name="subject">
        </div>
        <div class="form-group">
            <label class="text" for="text">Message</label>
            <textarea class="text" name="message" rows="5" id=""></textarea>
        </div>
        <button type="submit">Send</button>
    </form>


</main>