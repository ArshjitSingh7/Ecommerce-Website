<?php
    include_once 'php/header.php';
?>
    <section id="sign-in">
        <div class="box">
            <h1 class="box-heading"><i class="fas fa-tshirt"></i>Singh's Clothing</h1>
            <form  method="POST" class="sign-in-form">
                <label>Username</label>
                <input type="text" name="username">
                <label>Email</label>
                <input type="email" class="email-signup" name="email" />
                <label>Password</label>
                <input type="password" name="password" class="password-signup" />
                <label>Confirm Password</label>
                <input type="password" name="confirm-password" class="confirm-password-signup" />
                <button type="submit" class="btn-dark btn-block sign-up" name="sign-up-submit">Sign Up</button>  
            </form>
        </div>
    </section>
    <script src="javascript/sign-up.js"></script>
</body>
</html>