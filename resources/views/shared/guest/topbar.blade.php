 <section class="container mx-auto p-4 flex flex-col gap-4 my-10">
     <h1 class="font-x-thin text-x-black text-3xl lg:text-5xl text-center">
         {{ ucwords($title) }}
     </h1>
     <ul class="w-max flex flex-wrap items-center gap-4 mx-auto">
         <li>
             <a href="{{ $start[0] }}" class="font-x-thin text-xl text-x-black">
                 {{ ucwords($start[1]) }}
             </a>
         </li>
         <li>
             <svg class="block w-3 h-3 pointer-events-none text-x-black text-opacity-50" viewBox="0 -960 960 960"
                 fill="currentColor">
                 <path
                     d="{{ Core::lang('ar') ? 'm376-412 201 202-97 96-366-366 366-366 98 96-202 202h470v136H376Z' : 'M584-412H114v-136h470L382-750l98-96 366 366-366 366-97-96 201-202Z' }}" />
             </svg>
         </li>
         <li>
             <span class="font-x-thin text-xl text-x-black text-opacity-50">
                 {{ ucwords($end) }}
             </span>
         </li>
     </ul>
 </section>
