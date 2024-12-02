<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #f1f1f1;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #ddd;
    }

    li a.active {
        background-color: #4CAF50;
        color: white;
    }
</style>
<ul>
    <li><a href="<?php echo e(route('inicio')); ?>">Inicio</a></li>
    <li><a href="<?php echo e(route('alumnos')); ?>">Alumnos</a></li>
    <li><a href="#cursos">Cursos</a></li>
    <li><a href="<?php echo e(route('profesors')); ?>">Profesores</a></li>
</ul>