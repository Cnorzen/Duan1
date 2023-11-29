<?php
function GetStr($string, $start, $end){
    include ('config.php');
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
    };
    function multiexplode($delimiters, $string)
    {
        $one = str_replace($delimiters, $delimiters[0], $string);
        $two = explode($delimiters[0], $one);
        return $two;
    }
    function random_strings($length_of_string) 
    {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
        return substr(str_shuffle($str_result),  
                           0, $length_of_string); 
    }

function makePayment($name, $email, $street, $city, $state, $postcode, $cc, $cvv, $mm, $yy, $sk, $pk) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/sources');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $pk . ':' . '');
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&owner[name]=' . $name . '&owner[email]=' . $email . '&owner[address][line1]=' . $street . '&owner[address][city]=' . $city . '&owner[address][state]=' . $state . '&owner[address][postal_code]=' . $postcode . '&owner[address][country]=US&card[number]=' . $cc . '&card[cvc]=' . $cvv . '&card[exp_month]=' . $mm . '&card[exp_year]=' . $yy . '');
    $result1 = curl_exec($ch);
    $tok1 = GetStr($result1, '"id": "', '"');
    $msg1 = GetStr($result1, '"message": "', '"');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $sk . ':' . '');
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'description=' . $name . '&source=' . $tok1 . '&address[line1]=' . $street . '&address[city]=' . $city . '&address[state]=' . $state . '&address[postal_code]=' . $postcode . '&address[country]=US');
    $result2 = curl_exec($ch);
    $tok2 = GetStr($result2, '"id": "', '"');
    $msg2 = GetStr($result2, '"message": "', '"');

    if (strpos($result2, "card_error")) {
        $response = array(
            'status' => 'error',
            'message' => $msg2
        );
        return json_encode($response);
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/charges');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $sk . ':' . '');
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount=100&currency=usd&customer=' . $tok2);
    $result3 = curl_exec($ch);

    if (strpos($result3, '"status": "succeeded"')) {
        $response = array(
            'status' => 'success',
            'message' => 'CHARGED 1$ SUCCESSFULLY',
            'receipt_url' => trim(strip_tags(GetStr($result3, '"receipt_url": "', '"'))),
            'risk_score' => trim(strip_tags(GetStr($result3, '"risk_score": "', '"'))),
            'risk_level' => trim(strip_tags(GetStr($result3, '"risk_level": "', '"')))
        );
        return json_encode($response);
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'SERVER ERROR'
        );
        return json_encode($response);
    }
}

// Gọi hàm và nhận kết quả JSON từ Stripe
$result = makePayment($name, $email, $street, $city, $state, $postcode, $cc, $cvv, $mm, $yy, $sk, $pk);

// Xuất kết quả
echo $result;

?>
