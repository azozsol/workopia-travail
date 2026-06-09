<x-layout>
    <x-slot name='title'>Edit Job</x-slot>
    <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
        <h2 class="text-4xl text-center font-bold mb-4">
            Edit Job Listing
        </h2>
        <form method="POST" action="{{ route('jobs.update', $job->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Job Info
            </h2>

            <x-inputs.text id="title" name="title" placeholder="Software Engineer" label="Job Title"
                :value="old('title', $job->title)" />

            <x-inputs.text-area id="description" name="description" label="Description" :value="old('description', $job->description)"
                placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team..." />

            <x-inputs.text id="salary" name="salary" placeholder="90000" label="Annual Salary" type="number"
                :value="old('salary', $job->salary)" />

            <x-inputs.text-area id="requirements" name="requirements" label="Requirements" :value="old('requirements', $job->requirements)"
                placeholder="Bachelor's degree in Computer Science" />


            <x-inputs.text-area id="benefits" name="benefits" label="Benefits" :value="old('benefits', $job->benefits)"
                placeholder="Health insurance, 401k, paid time off" />


            <x-inputs.text id="tags" name="tags" placeholder="development, coding, java, python"
                label="Tags (comma-separated)" :value="old('tags', $job->tags)" />


            <x-inputs.select id="job_type" name="job_type" label="Job type" :value="old('job_type', $job->job_type)" :options="[
                'Full-Time' => 'Full-Time',
                'Part-Time' => 'Part-Time',
                'Contract' => 'Contract',
                'Temporary' => 'Temporary',
                'Internship' => 'Internship',
                'Volunteer' => 'Volunteer',
                'On-Call' => 'On-Call',
            ]" />


            <x-inputs.select id="remote" name="remote" label="Remote" :value="old('remote', $job->remote)" :options="[
                0 => 'No',
                1 => 'Yes',
            ]" />


            <x-inputs.text id="address" name="address" placeholder="123 Main St" label="Address" :value="old('address', $job->address)" />

            <x-inputs.text id="city" name="city" placeholder="Albany" label="City" :value="old('city', $job->city)" />

            <x-inputs.text id="state" name="state" placeholder="Ny" label="State" :value="old('state', $job->state)" />

            <x-inputs.text id="zipcode" name="zipcode" placeholder="12201" label="Zip Code" :value="old('zipcode', $job->zipcode)" />

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Company Info
            </h2>

            <x-inputs.text id="company_name" name="company_name" placeholder="Enter Company name" :value="old('company_name', $job->company_name)"
                label="Company Name" />


            <x-inputs.text-area id="company_description" name="company_description" label="Company Description"
                placeholder="Enter Company description" :value="old('company_description', $job->company_description)" />

            <x-inputs.file id="company_logo" name="company_logo" label="Company Logo" :value="old('company_logo', $job->company_logo)" />

            <x-inputs.text id="company_website" name="company_website" type="url" :value="old('company_website', $job->company_website)"
                placeholder="Enter Company Website" label="Company Website" />

            <x-inputs.text id="contact_phone" name="contact_phone" placeholder="Enter phone" label="Contact Phone"
                :value="old('contact_phone', $job->contact_phone)" />

            <x-inputs.text id="contact_email" name="contact_email" :value="old('contact_email', $job->contact_email)"
                placeholder="Email where you want to receive applications" type="email" label="Contact Email" />




            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                Save
            </button>
        </form>
    </div>
</x-layout>
