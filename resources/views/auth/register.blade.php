<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name"/>
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <x-forms.input label="Password confirmation" name="password_confirmation" type="password"/>

        <x-forms.divider/>

        <x-forms.input label="Employer name" name="employer"/>
        <x-forms.input label="Logo" name="logo" type="file"/>

        <x-forms.divider/>

        <x-forms.button>Create account</x-forms.button>
    </x-forms.form>
</x-layout>
