$(document).ready(function() {


    $('#ApplicationTable').DataTable( {
        "processing": true,
        "serverSide": false,
        // "ajax": {
        //     "url" : "/getTasks",
        //     "type" : "post"
        // },
        "language": {
            "sProcessing": "Подождите...",   "sLengthMenu": "Показать _MENU_ записей",
            "sZeroRecords": "Записи отсутствуют.",  "sInfo": "",
            //"sZeroRecords": "Записи с 0 до 0 из 0 записей",  "sInfoFiltered": "",
            "sInfoPostFix": "",  "sSearch": "Поиск:",   "sUrl": "",
            "oPaginate": { "sFirst": "Первая", "sPrevious": "Предыдущая", "sNext": "Следующая",  "sLast": "Последняя"
            },
            "oAria": { "sSortAscending": ": активировать для сортировки столбца по возрастанию",    "sSortDescending": ": активировать для сортировки столбцов по убыванию"}
        }
    });



});