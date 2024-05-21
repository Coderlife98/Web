<?php
$curl = curl_init();
if (isset($_GET['id'])) {
    // $encodedId = base64_encode($_GET['id']);
    // $url = 'https://khanansoft.bihar.gov.in/portal/ePass/ViewPassDetails.aspx?' . $encodedId;
    // $url = 'https://khanansoft.bihar.gov.in/portal/ePass/ViewPassDetails.aspx?'.$_GET['id'];
    // $url = 'https://khanansoft.bihar.gov.in/portal/ePass/ViewPassDetails.aspx?'.$_GET['id'];
        
        
        $queryString = $_SERVER['QUERY_STRING'];
        
        // Remove 'id=' from the query string 
        $id = str_replace('id=', '', $queryString);

        $url = 'https://khanansoft.bihar.gov.in/portal/ePass/ViewPassDetails.aspx?'.$id;

    // echo $url;die;
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Cookie: ASP.NET_SessionId=hxgeiavpt2ylus5vxkv3gqvu',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36'
        ),
    )
    );
    
    $response = curl_exec($curl);
    
    if(curl_error($curl)) {
        echo 'Curl error: ' . curl_error($curl);
    }
    
    curl_close($curl);
    echo $response;
} else {
    echo 'id not get';
}