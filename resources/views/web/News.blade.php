<x-app.app-layout>

  <!-- العنوان -->
  <section class="page-title" style="background-image: url({{ asset('build/images/bg/page-title-bg.jpg')}});">
    <div class="auto-container">
      <div class="title-outer">
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>News</li>
        </ul>
        <h1 class="title">Latest News</h1>
      </div>
    </div>
  </section>

  <!-- الأخبار -->
  <section class="team-section pt-120 pb-120">
    <div class="team-shape wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
      <img class="sway__animation" src="{{ asset('build/images/shape/team-shape.png') }}" alt="Shape">
    </div>

    <div class="container">
      <div class="row g-4">
        @forelse ($news as $item)
          <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="{{ $loop->index * 100 }}ms" data-wow-duration="1500ms">
            <div class="blog-block">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <img src="{{ $item->cover_image ? asset('storage/' . $item->cover_image) : asset('build/images/blog/blog-placeholder.jpg') }}" alt="{{ $item->title }}">
                  </figure>
                </div>
                <div class="content-box">
                  <h4 class="title">
                    <a href="{{ route('news.details', $item->slug) }}">{{ $item->title }}</a>
                  </h4>
                  <a href="{{ route('news.details', $item->slug) }}" class="arry-btn">Read More
                 <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M7.38853 0.804688C5.43079 0.804688 3.5533 1.56122 2.16901 2.90791C0.784654 4.25449 0.00695801 6.08099 0.00695801 7.98541C0.00695801 9.88983 0.784654 11.7163 2.16901 13.0629C3.55325 14.4096 5.43085 15.1661 7.38853 15.1661C8.6842 15.1661 9.95714 14.8343 11.0793 14.2041C12.2014 13.5738 13.1332 12.6674 13.7812 11.5757C14.429 10.4841 14.7701 9.24582 14.7701 7.98541C14.7701 6.08094 13.9924 4.25454 12.6081 2.90791C11.2238 1.56122 9.34622 0.804688 7.38853 0.804688ZM11.0793 7.99972C11.0818 8.1558 11.0189 8.30616 10.905 8.41625L8.47505 10.7729C8.32501 10.9192 8.10619 10.9764 7.90096 10.9231C7.69582 10.8698 7.53539 10.714 7.48018 10.5146C7.42509 10.315 7.48358 10.102 7.63362 9.95577L9.05678 8.56993H4.28832C4.07742 8.56993 3.88246 8.46044 3.77693 8.28273C3.67148 8.10492 3.67148 7.88592 3.77693 7.70822C3.88249 7.53051 4.07742 7.42102 4.28832 7.42102H9.07022L7.63378 6.02366C7.48343 5.87741 7.42473 5.66432 7.47972 5.46457C7.53481 5.26482 7.69515 5.10874 7.9005 5.05525C8.10584 5.00175 8.32498 5.05885 8.47522 5.20511L10.9052 7.56178C11.0173 7.67008 11.08 7.81744 11.0795 7.97111V7.99986L11.0793 7.99972Z"
                          fill="#163839" />
                      </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center">
            <p>No news articles found.</p>
          </div>
        @endforelse
      </div>

      <!-- Pagination -->
<div class="mt-5">
  <nav aria-label="News pagination" class="d-flex justify-content-center">
    <ul class="pagination pagination-lg">
      {{-- روابط الصفحة --}}
      {{ $news->onEachSide(1)->links('pagination::bootstrap-5') }}
    </ul>
  </nav>
</div>


    </div>
  </section>

  @push('styles')
<style>
  .custom-section {
    background-color: #f8f9fa;
    padding: 40px 20px;
    border-radius: 8px;
  }

  .pagination .page-link {
    border-radius: 8px;
    color: #163839;
    transition: all 0.3s ease-in-out;
  }

  .pagination .active .page-link,
  .pagination .page-link:hover {
    background-color: #163839;
    color: white;
    border-color: #163839;
  }
</style>
@endpush


</x-app.app-layout>
