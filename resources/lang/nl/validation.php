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
    'distinct'             => 'De :attribute veld heeft een dubbele waarde.',
    'email'                => 'De :attribute moet een geldig e-mail adres zijn.',
    'exists'               => 'De geselecteerde :attribute is ongeldig.',
    'file'                 => 'De :attribute moet een bestand zijn.',
    'filled'               => 'De :attribute veld is verplicht.',
    'image'                => 'De :attribute moet een afbeelding zijn.',
    'in'                   => 'De geselecteerde :attribute is ongeldig.',
    'in_array'             => 'De :attribute veld bestaat niet in :other.',
    'integer'              => 'De :attribute moet een geheel getal zijn.',
    'ip'                   => 'De :attribute moet een geldig IP-Adress zijn.',
    'json'                 => 'De :attribute moet een geldig JSON string zijn.',
    'max'                  => [
        'numeric' => 'De :attribute mag niet groter zijn dan :max.',
        'file'    => 'De :attribute mag niet groter zijn dan :max kilobytes.',
        'string'  => 'De :attribute mag niet groter zijn dan :max characters.',
        'array'   => 'De :attribute mag niet meer dan :max items hebben.',
    ],
    'mimes'                => 'De :attribute moet een bestand van het type: :values zijn.',
    'mimetypes'            => 'De :attribute moet een bestand van het type: :values zijn.',
    'min'                  => [
        'numeric' => 'De :attribute moet minstens :min zijn.',
        'file'    => 'De :attribute moet minstens :min kilobytes zijn.',
        'string'  => 'De :attribute moet minstens :min characters zijn.',
        'array'   => 'De :attribute moet op zijn minst :min items hebben.',
    ],
    'not_in'               => 'De geselecteerde :attribute is ongeldig.',
    'numeric'              => 'De :attribute moet een nummer zijn.',
    'present'              => 'De :attribute veld moet aanwezig zijn.',
    'regex'                => 'De :attribute formaat is ongeldig.',
    'required'             => 'De :attribute veld is verplicht.',
    'required_if'          => 'De :attribute veld is verplicht als :other is :value.',
    'required_unless'      => 'De :attribute veld is verplicht anders :other is in :values.',
    'required_with'        => 'De :attribute veld is verplicht als :values is aanwezig.',
    'required_with_all'    => 'De :attribute veld is verplicht als :values is aanwezig.',
    'required_without'     => 'De :attribute veld is verplicht als :values niet aanwezig is.',
    'required_without_all' => 'De :attribute veld is verplicht als geen van de :values aanwezig zijn.',
    'same'                 => 'De :attribute en :other moet overeenkomen.',
    'size'                 => [
        'numeric' => 'De :attribute moet :size zijn.',
        'file'    => 'De :attribute moet :size kilobytes zijn.',
        'string'  => 'De :attribute moet :size characters zijn.',
        'array'   => 'De :attribute moet :size items bevatten.',
    ],
    'string'               => 'De :attribute moet een tekenreeks zijn.',
    'timezone'             => 'De :attribute moet een geldige zone.',
    'unique'               => 'De :attribute is al bezet.',
    'uploaded'             => 'De :attribute is mislukt met uploaden.',
    'url'                  => 'De :attribute formaat is ongeldig.',

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
