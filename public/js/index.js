function getData() {
    axios({
        method : 'get',
        url : 'news.data',
        params : {}
    }).then(function (res) {
        // console.log(res.data.data);
        getDataTables(res.data.data);
    })
}
function getDataTables(data) {
    $('#data_news').DataTable({
        processing: true,//hiện thị load
        serverSide: false,//lấy DL trên server luôn đúng if true
        data : data ,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.21/i18n/Vietnamese.json',
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'summary', name: 'summary' },
            { data: 'detail', name: 'detail' },
            // { data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
}
