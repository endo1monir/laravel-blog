<x-layout>
   @include('_post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
@if($posts->count())
  

      <x-post-featured-card :post="$posts->first()" />

        <x-posts-grid :posts="$posts" />
        @else
        <p>Ther is no posts yet.</p>
        @endif
        <div class="lg:grid lg:grid-cols-3">
     
        </div>
    </main>

    
</x-layout>   