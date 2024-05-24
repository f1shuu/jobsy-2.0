<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's find your next job</h1>

            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Web developer..."/>
            </x-forms.form>
        </section>

        <section class="ph-10">
            <x-section-heading>Featured jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-6 mt-6">
                @foreach($featured_jobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
