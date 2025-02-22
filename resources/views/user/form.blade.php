<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="second_name" :value="__('Second Name')"/>
        <x-text-input id="second_name" name="second_name" type="text" class="mt-1 block w-full" :value="old('second_name', $user?->second_name)" autocomplete="second_name" placeholder="Second Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('second_name')"/>
    </div>
    <div>
        <x-input-label for="first_surname" :value="__('First Surname')"/>
        <x-text-input id="first_surname" name="first_surname" type="text" class="mt-1 block w-full" :value="old('first_surname', $user?->first_surname)" autocomplete="first_surname" placeholder="First Surname"/>
        <x-input-error class="mt-2" :messages="$errors->get('first_surname')"/>
    </div>
    <div>
        <x-input-label for="second_surname" :value="__('Second Surname')"/>
        <x-text-input id="second_surname" name="second_surname" type="text" class="mt-1 block w-full" :value="old('second_surname', $user?->second_surname)" autocomplete="second_surname" placeholder="Second Surname"/>
        <x-input-error class="mt-2" :messages="$errors->get('second_surname')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $user?->email)" autocomplete="email" placeholder="Email"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>
    <div>
        <x-input-label for="admin" :value="__('Admin')"/>
        <x-text-input id="admin" name="admin" type="text" class="mt-1 block w-full" :value="old('admin', $user?->admin)" autocomplete="admin" placeholder="Admin"/>
        <x-input-error class="mt-2" :messages="$errors->get('admin')"/>
    </div>
    <div>
        <x-input-label for="level" :value="__('Level')"/>
        <x-text-input id="level" name="level" type="text" class="mt-1 block w-full" :value="old('level', $user?->level)" autocomplete="level" placeholder="Level"/>
        <x-input-error class="mt-2" :messages="$errors->get('level')"/>
    </div>
    <div>
        <x-input-label for="birth_date" :value="__('Birth Date')"/>
        <x-text-input id="birth_date" name="birth_date" type="text" class="mt-1 block w-full" :value="old('birth_date', $user?->birth_date)" autocomplete="birth_date" placeholder="Birth Date"/>
        <x-input-error class="mt-2" :messages="$errors->get('birth_date')"/>
    </div>
    <div>
        <x-input-label for="biography" :value="__('Biography')"/>
        <x-text-input id="biography" name="biography" type="text" class="mt-1 block w-full" :value="old('biography', $user?->biography)" autocomplete="biography" placeholder="Biography"/>
        <x-input-error class="mt-2" :messages="$errors->get('biography')"/>
    </div>
    <div>
        <x-input-label for="image" :value="__('Image')"/>
        <x-text-input id="image" name="image" type="text" class="mt-1 block w-full" :value="old('image', $user?->image)" autocomplete="image" placeholder="Image"/>
        <x-input-error class="mt-2" :messages="$errors->get('image')"/>
    </div>
    <div>
        <x-input-label for="phone_number" :value="__('Phone Number')"/>
        <x-text-input id="phone_number" name="phone_number" type="text" class="mt-1 block w-full" :value="old('phone_number', $user?->phone_number)" autocomplete="phone_number" placeholder="Phone Number"/>
        <x-input-error class="mt-2" :messages="$errors->get('phone_number')"/>
    </div>
    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>