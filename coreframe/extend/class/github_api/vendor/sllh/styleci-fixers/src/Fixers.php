<?php

namespace SLLH\StyleCIFixers;

/**
 * This class was auto-generated from StyleCI/SDK tool.
 *
 * @link https://github.com/StyleCI/SDK
 */
final class Fixers
{
    /**
     * @var string[]
     */
    public static $valid = array(
        'align_double_arrow',
        'align_equals',
        'binary_operator_spaces',
        'blank_line_after_namespace',
        'blank_line_after_opening_tag',
        'blank_line_before_return',
        'braces',
        'cast_spaces',
        'class_definition',
        'combine_consecutive_unsets',
        'concat_with_spaces',
        'concat_without_spaces',
        'dir_constant',
        'echo_to_print',
        'elseif',
        'encoding',
        'ereg_to_preg',
        'full_opening_tag',
        'function_declaration',
        'function_typehint_space',
        'hash_to_slash_comment',
        'heredoc_to_nowdoc',
        'include',
        'linebreak_after_opening_tag',
        'long_array_syntax',
        'lowercase_cast',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'method_separation',
        'modernize_types_casting',
        'native_function_casing',
        'new_with_braces',
        'no_alias_functions',
        'no_blank_lines_after_class_opening',
        'no_blank_lines_after_phpdoc',
        'no_blank_lines_before_namespace',
        'no_blank_lines_between_uses',
        'no_closing_tag',
        'no_duplicate_semicolons',
        'no_empty_comment',
        'no_empty_phpdoc',
        'no_empty_statement',
        'no_extra_consecutive_blank_lines',
        'no_leading_import_slash',
        'no_leading_namespace_whitespace',
        'no_multiline_whitespace_around_double_arrow',
        'no_multiline_whitespace_before_semicolons',
        'no_php4_constructor',
        'no_short_bool_cast',
        'no_short_echo_tag',
        'no_singleline_whitespace_before_semicolons',
        'no_spaces_after_function_name',
        'no_spaces_inside_offset',
        'no_spaces_inside_parenthesis',
        'no_tab_indentation',
        'no_trailing_comma_in_list_call',
        'no_trailing_comma_in_singleline_array',
        'no_trailing_whitespace',
        'no_trailing_whitespace_in_comment',
        'no_unneeded_control_parentheses',
        'no_unreachable_default_argument_value',
        'no_unused_imports',
        'no_useless_return',
        'no_whitespace_before_comma_in_array',
        'no_whitespace_in_blank_lines',
        'not_operator_with_space',
        'not_operator_with_successor_space',
        'object_operator_without_whitespace',
        'ordered_class_elements',
        'ordered_imports',
        'php_unit_construct',
        'php_unit_dedicate_assert',
        'php_unit_strict',
        'phpdoc_align',
        'phpdoc_indent',
        'phpdoc_inline_tag',
        'phpdoc_no_access',
        'phpdoc_no_empty_return',
        'phpdoc_no_package',
        'phpdoc_order',
        'phpdoc_property',
        'phpdoc_scalar',
        'phpdoc_separation',
        'phpdoc_single_line_var_spacing',
        'phpdoc_summary',
        'phpdoc_to_comment',
        'phpdoc_trim',
        'phpdoc_type_to_var',
        'phpdoc_types',
        'phpdoc_var_to_type',
        'phpdoc_var_without_name',
        'pre_increment',
        'print_to_echo',
        'psr0',
        'psr4',
        'random_api_migration',
        'self_accessor',
        'short_array_syntax',
        'short_scalar_cast',
        'simplified_null_return',
        'single_blank_line_at_eof',
        'single_blank_line_before_namespace',
        'single_import_per_statement',
        'single_line_after_imports',
        'single_quote',
        'space_after_semicolon',
        'standardize_not_equals',
        'strict_comparison',
        'strict_param',
        'switch_case_semicolon_to_colon',
        'switch_case_space',
        'ternary_operator_spaces',
        'trailing_comma_in_multiline_array',
        'trim_array_spaces',
        'unalign_double_arrow',
        'unalign_equals',
        'unary_operator_spaces',
        'unix_line_endings',
        'visibility_required',
        'whitespace_after_comma_in_array',
    );

