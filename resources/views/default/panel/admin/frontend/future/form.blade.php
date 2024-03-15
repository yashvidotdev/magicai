@extends('panel.layout.app', ['disable_tblr' => true])
@section('title', $item != null ? __('Edit Feature') : __('Add New Feature'))
@section('titlebar_actions', '')
@section('content')
    <div class="py-10">
        <form class="mx-auto flex w-full flex-col gap-5 lg:w-5/12" id="item_form"
            onsubmit="return futureCreateOrUpdate({{ $item != null ? $item->id : null }});">

            <x-forms.input id="title" label="{{ __('Title') }}" name="title" size="lg" required
                value="{{ $item != null ? $item->title : null }}" />

            <x-forms.input id="description" name="description" type="textarea" label="{{ __('Description') }}" rows="10"
                required>{{ $item != null ? $item->description : null }}</x-forms.input>

            <x-forms.input id="image" name="image" label="{{ __('Icon') }}" value="{!! $item != null ? $item->image : null !!}"
                required size="lg" />

            <x-button id="item_button" size="lg" type="submit">
                {{ __('Save') }}
            </x-button>
        </form>
    </div>
@endsection

@push('script')
    <script src="{{ custom_theme_url('/assets/js/panel/settings.js') }}"></script>
@endpush
