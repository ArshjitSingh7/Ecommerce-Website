<?php
    include_once 'php/header.php';
?>
<section id="contact">
    <section id="sign-in">
        <div class="box">
            <h1 class="box-heading"><i class="fas fa-tshirt"></i>Singh's Clothing</h1>
            <form class="sign-in-form" method="POST">
                <label>Name</label>
                <input type="name" name="name" />
                <label>Email</label>
                <input type="email" name="email" />
                <label>Subject</label>
                <input type="text" name="subject" />
                <label>Contact</label>
                <input type="number" name="contact" />
                <label>Message</label>
                <textarea class="message" name="message"></textarea>
                <button class="btn-dark btn-block contact-btn" type="submit">Submit</button>
            </form>
        </div>
</section>
<script src="javascript/contact.js"></script>
</body>
</html>