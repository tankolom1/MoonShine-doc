<x-page title="Валидация" :sectionMenu="[
    'Разделы' => [
        ['url' => '#basics', 'label' => 'Основы'],
        ['url' => '#messages', 'label' => 'Сообщения'],
    ]
]">

<x-sub-title id="basics">Основы</x-sub-title>

<x-p>
    Валидация выполнена так же просто, как и в <code>FormRequests</code> классах от Laravel.
</x-p>

<x-p>
    Достаточно в привычной нам манере добавлять правила в методе <code>rules()</code> ресурса.
</x-p>

<x-code language="php">
namespace MoonShine\Resources;

use MoonShine\Models\MoonshineUser;

class PostResource extends Resource
{
    public static string $model = App\Models\Post::class;

    public static string $title = 'Articles';
    //...

    public function rules($item): array // [tl! focus:start]
    {
        return [
            'title' => ['required', 'string', 'min:5']
        ];
    } // [tl! focus:end]

    //...
}
</x-code>

<x-image theme="light" src="{{ asset('screenshots/validation.png') }}"></x-image>
<x-image theme="dark" src="{{ asset('screenshots/validation_dark.png') }}"></x-image>

<x-sub-title id="messages">Сообщения</x-sub-title>

<x-p>
    Используя метод <code>validationMessages()</code> можно создать свои сообщения об ошибках валидации
</x-p>

<x-code language="php">
//...

public function validationMessages(): array // [tl! focus:start]
{
    return [
        'email.required' => 'Required email'
    ];
} // [tl! focus:end]

//...
</x-code>

</x-page>
