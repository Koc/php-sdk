<?php

namespace ConfigCat;

/**
 * Contains helper utility operations.
 * @package ConfigCat
 */
final class Utils
{
    /**
     * Determines that a string contains an other.
     *
     * @param string $haystack The string in we search for the other.
     * @param string $needle The string we search.
     * @return bool True if the $haystack contains the $needle.
     */
    public static function strContains($haystack, $needle)
    {
        return strpos($haystack, $needle) !== false;
    }

    /**
     * Splits a given string and trims the result items.
     *
     * @param string $text The text to split and trim.
     * @param string $delimiter The delimiter.
     * @return array The array of split items.
     */
    public static function splitTrim($text, $delimiter = ',')
    {
        return array_map('trim', explode($delimiter, $text));
    }

    /**
     * Returns the string representation of a value.
     *
     * @param $value The value.
     * @return string The result string.
     */
    public static function getStringRepresentation($value)
    {
        if (is_bool($value) === true) {
            return $value ? "true" : "false";
        }

        return (string)$value;
    }
}