    /**
     * @var string[]
     */
    public static $risky = array(
        'ereg_to_preg',
        'no_php4_constructor',
        'php_unit_construct',
        'php_unit_dedicate_assert',
        'php_unit_strict',
        'psr0',
        'psr4',
        'strict_comparison',
        'strict_param',
    );

    /**
     * @var string[]
     */
    public static $aliases = array(
        'operators_spaces' => 'binary_operator_spaces',
        'line_after_namespace' => 'blank_line_after_namespace',
        'blankline_after_open_tag' => 'blank_line_after_opening_tag',
        'return' => 'blank_line_before_return',
        'spaces_cast' => 'cast_spaces',
        'short_tag' => 'full_opening_tag',
        'newline_after_open_tag' => 'linebreak_after_opening_tag',
        'alias_functions' => 'no_alias_functions',
        'join_function' => 'no_alias_functions',
        'no_empty_lines_after_phpdocs' => 'no_blank_lines_after_phpdoc',
        'remove_lines_between_uses' => 'no_blank_lines_between_uses',
        'php_closing_tag' => 'no_closing_tag',
        'duplicate_semicolon' => 'no_duplicate_semicolons',
        'extra_empty_lines' => 'no_extra_consecutive_blank_lines',
        'remove_leading_slash_use' => 'no_leading_import_slash',
        'namespace_no_leading_whitespace' => 'no_leading_namespace_whitespace',
        'double_arrow_multiline_whitespaces' => 'no_multiline_whitespace_around_double_arrow',
        'double_arrow_no_multiline_whitespace' => 'no_multiline_whitespace_around_double_arrow',
        'multiline_spaces_before_semicolon' => 'no_multiline_whitespace_before_semicolons',
        'php4_constructor' => 'no_php4_constructor',
        'short_bool_cast' => 'no_short_bool_cast',
        'short_echo_tag' => 'no_short_echo_tag',
        'spaces_before_semicolon' => 'no_singleline_whitespace_before_semicolons',
        'function_call_space' => 'no_spaces_after_function_name',
        'no_spaces_inside_ofsset' => 'no_spaces_inside_offset',
        'parenthesis' => 'no_spaces_inside_parenthesis',
        'indentation' => 'no_tab_indentation',
        'list_commas' => 'no_trailing_comma_in_list_call',
        'single_array_no_trailing_comma' => 'no_trailing_comma_in_singleline_array',
        'trailing_spaces' => 'no_trailing_whitespace',
        'unneeded_control_parentheses' => 'no_unneeded_control_parentheses',
        'method_argument_default_value' => 'no_unreachable_default_argument_value',
        'unused_use' => 'no_unused_imports',
        'array_element_no_space_before_comma' => 'no_whitespace_before_comma_in_array',
        'whitespacy_lines' => 'no_whitespace_in_blank_lines',
        'logical_not_operators_with_spaces' => 'not_operator_with_space',
        'not_operators_with_space' => 'not_operator_with_space',
        'logical_not_operators_with_successor_space' => 'not_operator_with_successor_space',
        'object_operator' => 'object_operator_without_whitespace',
        'ordered_use' => 'ordered_imports',
        'phpdoc_params' => 'phpdoc_align',
        'phpdoc_no_simplified_null_return' => 'phpdoc_no_empty_return',
        'phpdoc_short_description' => 'phpdoc_summary',
        'empty_return' => 'simplified_null_return',
        'eof_ending' => 'single_blank_line_at_eof',
        'multiple_use' => 'single_import_per_statement',
        'spaces_after_semicolon' => 'space_after_semicolon',
        'standardize_not_equal' => 'standardize_not_equals',
        'strict' => 'strict_comparison',
        'ternary_spaces' => 'ternary_operator_spaces',
        'multiline_array_trailing_comma' => 'trailing_comma_in_multiline_array',
        'unary_operators_spaces' => 'unary_operator_spaces',
        'linefeed' => 'unix_line_endings',
        'visibility' => 'visibility_required',
        'array_element_white_space_after_comma' => 'whitespace_after_comma_in_array',
    );

