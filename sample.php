<?php 

    // Use autoloader to include dependencies
    require_once('vendor/autoload.php');
    
    use Voucherify\VoucherifyClient;
    
    // Testing data
    $apiID = "c70a6f00-cf91-4756-9df5-47628850002b";
    $apiKey = "3266b9f8-e246-4f79-bdf0-833929b1380c";
    $voucherCode = "CODE1";
    
    // Create new VoucherifyClient instance
    $voucherify = new VoucherifyClient($apiID, $apiKey);
    
    // method: Get
    echo("Voucherify: GET\n");
    $result = $voucherify->get($voucherCode);
    echo(json_encode($result) . "\n\n");
    
    // method: Redemptions
    echo("Voucherify: REDEMPTION\n");
    $result = $voucherify->redemption($voucherCode);
    echo(json_encode($result) . "\n\n");
    
    // method: Redeem (by Code)
    echo("Voucherify: REDEEM\n");
    $result = $voucherify->redeem($voucherCode, NULL);
    echo(json_encode($result) . "\n\n");

?>