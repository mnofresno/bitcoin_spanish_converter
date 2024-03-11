# Spanish to English Bitcoin BIP39 Converter

Convert Bitcoin BIP39 recovery phrases from Spanish to English, ideal for users with older wallets or those needing cross-language compatibility.

## Installation

1. Clone this repository:
2. Navigate to the project directory:
3. cd bitcoin_spanish_converter

Ensure you have PHP installed on your system.

## Usage

Run the PHP CLI command with the recovery phrase in Spanish as the input:

```
php convert.php "tu frase de recuperación aquí"
```

The tool will then output the corresponding recovery phrase in English.

## Example

```
php convert.php "la vida es bella cuando tienes bitcoin"
```
Output:

Translated word: life, index: 31
Translated word: is, index: 32
Translated word: beautiful, index: 33
Translated word: when, index: 34
Translated word: you, index: 35
Translated word: have, index: 36
Translated word: bitcoin, index: 37

The final translated phrase will be: life is beautiful when you have bitcoin.

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Contributing

Contributions are welcome! Please feel free to submit issues or pull requests.

## Acknowledgements

This project uses BIP39 for the conversion process.
Special thanks to the Bitcoin community for their continuous support and feedback.



