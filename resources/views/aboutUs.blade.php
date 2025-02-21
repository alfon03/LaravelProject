<x-layout meta-title="Sobre Nosotros">
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-center text-3xl font-bold mb-6 flex items-center justify-center">
            <span class="material-symbols-outlined mr-2">info</span> Sobre el Proyecto
        </h1>

        <p class="text-gray-700 text-lg text-center mb-6">
            Este proyecto forma parte de una asignatura académica y tiene como objetivo la gestión eficiente de productos,
            utilizando tecnologías modernas para mejorar nuestras habilidades en desarrollo web.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="p-4 border rounded-lg shadow-md bg-gray-50">
                <h2 class="text-xl font-semibold flex items-center">
                    <span class="material-symbols-outlined mr-2">code</span> Tecnologías Utilizadas
                </h2>
                <ul class="list-disc list-inside text-gray-600 mt-2">
                    <li>Laravel 11 para el backend</li>
                    <li>Blade como motor de plantillas</li>
                    <li>Tailwind CSS para el diseño</li>
                    <li>MySQL para la base de datos</li>
                    <li>SweetAlert2 para notificaciones</li>
                </ul>
            </div>

            <div class="p-4 border rounded-lg shadow-md bg-gray-50">
                <h2 class="text-xl font-semibold flex items-center">
                    <span class="material-symbols-outlined mr-2">flag</span> Objetivos
                </h2>
                <ul class="list-disc list-inside text-gray-600 mt-2">
                    <li>Aprender y aplicar Laravel en proyectos reales</li>
                    <li>Mejorar la interacción con bases de datos</li>
                    <li>Implementar una interfaz moderna y responsivA</li>
                    <li>Explorar el uso de alertas interactivas con SweetAlert2</li>
                </ul>
            </div>
        </div>

        <div class="mt-6 p-4 border rounded-lg shadow-md bg-gray-50 text-center">
            <h2 class="text-xl font-semibold flex items-center justify-center">
                <span class="material-symbols-outlined mr-2">shopping_cart</span> ¿De qué trata?
            </h2>
            <p class="text-gray-600 mt-2">
                Es una plataforma de gestión de productos que permite crear, editar, listar y eliminar productos de una manera sencilla,
                con una interfaz intuitiva y herramientas para mejorar la experiencia del usuario.
            </p>
        </div>
    </div>
</x-layout>