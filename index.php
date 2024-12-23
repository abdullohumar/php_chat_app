<?php 
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: users.php");
}
; ?>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" name="fname" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" name="lname" required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="Password" name="password" required>
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat" required>
                    </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>