    /**
     * @var string[]
     */
    public static $conflicts = array(
        'unalign_double_arrow' => 'align_double_arrow',
        'unalign_equals' => 'align_equals',
        'concat_without_spaces' => 'concat_with_spaces',
        'concat_with_spaces' => 'concat_without_spaces',
        'print_to_echo' => 'echo_to_print',
        'short_array_syntax' => 'long_array_syntax',
        'single_blank_line_before_namespace' => 'no_blank_lines_before_namespace',
        'no_empty_statement' => 'no_duplicate_semicolons',
        'no_duplicate_semicolons' => 'no_empty_statement',
        'phpdoc_var_to_type' => 'phpdoc_type_to_var',
        'phpdoc_type_to_var' => 'phpdoc_var_to_type',
        'echo_to_print' => 'print_to_echo',
        'psr4' => 'psr0',
        'psr0' => 'psr4',
        'long_array_syntax' => 'short_array_syntax',
        'no_blank_lines_before_namespace' => 'single_blank_line_before_namespace',
        'align_double_arrow' => 'unalign_double_arrow',
        'align_equals' => 'unalign_equals',
    );

    /**
     * @var string[]
     */
    public static $psr1_fixers = array(
        'encoding',
        'full_opening_tag',
        'psr4',
    );

    /**
     * @var string[]
     */
    public static $psr2_fixers = array(
        'blank_line_after_namespace',
        'braces',
        'class_definition',
        'elseif',
        'encoding',
        'full_opening_tag',
        'function_declaration',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'no_closing_tag',
        'no_spaces_after_function_name',
        'no_spaces_inside_parenthesis',
        'no_tab_indentation',
        'no_trailing_whitespace',
        'no_trailing_whitespace_in_comment',
        'psr4',
        'single_blank_line_at_eof',
        'single_import_per_statement',
        'single_line_after_imports',
        'switch_case_semicolon_to_colon',
        'switch_case_space',
        'unix_line_endings',
        'visibility_required',
    );

