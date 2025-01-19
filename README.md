# PHP Loose vs. Strict Comparison

This example demonstrates a common error in PHP related to loose and strict comparisons.  The function `foo` uses strict comparison (`===`), which checks for both value and type equality.  This contrasts with loose comparison (`==`), which only checks for value equality and performs type coercion if necessary.

The unexpected behavior arises because 0 and "0" are considered equal under loose comparison, but not under strict comparison.