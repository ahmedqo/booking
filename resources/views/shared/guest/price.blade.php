 <ul class="grid grid-rows-1 grid-cols-4 md:grid-cols-6 gap-4">
     @foreach ($items as $key => $price)
         <li class="border border-x-shade rounded-x-huge p-2 aspect-square flex items-center justify-center">
             <div class="flex flex-col">
                 <span class="text-lg text-x-black font-x-huge text-center">
                     {{ $price }} €
                 </span>
                 <span class="text-base text-x-black font-x-thin text-center">
                     {{ $key }} {{ __('Persons') }}
                 </span>
             </div>
         </li>
     @endforeach
 </ul>
