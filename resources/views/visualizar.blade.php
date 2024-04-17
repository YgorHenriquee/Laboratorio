<!-- resources/views/visualizar.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visualizar Dados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-2xl font-semibold mb- 4">Dados Preenchidos</h3>
                <table class="min-w-full border-collapseblock md:table">
                    <thead class="block md:table-header-group">
                        <tr>
                            <th class="py-2 px-3 border">Sala</th>
                            <th class="py-2 px-3 border">Usuário</th>
                            <th class="py-2 px-3 border">Horário de Entrada</th>
                            <th class="py-2 px-3 border">Equipamento</th>
                            <th class="py-2 px-3 border">Propósito</th>
                        </tr>
                        <td></td>
                        <td></td>
                    </thead>
                    <tbody class="block md:table-row-group">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
