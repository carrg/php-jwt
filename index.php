<?php
    echo "<pre>";

    use Firebase\JWT\JWT;

    require_once "JWT.php";

    $time = time();
    $key = "CarRG180818";
    $token = array(
        "username" => "CarRG",
        "password" => "180818",
        "iat" => $time, // Tiempo que inicia el token
        "exp" => $time + (60 * 60) // Tiempo que expir el token, 1 hora
    );

    $jwt =JWT::encode($token, $key);
    print_r($jwt);

    echo "<br /><br />";

    $decode_jwt = JWT::decode($jwt, $key, array("HS256"));
    print_r($decode_jwt);

    /* $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, "http://localhost:3000/v1/users");

    curl_setopt($curl, CURLOPT_POST, 1);

    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            //"Content-length: 0",
            "Content-Type: application/json",
            "Authorization: Bearer 123456789"
        )
    );

    //curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    //curl_setopt($curl, CURLOPT_USERPWD, "username:password");
    //curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    //curl_setopt($curl, CURLOPT_PUT, 1);s
    //curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
    //curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
    //curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($curl, CURLOPT_POSTFIELDS, 
        '
            {
                "name": "Carmelo 3",
                "last_name": "Bravo",
                "phone": "7774412104"	
            }
        '
    ); 

    $result = curl_exec($curl);

    if ($result === false)
    {
        // throw new Exception('Curl error: ' . curl_error($crl));
        print_r('Curl error: ' . curl_error($curl));
    } 
    else
    {
        print_r($result);
    }

    curl_close($curl); */

    echo "</pre>"; 
?>