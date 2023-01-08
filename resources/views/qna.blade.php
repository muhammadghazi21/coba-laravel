@extends('layouts.main')
@section('main')
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Permasalahan yang sering ditanyakan</h4>
                    <div class="card-header-action">
                        <a href="{{ route('qna.create') }}" class="btn btn-danger">Tambah FAQ <i class="fas fa-chevron-right"></i></a>
                      </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <ul class="nav nav-pills flex-column"
                                id="myTab4"
                                role="tablist">
                                @foreach ($qnas as $qna)
                                    <li class="nav-item">
                                        <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                                            id="qna-{{ $qna->id }}-tab"
                                            data-toggle="tab"
                                            href="#qna{{ $qna->id }}"
                                            role="tab"
                                            aria-controls="qna{{ $qna->id }}"
                                            aria-selected="true">{{ $qna->pertanyaan }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="tab-content no-padding"
                                id="myTab2Content">
                                @foreach ($qnas as $qna)
                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                        id="qna{{ $qna->id }}"
                                        role="tabpanel"
                                        aria-labelledby="qna-{{ $qna->id }}-tab">
                                        <p>{{ $qna->jawaban }}</p>

                                        @if(Auth::user()->type == 'admin')
                                            <a href="{{ route('qna.edit', $qna->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('qna.delete', $qna->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('qna.delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection

@push('scripts')

    <!-- Page Specific JS File -->


    
@endpush