    /**
     * @var string[]
     */
    public static $symfony_fixers = array(
        'binary_operator_spaces',
        'blank_line_after_namespace',
        'blank_line_after_opening_tag',
        'blank_line_before_return',
        'braces',
        'cast_spaces',
        'class_definition',
        'concat_without_spaces',
        'elseif',
        'encoding',
        'full_opening_tag',
        'function_declaration',
        'function_typehint_space',
        'hash_to_slash_comment',
        'heredoc_to_nowdoc',
        'include',
        'lowercase_cast',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'method_separation',
        'native_function_casing',
        'new_with_braces',
        'no_alias_functions',
        'no_blank_lines_after_class_opening',
        'no_blank_lines_after_phpdoc',
        'no_blank_lines_between_uses',
        'no_closing_tag',
        'no_empty_phpdoc',
        'no_empty_statement',
        'no_extra_consecutive_blank_lines',
        'no_leading_import_slash',
        'no_leading_namespace_whitespace',
        'no_multiline_whitespace_around_double_arrow',
        'no_short_bool_cast',
        'no_singleline_whitespace_before_semicolons',
        'no_spaces_after_function_name',
        'no_spaces_inside_offset',
        'no_spaces_inside_parenthesis',
        'no_tab_indentation',
        'no_trailing_comma_in_list_call',
        'no_trailing_comma_in_singleline_array',
        'no_trailing_whitespace',
        'no_trailing_whitespace_in_comment',
        'no_unneeded_control_parentheses',
        'no_unreachable_default_argument_value',
        'no_unused_imports',
        'no_whitespace_before_comma_in_array',
        'no_whitespace_in_blank_lines',
        'object_operator_without_whitespace',
        'phpdoc_align',
        'phpdoc_indent',
        'phpdoc_inline_tag',
        'phpdoc_no_access',
        'phpdoc_no_empty_return',
        'phpdoc_no_package',
        'phpdoc_scalar',
        'phpdoc_separation',
        'phpdoc_single_line_var_spacing',
        'phpdoc_summary',
        'phpdoc_to_comment',
        'phpdoc_trim',
        'phpdoc_type_to_var',
        'phpdoc_types',
        'phpdoc_var_without_name',
        'pre_increment',
        'print_to_echo',
        'psr4',
        'self_accessor',
        'short_scalar_cast',
        'simplified_null_return',
        'single_blank_line_at_eof',
        'single_blank_line_before_namespace',
        'single_import_per_statement',
        'single_line_after_imports',
        'single_quote',
        'space_after_semicolon',
        'standardize_not_equals',
        'switch_case_semicolon_to_colon',
        'switch_case_space',
        'ternary_operator_spaces',
        'trailing_comma_in_multiline_array',
        'trim_array_spaces',
        'unalign_double_arrow',
        'unalign_equals',
        'unary_operator_spaces',
        'unix_line_endings',
        'visibility_required',
        'whitespace_after_comma_in_array',
    );

    /**
     * @var string[]
     */
    public static $laravel_fixers = array(
        'binary_operator_spaces',
        'blank_line_after_namespace',
        'blank_line_after_opening_tag',
        'blank_line_before_return',
        'braces',
        'cast_spaces',
        'class_definition',
        'concat_without_spaces',
        'elseif',
        'encoding',
        'full_opening_tag',
        'function_declaration',
        'function_typehint_space',
        'hash_to_slash_comment',
        'heredoc_to_nowdoc',
        'include',
        'lowercase_cast',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'method_separation',
        'native_function_casing',
        'no_alias_functions',
        'no_blank_lines_after_class_opening',
        'no_blank_lines_after_phpdoc',
        'no_blank_lines_between_uses',
        'no_closing_tag',
        'no_empty_phpdoc',
        'no_empty_statement',
        'no_extra_consecutive_blank_lines',
        'no_leading_import_slash',
        'no_leading_namespace_whitespace',
        'no_multiline_whitespace_around_double_arrow',
        'no_multiline_whitespace_before_semicolons',
        'no_short_bool_cast',
        'no_singleline_whitespace_before_semicolons',
        'no_spaces_after_function_name',
        'no_spaces_inside_offset',
        'no_spaces_inside_parenthesis',
        'no_tab_indentation',
        'no_trailing_comma_in_list_call',
        'no_trailing_comma_in_singleline_array',
        'no_trailing_whitespace',
        'no_trailing_whitespace_in_comment',
        'no_unneeded_control_parentheses',
        'no_unreachable_default_argument_value',
        'no_unused_imports',
        'no_useless_return',
        'no_whitespace_before_comma_in_array',
        'no_whitespace_in_blank_lines',
        'not_operator_with_successor_space',
        'object_operator_without_whitespace',
        'phpdoc_indent',
        'phpdoc_inline_tag',
        'phpdoc_no_access',
        'phpdoc_no_package',
        'phpdoc_scalar',
        'phpdoc_single_line_var_spacing',
        'phpdoc_summary',
        'phpdoc_to_comment',
        'phpdoc_trim',
        'phpdoc_type_to_var',
        'phpdoc_types',
        'phpdoc_var_without_name',
        'print_to_echo',
        'psr4',
        'self_accessor',
        'short_array_syntax',
        'short_scalar_cast',
        'simplified_null_return',
        'single_blank_line_at_eof',
        'single_blank_line_before_namespace',
        'single_import_per_statement',
        'single_line_after_imports',
        'single_quote',
        'space_after_semicolon',
        'standardize_not_equals',
        'switch_case_semicolon_to_colon',
        'switch_case_space',
        'ternary_operator_spaces',
        'trailing_comma_in_multiline_array',
        'trim_array_spaces',
        'unalign_equals',
        'unary_operator_spaces',
        'unix_line_endings',
        'visibility_required',
        'whitespace_after_comma_in_array',
    );

