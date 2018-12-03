<?php
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, "http://localhost:3000/v1/users");

    curl_setopt($curl, CURLOPT_POST, 1);

    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            //"Content-length: 0",
            "Content-Type: application/json",
            "Authorization: "
        )
    );

    /* curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_PUT, 1);s
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
    curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false); */

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
        echo $result;
    }

    curl_close($curl);
?>