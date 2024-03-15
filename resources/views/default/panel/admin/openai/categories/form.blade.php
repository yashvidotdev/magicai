@extends('panel.layout.app')
@section('title', __('Add or Edit Custom Template'))
@section('titlebar_actions', '')
@section('content')
    <div class="py-10">
        <form
            class="mx-auto flex w-full flex-col gap-5 lg:w-5/12"
            id="custom_template_form"
            onsubmit="return categorySave({{ $item != null ? $item->id : null }});"
        >
            <x-form-step
                step="1"
                label="{{ __('Template') }}"
            />

            <x-forms.input
                id="category_name"
                name="category_name"
                label="{{ __('Category Name') }}"
                size="lg"
                placeholder="{{ __('Category Name') }}"
                value="{{ $item != null ? $item->name : null }}"
                tooltip="{{ __('Category name for Custom AI Writers') }}"
            />

            <x-button
                id="custom_template_button"
                size="lg"
                type="submit"
            >
                {{ __('Save') }}
            </x-button>
        </form>
    </div>
@endsection

@push('script')
    <script src="{{ custom_theme_url('/assets/js/panel/openai_categories.js') }}"></script>
@endpush
