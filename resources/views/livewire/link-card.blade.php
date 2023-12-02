<div class="fd-column link-card @if($status){{ $status }} alert @endif">
   <div class="fd-column link">
      <input class="link-card__input --link-input " type="text" value="{{ $link -> source }}" disabled >
      <a href="{{ $link -> source }}" class="link-card__visit-btn" target="_blank"> زيارة </a>
   </div>
   <div class=" link-info">
      <i class="fa-light fa-home"></i>
      <span class="link-points"> 50 </span>
   </div>
   <input class="link-card__input code" type="number" wire:model="code" placeholder="تأكيد الكود"  >
   <div class="fd-row">
      <button class="link-card__op-btn --big-btn " type="button" wire:click="confirm_visit('{{ $link -> id }}')" > تأكيد </button>
      <button class="link-card__op-btn --small-btn " type="button" name=""> إبلاغ </button>
   </div>
   <div> @if (isset($errors)) {{ $errors }} @endif </div>
</div>

