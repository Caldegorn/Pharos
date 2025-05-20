
# Pharos

Daily Check-in Automation for the Pharos Testnet

## Overview

Pharos is a PHP-based automation tool designed to perform daily check-ins on the Pharos Testnet. This script automates the process of logging in and claiming daily rewards or completing daily tasks required by the Pharos Testnet platform.

## Features

- Automates daily check-in process on the Pharos Testnet
- Uses PHP and browser automation tools (e.g., Selenium WebDriver)
- Can be scheduled to run automatically via cron jobs
- Simple setup and configuration

## Prerequisites

- PHP 7.0 or higher with `curl` and `mail` extensions enabled
- Selenium WebDriver server running (for browser automation)
- ChromeDriver or GeckoDriver installed and accessible in your system PATH
- Valid Pharos Testnet account credentials (if login is required)

## Installation

1. Clone this repository:

```
git clone https://github.com/Caldegorn/Pharos.git
cd Pharos
```

2. Install PHP dependencies using Composer:

```
composer install
```

3. Ensure Selenium Server is running on your machine:

```
java -jar selenium-server-standalone.jar
```

4. Update the configuration in the PHP script (e.g., `pharos.php`) with your account credentials and any necessary URLs or selectors.

## Usage

Run the daily check-in script manually:

```
php pharos_checkin.php
```

To automate daily execution, set up a cron job:

```
0 0 * * * /usr/bin/php /path/to/Pharos/pharos_checkin.php
```

This example runs the script every day at midnight.

## Troubleshooting

- Verify that Selenium Server and the appropriate WebDriver are running and compatible with your browser version.
- Confirm that the PHP script selectors match the current Pharos Testnet website structure.
- Check PHP error logs for any issues during execution.

## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests to improve the automation or add features.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

