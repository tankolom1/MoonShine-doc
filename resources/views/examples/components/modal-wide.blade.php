<x-moonshine::modal wide title="Title">
    <div>
        Content...
    </div>
    <x-slot name="outerHtml">
        <x-moonshine::link @click.prevent="toggleModal;">
            Open wide modal
        </x-moonshine::link>
    </x-slot>
</x-moonshine::modal>
