# Curso Alpine JS desde cero
+ URL: https://www.youtube.com/playlist?list=PLZ2ovOgdI-kVcpcljnRe7heDP-YVrk1ki

## PARTE I: Ejemplos de Alpine en HTML
+ Para ver los ejempls ir: **ejemplos_alpine**.

## PARTE II: Crear proyecto
1. Ejecutar (con livewire y phpunit):
    + $ laravel new alpine --jet
2. Crear base datos **alpine**.
3. Ejecutar migraciones:
    + $ php artisan migrate
4. Ejecutar el compilador de VITE:
    + $ npm run dev

## PARTE III:
1. Crear componente Livewire:
    + $ php artisan make:livewire Alpine
2. Modificar vista **resources\views\dashboard.blade.php** para que invoque al nuevo componente **Alpine**.
3. Modificar componente controlador **app\Http\Livewire\Alpine.php**.
4. Modificar componente vista **resources\views\livewire\alpine.blade.php**.
