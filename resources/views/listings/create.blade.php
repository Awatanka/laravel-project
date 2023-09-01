<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Create a Gig</h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>

        <form method="POST" action="/listings">
            @csrf
            @include('partials._form-field', ['name' => 'company', 'label' => 'Company Name'])

            @include('partials._form-field', [
                'name' => 'title',
                'label' => 'Job Title',
                'placeholder' => 'Example: Senior Laravel Developer',
            ])
            @include('partials._form-field', [
                'name' => 'location',
                'label' => 'Job Location',
                'placeholder' => 'Example: Remote, Boston MA, etc',
            ])
            @include('partials._form-field', ['name' => 'email', 'label' => 'Contact Email'])
            @include('partials._form-field', ['name' => 'website', 'label' => 'Website/Application URL'])
            @include('partials._form-field', [
                'name' => 'tags',
                'label' => 'Tags (Comma Separated)',
                'placeholder' => 'Example: Laravel, Backend, Postgres, etc',
            ])
            {{-- @include('partials.form-field', ['name' => 'logo', 'label' => 'Company Logo', 'type' => 'file']) --}}
            @include('partials._form-field', [
                'name' => 'description',
                'label' => 'Job Description',
                'type' => 'textarea',
                'rows' => 10,
                'placeholder' => 'Include tasks, requirements, salary, etc',
            ])

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Create Gig</button>
                <a href="/" class="text-black ml-4">Back</a>
            </div>
        </form>
    </x-card>
</x-layout>
