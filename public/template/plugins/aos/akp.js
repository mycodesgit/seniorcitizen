function fetchData() {
    var localDateTime = new Date().toISOString().slice(0, 19).replace("T", " ");
    $.ajax({
        url: ss,
        type: 'GET',
        dataType: 'json', // Specify the expected data type
        success: function (response) {
            // console.log(response.message);
            if (response.message === 'expire') {
                window.location.href = "{{ route('access') }}";
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

setInterval(fetchData, 1000);