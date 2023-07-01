<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
       <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
 
 <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-4 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
       <ul class="space-y-2 font-medium">
         <li>
            <h6 class="px-3 text-slate-500">Menu Utama</h6>
         </li>
         <li>
             <a href="#" class="{{(request()->is('apps/dashboard*')) ? 'aside-link-active' : 'aside-link'}}">
                <div class="{{(request()->is('apps/dashboard*')) ? 'aside-link-div-active' : 'aside-link-div'}}">
                  <svg aria-hidden="true" class="{{(request()->is('apps/dashboard*')) ? 'aside-link-svg-active' : 'aside-link-svg'}}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               </div>
               <span>Dashboard</span>
             </a>
          </li>
         <li>
            <a href="#" class="{{(request()->is('apps/kegiatan*')) ? 'aside-link-active' : 'aside-link'  }}">
               <div class="{{(request()->is('apps/kegiatan*')) ? 'aside-link-div-active' : 'aside-link-div'  }}">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{(request()->is('apps/kegiatan*')) ? 'aside-link-svg-active' : 'aside-link-svg'}}">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                  </svg>                   
            </div>
            <span>Kegiatan</span>
            </a>
         </li>
         <li>
            <h6 class="px-3 text-slate-500">Managemen Kelompok</h6>
         </li>
         <li>
            <a href="#" class="{{(request()->is('apps/kelompok*')) ? 'aside-link-active' : 'aside-link'  }}">
               <div class="{{(request()->is('apps/kelompok*')) ? 'aside-link-div-active' : 'aside-link-div'  }}">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{(request()->is('apps/kelompok*')) ? 'aside-link-svg-active' : 'aside-link-svg'}}">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25" />
                   </svg>                      
              </div>
              <span>Kelompok</span>
            </a>
         </li>
         <li>
            <a href="#" class="{{(request()->is('apps/subkelompok*')) ? 'aside-link-active' : 'aside-link'  }}">
               <div class="{{(request()->is('apps/subkelompok*')) ? 'aside-link-div-active' : 'aside-link-div'  }}">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{(request()->is('apps/subkelompok*')) ? 'aside-link-svg-active' : 'aside-link-svg'}}">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                   </svg>
                                                    
              </div>
              <span>Subkelompok</span>
            </a>
         </li>
         <li>
            <h6 class="px-3 text-slate-500">Managemen Users</h6>
         </li>
         <li>
            <a href="#" class="{{(request()->is('apps/users*')) ? 'aside-link-active' : 'aside-link'  }}">
               <div class="{{(request()->is('apps/users*')) ? 'aside-link-div-active' : 'aside-link-div'  }}">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{(request()->is('apps/users*')) ? 'aside-link-svg-active' : 'aside-link-svg'}}">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                   </svg>                
              </div>
              <span>Users</span>
            </a>
         </li>
         <li>
            <a href="#" class="{{(request()->is('apps/roles*')) ? 'aside-link-active' : 'aside-link'  }}">
               <div class="{{(request()->is('apps/roles*')) ? 'aside-link-div-active' : 'aside-link-div'  }}">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{(request()->is('apps/roles*')) ? 'aside-link-svg-active' : 'aside-link-svg'}}">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                   </svg>                                              
              </div>
              <span>Roles</span>
            </a>
         </li>
         <li>
            <a href="#" class="{{(request()->is('apps/permissions*')) ? 'aside-link-active' : 'aside-link'  }}">
               <div class="{{(request()->is('apps/permissions*')) ? 'aside-link-div-active' : 'aside-link-div'  }}">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="{{(request()->is('apps/permissions*')) ? 'aside-link-svg-active' : 'aside-link-svg'}}">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                   </svg>                                                 
              </div>
              <span>Permissions</span>
            </a>
         </li>
       </ul>
    </div>
 </aside>
 
 
 