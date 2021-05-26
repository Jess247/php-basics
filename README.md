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

Heredoc is used for more complex stringliterals which contain a lot of text and multible variables.

Examples in heredoc.php

# Nowdoc

It is basically the same as heredoc only without variable interpolation.

Example in nowdoc.php

# Constants

Constants store values just like variables the only diffrence is that the value cant be changed.
Instead of using the $ the keyword const is used followed by the name. const CONSTNAME = value;
An older way to define a constant is by using the constandefinition function define();

Example in constants.php
