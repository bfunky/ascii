# ascii
A library to check strings and transliterate to ascii encoding

## Usage as static class

### Validate if given value is a valid ascii string

```
//returns true
$result = Ascii::isValid('this string is valid');

//returns false
$result = Ascii::isValid('cette chaîne est valide');
```

### Transliterate a string
```
//print `cette chaine est valide`
echo Ascii::transliterate('cette chaîne est valide');
```

## Usage creating ab instance

### Validate if given value is a valid ascii string

```
$ascii = new Ascii();
//returns true
$result = $ascii->isValid('this string is valid');

//returns false
$result = $ascii->isValid('cette chaîne est valide');
```

### Transliterate a string
```
$ascii = new Ascii();
//print `cette chaine est valide`
echo $ascii->transliterate('cette chaîne est valide');
```