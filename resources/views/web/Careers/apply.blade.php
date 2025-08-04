<x-app.app-layout>
    <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('Careers') }}">Careers</a></li>
                    <li>Apply</li>
                </ul>
                <h1 class="title">Apply for: {{ $careerJob->title }}</h1>
            </div>
        </div>
    </section>

    <section class="contact-form-section pt-120 pb-120">
        <div class="container">
            <div class="sec-title text-center mb-4">
                <h6 class="sub-title">Application Form</h6>
                <h2 class="title">Submit Your Application</h2>
            </div>

            <form method="POST" action="{{ route('careers.apply.submit') }}" enctype="multipart/form-data" class="row g-3">
                @csrf
                <input type="hidden" name="job_id" value="{{ $careerJob->id }}">

                <div class="col-md-6">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="full_name" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Upload CV (PDF or DOC)</label>
                    <input type="file" name="cv_path" class="form-control" accept=".pdf,.doc,.docx" required>
                </div>

                <div class="col-12">
                    <label class="form-label">Message</label>
                    <textarea name="message" class="form-control" rows="5"></textarea>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-primary" type="submit">Submit Application</button>
                </div>
            </form>
        </div>
    </section>
</x-app.app-layout>
