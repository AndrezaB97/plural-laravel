<div>
    <x-input-text label="NOME: " typeInput="text" placeholder="" name="name" />
    @error('name')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-text label="SOBRENOME: " typeInput="text" placeholder="" name="surname" />
    @error('surname')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-text label="E-MAIL: " typeInput="email" placeholder="" name="email" />
    @error('email')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-text label="SENHA: " typeInput="password" placeholder="" name="password" />
    @error('password')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-text label="CONFIRMAR SENHA: " typeInput="password" placeholder="" name="confirmation_password" />
    @error('confirmation_password')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-text label="CPF: " typeInput="text" placeholder="" name="cpf" />
    @error('cpf')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-text label="CELULAR: " typeInput="text" placeholder="" name="phone" />
    @error('phone')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-text label="CEP: " typeInput="text" placeholder="" name="zip_code" />
    @error('zip_code')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-text label="RUA: " typeInput="text" placeholder="" name="road" />
    @error('road')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-text label="BAIRRO: " typeInput="text" placeholder="" name="district" />
    @error('district')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-text label="CIDADE: " typeInput="text" placeholder="" name="city" />
    @error('city')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-text label="ESTADO: " typeInput="text" placeholder="" name="state" />
    @error('state')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-text label="NÚMERO: " typeInput="text" placeholder="" name="number" />
    @error('number')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror

    <x-input-checkbox name="terms" type="checkbox"/>
</div>
