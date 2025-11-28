<x-layout>

    <x-slot:title>
        Login
    </x-slot:title>
    
    <x-slot:heading>
        Login
    </x-slot:heading>

    
   <form method="POST" action="/login" >
    @csrf


  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">


      <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        
        <x-form-field>
          <x-form-label for="email">Email</x-form-label>
          <div class="mt-2">
            <x-form-input :value="old('email')" required placeholder="doe@mail.com" name="email" id="email"></x-form-input>
            <x-form-error name="email" />
          </div>
        </x-form-field>

      </div>


      
      <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        
        <x-form-field>
          <x-form-label for="password">Password</x-form-label>
          <div class="mt-2">
            <x-form-input type="password" required placeholder="Your Password" name="password" id="password"></x-form-input>
            <x-form-error name="password" />
          </div>
        </x-form-field>

      </div>



      <!-- 
        <div class="mt-10">
        @if($errors->any())
            <ul>@foreach ($errors->all() as $error)
                <li class="text-red-500 italic">{{ $error }}</li>
            @endforeach</ul>
        @endif
        </div>
    -->


    </div>

    


 
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <div>
        <a href="/" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    </div>
    <x-form-button>Login</x-form-button>
  </div>
</form>


</x-layout>