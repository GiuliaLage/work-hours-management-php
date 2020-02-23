$(document).ready(function () {
    $(function () {
        $('#modal-fade').on('click', function () {

            $('#date').val('');
            $('#hour').val('');
            $('#categorias').val('');
            $('#id').val('');
        })
    })
    $.ajax({
        type: "GET",
        url: BASE_URL + "ponto/get_ponto",
        dataType: "JSON",
        success: function (pontos) {
            var dataSet = [];
            $.each(pontos.result, function (index, ponto) {
                dataSet.push([ponto.data, ponto.hora, ponto.categorias, ponto.categoria_id, ponto.id]);
            });
            $('#table_id').dataTable({
                responsive: {
                    details: false
                },
                "columnDefs": [{
                    "targets": -1,
                    "data": null,
                    "defaultContent": '<button id="edit" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Editar</button>'
                }],
                data: dataSet,
                columns: [
                    { title: 'Data' },
                    { title: 'Hora' },
                    { title: 'Categoria' },
                    { title: 'Editar' }
                ]
            })
            $('#table_id tbody').on('click', 'button', function () {

                var table = $('#table_id').DataTable();
                var data = table.row($(this).parents('tr')).data();
                var date = data[0]
                var hora = data[1]
                var categorias = data[3]
                var ponto = data[4]

                $('#date').val(date);
                $('#hour').val(hora);
                $('#categorias').val(categorias);
                $('#id').val(ponto);
            });
        },
        error: function (response) {
            console.log(response);
        }
    })

    return false;
})

$(function () {
    $("#form-save").submit(function () {
        $.ajax({
            type: "post",
            url: BASE_URL + "ponto/save_ponto",
            dataType: "JSON",
            data: $(this).serialize(),
            success: function (data) {

                window.location = self.location;
            },
            error: function (response) {
                console.log(response);
            }
        })
        return false;
    })
})

$(function () {
    $('#datetimepicker4').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#datetimepicker3').datetimepicker({
        format: 'HH:mm'
    });
});

$(function () {
    $('#hour').mask('00:00');
    $('#date').mask('00/00/0000');
});