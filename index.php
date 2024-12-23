<?php


function generatePassword($length = 12, $charset = 'all')
{
    $characterSets = [
        'all' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?',
        'l' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'n' => '0123456789',
        'ln' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',
    ];

    if (!array_key_exists($charset, $characterSets)) {
        throw new Exception("Invalid charset option. Use 'all'(defualt), 'l for letters', 'n for numbers', or 'ln for letters_numbers'. exmaple --l=15 t=ln");
    }

    $characters = $characterSets[$charset];
    $charactersLength = strlen($characters);

   // Password Generation
    $randomBytes = random_bytes($length);
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $index = ord($randomBytes[$i]) % $charactersLength;
        $password .= $characters[$index];
    }

    return $password;
}


$options = getopt("", ["l:", "t:"]);

$length = isset($options['l']) ? (int)$options['l'] : 12; // Length of password
$charset = isset($options['t']) ? $options['t'] : 'all'; // Type of password

try {
    $password = generatePassword($length, $charset);
    echo "Generated Password: " . $password . PHP_EOL;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}