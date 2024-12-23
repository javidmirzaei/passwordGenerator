### README

# Password Generator

This is a simple PHP script to generate random passwords based on customizable options.

## How to Use

1. Save the script as `passwordGenerator.php`.
2. Run it using the command line with the following options:

### Options:

- `--l=<length>`: Specify the length of the password (default: 12).
- `--t=<type>`: Specify the character set for the password. Available options:
  - `all` (default): Letters, numbers, and special characters.
  - `l`: Letters only.
  - `n`: Numbers only.
  - `ln`: Letters and numbers.

### Examples:

- Generate a 15-character password with all character types:
  ```bash
  php passwordGenerator.php --l=15 --t=all
  ```
- Generate a 10-character password with letters only:
  ```bash
  php passwordGenerator.php --l=10 --t=l
  ```
- Generate an 8-character password with numbers only:
  ```bash
  php passwordGenerator.php --l=8 --t=n
  ```

## Error Handling

If invalid options are provided, the script will display an error message explaining the correct usage.

### Example Error:

```bash
Error: Invalid charset option. Use 'all'(default), 'l for letters', 'n for numbers', or 'ln for letters_numbers'. example --l=15 t=ln
```

---

This script is a simple and effective way to generate secure passwords for various use cases.

