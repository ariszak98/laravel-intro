<x-layout>

    <x-slot:title>
        Register
    </x-slot:title>
    
    <x-slot:heading>
        Register
    </x-slot:heading>

    
   <form method="POST" action="/register" >
    @csrf


  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">


      <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        
        <x-form-field>
          <x-form-label for="first_name">First Name</x-form-label>
          <div class="mt-2">
            <x-form-input required placeholder="John" name="first_name" id="first_name"></x-form-input>
            <x-form-error name="first_name" />
          </div>
        </x-form-field>

      </div>


      <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">

          <x-form-field>
            <x-form-label for="last_name">Last Name</x-form-label>
            <div class="mt-2">
              <x-form-input required placeholder="Doe" name="last_name" id="last_name"></x-form-input>
              <x-form-error name="last_name" />
            </div>
          </x-form-field>

        </div>
      </div>


      <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        
        <x-form-field>
          <x-form-label for="email">Email</x-form-label>
          <div class="mt-2">
            <x-form-input required type="email" required placeholder="doe@mail.com" name="email" id="email"></x-form-input>
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


      <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        
        <x-form-field>
          <x-form-label for="password_confirmation">Password Confirmation</x-form-label>
          <div class="mt-2">
            <x-form-input type="password_confirmation" required placeholder="Your Password" name="password_confirmation" id="password_confirmation"></x-form-input>
            <x-form-error name="password_confirmation" />
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
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <x-form-button>Register</x-form-button>
  </div>
</form>


</x-layout>