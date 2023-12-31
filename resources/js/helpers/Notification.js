class Notification {
    success(){
        new Noty({
            type: 'success',
            text: 'Success!',
            layout: 'topRight',
            timeout: 1000
        }).show();
    }

    alert(){
        new Noty({
            type: 'alert',
            text: 'Are you sure?',
            layout: 'topRight',
            timeout: 1000
        }).show();
    }

    error(){
        new Noty({
            type: 'error',
            text: 'ERROR!',
            layout: 'topRight',
            timeout: 1000
        }).show();
    }


    warning(){
        new Noty({
            type: 'warning',
            text: 'Opps!',
            layout: 'topRight',
            timeout: 1000
        }).show();
    }

}

export default Notification = new Notification();



