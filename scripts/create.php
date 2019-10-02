<?php
    $dsn = 'mysql:dbname=portfolioDb;host=localhost';
    $user = 'portInputs';
    $password = 'gitgud';

    // echo json_encode($_POST);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    try {
        $dbh = new PDO($dsn, $user, $password);

        $statement = 'INSERT INTO portInputs
        (
            S_NAME,
            S_EMAIL,
            S_MESSAGE
        )
         VALUES(
            :name,
            :email,
            :message
         )';

        $query = $dbh->prepare($statement);
        $query->execute([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $result = $query->fetchAll();

        // echo "Information Submited!";

    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>