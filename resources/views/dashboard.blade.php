<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
              <div class="overflow-x-auto">
                <table class="min-w-full bg-white dark:bg-gray-800">
                  <thead>
                    <tr>
                      <th class="py-3 px-6 bg-gray-200 dark:bg-gray-700 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                        EVENTO
                      </th>
                      <th class="py-3 px-6 bg-gray-200 dark:bg-gray-700 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                        E-mail
                      </th>
                      <th class="py-3 px-6 bg-gray-200 dark:bg-gray-700 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                        Status
                      </th>
                      <th class="py-3 px-6 bg-gray-200 dark:bg-gray-700 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                        Ações
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-4 px-6 border-b border-gray-200 dark:border-gray-700">
                        João Silva
                      </td>
                      <td class="py-4 px-6 border-b border-gray-200 dark:border-gray-700">
                        joao.silva@email.com
                      </td>
                      <td class="py-4 px-6 border-b border-gray-200 dark:border-gray-700">
                        Ativo
                      </td>
                      
                      <td class="py-4 px-6 border-b border-gray-200 dark:border-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg> 
                      </td>
                    </tr>
                    <tr>
                      <td class="py-4 px-6 border-b border-gray-200 dark:border-gray-700">
                        Maria Oliveira
                      </td>
                      <td class="py-4 px-6 border-b border-gray-200 dark:border-gray-700">
                        maria.oliveira@email.com
                      </td>
                      <td class="py-4 px-6 border-b border-gray-200 dark:border-gray-700">
                        Inativo
                      </td>
                    </tr>
                    <tr>
                      <td class="py-4 px-6 border-b border-gray-200 dark:border-gray-700">
                        Carlos Souza
                      </td>
                      <td class="py-4 px-6 border-b border-gray-200 dark:border-gray-700">
                        carlos.souza@email.com
                      </td>
                      <td class="py-4 px-6 border-b border-gray-200 dark:border-gray-700">
                        Ativo
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      

</x-app-layout>
