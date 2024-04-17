
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laboratório 2') }}
        </h2>
    </x-slot>
    <head>
        <style>
            .form-container {
                max-width: 1000px;
                margin: 0 auto;
                background: #f7f7f7;
                padding: 20px;
                border-radius: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                border: 1px solid silver; /* Adiciona uma borda azul ao redor do formulário */
            }

            .form-column {
                flex: 1;
                padding: 20px;
            }

            .form-title {
                text-align: center; /* Defina o alinhamento desejado */
                font-size: 24px;
                color: #333;
            }

            .form-group {
                margin-bottom: 30px;
            }

            .form-group label {
                display: block;
                font-size: 17px;
                margin-bottom: 7px;
            }

            .form-group input[type="text"],
            .form-group input[type="time"],
            .form-group select,
            .form-group textarea {
                width: 80%;
                padding: 10px;
                font-size: 16px;
                border: 1px solid #ccc;
                border-radius: 10px;
            }

            .form-group select {
                height: 50px;
            }

            .form-group textarea {
                height: 100px;
            }

            .form-group button {
                background: #007BFF;
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                font-size: 18px;
                cursor: pointer;
            }

            .form-group button:hover {
                background: #0056b3;
            }
        </style>
    </head>
    <br>
    <body>
    @if (auth()->check() && auth()->user()->lab)
    @php
        $lab = auth()->user()->lab;
        $labPath = "laboratorio{$lab}";
    @endphp
    <script>window.location = "{{ route('show_lab', ['lab' => $labPath]) }}";</script>
@endif
        <div class="form-container">
            <div class="form-column">
                <h2 class="form-title">Formulário de Reserva</h2>
                
                @auth
                    <!-- Conteúdo exibido apenas quando o usuário está autenticado -->
                    <form action="/cadastrar-produto" method="POST">
                        @csrf
                        <div class="form-column">
                <div class="form-group">
                    <br><br>   <br>
                    <label for="equipment">Equipamento:</label>
                    <select name="equipment" id="equipment" required>
                        <option value="" disabled selected>Selecione o equipamento...</option>
                        <option value="equipamento1">Computador</option>
                        <option value="equipamento2">Router e Switches</option>
                        <!-- Adicione mais equipamentos conforme necessário -->
                    </select>
                </div>
                        
                       
                    </form>
                @else
                    <!-- Conteúdo exibido quando o usuário não está autenticado -->
                    <p>Por favor, faça login para acessar esta página.</p>
                @endauth
            </div>
            <div class="form-group">
    <label for="entry_time">Hora de Entrada:</label>
    <input type="time" name="entry_time" id="entry_time" required>
    <p>Periodo de reserva<br>
    9:00-12:30<br>
    14:00-17:30</p>
</div>
            
                <div class="form-group">
                    <label for="purpose">Propósito da Visita:</label>
                    <textarea name="purpose" id="purpose" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Reservar</button>
                </div>
            </div>
        </div>
        <script>
    document.getElementById('entry_time').addEventListener('input', function () {
        var selectedTime = this.value;
        var minTime1 = '09:00';
        var maxTime1 = '12:30';
        var minTime2 = '14:00';
        var maxTime2 = '17:30';

        if (
            (selectedTime < minTime1 || selectedTime > maxTime1) &&
            (selectedTime < minTime2 || selectedTime > maxTime2)
        ) {
            alert('Por favor, selecione um horário entre 09:00-12:30 ou 14:00-17:30.');
            this.value = ''; // Limpar o valor se estiver fora do intervalo
        }
    });
</script>
    </body>
</html>
</x-app-layout>
