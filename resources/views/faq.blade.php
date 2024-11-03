@extends('layouts.app')

@section('content')
<div class="accordion accordion-flush" id="accordionFlushExample">
    @foreach($faqs as $index => $faq)
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading{{ $index }}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $index }}" aria-expanded="false" aria-controls="flush-collapse{{ $index }}">
                {{ $faq->pertanyaan }}
            </button>
        </h2>
        <div id="flush-collapse{{ $index }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{ $index }}" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <strong>Kategori: </strong>{{ $faq->kategori }}<br>
                {{ $faq->jawaban }}
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
