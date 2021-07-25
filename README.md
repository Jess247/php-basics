# PHP Basics

This is PHP-101. Starting with the most basic fundamentals.

- How to declare variables
- How to use operators
  - Arithmetic operators
  - Combining operators
  - Use increment and decrement operators
- Different datatypes
  - Boolean
  - Integer
  - Floats
  - Strings
- Variable Interpolation
- Escape-Sequences
- Herdoc
- Nowdoc
- How to declare constants
- predefined constants
- magic constants

## How to declare variables

Variables always begin with a $ followed by an underscore or a letter. After the underscore you can use numbers or other characters.
Examples in variables.php

## How use operators

Operators are used for asignments, to perform mathematical calculations or for comparison.
Exampes in operators.php

# Different datatypes

The different datatypes are integers, booleans, float and strings.

Example in datatypes.php

# Variable Interpolation

They can be used to output the value of a variable along with other text. The '.' operator is used for interpolation.

Example in var-interpolation.php

# Escape-Sequences

Widely used Escape Sequences in PHP

- \' – To escape ' within single quoted string.
- \” – To escape “ within double quoted string.
- \\ – To escape the backslash.
- \$ – To escape $.
- \n – To add line breaks between string.
- \t – To add tab space.
- \r – For carriage return.

Examples in escape-sequences.php

# Heredoc

Heredoc is used for more complex stringliterals which contain a lot of text and multiple variables.

Examples in heredoc.php

# Nowdoc

It is basically the same as heredoc only without variable interpolation.

Example in nowdoc.php

# Constants

Constants store values just like variables the only difference is that the value cant be changed.
Instead of using the $ the keyword const is used followed by the name. const CONSTNAME = value;
An older way to define a constant is by using the constant definition function define();

Example in constants.php

# magic constants

Magic constants are also predefined the reason their called magic is because their value depends on where it is used.
They're written with two underscores in the front and back '**LINE**' for example.

Example in constants.php

# Comparison operators

They are used to compare values and return true or false. Operators are ==, ===, !0 (or <>), !==, <, <=, >, >=.

# Logic Operators

The word or symbol is used to connect two or more expressions. The result is either true or false.
"and", "or", "xor", !, &&, ||.

# POST vs. GET

| Tables                  |          GET          |                    POST |
| ----------------------- | :-------------------: | ----------------------: |
| Using return or refresh |    not problematic    |        sends Data again |
| Bookmark or favorite    |     can be stored     |         can't be stored |
|                         |   using parameters    |                         |
| Cache                   |     can be Cached     |         can't be Cached |
| Browser history         | parameters are saved  | Parameters aren't saved |
| length restrictions     |  max URL-length 4048  |         no restrictions |
|                         |      characters       |                         |
| Datatype restrictions   | ASCII characters only |         no restrictions |
| safety                  |  less save than post  |    a bit saver than get |
|                         | data is sent via URL  | not saved in URL, chahe |
|                         |                       |  or browser history and |
|                         |                       |  not saved in log-files |
|                         |                       |           of the server |
| visibility              | adressbar in browser  |  not visible right away |
