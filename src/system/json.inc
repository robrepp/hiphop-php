// @generated by "idl.php inc json.idl.php json.inc"

#if EXT_TYPE == 0
"json_encode", T(String), S(0), "value", T(Variant), NULL, S(0), "loose", T(Boolean), "false", S(0), NULL, S(16384), "/**\n * ( excerpt from http://php.net/manual/en/function.json-encode.php )\n *\n * Returns a string containing the JSON representation of value.\n *\n * @value      mixed   The value being encoded. Can be any type except a\n *                     resource .\n *                     This function only works with UTF-8 encoded data.\n * @loose      bool    Bitmask consisting of JSON_HEX_QUOT, JSON_HEX_TAG,\n *                     JSON_HEX_AMP, JSON_HEX_APOS, JSON_FORCE_OBJECT.\n *\n * @return     string  Returns a JSON encoded string on success.\n */", 
"json_decode", T(Variant), S(0), "json", T(String), NULL, S(0), "assoc", T(Boolean), "false", S(0), "loose", T(Boolean), "false", S(0), NULL, S(16384), "/**\n * ( excerpt from http://php.net/manual/en/function.json-decode.php )\n *\n * Takes a JSON encoded string and converts it into a PHP variable.\n *\n * @json       string  The json string being decoded.\n * @assoc      bool    When TRUE, returned object s will be converted into\n *                     associative array s.\n * @loose      bool    User specified recursion depth.\n *\n * @return     mixed   Returns the value encoded in json in appropriate PHP\n *                     type. Values true, false and null (case-insensitive)\n *                     are returned as TRUE, FALSE and NULL respectively.\n *                     NULL is returned if the json cannot be decoded or if\n *                     the encoded data is deeper than the recursion limit.\n */", 

#elif EXT_TYPE == 1

#elif EXT_TYPE == 2

#elif EXT_TYPE == 3

#endif
