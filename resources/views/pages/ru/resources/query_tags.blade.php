<x-page title="Быстрые фильтры/Теги" :sectionMenu="[]">

<x-p>
    Иногда возникает потребность создать набор фильтров (подборку результатов)
    и отобразить ее на листинге. Для таких ситуаций созданы теги.
</x-p>

<x-code language="php">
namespace MoonShine\Resources;

use MoonShine\Models\MoonshineUser;
use MoonShine\QueryTags\QueryTag; // [tl! focus]

class PostResource extends Resource
{
    public static string $model = App\Models\Post::class;

    public static string $title = 'Статьи';
    //...

    public function queryTags(): array // [tl! focus:start]
    {
        return [
            QueryTag::make(
                'Post with author', // Заголовок тега
                fn() => Post::query()->whereNotNull('author_id') // Query builder
            ),

            QueryTag::make(
                'Post without an author',
                fn() => Post::query()->whereNull('author_id')
            )->icon('users')
        ];
    } // [tl! focus:end]

    //...
}
</x-code>

<x-image theme="light" src="{{ asset('screenshots/query_tags.png') }}"></x-image>
<x-image theme="dark" src="{{ asset('screenshots/query_tags_dark.png') }}"></x-image>

</x-page>
