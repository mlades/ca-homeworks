<?php
$contacts = fopen("files/contacts.csv", 'a+');
$phone_type = fopen("files/phone_type.csv", 'r');
$contact_type = fopen("files/contact_type.csv", 'r');
$email_type = fopen("files/email_type.csv", 'r');

$result = [];
$phone_type_data = [];
$contact_type_data  = [];
$email_type_data = [];
while(!feof($contacts)) {     
   $result[] = (fgetcsv($contacts, 1000, ",")); 
}
while(!feof($phone_type)) {     
    $phone_type_data[] = (fgetcsv($phone_type, 1000, ",")); 
 }
 while(!feof($contact_type)) {     
    $contact_type_data[] = (fgetcsv($contact_type, 1000, ",")); 
 }
 while(!feof($email_type)) {     
    $email_type_data[] = (fgetcsv($email_type, 1000, ",")); 
 }

array_shift($result);
array_shift($phone_type_data);
array_shift($contact_type_data);
array_shift($email_type_data);

fclose($contacts);
fclose($phone_type);
fclose($contact_type);
fclose($email_type);

if(isset($_POST["createContacts"])) {
    $id = (end($result)[0])+1;
    $name = $_POST["name"];
    $work = $_POST["work"];
    $phoneNumber = $_POST["phoneNumber"];
    $phoneNumberType = array_search($_POST["phoneTypes"], array_column($phone_type_data, '1'))+1;
    $email = $_POST["email"];
    $emailType = array_search( $_POST["emailTypes"], array_column($email_type_data, '1'))+1;
    $address = $_POST["address"];
    $contactType = array_search( $_POST["contactTypes"], array_column($contact_type_data, '1'))+1;
    $record = "\n" . $id .",". $name .",". $work .",". $phoneNumber .",". $phoneNumberType .",". $email .",". $emailType .",". $address .",". $contactType;
    $contacts_file = fopen("files/contacts.csv", 'a+');
    fputs($contacts_file, $record);
    fclose($contacts_file);
}

function showContact($result,$phone_type,$contact_type,$email_type) {
    $i = 0;
    foreach($result as $key ) { 
            $result[$i][] = $phone_type[$key[4]-1][1];
            $result[$i][] = $contact_type[$key[8]-1][1];
            $result[$i][] = $email_type[$key[6]-1][1];
            $i++;
    }
    
    return $result;
};

function deleteContact($id) {
    $id = $_GET['contact'];
    var_dump($_GET);  
    $fptemp = fopen('files/contacts-tmp.csv', "a+");
    $handle = fopen('files/contacts.csv', "r");
        while ($data= fgetcsv($handle)) {
        if ($id != $data[0] ){
           // $list = array($data);
           var_dump($data);
                var_dump($data);
                fputcsv($fptemp, $data); 
        }
    }
    fclose($handle);
    fclose($fptemp);
    unlink('files/contacts.csv');
    rename('files/contacts-tmp.csv','files/contacts.csv');
    
}
?>