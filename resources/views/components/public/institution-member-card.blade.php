<div class="w-[160px] ps-10 pt-5">
  <div class="w-full h-full">
    <div class="relative bottom-0 right-0 bg-gray-200 min-w-[150px] min-h-[150px] rounded-sm">
      <div
        class="absolute bottom-3 right-3 bg-gray-300 p-3 pb-0 w-[150px] h-[150px] flex justify-center items-end rounded-md transition-transform duration-500 transform hover:translate-x-[-8px] hover:translate-y-[-8px]">
        <img class="w-full h-full object-center rounded-sm"
          src="{{ $member->photo ? asset('storage/' . $member->photo) : ($member->gender == 'male' ? asset('images/user_male.webp') : asset('images/user_female.webp')) }}"
          alt="Gambar">
      </div>
    </div>
    <div class="mt-1">
      <p class="text-center text-xs">{{ $member->name }}</p>
      <p class="text-center text-xs font-bold text-green-700">{{ $member->position }}</p>
    </div>
  </div>
</div>
