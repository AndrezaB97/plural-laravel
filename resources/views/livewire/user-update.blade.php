<div>
    <section class="relative py-6 bg-white bg-gray-200 min-w-screen animation-fade animation-delay">
        <div class="container h-full max-w-5xl mx-auto overflow-hidden rounded-lg shadow">
            <div class="h-full sm:flex">
                <div class="flex items-center justify-center w-full p-10 bg-white">
                    <form wire:submit.prevent="userFormSubmit" method="POST" class="w-full">
                        @csrf
                        <div class="pb-3">
                            <label>NOME: </label>
                            <input wire:model="name"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="text" placeholder="" name="name" value="{{ old('name') }}" />
                            @error('name')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <label>SOBRE NOME: </label>
                            <input wire:model="surname"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="text" placeholder="" name="surname" value="{{ old('surname') }}" />
                            @error('surname')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <label>E-MAIL: </label>
                            <input wire:model="email"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="email" placeholder="" name="email" value="{{ old('email') }}" />
                            @error('email')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <label>SENHA: </label>
                            <input wire:model="password"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="password" placeholder="****************" name="password"
                                value="{{ old('password') }}" />
                            @error('password')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <label>CONFIRMAR SENHA: </label>
                            <input wire:model="confirmation_password"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="password" placeholder="****************" name="confirmation_password"
                                value="{{ old('confirmation_password') }}" />
                            @error('confirmation_password')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <label>CPF: </label>
                            <input wire:model="cpf"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="text" placeholder="" name="cpf" value="{{ old('cpf') }}" />
                            @error('cpf')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <label>CELULAR: </label>
                            <input wire:model="phone"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="text" placeholder="" name="phone" value="{{ old('phone') }}" />
                            @error('phone')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <label>CEP: </label>
                            <input wire:model="zip_code"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="text" placeholder="" name="cep" value="{{ old('cep') }}" />
                            @error('zip_code')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <label>RUA: </label>
                            <input wire:model="road"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="text" placeholder="" name="road" value="{{ old('road') }}" />
                            @error('road')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <label>BAIRRO: </label>
                            <input wire:model="district"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="text" placeholder="" name="district" value="{{ old('district') }}" />
                            @error('district')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <label>CIDADE: </label>
                            <input wire:model="city"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="text" placeholder="" name="city" value="{{ old('city') }}" />
                            @error('city')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <label>ESTADO: </label>
                            <input wire:model="state"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="text" placeholder="" name="state" value="{{ old('state') }}" />
                            @error('state')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pb-3">
                            <label>NÚMERO: </label>
                            <input wire:model="number"
                                class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline"
                                type="text" placeholder="" name="number" value="{{ old('number') }}" />
                            @error('number')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex mt-6">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox" name="terms" wire:model="terms">
                                <span class="ml-2"> I agree to the <span class="underline">privacy policy</span></span>
                            </label>
                            @error('terms')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

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
</div>
