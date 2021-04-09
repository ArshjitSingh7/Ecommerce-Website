<?php
    include_once 'php/header.php';
?>
    <section id="sign-in">
        <div class="box">
            <h1 class="box-heading"><i class="fas fa-tshirt"></i>Singh's Clothing</h1>
            <form action="#" method="POST"  class="sign-in-form">
                <label>Email</label>
                <input type="email" name="email" />
                <label>Password</label>
                <input type="password" name="password" />
                <button type="submit" class="btn-dark sign-in" name="sign-in-submit">Sign In</button>
                <p>Don't Have an account? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </section>
    <script src="javascript/sign-in.js"></script>
</body>
</html>