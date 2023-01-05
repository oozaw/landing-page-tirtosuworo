@extends('admin.layouts.main')

@section('main')
   <div class="pagetitle">
      <h1>Berita</h1>
      <nav>
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
            <li class="breadcrumb-item"><a href="/admin/news">Berita</a></li>
            <li class="breadcrumb-item active">Detail Berita</li>
         </ol>
      </nav>
   </div><!-- End Page Title -->

   <section class="section">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  {{-- <h5 class="card-title">Detail Berita</h5> --}}
                  <div class="container my-4">
                     <div class="row">
                        <div class="col-lg-10">
                           <h3 class="mb-2 ">{{ $post->title }}</h3>
                           <p>
                              <small class="text-muted">{{ $post->created_at->isoFormat('D MMMM Y') }} |
                                 {{ $post->category != null ? $post->category->name : '' }}</small>
                           </p>

                           <a class="btn btn-secondary" href="{{ URL::previous() }}">
                              <span data-feather="arrow-left"></span> Kembali
                           </a>
                           <a class="btn btn-primary mx-1" href="/admin/news/{{ $post->slug }}/edit">
                              <span data-feather="edit"></span> Edit
                           </a>
                           {{-- Delete Button --}}
                           <form action="/admin/news/{{ $post->slug }}" method="POST" class="d-inline">
                              @method('delete')
                              @csrf

                              {{-- Modal Trigger Button --}}
                              <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                 data-bs-target="#deleteModal"><span data-feather="trash-2"></span> Hapus</button>

                              <!-- Modal -->
                              <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
                                 <div class="modal-dialog">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="deleteModalLabel">Hapus Berita</h5>
                                          <button type="button" class="btn-close me-1" data-bs-dismiss="modal"></button>
                                       </div>
                                       <div class="modal-body">Apakah Anda yakin ingin menghapus berita ini?</div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary"
                                             data-bs-dismiss="modal">Batal</button>
                                          <button type="submit" class="btn btn-danger">Hapus</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>

                           {{-- @if ($post->image)
               <div style="max-height: 500px; overflow: hidden">
                  <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3 rounded"
                     alt="{{ $post->category->slug }}">
               </div>
            @else
               <img src="https://source.unsplash.com/random/1200x500?{{ $post->category->slug }}"
                  class="img-fluid mt-3 rounded" alt="{{ $post->category->slug }}">
            @endif --}}

                           <article class="my-4 fs-5">
                              <p>{!! $post->body !!}</p>
                           </article>

                           <a class="text-decoration-none" href="/admin/news">Kembali ke halaman Berita</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection
