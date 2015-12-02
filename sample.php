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
    
    // Get and print sample voucher details
    $result = $voucherify->get($voucherCode);
    echo(json_encode($result));

?>