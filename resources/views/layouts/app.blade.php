<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.10/tailwind.min.css">

    <!-- Include the Livewire styles -->
    @livewireStyles
</head>

<body class="antialiased overflow-x-hidden">

    <!-- USER FORM -->

    {{ $slot }}

    <!-- END USER FORM SECTION -->

    <!-- Include the Livewire Scripts -->
    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"
        integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w=="
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        $('[name ="cpf"]').mask('000.000.000-00');
        $('[name ="cep"]').mask('00000-000');
        $('[name ="cep"]').mask('00000-000');
        $('[name ="phone"]').mask('00000-0000');
    </script>

</body>

</html>
