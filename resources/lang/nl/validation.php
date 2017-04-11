<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'De :attribute moet worden geaccepteerd',
    'active_url'           => 'De :attribute is geen geldige URL.',
    'after'                => 'De :attribute moet een datum zijn na :date.',
    'after_or_equal'       => 'De :attribute moet een datum zijn na of gelijk aan :date.',
    'alpha'                => 'De :attribute mag alleen letters bevatten..',
    'alpha_dash'           => 'De :attribute mag alleen letters, cijfers en streepjes bevatten.',
    'alpha_num'            => 'De :attribute mag alleen letters en cijfers bevatten.',
    'array'                => 'De :attribute moet een array zijn.',
    'before'               => 'De :attribute moet een datum zijn voor :date.',
    'before_or_equal'      => 'De :attribute moet een datum zijn voor of gelijk aan :date.',
    'between'              => [
        'numeric' => 'De :attribute moet tussen :min tot :max zijn.',
        'file'    => 'De :attribute moet tussen :min tot :max kilobytes.',
        'string'  => 'De :attribute moet tussen :min tot :max tekens bevatten.',
        'array'   => 'De :attribute moet tussen :min tot :max items bevatten.',
    ],
    'boolean'              => 'De :attribute veld moet true of false (waar of onwaar) zijn.',
    'confirmed'            => 'De :attribute bevestiging komt niet overeen.',
    'date'                 => 'De :attribute is een ongeldige datum.',
    'date_format'          => 'De :attribute komt niet overeen met het formaat :format.',
    'different'            => 'De :attribute en :other moet verschillend zijn.',
    'digits'               => 'De :attribute moet :digits getallen zijn.',
    'digits_between'       => 'De :attribute moet tussen :min tot :max getallen zijn.',
    'dimensions'           => 'De :attribute bevat ongeldige afbeeldingsafmetingen.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
