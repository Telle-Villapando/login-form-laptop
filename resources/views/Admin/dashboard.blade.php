
<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
 
 <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{route('user.dashboard')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              
               <i class='bx bxs-dashboard w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white text-2xl'></i>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
           <button 
               type="button" 
               class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" 
               aria-controls="dropdown-example" 
               data-collapse-toggle="dropdown-example" 
               onclick="toggleDropdown(this)">
               <i class='bx bx-certification w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white text-2xl'></i>
               <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Courses</span>
               <svg class="w-3 h-3 transition-transform duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6" id="toggle-arrow">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
               </svg>
           </button>
         <div  id="dropdown-example" class="hidden py-2 space-y-2">
           <ul>
              <li>
                  <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
              </li>
              <li>
                  <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
              </li>
              <li>
                  <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
              </li>
          </ul>
         </div>
       </li>
       
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <i class='bx bxs-certification w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white text-2xl' ></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Enrolled Courses</span>
               <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
            </a>
         </li>
         <li>
           <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <i class='bx bxs-bar-chart-alt-2 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white text-2xl' ></i>
              <span class="flex-1 ms-3 whitespace-nowrap">Progress</span>
              <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
           </a>
        </li>
        <li>
           <a href="" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <i class='bx bx-network-chart w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white text-2xl'></i>
              <span class="flex-1 ms-3 whitespace-nowrap">Organizations</span>
           </a>
        </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
               <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
            </a>
         </li>
         <li>
            <a href="{{route('user.profile',   ['user' => auth()->user()])}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <i class='bx bxs-user-circle w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white text-2xl' ></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <i class='bx bxs-help-circle w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white text-2xl' ></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Help</span>
            </a>
         </li>
         <li>
            <a href="{{route('logout')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
            </a>
         </li>
        
      </ul>
   </div>
   
</aside>

 
 <div class="p-4 sm:ml-64">
     <!-- User Greeting -->
     <div class="mb-4 mt-4 text-5xl text-gray-700 dark:text-gray-200">
      {{ 'Hi, ' . auth()->user()->name }} <!-- Greeting with user's name -->
  </div>
   <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700">
    
 
         <x-slot name="header">
             <h2 class="text-xl font-semibold leading-tight text-gray-800">
                 {{ __('Admin Dashboard') }}
             </h2>
         </x-slot>
     
     
     
         <div class="py-12">
             <div class="flex justify-center mx-auto max-w-8xl sm:px-6 lg:px-8">
               
     
                 <!-- Main content -->
                 <div class="w-4/5 ml-4">
                     <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        
                         <div class="p-6">
                             <h2 class="mb-6 text-xl font-semibold leading-tight text-gray-800">User Information</h2>
                             <table class="min-w-full divide-y divide-gray-200">
                                 <thead class="bg-gray-50">
                                     <tr>
                                         <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">ID</th>
                                         {{-- <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Profile</th> --}}
                                         <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Name</th>
                                         <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Last Name</th>
                                         <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Email</th>
                                         <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Role</th>
                                        
                                         <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Password</th>
                                         <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Edit</th>
                                         <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Delete</th>
                                     </tr>
                                 </thead>
                                 <tbody class="bg-white divide-y divide-gray-200">
                                     @foreach ($users as $user)
                                     <tr>
                                         <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $user->id }}</td>
                                         {{-- <td class="px-6 py-4 text-sm text-gray-500">{{ $user->avatar }}</td> --}}
                                         <td class="px-6 py-4 text-sm text-gray-500">{{ $user->name }}</td>
                                         <td class="px-6 py-4 text-sm text-gray-500">{{ $user->lastName }}</td>
                                         <td class="px-6 py-4 text-sm text-gray-500">{{ $user->email }}</td>
                                         <td class="px-6 py-4 text-sm text-gray-500">{{ $user->role }}</td>
                               
                                         <td class="px-6 py-4 text-sm text-gray-500">{{ $user->password }}</td>
                                         <td class="px-6 py-4 text-sm">
                                             <a href="{{route('admin.editUser', ['user' => $user])}}" class="text-blue-500 hover:underline">Edit</a>
                                         </td>
                                         <td class="px-6 py-4 text-sm">
                                             <form action="{{route('admin.deleteUser', ['user'=> $user])}}" method="POST">
                                                 @csrf
                                                 @method('DELETE')
                                                 <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                             </form>
                                         </td>
                                     </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
     
     
             </div>
         </div>
    
     
  
   </div>
</div>
