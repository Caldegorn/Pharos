<?php

require_once __DIR__ . '/vendor/autoload.php';

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

// Configuration
$pharosTestnetURL = 'https://testnet.pharosnetwork.xyz';
$email = 'your_email@example.com';
$password = 'your_password';

// Selenium WebDriver setup
$host = 'http://localhost:4444/wd/hub'; // Selenium server URL
$capabilities = DesiredCapabilities::chrome(); // You can use 'firefox' or other browsers

$driver = RemoteWebDriver::create($host, $capabilities);

try {
    // 1. Navigate to the Pharos Testnet website
    $driver->get($pharosTestnetURL);

    // 2. Authenticate (if required)
    // Locate the login button/link
    $loginButton = $driver->findElement(WebDriverBy::linkText('Connect Wallet'));
    $loginButton->click();

    // Locate email and password fields and enter credentials
    $emailField = $driver->findElement(WebDriverBy::id('email')); // Replace with actual ID
    $emailField->sendKeys($email);

    $passwordField = $driver->findElement(WebDriverBy::id('password')); // Replace with actual ID
    $passwordField->sendKeys($password);

    // Click the submit button
    $submitButton = $driver->findElement(WebDriverBy::id('submit')); // Replace with actual ID
    $submitButton->click();

    // Wait for authentication to complete (adjust time as needed)
    $driver->wait(10, 500)->until(
        WebDriverExpectedCondition::presenceOfElementLocated(WebDriverBy::id('daily-checkin-button')) // Replace with actual element ID
    );

    // 3. Perform Daily Check-in
    $checkInButton = $driver->findElement(WebDriverBy::id('daily-checkin-button')); // Replace with actual ID
    $checkInButton->click();

    echo "Daily check-in performed successfully!\n";

} catch (Exception $e) {
    echo "Failed to perform daily check-in: " . $e->getMessage() . "\n";
} finally {
    // Close the browser
    $driver->quit();
}

?>