    /**
     * @var string[]
     */
    public static $recommended_fixers = array(
        'align_double_arrow',
        'binary_operator_spaces',
        'blank_line_after_namespace',
        'blank_line_after_opening_tag',
        'blank_line_before_return',
        'braces',
        'cast_spaces',
        'class_definition',
        'concat_without_spaces',
        'elseif',
        'encoding',
        'full_opening_tag',
        'function_declaration',
        'function_typehint_space',
        'hash_to_slash_comment',
        'heredoc_to_nowdoc',
        'include',
        'lowercase_cast',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'method_separation',
        'native_function_casing',
        'new_with_braces',
        'no_alias_functions',
        'no_blank_lines_after_class_opening',
        'no_blank_lines_after_phpdoc',
        'no_blank_lines_between_uses',
        'no_closing_tag',
        'no_empty_phpdoc',
        'no_empty_statement',
        'no_extra_consecutive_blank_lines',
        'no_leading_import_slash',
        'no_leading_namespace_whitespace',
        'no_multiline_whitespace_around_double_arrow',
        'no_multiline_whitespace_before_semicolons',
        'no_short_bool_cast',
        'no_singleline_whitespace_before_semicolons',
        'no_spaces_after_function_name',
        'no_spaces_inside_offset',
        'no_spaces_inside_parenthesis',
        'no_tab_indentation',
        'no_trailing_comma_in_list_call',
        'no_trailing_comma_in_singleline_array',
        'no_trailing_whitespace',
        'no_trailing_whitespace_in_comment',
        'no_unneeded_control_parentheses',
        'no_unreachable_default_argument_value',
        'no_unused_imports',
        'no_useless_return',
        'no_whitespace_before_comma_in_array',
        'no_whitespace_in_blank_lines',
        'object_operator_without_whitespace',
        'ordered_imports',
        'phpdoc_align',
        'phpdoc_indent',
        'phpdoc_inline_tag',
        'phpdoc_no_access',
        'phpdoc_no_package',
        'phpdoc_order',
        'phpdoc_scalar',
        'phpdoc_separation',
        'phpdoc_single_line_var_spacing',
        'phpdoc_summary',
        'phpdoc_to_comment',
        'phpdoc_trim',
        'phpdoc_type_to_var',
        'phpdoc_types',
        'phpdoc_var_without_name',
        'print_to_echo',
        'psr4',
        'self_accessor',
        'short_array_syntax',
        'short_scalar_cast',
        'simplified_null_return',
        'single_blank_line_at_eof',
        'single_blank_line_before_namespace',
        'single_import_per_statement',
        'single_line_after_imports',
        'single_quote',
        'space_after_semicolon',
        'standardize_not_equals',
        'switch_case_semicolon_to_colon',
        'switch_case_space',
        'ternary_operator_spaces',
        'trailing_comma_in_multiline_array',
        'trim_array_spaces',
        'unalign_equals',
        'unary_operator_spaces',
        'unix_line_endings',
        'visibility_required',
        'whitespace_after_comma_in_array',
    );

    /**
     * @return string[][]
     */
    public static function getPresets()
    {
        return array(
            'psr1' => static::$psr1_fixers,
            'psr2' => static::$psr2_fixers,
            'symfony' => static::$symfony_fixers,
            'laravel' => static::$laravel_fixers,
            'recommended' => static::$recommended_fixers,
        );
    }
}
