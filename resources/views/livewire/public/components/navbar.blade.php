<div class="shadow w-full fixed top-0 left-0 z-[1]">
  <header class="px-0 md:px-3 py-0 md:py-3 md:flex md:items-baseline md:gap-x-3 bg-blue-600">
    <div class="flex justify-between items-center py-3 md:py-0 px-3 md:px-0">
      {{-- -- <RouterLink to="/" class="text-white text-xl"> -- --}}
      <a href="" class="text-white text-xl">
        Minsos
      </a>
      {{-- -- </RouterLink> -- --}}
      {{-- open ? (
      <IconX onClick=()=> setOpen(!open)
        class="md:hidden text-white cursor-pointer"
        />
        ) : (
        <IconMenu2 onClick=()=> setOpen(!open)
          class="md:hidden text-white cursor-pointer"
          />
          ) --}}
    </div>
    <div
      class="grow py-1 px-3 md:px-0 md:py-0 md:flex md:justify-end md:items-baseline absolute md:static
      bg-blue-600 w-full md:z-auto z-[-1] transition-all duration-500 ease-in {{ $open ? 'top-15 opacity-100' : 'top-[-400px] opacity-0 md:opacity-100' }}">
      {{-- <div class="flex
      justify-between"> --}}
      {{-- <form>
          <input type="text" name="search" id="" placeholder="Search User"
            class= "px-2 py-1 border-0 outline-0 rounded me-2 grow w-100" defaultValue=name />
          <button type="submit" class="border rounded px-3 py-1 text-white" onClick=handleSearch>
            Search
          </button>
        </form> --}}
      {{-- </div> --}}
      <ul class="md:flex gap-3 ">
        <li class="my-3 md:my-0">
          <a href="" class="flex gap-x-1 font-semibold text-base text-white">Home</a>
          {{-- <RouterLink to="/" class="flex gap-x-1 font-semibold text-base text-white">
            Home
            <IconHome2 />
          </RouterLink> --}}
        </li>
        <li class="my-3 md:my-0">
          <a href="" class="flex gap-x-1 font-semibold text-base text-white">Profile</a>
          {{-- <RouterLink to=`/profile/$auth?.username`
            class= "flex gap-x-1 font-semibold text-base text-gray-400 hover:text-white duration-500">
            Profile
            <IconUser />
          </RouterLink> --}}
        </li>
        <li class="my-3 md:my-0">
          {{-- <button onClick=()=>
            handleLogout();

            class=
            "flex gap-x-1 font-semibold text-base text-gray-400 hover:text-white duration-500"

            >
            Logout
            <IconLogout />
          </button> --}}
        </li>
      </ul>
    </div>
  </header>
</div>
