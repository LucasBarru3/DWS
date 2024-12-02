<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-curso-card
        name="Curso de 1dw3"
        descripcion="Curso de 2DW3"
        enlace="https://www.google.com" 
    />
    <x-curso-card
        name="Curso de 2DW4"
        descripcion="Curso de 2DW4"
        enlace="https://www.youtube.com" 
    />
    <x-curso-card>
        <x-slot name="name">
            5WR2
        </x-slot>
        <x-slot name="descripcion">
            Curso de 5WR2
        </x-slot>
        <x-slot name="enlace">
            https://www.drive.google.com
        </x-slot>
    </x-curso-card>
</body>
</html>