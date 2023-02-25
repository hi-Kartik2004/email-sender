<?php

?>


<br>
<center>

    <div class="card text-center" style="width: 28rem; flex-direction:row">
        <div class="card-body">
            <h3 class="card-title"><u>Customize the Email Sender</u></h3>
            <br>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sender Email</label>
                    <input type="email" class="form-control" required placeholder="example@example.com" id="exampleInputEmail1" name="senderEmail" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We never store your data</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sender Name</label>
                    <input type="text" placeholder="Your Name" required name="senderName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We never store your data</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sender Phone</label>
                    <input type="text" name="senderPhone" required minlength="10" maxlength="10" class="form-control" id="exampleInputEmail1" placeholder="12345 67890" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We never store your data</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Google App Password</label>
                    <input type="password" class="form-control" minlength="16" maxlength="16" required id="exampleInputPassword1" placeholder="16 letter password" name="senderPassword">
                    <div id="emailHelp" class="form-text">Not sure about your Google App password? <a href="https://www.youtube.com/watch?v=J4CtP1MBtOE">Where is it !?</a></div>

                </div>

                <div class="d-flex" style="flex-direction:column; margin-top:20px;">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <br>
                    <a href="?auth=0" class="btn btn-secondary">Use Kartikeya's email id to send email</a>
                </div>
                <div id="emailHelp" style="margin-top:15px;" class="form-text">We don't store any of your data <a href="https://github.com/hi-Kartik2004/email-sender">Know more</a></div>

            </form>

            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
    </div>

</center>