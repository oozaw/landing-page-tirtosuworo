@extends('admin.layouts.main')

@section('main')
   <div class="pagetitle">
      <h1>Berita</h1>
      <nav>
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
            <li class="breadcrumb-item active">Berita</li>
         </ol>
      </nav>
   </div><!-- End Page Title -->

   <section class="section">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title mb-0">Daftar Berita</h5>
                  <a href="/admin/create" class="btn btn-success btn-sm mb-2">
                     <i class="bi bi-plus-square"></i> Tambah Berita</a>
                  {{-- <p>Add lightweight datatables to your project with using the <a
                        href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a>
                     library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable
                  </p> --}}
                  <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                     <div class="dataTable-top">
                        <div class="dataTable-dropdown">
                           <label>
                              <select class="dataTable-selector">
                                 <option value="5">5</option>
                                 <option value="10" selected="">10</option>
                                 <option value="15">15</option>
                                 <option value="20">20</option>
                                 <option value="25">25</option>
                              </select> entries per page
                           </label>
                        </div>
                        <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..."
                              type="text"></div>
                     </div>
                     <div class="dataTable-container">
                        <table class="table datatable dataTable-table">
                           <thead>
                              <tr>
                                 <th scope="col" data-sortable="" style="width: 5.63584%;"><a href="#"
                                       class="dataTable-sorter">#</a></th>
                                 <th scope="col" data-sortable="" style="width: 28.0347%;"><a href="#"
                                       class="dataTable-sorter">Judul</a></th>
                                 <th scope="col" data-sortable="" style="width: 19.3642%;"><a href="#"
                                       class="dataTable-sorter">Kategori</a></th>
                                 <th scope="col" data-sortable="" style="width: 19.3642%;"><a href="#"
                                       class="dataTable-sorter">Dibuat</a></th>
                                 <th scope="col" data-sortable="" style="width: 24.3642%;"><a href="#"
                                       class="dataTable-sorter">Aksi</a></th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($news as $n)
                                 <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $n->title }}</td>
                                    <td>{{ $n->category_id }}</td>
                                    <td>{{ $n->created_at->isoFormat('D MMMM Y') }}</td>
                                    <td>
                                       <div class="d-inline-flex">
                                          <a href="/admin/news/{{ $n->id }}" class="btn btn-info btn-sm me-1">
                                             <i class="bi bi-card-heading"></i> Lihat Berita</a>
                                          <a href="/admin/news/{{ $n->id }}/edit"
                                             class="btn btn-primary btn-sm me-1">
                                             <i class="bi bi-pencil-square"></i> Edit</a>
                                          <a href="" class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                             data-bs-target="#modal-delete-{{ $n->id }}">
                                             <i class="bi bi-trash"></i> Hapus</a>

                                          <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true"
                                             style="display: none;">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h5 class="modal-title">Basic Modal</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                         aria-label="Close"></button>
                                                   </div>
                                                   <div class="modal-body">
                                                      Non omnis incidunt qui sed occaecati magni asperiores est mollitia.
                                                      Soluta at et reprehenderit. Placeat autem numquam et fuga numquam.
                                                      Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet
                                                      incidunt est facilis. Dolorem neque recusandae quo sit molestias sint
                                                      dignissimos.
                                                   </div>
                                                   <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary"
                                                         data-bs-dismiss="modal">Close</button>
                                                      <button type="button" class="btn btn-primary">Save changes</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <!-- Modal -->
                                          <div class="modal fade" id="modal-delete-{{ $n->id }}"
                                             style="display: none;" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h4 class="modal-title">Hapus Data News</h4>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                         aria-label="Close">
                                                         <span aria-hidden="true"></span>
                                                      </button>
                                                   </div>
                                                   <div class="modal-body">
                                                      <p>Yakin hapus data news {{ $n->nama }}?</p>
                                                   </div>
                                                   <div class="modal-footer justify-content-between">
                                                      <button type="button" class="btn btn-outline-dark"
                                                         data-bs-dismiss="modal">Batal</button>
                                                      <form method="POST" action="/admin/news/{{ $n->id }}">
                                                         @method('delete')
                                                         @csrf
                                                         <button onclick="return true"
                                                            class="btn btn-danger">Hapus</button>
                                                      </form>
                                                   </div>
                                                </div>
                                                <!-- /.modal-content -->
                                             </div>
                                             <!-- /.modal-dialog -->
                                          </div>
                                          <!-- /.modal -->
                                       </div>
                                    </td>
                                 </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                     <div class="dataTable-bottom">
                        <div class="dataTable-info">Showing 1 to 5 of 5 entries</div>
                        <nav class="dataTable-pagination">
                           <ul class="dataTable-pagination-list"></ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection
