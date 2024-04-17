
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Mapeie os laboratórios e seus equipamentos
    var labEquipmentMap = {
        'Laboratório 1': ['Equipamento A', 'Equipamento B'],
        'Laboratório 2': ['Equipamento C', 'Equipamento D'],
        // Adicione mais laboratórios e equipamentos conforme necessário
    };

    // Obtenha os elementos HTML do formulário
    var labSelect = $('#lab');
    var equipmentSelect = $('#equipment');

    // Atualize as opções de equipamento com base na seleção do laboratório
    labSelect.change(function() {
        var selectedLab = labSelect.val();
        var equipments = labEquipmentMap[selectedLab] || [];
        equipmentSelect.empty();
        equipmentSelect.append($('<option>', {
            value: '',
            text: 'Selecione um equipamento'
        }));
        equipments.forEach(function(equipment) {
            equipmentSelect.append($('<option>', {
                value: equipment,
                text: equipment
            }));
        });
    });
});
</script>


