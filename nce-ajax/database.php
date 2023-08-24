<?php
function connectdatabase(){
    // PDO(database details,username-root,password-'')
    return new PDO('mysql:host=localhost;port=3306;dbname=nce_project','root','');
}
?>