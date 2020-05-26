<?php

foreach($contact_type_data as $name) {
    $contactTypes [] = $name[1];
}

foreach($phone_type_data as $name) {
    $phoneTypes [] = $name[1];
}

foreach($email_type_data as $name) {
    $emailTypes [] = $name[1];
}

sort($contactTypes);
sort($phoneTypes);
sort($emailTypes);


?>
<body>
    <div class="container card mt-3 pb-3">
        <div class="mx-auto">
            <div class="clearfix">
                <h2 class="float-left">Create New Contact</h2>
                <a href="./index.php" class="float-right text-danger" title="Go Back">
                <i class="fas fa-chevron-circle-left fa-2x"></i>
                </a>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Please enter full name" required>
                </div>
                <div class="form-group">
                    <label for="work">Work</label>
                    <input type="text" name="work" id="work" class="form-control" placeholder="Please enter work" required>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-8">
                          <label for="phoneNumber">Phone number</label>
                          <input type="text" name="phoneNumber" class="form-control" placeholder="Phone number" required>
                        </div>
                        <div class="col-4">
                          <label for="phoneType">Phone type</label>
                          <select name="phoneTypes" id="group" class="form-control">

                            <?php if(isset($phoneTypes)):?>                    
                                 <?php foreach($phoneTypes as $name):?>
                                    <option value=<?php echo $name;?> > <?php echo $name;?> </option>
                                <?php endforeach;?>
                            <?php endif;?>

                        </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-8">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Please enter e-mail address" required>
                        </div>
                        <div class="col-4">
                          <label for="emailType">Phone type</label>
                          <select name="emailTypes" id="group" class="form-control">

                            <?php if(isset($emailTypes)):?>                    
                                 <?php foreach($emailTypes as $name):?>
                                    <option value=<?php echo $name;?> > <?php echo $name;?> </option>
                                <?php endforeach;?>
                            <?php endif;?>

                        </select>
                        </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Please enter address" required>
                </div>
               
                </div>
                <div class="form-group">
                    <label for="group">Contact Group</label>
                    <select name="contactTypes" id="group" class="form-control">
                        
                        <?php if(isset($contactTypes)):?>                    
                             <?php foreach($contactTypes as $name):?>
                                <option value=<?php echo $name;?> > <?php echo $name;?> </option>
                            <?php endforeach;?>
                        <?php endif;?>

                    </select>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-block" name="createContacts">Create Contact</button>
            </form>
        </div>
    </div>
</body>