@extends("dashboard")

@push("PAGE_TITLE")
  {{  " تبادل الزيارات" }}
@endpush
    
@section("contant")
<div class="section-header">  الروايط </div>
  <livewire:links-list />
@endsection