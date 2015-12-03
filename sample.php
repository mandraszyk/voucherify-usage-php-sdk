<?php 

    // Use autoloader to include dependencies
    require_once('vendor/autoload.php');
    
    use Voucherify\VoucherifyClient;
    use Voucherify\ClientException;
    
     // Testing data
    $apiID          = "c70a6f00-cf91-4756-9df5-47628850002b";
    $apiKey         = "3266b9f8-e246-4f79-bdf0-833929b1380c";
    $voucherCode    = "Testing7fjWdr";
    $trackingID     = "my.custom.tracking.id";
    
    // Create new VoucherifyClient instance
    $voucherify = new VoucherifyClient($apiID, $apiKey);
    
    // method: Get
    try {
        echo("Voucherify: GET" . PHP_EOL);
        
        $result = $voucherify->get($voucherCode);
        echo(json_encode($result) . PHP_EOL);
    } 
    catch (ClientException $e) {
        echo ("Error: " . $e->getMessage() . PHP_EOL);
    }
    
    // method: Redemption
    try {
        echo("Voucherify: REDEMPTION" . PHP_EOL);
        
        $result = $voucherify->redemption($voucherCode);
        echo(json_encode($result) . PHP_EOL);
    }
    catch (ClientException $e) {
        echo ("Error: " . $e->getMessage() . PHP_EOL);
    }
    
    // method: Redeem (by Code)
    try {
        echo("Voucherify: REDEEM" . PHP_EOL);
        
        $result = $voucherify->redeem($voucherCode, NULL);
        echo(json_encode($result) . PHP_EOL);
    }
    catch (ClientException $e) {
        echo ("Error: " . $e->getMessage() . PHP_EOL);
    }
    
     // method: Redeem (by Code with tracking provided)
    try {
        echo("Voucherify: REDEEM (with code)" . PHP_EOL);
        
        $result = $voucherify->redeem($voucherCode, $trackingID);
        echo(json_encode($result) . PHP_EOL);
    } 
    catch (ClientException $e) {
        echo("Error: " . $e->getMessage() . PHP_EOL);
    }
    
    // method: Redeem (with customer profile)
    try {
        echo("Voucherify: REDEEM (with customer profile)" . "\n");
        
        $result = $voucherify->redeem([
            "voucher" => $voucherCode, 
            "customer" => [ 
                "id" => "alice.query",
                "name" => "Alice Query"
            ]
        ], NULL);
        echo(json_encode($result) . PHP_EOL);
    }
    catch (ClientException $e) {
        echo("Error: " . $e->getMessage() . PHP_EOL);
    }

?>