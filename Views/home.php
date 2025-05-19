<?php
    include "header.php";
?>
<div class="lnfoform">
    <div class="container">
        <div class="form">
            <form action="Process_Form.php" method="POST">
                <h2 class="heading__form">Send Information Form</h2>
                <div class="input__Username">
                    <label for="name">First Name</label>
                    <input type="text" id="name" name="name" placeholder="Name">
                </div>
                <div class="input__Lastname">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name">
                </div>
                <button type="submit" class="Button">Submit</button>
            </form>
        </div>
        <div class="cyrcle cyrcle1"></div>
        <div class="cyrcle cyrcle2"></div>
    </div> 
</div>
<?php
    include "footer.php";
?>