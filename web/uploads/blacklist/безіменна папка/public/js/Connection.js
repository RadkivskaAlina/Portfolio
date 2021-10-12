class Connection
{
    static getInfoByPhone(phoneNumber)
    {
        $.ajax({
            url: `check/phone/${phoneNumber}`,
            success: function(data) {
                console.log('ajax data - ', data);
            }
        });
    }

}