# PHP Silent Array Key Access

This repository demonstrates a subtle but common error in PHP: the silent handling of undefined array keys. When you attempt to access an array element using a key that doesn't exist, PHP doesn't throw an error; instead, it returns `NULL`.  This can lead to unexpected behavior and hard-to-debug issues.

The `bug.php` file shows examples of this behavior.  The `bugSolution.php` file provides a solution using `isset()` to check for the existence of keys before accessing them.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected results.
4. Run `bugSolution.php` to see the corrected version.

## Solution

Always check for the existence of array keys using functions like `isset()` or `array_key_exists()` before attempting to access them to prevent unexpected results and potential errors.