<div class="link-section ">
   @forelse ( $links_data as $link )
      <livewire:link-card :link="$link"  :key='$link->id ' />
      @empty
      <div class="base-box">
         <div class="section-header ev-center"> لا يوجد روابط </div>
      </div>
      @endforelse
</div>

