
<div>
    <section class="relative py-6 bg-white bg-gray-200 min-w-screen animation-fade animation-delay">
        <div class="container h-full max-w-5xl mx-auto overflow-hidden rounded-lg shadow">
            <h1>Atualizar dados do usuário</h1>
            <div class="h-full sm:flex">
                <div class="flex items-center justify-center w-full p-10 bg-white">
                    <form wire:submit.prevent="userFormSubmit" method="POST" class="w-full">
                        @csrf

                        <x-input-group />

                        <div class="pt-3">
                            <button
                                class="flex px-6 py-3 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 hover:text-white focus:outline-none focus:shadow-outline focus:border-indigo-300"
                                type="submit">
                                <span class="self-center float-left ml-3 text-base font-medium">ATUALIZAR DADOS</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div>
        @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <p class="text-sm">{{ session('message') }}</p>
            </div>
        @endif
    </div>
</div>
