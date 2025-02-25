<x-page title="Json" :sectionMenu="[
    'Sections' => [
        ['url' => '#key-value', 'label' => 'Key/Value'],
        ['url' => '#fields', 'label' => 'With a set of fields'],
        ['url' => '#removable', 'label' => 'Deleting'],
    ]
]">

<x-sub-title id="key-value">Key/Value</x-sub-title>

<x-p>
    In the database, the field must be of type text or json. Also cast eloquent array or json or collection models.
</x-p>

<x-p>
    The easiest way is to use the keyValue method, in which case the database will have a simple json [{key: value}]
</x-p>

<x-code language="php">
use MoonShine\Fields\Json;

//...

public function fields(): array
{
    return [
        Json::make('Product Options', 'options')
            ->keyValue('Characteristic', 'Value') // First argument Key label, second argument Value label
    ];
}
//...
</x-code>

<x-image theme="light" src="{{ asset('screenshots/json_fields.png') }}"></x-image>
<x-image theme="dark" src="{{ asset('screenshots/json_fields_dark.png') }}"></x-image>

<x-sub-title id="fields">With a set of fields</x-sub-title>

<x-p>
    For more advanced use, use the fields method and pass the required set of fields in a similar way to how the resource works
</x-p>

<x-code language="php">
use MoonShine\Fields\Json;

//...

public function fields(): array
{
    return [
        Json::make('Product Options', 'options')
            ->fields([
                Text::make('Title', 'title'),
                Text::make('Value', 'value')
            ])
    ];
}
//...
</x-code>

<x-p>
    json [{title: 'value', value: 'value'}]
</x-p>

<x-image theme="light" src="{{ asset('screenshots/json_key_value.png') }}"></x-image>
<x-image theme="dark" src="{{ asset('screenshots/json_key_value_dark.png') }}"></x-image>

<x-sub-title id="removable">Deleting</x-sub-title>

<x-code language="php">
Json::make('Product Options', 'options')
    ->keyValue('Characteristics', 'Meaning')
    ->removable() // [tl! focus]
</x-code>

<x-image theme="light" src="{{ asset('screenshots/json_removable.png') }}"></x-image>
<x-image theme="dark" src="{{ asset('screenshots/json_removable_dark.png') }}"></x-image>

</x-page>
