@if(session()->has('message'))
 <div x-data='{show: true}' x-init="setTimeout(() => show = false, 3000)"
     x-show='show' class=" z-10 fixed whitespace-nowrap top-20 shadow-md rounded-xl left-1/2 transform -translate-x-1/2 bg-sky-400 text-white px-48 py-3">
    <p>
        {{session('message')}}
    </p>
 </div>
@endif
